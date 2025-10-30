@extends('layouts.main')

@section('title')
    Gán sản phẩm cho mục đích "{{ $object->name }}"
@endsection

@section('page_title')
    Gán sản phẩm cho mục đích "{{ $object->name }}"
@endsection

@section('content')
    <style>
        .card {
            border-radius: .5rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.08);
            margin-bottom: 1.5rem;
        }
        .card-header {
            background-color: #f7f7f7;
            font-weight: 600;
        }

        .required-label::after {
            content: " *";
            color: #d00;
        }

        .size-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            grid-gap: 1rem;
        }

        .color-preview {
            width: 40px; height: 40px;
            border: 1px solid #ccc;
            border-radius: 4px;
            display: inline-block;
            vertical-align: middle;
        }

        .gallery-area {
            display: flex;
            flex-wrap: wrap;
            gap: .5rem;
        }
        .gallery-item {
            position: relative;
            width: calc(33.333% - .5rem);
            min-height: 100px;
            padding: .5rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            text-align: center;
            background: #fff;
        }
        .gallery-item img {
            max-width: 100%;
            max-height: 100px;
            object-fit: cover;
        }
        .gallery-item .remove {
            position: absolute;
            top: .25rem; right: .25rem;
            border: none;
            background: rgba(255,0,0,0.8);
            color: #fff;
            padding: .2rem .4rem;
            border-radius: 2px;
            cursor: pointer;
        }
        .gallery-add {
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px dashed #bbb;
            border-radius: 4px;
            cursor: pointer;
            width: calc(33.333% - .5rem);
            height: 100px;
        }



        .result-item {
            display: flex;
            align-items: center;
            margin-bottom: 0.75rem;
            padding: 0.5rem;
            border: 1px solid #ddd;
            border-radius: 6px;
        }
        .result-item input {
            flex: 1;
            margin-right: 0.5rem;
        }
        .result-item .btn {
            min-width: 36px;
        }



        .result-item input {
            flex: 1;
            margin-right: 0.5rem; /* khoảng cách giữa các input và giữa input với button */
        }

        .result-item input:last-of-type {
            margin-right: 0.75rem; /* nới rộng ít hơn trước khi tới button */
        }

        .result-item .btn {
            min-width: 36px;
            margin-left: 0;      /* đảm bảo nút sát vào khung */
        }

        .result-item .btn + .btn {
            margin-left: 0.25rem; /* khoảng cách giữa 2 nút */
        }
    </style>
    <style>.gap-8{gap:8px}</style>
    <div ng-controller="CostDelivery" ng-cloak>
        <div class="row">
            <div class="col-sm-5">
                <div class="form-group">
                    <p><strong>Mục đích sử dụng:</strong> <% purposes.name %></p>
                </div>
            </div>


        </div>


        <div class="row">
            <div class="col-sm-1">

            </div>
            <div class="col-sm-10">
                <form name="productForm" novalidate>
                    <div class="card mb-4">
                        <!-- Header card với title & nút thêm -->
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Danh sách sản phẩm</h5>
                            <button type="button"
                                    class="btn btn-sm btn-success"
                                    ng-click="openModalProductList()">
                                <i class="fas fa-plus me-1"></i>Thêm sản phẩm
                            </button>
                        </div>

                        <!-- Body card chứa table -->
                        <div class="card-body p-3">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover mb-0 text-center">
                                    <thead class="table-light">
                                    <tr>
                                        <th style="width:5%">STT</th>
                                        <th style="width:35%">Tên SP</th>
                                        <th style="width:15%">Danh mục</th>
                                        <th style="width:10%"></th><!-- cột xóa -->
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <!-- khi chưa có -->
                                    <tr ng-if="!form.products.length">
                                        <td colspan="4" class="text-center py-3">Chưa có sản phẩm nào</td>
                                    </tr>
                                    <!-- hiển thị danh sách -->
                                    <tr ng-repeat="product in form.products">
                                        <td class="align-middle"><% $index + 1 %></td>
                                        <td class="align-middle text-start">
                                            <a ng-href="/admin/products/<% product.id %>/edit" target="_blank"><% product.name %></a>
                                        </td>
                                        <td class="align-middle"><% product.cate_id %></td>
                                        <td class="align-middle">
                                            <button type="button"
                                                    class="btn btn-outline-danger btn-sm"
                                                    ng-click="removeProduct($index)"
                                                    title="Xóa">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-sm-1">

            </div>
        </div>

        <hr>

        <div class="text-right">
            <button type="submit" class="btn btn-success btn-cons" ng-click="submit()" ng-disabled="loading.submit">
                <i ng-if="!loading.submit" class="fa fa-save"></i>
                <i ng-if="loading.submit" class="fa fa-spin fa-spinner"></i>
                Lưu
            </button>
        </div>





        <div class="modal fade" id="productListModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog  modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="semi-bold">Danh sách sản phẩm</h4>
                    </div>
                    <div class="modal-body">
                        <table class="table table-bordered no-more-tables table-head-border" id="search-product-table">
                            <thead>
                            <tr>
                                <th class="text-center v-align-middle">STT</th>
                                <th class="text-center v-align-middle">Sản phẩm</th>
                                <th class="text-center v-align-middle">Danh mục</th>
                                <th class="text-center v-align-middle">Trạng thái</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal" ><i class="fa fa-remove"></i>Đóng</button>
                    </div>
                </div>
            </div>
        </div>




    </div>
