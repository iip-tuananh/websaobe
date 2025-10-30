<script>
    class Store extends BaseClass {
        no_set = [];

        before(form) {
        }

        after(form) {

        }


        get submit_data() {
            let data = {
                name: this.name,
                address: this.address,
                phone: this.phone,
                province_id: this.province_id,
                district_id: this.district_id,
                ward_id: this.ward_id,
            }
            // console.log(data);
            // return;
            data = jsonToFormData(data);

            return data;
        }
    }
</script>
