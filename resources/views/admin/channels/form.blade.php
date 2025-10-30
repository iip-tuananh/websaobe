<div class="row">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group custom-group">
                    <label class="form-label required-label">Tên đối tác</label>
                    <input class="form-control " type="text" ng-model="form.name">
                    <span class="invalid-feedback d-block" role="alert">
                        <strong><% errors.name[0] %></strong>
                    </span>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group custom-group">
                    <label class="form-label required-label">Số điện thoại liên hệ</label>
                    <input class="form-control" type="text" ng-model="form.phone_number">
                    <span class="invalid-feedback d-block" role="alert">
                        <strong><% errors.phone_number[0] %></strong>
                    </span>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="form-group custom-group mb-4">
                <label class="form-label required-label">Phân nhóm</label>
                <select id="my-select" class="form-control custom-select" ng-model="form.type">
                    <option value="">Chọn phân nhóm</option>
                    <option ng-repeat="t in form.types" ng-value="t.id" ng-selected="form.type == t.id"><% t.name %></option>
                </select>
                <span class="invalid-feedback d-block" role="alert">
                        <strong><% errors.type[0] %></strong>
                    </span>
            </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <label class="form-label">Hình ảnh</label>
                <div class="main-img-preview">
                    <p class="help-block-img">* Ảnh định dạng: jpg, png không quá 3MB.</p>
                    <img class="thumbnail img-preview" ng-src="<% form.image.path %>">
                </div>
                <div class="input-group" style="width: 100%; text-align: center">
                    <div class="input-group-btn" style="margin: 0 auto">
                        <div class="fileUpload fake-shadow cursor-pointer">
                            <label class="mb-0" for="<% form.image.element_id %>">
                                <i class="glyphicon glyphicon-upload"></i> Chọn ảnh
                            </label>
                            <input class="d-none" id="<% form.image.element_id %>" type="file" class="attachment_upload" accept=".jpg,.jpeg,.png,.webp">
                        </div>
                    </div>
                </div>
                <span class="invalid-feedback d-block" role="alert">
                     <span class="invalid-feedback d-block" role="alert">
                        <strong><% errors.image[0] %></strong>
                    </span>
            </span>
            </div>

        </div>
    </div>
</div>
