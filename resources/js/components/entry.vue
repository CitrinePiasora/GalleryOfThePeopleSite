<template>
    <div class="row">
        <div class="blog-image col-md-12">
            <img v-bind:src="info.path">
        </div> 
        <div class="project-infos col-md-12">
            <div class="box-content">
                <h2 class="project-title">{{info['title']}}</h2>
                    <blockquote>
                        {{info['description']}}
                    </blockquote>

                <ul class="project-meta">
                    <li><i class="fa fa-folder-open"></i><a :href="'http://galleryofthepeople.my.id/gallery/' + category">{{capitalization(category)}}</a></li>
                    <li><i class="fa fa-calendar-o"></i>{{info['created_at'].substring(0, 10)}}</li>
                    <li><i class="fa fa-users"></i>{{info['copyright']}}</li>
                    <li><input class="mainBtn" value="edit" @click="edit()" type="submit" v-show="info.uploader_id == userid ? true: false"/></li>
                    <li><input class="mainBtn" value="delete" @click="trashdel()" type="submit" v-show="info.uploader_id == userid ? true: false"/></li>
                </ul>
            </div> 
        </div>
    </div> <!-- /.row -->
</template>

<script>
    export default {
        data () {
            return {
                info: null,
            }
        },

        props: ['category', 'art', 'userid'],

        mounted () {
            let apiLink = "";

            if(this.category == "digital art") {
                apiLink = "https://galleryofthepeople.my.id/api/digital/" + this.art;
                this.category = "digital";
            } else if (this.category == "paintings") {
                apiLink = "https://galleryofthepeople.my.id/api/paintings/" + this.art;
            } else if (this.category == "sculptures") {
                apiLink = "https://galleryofthepeople.my.id/api/sculptures/" + this.art;
            } else if (this.category == "photos") {
                apiLink = "https://galleryofthepeople.my.id/api/photos/" + this.art;                    
            }

            axios.get(apiLink)
                .then(response => {this.info = response.data});
        },

        methods: {
            capitalization: function (string) {
                
                if(string == "digital art") {
                    return "Digital Art";
                } else if (string == "photos") {
                    return "Photography";
                } else {
                    return string[0].toUpperCase() + string.substring(1);
                }
            },

            edit: function() {
                let redirect = 'http://localhost/gotp/edit/' + this.category + '/' + this.art;
                window.location.href = redirect;
            },

            trashdel: function() {

                let apiLink = "";

                if(this.category == "digital art") {
                    apiLink = "https://galleryofthepeople.my.id/api/digital/" + this.art;
                    this.category = "digital";
                } else if (this.category == "paintings") {
                    apiLink = "https://galleryofthepeople.my.id/api/paintings/" + this.art;
                } else if (this.category == "sculptures") {
                    apiLink = "https://galleryofthepeople.my.id/api/sculptures/" + this.art;
                } else if (this.category == "photos") {
                    apiLink = "https://galleryofthepeople.my.id/api/photos/" + this.art;                    
                }

                axios.delete(apiLink)
                    .then(function () {
                        window.location.href = 'https://galleryofthepeople.my.id';
                    })
                    .catch( function (error) {
                        console.log(error);
                    });
                }
            }
        }
</script>