@include('admin.products.ProductGallery')
@include('admin.products.ProductAttribute')
@include('admin.products.ProductVideo')
@include('admin.products.ProductType')
@include('admin.products.ResultsAchieved')

<script>
    class Product extends BaseClass {
        no_set = [];
        all_categories = @json(\App\Model\Admin\Category::getForSelect());

        before(form) {
            this.image = {};
            this.banner = {};
            this.banner_mobile = {};
            this.status = 1;
        }

        after(form) {
            this.types = form.types && form.types.length
                ? form.types
                : [
                    new ProductType({ title: null}),
                ];

            this.promotions = form.promotions && form.promotions.length
                ? form.promotions
                : [
                    new Result({ title: null}),
                ];
        }

        get types() {
            return this._types || [];
        }

        set types(value) {
            this._types = (value || []).map(val => new ProductType(val, this));
        }

        addType(result) {
            if (!this._types) this._types = [];
            let new_result = new ProductType(result, this);
            this._types.push(new_result);
            return new_result;
        }

        removeType(index) {
            this._types.splice(index, 1);
        }

        get base_price() {
            return this._base_price ? this._base_price.toLocaleString('en') : '';
        }

        set base_price(value) {
            value = parseNumberString(value);
            this._base_price = value;
        }

        get price() {
            return this._price ? this._price.toLocaleString('en') : '';
        }

        set price(value) {
            value = parseNumberString(value);
            this._price = value;
        }

        get banner() {
            return this._banner;
        }

        set banner(value) {
            this._banner = new Image(value, this);
        }

        get banner_mobile() {
            return this._banner_mobile;
        }

        set banner_mobile(value) {
            this._banner_mobile = new Image(value, this);
        }

        get image() {
            return this._image;
        }

        set image(value) {
            this._image = new Image(value, this);
        }

        clearImage() {
            if (this.image) this.image.clear();
        }

        get galleries() {
            return this._galleries || [];
        }

        set galleries(value) {
            this._galleries = (value || []).map(val => new ProductGallery(val, this));
        }

        addGallery(gallery) {
            if (!this._galleries) this._galleries = [];
            let new_gallery = new ProductGallery(gallery, this);
            this._galleries.push(new_gallery);
            return new_gallery;
        }

        removeGallery(index) {
            this._galleries.splice(index, 1);
        }

        get promotions() {
            return this._promotions || [];
        }

        set promotions(value) {
            this._promotions = (value || []).map(val => new Result(val, this));
        }

        addResult(result) {
            if (!this._promotions) this._promotions = [];
            let new_result = new Result(result, this);
            this._promotions.push(new_result);
            return new_result;
        }

        removeResult(index) {
            this._promotions.splice(index, 1);
        }

        get submit_data() {
            let data = {
                cate_id: this.cate_id,
                name: this.name,
                base_price: this._base_price,
                price: this._price,
                short_des: this.short_des,
                intro: this.intro,
                body: this.body,
                body_2: this.body_2,
                status: this.status,
                state: this.state,
                types: this.types.map(val => val.submit_data),
                promotions: this.promotions.map(val => val.submit_data)

            }

            data = jsonToFormData(data);
            let image = this.image.submit_data;
            if (image) data.append('image', image);

            let banner = this.banner.submit_data;
            if (banner) data.append('banner', banner);

            let banner_mobile = this.banner_mobile.submit_data;
            if (banner_mobile) data.append('banner_mobile', banner_mobile);

            this.galleries.forEach((g, i) => {
                if (g.id) data.append(`galleries[${i}][id]`, g.id);
                let gallery = g.image.submit_data;
                if (gallery) data.append(`galleries[${i}][image]`, gallery);
                else data.append(`galleries[${i}][image_obj]`, g.id);
            })

            return data;
        }
    }
</script>
