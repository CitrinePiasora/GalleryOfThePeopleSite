<template>
    <div class="row">
        <div class="post-masonry col-md-4 col-sm-6">
            <!--<div class="blog-thumb">
                <img src="">
                <div class="overlay-b">
                    <div class="overlay-inner">
                        <a href="" class="fa fa-link"></a>
                    </div>
                </div>
            </div>-->
            <a>{{category}}</a>
        </div> <!-- /.post-masonry -->
    </div> <!-- /.blog-masonry -->
</template>

<script>
    export default {
        data () {
            return {
                info: null,
            }
        },

        props: ['category'],

        mounted () {
            let apiLink = "";

            if(this.category == "digital art") {
                apiLink = "http://localhost:8888/api/digital";
            } else if (this.category == "paintings") {
                apiLink = "http://localhost:8888/api/paintings"
            } else if (this.category == "sculptures") {
                apiLink = "http://localhost:8888/api/sculptures";
            } else if (this.category == "photos") {
                apiLink = "http://localhost:8888/api/photos";                    
            }

            axios.get(apiLink)
            .then(response => (this.info = response.data))
        }
    };
</script>