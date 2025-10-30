<script>
    class Purpose extends BaseClass {
        no_set = [];

        before(form) {
        }

        after(form) {
        }

        get submit_data() {
            let data = {
                name: this.name,
            }

            data = jsonToFormData(data);

            return data;
        }
    }
</script>
