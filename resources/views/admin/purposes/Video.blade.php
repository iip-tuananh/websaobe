<script>
    class Video extends BaseChildClass {

        before(form) {
        }

        after(form) {

        }


        get submit_data() {
            let data =  {
                link: this.link ?? null,
            }

            return data;
        }


    }
</script>
