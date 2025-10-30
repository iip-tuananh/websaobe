@extends('layouts.main')

@section('css')
@endsection

@section('page_title')
    Quản lý Mục đích sử dụng
@endsection

@section('title')
    Quản lý Mục đích sử dụng
@endsection

@section('buttons')
<a href="javascript:void(0)" class="btn btn-outline-success" data-toggle="modal" data-target="#create-attribute" class="btn btn-info" ng-click="errors = null"><i class="fa fa-plus"></i> Thêm mới</a>


<button ng-controller="Attribute" class="btn btn-outline-primary"  class="btn btn-info" ng-click="editBlockBanner()"> Cập nhật banner</button>


@endsection

@section('content')
<div ng-cloak>
    <div class="row" ng-controller="Attribute">
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="table-list">
                    </table>
                </div>
            </div>
        </div>

    </div>
    {{-- Form tạo mới --}}
    @include('admin.purposes.create')
    @include('admin.purposes.edit')

    @include('admin.purposes.add_banner')
    <style>
        .square-badge {
            display: inline-block;
            width: 2rem;           /* điều chỉnh kích thước ô vuông */
            height: 2rem;
            line-height: 2rem;     /* canh chữ đứng giữa */
            text-align: center;    /* canh chữ ngang giữa */
            border-radius: .25rem; /* bo góc */
        }


        .col-url .url-cell { display:flex; align-items:center; gap:8px; }
        .col-url a { max-width:420px; overflow:hidden; text-overflow:ellipsis; white-space:nowrap; display:inline-block; }
        .col-url .copy-url { border:0; background:transparent; cursor:pointer; padding:2px 4px; font-size:16px; }
        .col-url .copy-url.copied { color:#16a34a; font-weight:600; }

    </style>
</div>
@endsection

@section('script')
@include('admin.purposes.Purpose')
@include('admin.purposes.Block')

<script>
    let datatable = new DATATABLE('table-list', {
        ajax: {
            url: '{!! route('purposes.searchData') !!}',
            data: function (d, context) {
                DATATABLE.mergeSearch(d, context);
            }
        },
        columns: [
            {data: 'DT_RowIndex', orderable: false, title: "STT", className: "text-center"},
            {data: 'name', title: 'Tên mục đích'},
            {data: 'count_products', title: 'Sản phẩm', className: "text-center"},
            {data: 'updated_at', title: 'Ngày cập nhật'},
            {data: 'action', orderable: false, title: "Hành động"}
        ],
        search_columns: [
            {data: 'name', search_type: "text", placeholder: "Tên mục đích"},
        ],
    }).datatable;

    createReviewCallback = (response) => {
        datatable.ajax.reload();
    }
    app.controller('Attribute', function ($rootScope, $scope, $http) {
        $scope.loading = {};
        $scope.form = {}

        $('#table-list').on('click', '.edit', function () {
            $scope.data = datatable.row($(this).parents('tr')).data();
            $.ajax({
                type: 'GET',
                url: "/admin/purposes/" + $scope.data.id + "/getDataForEdit",
                headers: {
                    'X-CSRF-TOKEN': CSRF_TOKEN
                },
                data: $scope.data.id,

                success: function(response) {
                    if (response.success) {
                        $scope.booking = response.data;
                        $rootScope.$emit("editAttribute", $scope.booking);
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
            $scope.errors = null;
            $scope.$apply();
            $('#edit-attribute').modal('show');
        });

        $('#table-list').on('click', '.remove-att', function () {
            var self = this;
            event.preventDefault();
            $scope.data = datatable.row($(this).parents('tr')).data();
            $.ajax({
                type: 'GET',
                url: "/admin/purposes/" + $scope.data.id + "/getDataForEdit",
                headers: {
                    'X-CSRF-TOKEN': CSRF_TOKEN
                },
                data: $scope.data.id,

                success: function(response) {
                    if (response.success) {
                        if(response.data.products.length > 0) {
                            swal({
                                title: "Xác nhận!",
                                text: `Mục đích này đã được gán cho sản phẩm. Đồng ý xóa?`,
                                type: "warning",
                                showCancelButton: true,
                                confirmButtonClass: "btn-danger",
                                confirmButtonText: "Xác nhận",
                                cancelButtonText: "Hủy",
                                closeOnConfirm: true
                            }, function(isConfirm) {
                                if (isConfirm) {
                                    window.location.href = $(self).attr("href");
                                }
                            })
                        } else {
                            swal({
                                title: "Xác nhận xóa!",
                                text: "Bạn chắc chắn muốn xóa mục đích này?",
                                type: "warning",
                                showCancelButton: true,
                                confirmButtonClass: "btn-danger",
                                confirmButtonText: "Xác nhận",
                                cancelButtonText: "Hủy",
                                closeOnConfirm: false
                            }, function(isConfirm) {
                                if (isConfirm) {
                                    window.location.href = $(self).attr("href");
                                }
                            })
                        }
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

        });


        $scope.editBlockBanner = function () {
            $scope.errors = null;

            $.ajax({
                type: 'GET',
                url: "/admin/block-purpose/" + 2 + "/edit",
                headers: {
                    'X-CSRF-TOKEN': CSRF_TOKEN
                },
                success: function(response) {
                    if (response.success) {

                        $scope.booking = response.data;

                        $rootScope.$emit("editBanner", $scope.booking);
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
            $scope.errors = null;

            $('#edit-banner').modal('show');
        }
    })

    </script>


@include('partial.confirm')
@endsection
