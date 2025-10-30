<div class="modal fade" id="edit-banner" tabindex="-1" role="dialog" aria-hidden="true" ng-controller="EditBanner">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="semi-bold">Cập nhật banner</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <label class="form-label">Ảnh</label>
                                <div class="main-img-preview">
                                    <p class="help-block-img">* Ảnh định dạng: jpg,jpeg,png,gif,webp.</p>
                                    <img class="thumbnail img-preview" ng-src="<% form.image.path %>">
                                </div>
                                <div class="input-group" style="width: 100%; text-align: center">
                                    <div class="input-group-btn" style="margin: 0 auto">
                                        <div class="fileUpload fake-shadow cursor-pointer">
                                            <label class="mb-0" for="<% form.image.element_id %>">
                                                <i class="glyphicon glyphicon-upload"></i> Chọn ảnh
                                            </label>
                                            <input class="d-none" id="<% form.image.element_id %>" type="file" class="attachment_upload" accept=".jpg,.jpeg,.png,.gif">
                                        </div>
                                    </div>
                                </div>
                                <span class="invalid-feedback d-block" role="alert">
                        <strong><% errors.image[0] %></strong>
                 </span>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success btn-cons" ng-click="submit()" ng-disabled="loading.submit">
                    <i ng-if="!loading.submit" class="fa fa-save"></i>
                    <i ng-if="loading.submit" class="fa fa-spin fa-spinner"></i>
                    Lưu
                </button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-window-close"></i> Hủy</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<script>
    app.controller('EditBanner', function ($rootScope, $scope, $http) {
        $rootScope.$on("editBanner", function (event, data){
            $scope.form = new Block(data, {scope: $scope});
            $scope.$applyAsync();
            $scope.loading.submit = false;

            $('#edit-banner').modal('show');
        });
        $scope.loading = {};
        // Submit Form sửa
        $scope.submit = function () {

            let url = "/admin/block-purpose/" + $scope.form.id + "/update";
            $scope.loading.submit = true;

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
                        $('#edit-banner').modal('hide');
                        toastr.success(response.message);
                        datatable.ajax.reload();
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
                    $scope.form.clearImage();
                    $scope.$applyAsync();
                },
            });
        }
    })
</script>
