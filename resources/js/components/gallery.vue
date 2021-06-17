<template>
    <div class="row">
        <div class="post-masonry col-md-4 col-sm-6" :key="index" v-for="(item, index) in info">
            <div class="blog-thumb">
                <img v-bind:src="item.path">
                <div class="overlay-b">
                    <div class="overlay-inner">
                        <a :href="currentCat + '/' + item.id" class="fa fa-link"></a>
                    </div>
                </div>
            </div>
        </div> <!-- /.post-masonry -->
    </div>
</template>

<script>
    export default {
        data () {
            return {
                info: [],
                currentCat: ""
            }
        },

        props: ['category'],

        mounted () {
            let apiLink = "";

            this.currentCat = this.category;

            if(this.category == "digital art") {
                apiLink = "http://localhost:8888/api/digital";
                this.currentCat = "digital";
            } else if (this.category == "paintings") {
                apiLink = "http://localhost:8888/api/paintings"
            } else if (this.category == "sculptures") {
                apiLink = "http://localhost:8888/api/sculptures";
            } else if (this.category == "photos") {
                apiLink = "http://localhost:8888/api/photos";                    
            }

            axios.get(apiLink)
                .then(response => {this.info = response.data});
        }
    };
</script>