@endsection
@section('script')
    @include('admin.purposes.Purpose')
    <script>
        app.controller('CostDelivery', function ($scope, $http) {
            $scope.loading = {}

            {{--$scope.form = @json($object);--}}
            $scope.form = new Purpose(@json($object), {scope: $scope});

            $scope.getPurpose = function (purposeId) {
                $.ajax({
                    type: 'GET',
                    url: "/admin/purposes/" + purposeId + "/getDataForEdit",
                    success: function(response) {
                        if (response.success) {
                            $scope.purposes = response.data;
                        } else {
                            toastr.error('Đã có lỗi xảy ra');
                        }
                    },
                    error: function(e) {
                        $scope.purposes = {}
                    },
                    complete: function() {
                        $scope.$applyAsync();
                    }
                });
            }

            const segments = window.location.pathname.split('/');
            const purposeId = segments[3];
            $scope.getPurpose(purposeId);


            // modal products
            var searchProductTable;

            $scope.openModalProductList = function() {
                $scope.searchProducts();
                $("#productListModal").modal('show');
            };

            $scope.searchProducts = function () {
                if (!searchProductTable) {
                    searchProductTable = $('#search-product-table').DataTable({
                        processing: true,
                        serverSide: true,
                        order: [],
                        ajax: {
                            url: "{!! route('Product.searchProducts') !!}",
                            data: function (d) {
                                d.category_parent_id = $scope.form.cate_id;
                            }
                        },
                        language: i18nDataTable,
                        columns: [
                            {data: 'DT_RowIndex', orderable: false, className: "text-center"},
                            {data: 'name'},
                            {data: 'cate_id'},
                            {
                                data: 'status',
                                title: "Trạng thái",
                                render: function (data) {
                                    if (data == 0) {
                                        return `<span class="badge badge-danger">Nháp</span>`;
                                    } else {
                                        return `<span class="badge badge-success">Xuất bản</span>`;
                                    }
                                },
                                className: "text-center"
                            },
                        ],
                    });

                    $('#search-product-table tbody').on('click', 'tr', function() {
                        const data = searchProductTable.row(this).data();
                        if (!data) return;

                        $scope.$apply(() => {
                            // Kiểm tra đã tồn tại hay chưa (so sánh theo id)
                            const exists = $scope.form.products.some(p => p.id === data.id);
                            if (exists) {
                                toastr.warning('Sản phẩm này đã được thêm');
                            } else {
                                $scope.form.products.push({
                                    id: data.id,
                                    name: data.name,
                                    cate_id: data.cate_id,
                                });

                                toastr.success('Thêm sản phẩm thành công');
                            }
                        });
                    });


                } else searchProductTable.draw();
            }

            $scope.submit = function() {
                $scope.loading.submit = true;
                const productIds = $scope.form.products.map(p => p.id);
                let data = $scope.form.submit_data;
                data.append('productIds', JSON.stringify(productIds));
                data.append('purpose_id', $scope.form.id)

                $.ajax({
                    type: 'POST',
                    url: "{{route('purposes.submitAddProducts')}}",
                    headers: {
                        'X-CSRF-TOKEN': CSRF_TOKEN
                    },
                    processData: false,
                    contentType: false,
                    data: data,
                    success: function(response) {
                        if (response.success) {
                            toastr.success(response.message);
                        } else {
                            toastr.warning(response.message);
                            $scope.errors = response.errors;
                        }
                    },
                    error: function(e) {
                        toastr.error('Đã có lỗi xảy ra');
                    },
                    complete: function() {
                        $scope.loading.submit = false;
                        $scope.$applyAsync();
                    }
                });
            }

            $scope.removeProduct = function(index) {
                // if (!confirm('Bạn có chắc muốn xóa sản phẩm này?')) return;
                $scope.form.products.splice(index, 1);
            };

            @include('admin.purposes.formJs');

        });
    </script>
@endsection
