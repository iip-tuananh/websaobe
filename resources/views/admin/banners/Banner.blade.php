<script>
    class Banner extends BaseClass {
        no_set = [];

        before(form) {
            this.image = {};
            this.image_mobile = {};
        }

        after(form) {

        }

        // Ảnh đại diện
        get image() {
            return this._image;
        }

        set image(value) {
            this._image = new Image(value, this);

        }

        get image_mobile() {
            return this._image_mobile;
        }

        set image_mobile(value) {
            this._image_mobile = new Image(value, this);

        }

        clearImage() {
            if (this.image) this.image.clear();
            if (this.image_mobile) this.image_mobile.clear();
        }

        get submit_data() {
            let data = {
                title: this.title,
                link: this.link,
                intro: this.intro,
            }

            data = jsonToFormData(data);

            let image = this.image.submit_data;
            if (image) data.append('image', image);

            let image_mobile = this.image_mobile.submit_data;
            if (image_mobile) data.append('image_mobile', image_mobile);

            return data;
        }
    }
</script>
