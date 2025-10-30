@extends('layouts.main')

@section('title')
    Thêm mới điểm bán
@endsection

@section('page_title')
    Thêm mới điểm bán
@endsection

@section('title')
    Thêm mới điểm bán
@endsection
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css"/>

    <div ng-controller="CreateStore" ng-cloak>
        @include('admin.stores.form')
    </div>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

    @include('admin.stores.Store')
    <script>
        app.controller('CreateStore', function ($scope, $http, $timeout ) {
            $scope.form = new Store({}, {scope: $scope});
            $scope.loading = {};

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

                // Đổ danh sách tỉnh vào Choices (nếu bạn đang làm theo cách này)
                rebuildProvinceChoices();

                // Prefill khi edit
                if ($scope.form.province_id) {
                    provinceChoices.setChoiceByValue(String($scope.form.province_id));
                    $scope.onProvinceChange(true); // giữ district_id nếu có
                }
                if ($scope.form.district_id) {
                    // nếu edit đã có district thì nạp luôn phường
                    $scope.onDistrictChange(true); // giữ ward_id nếu có
                }
            }, 0);

// Province change
            $scope.onProvinceChange = function(isPrefill = false) {
                const pid = $scope.form.province_id;

                // reset quận & phường nếu user đổi tỉnh
                if (!isPrefill) {
                    $scope.form.district_id = '';
                    $scope.form.ward_id     = '';
                }

                // district
                districtChoices.enable();
                districtChoices.clearChoices();
                districtChoices.removeActiveItems();

                // ward
                wardChoices.disable();
                wardChoices.clearChoices();
                wardChoices.removeActiveItems();
                wardChoices.setChoices([{ value:'', label:'Chọn khu vực', selected:true }], 'value','label', true);

                if (!pid) {
                    districtChoices.disable();
                    districtChoices.setChoices([{ value:'', label:'Chọn khu vực', selected:true }], 'value','label', true);
                    return;
                }

                // lọc quận theo tỉnh (dataset của bạn đang dùng parent_code)
                const dList = ($scope.districtsAll || []).filter(d => String(d.parent_code) === String(pid));
                $scope.districts = dList;

                const dChoices = [{ value:'', label:'Chọn khu vực', selected: !$scope.form.district_id }]
                    .concat(dList.map(d => ({
                        value: String(d.id), label: d.name, selected: String(d.id) === String($scope.form.district_id)
                    })));

                districtChoices.setChoices(dChoices, 'value','label', true);

                // nếu có district_id sẵn ở prefill → set lại & nạp phường
                if ($scope.form.district_id) {
                    districtChoices.setChoiceByValue(String($scope.form.district_id));
                    $scope.onDistrictChange(true);
                }
            };

// District change
            $scope.onDistrictChange = function(isPrefill = false) {
                const did = $scope.form.district_id;

                if (!isPrefill) $scope.form.ward_id = '';

                wardChoices.enable();
                wardChoices.clearChoices();
                wardChoices.removeActiveItems();

                if (!did) {
                    wardChoices.disable();
                    wardChoices.setChoices([{ value:'', label:'Chọn khu vực', selected:true }], 'value','label', true);
                    return;
                }

                // lọc phường theo quận: nhiều dataset dùng ward.parent_code = district.id
                // (nếu package của bạn dùng ward.district_id hoặc ward.district_code, đổi khóa tại đây)
                const wList = ($scope.wardAll || []).filter(w => String(w.parent_code ?? w.district_id ?? w.district_code) === String(did));
                $scope.wards = wList;

                const wChoices = [{ value:'', label:'Chọn khu vực', selected: !$scope.form.ward_id }]
                    .concat(wList.map(w => ({
                        value: String(w.id ?? w.code), label: w.name, selected: String(w.id ?? w.code) === String($scope.form.ward_id)
                    })));

                wardChoices.setChoices(wChoices, 'value','label', true);

                if ($scope.form.ward_id) {
                    wardChoices.setChoiceByValue(String($scope.form.ward_id));
                }
            };

// Nếu ở chỗ khác bạn đổi model bằng code, đồng bộ Choices (tùy chọn)
            $scope.$watch('form.district_id', function(nv, ov){
                if (nv !== ov) $scope.onDistrictChange(false);
            });
            $scope.$watch('form.ward_id', function(nv){
                if (nv && wardChoices) {
                    $timeout(() => wardChoices.setChoiceByValue(String(nv)), 0);
                }
            });




            // Submit Form tạo mới
            $scope.submit = function () {
                let url = "{!! route('stores.store') !!}";;
                $scope.loading.submit = true;
                $scope.form.lat = $('#latitude').val();
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
                            $('#create-store').modal('hide');
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
