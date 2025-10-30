@extends('layouts.main')

@section('title')
    Chỉnh sửa điểm bán
@endsection

@section('page_title')
    Chỉnh sửa điểm bán
@endsection

@section('title')
    Chỉnh sửa điểm bán
@endsection
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css"/>

    <div ng-controller="EditStore" ng-cloak>
        @include('admin.stores.form')
    </div>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

    @include('admin.stores.Store')
    <script>
        app.controller('EditStore', function ($rootScope, $scope, $http, $timeout ) {
            $scope.form = new Store(@json($object), {scope: $scope});
            $scope.loading = {};
            $scope.loading.submit = false;

            $scope.provinces    = @json(\Vanthao03596\HCVN\Models\Province::get());
            $scope.districts    = [];
            $scope.districtsAll = @json(\Vanthao03596\HCVN\Models\District::get());
            $scope.wards        = [];
            $scope.wardAll      = @json(\Vanthao03596\HCVN\Models\Ward::get());

            let provinceChoices = null;
            let districtChoices = null;
            let wardChoices     = null;

            $timeout(function initChoices() {
                const provEl = document.getElementById('provinceSelect');
                const distEl = document.getElementById('districtSelect');
                const wardEl = document.getElementById('wardSelect');

                provinceChoices = new Choices(provEl, {
                    searchEnabled: true, shouldSort: false, itemSelectText: '',
                    placeholder: true, placeholderValue: 'Chọn khu vực'
                });

                districtChoices = new Choices(distEl, {
                    searchEnabled: true, shouldSort: false, itemSelectText: '',
                    placeholder: true, placeholderValue: 'Chọn khu vực'
                });

                wardChoices = new Choices(wardEl, {
                    searchEnabled: true, shouldSort: false, itemSelectText: '',
                    placeholder: true, placeholderValue: 'Chọn khu vực'
                });

                if (!$scope.form.province_id) districtChoices.disable();
                if (!$scope.form.district_id) wardChoices.disable();

                // Đổ provinces vào Choices trước khi prefill
                rebuildProvinceChoices();

                // ===== LẮNG NGHE CHANGE TỪ CHOICES -> CẬP NHẬT NG-MODEL =====
                provEl.addEventListener('change', function() {
                    const val = String(provinceChoices.getValue(true) || '');
                    $scope.$applyAsync(() => {
                        $scope.form.province_id = val;      // cập nhật model
                        $scope.onProvinceChange(false);     // nạp quận/huyện tương ứng
                    });
                });

                distEl.addEventListener('change', function() {
                    const val = String(districtChoices.getValue(true) || '');
                    $scope.$applyAsync(() => {
                        $scope.form.district_id = val;
                        $scope.onDistrictChange(false);
                    });
                });

                wardEl.addEventListener('change', function() {
                    const val = String(wardChoices.getValue(true) || '');
                    $scope.$applyAsync(() => {
                        $scope.form.ward_id = val;
                    });
                });

                // ===== Prefill (màn sửa) =====
                if ($scope.form.province_id) {
                    provinceChoices.setChoiceByValue(String($scope.form.province_id));
                    $scope.onProvinceChange(true); // giữ district_id nếu có
                }
                if ($scope.form.district_id) {
                    $scope.onDistrictChange(true); // giữ ward_id nếu có
                }
            }, 0);

// Province change
            $scope.onProvinceChange = function(isPrefill = false) {
                const pidSel = provinceChoices ? provinceChoices.getValue(true) : $scope.form.province_id;
                const pidStr = String(pidSel || '');

                if (!isPrefill) {
                    $scope.form.district_id = '';
                    $scope.form.ward_id     = '';
                }

                // reset District
                districtChoices.enable();
                districtChoices.clearChoices();
                districtChoices.removeActiveItems();

                // reset Ward (tạm khóa, sẽ mở lại ở onDistrictChange nếu có district)
                wardChoices.disable();
                wardChoices.clearChoices();
                wardChoices.removeActiveItems();
                wardChoices.setChoices([{ value:'', label:'Chọn khu vực', selected:true }], 'value','label', true);

                if (!pidStr) {
                    districtChoices.disable();
                    districtChoices.setChoices([{ value:'', label:'Chọn khu vực', selected:true }], 'value','label', true);
                    return;
                }

                // Lọc quận theo tỉnh
                const dList = ($scope.districtsAll || []).filter(d => String(d.parent_code ?? d.province_id ?? d.province_code) === pidStr);
                $scope.districts = dList;

                const dChoices = [{ value:'', label:'Chọn khu vực', selected: !$scope.form.district_id }]
                    .concat(dList.map(d => ({ value: String(d.id), label: d.name })));

                districtChoices.setChoices(dChoices, 'value','label', true);

                // Prefill district (hỗ trợ model lưu id/code)
                if ($scope.form.district_id) {
                    const pre = String($scope.form.district_id);
                    let match = dList.find(d => String(d.id) === pre) || dList.find(d => String(d.parent_code) === pre);
                    if (match) {
                        // set bằng ID vì value choices là id
                        $timeout(() => {
                            districtChoices.setChoiceByValue(String(match.id));
                            // gọi nạp phường SAU khi choices của quận đã render xong
                            $scope.onDistrictChange(true);
                        }, 0);
                        // đồng bộ model về id để thống nhất
                        $scope.form.district_id = String(match.id);
                    }
                }

                // đồng bộ lại model province
                if ($scope.form.province_id !== pidStr) $scope.form.province_id = pidStr;
            };

// District change  (đã sửa: map id -> code để lọc ward)
            $scope.onDistrictChange = function(isPrefill = false) {
                const didSel = districtChoices ? districtChoices.getValue(true) : $scope.form.district_id;
                const didStr = String(didSel || '');

                if (!isPrefill) $scope.form.ward_id = '';

                // Tìm object quận theo id hoặc code
                const dObj = ($scope.districtsAll || []).find(d =>
                    String(d.id) === didStr || String(d.parent_code) === didStr
                );

                // Khóa mặc định
                wardChoices.clearChoices();
                wardChoices.removeActiveItems();

                if (!dObj) {
                    wardChoices.disable();
                    wardChoices.setChoices([{ value:'', label:'Chọn khu vực', selected:true }], 'value','label', true);
                    return;
                }

                // KHÓA CHUẨN: ward.parent_code = district.code (HCVN)
                const districtKey = String(didStr);
                const wList = ($scope.wardAll || []).filter(w =>
                    String(w.parent_code ?? w.district_code ?? w.district_id ?? '') === districtKey
                );
                $scope.wards = wList;
                    console.log(  districtKey)
                    console.log(   $scope.wards)
                const wChoices = [{ value:'', label:'Chọn khu vực', selected: !$scope.form.ward_id }]
                    .concat(wList.map(w => ({ value: String(w.id ?? w.parent_code), label: w.name })));

                // MỞ khóa và đổ dữ liệu
                wardChoices.enable();
                wardChoices.setChoices(wChoices, 'value','label', true);

                // Prefill ward (hỗ trợ model lưu id/code)
                if ($scope.form.ward_id) {
                    const pre = String($scope.form.ward_id);
                    const wmatch = wList.find(w => String(w.id) === pre) || wList.find(w => String(w.parent_code) === pre);
                    if (wmatch) {
                        $timeout(() => wardChoices.setChoiceByValue(String(wmatch.id ?? wmatch.parent_code)), 0);
                        $scope.form.ward_id = String(wmatch.id ?? wmatch.parent_code);
                    }
                }
            };

// -------- Build provinces with selected flag theo model hiện tại --------
            function rebuildProvinceChoices() {
                if (!provinceChoices) return;

                provinceChoices.clearChoices();
                provinceChoices.removeActiveItems();

                const current = String($scope.form.province_id || '');
                const provChoices = [
                    { value:'', label:'Chọn khu vực', selected: current === '' }
                ].concat(($scope.provinces || []).map(p => ({
                    value: String(p.id), label: p.name, selected: String(p.id) === current
                })));

                provinceChoices.setChoices(provChoices, 'value', 'label', true);
            }


            // Submit Form sửa
            $scope.submit = function () {
                let url = "/admin/stores/" + $scope.form.id + "/update";
                $scope.loading.submit = true;
                $scope.form.lat = $('#latitude').val() ;
                $scope.form.long = $('#longitude').val();

                $.ajax({
                    type: "POST",
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': CSRF_TOKEN
                    },
                    data: $scope.form.submit_data,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        if (response.success) {
                            $('#edit-store').modal('hide');
                            toastr.success(response.message);
                            window.location.href = "{{ route('stores.index') }}";
                            $scope.errors = null;
                        } else {
                            $scope.errors = response.errors;
                            toastr.warning(response.message);
                        }
                    },
                    error: function () {
                        toastr.error('Đã có lỗi xảy ra');
                    },
                    complete: function () {
                        $scope.loading.submit = false;
                        $scope.$applyAsync();
                    },
                });
            }


        })

    </script>


@endsection
