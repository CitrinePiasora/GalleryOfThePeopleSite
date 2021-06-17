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
                    <li><i class="fa fa-folder-open"></i><a :href="'http://localhost/webapp/gallery/' + currentCat">{{capitalization(category)}}</a></li>
                    <li><i class="fa fa-calendar-o"></i>{{info['created_at'].substring(0, 10)}}</li>
                    <li><i class="fa fa-users"></i>{{info['copyright']}}</li>
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
                currentCat: ""
            }
        },

        props: ['category', 'art'],

        mounted () {
            let apiLink = "";

            this.currentCat = this.category;

            if(this.category == "digital art") {
                apiLink = "http://localhost:8888/api/digital/" + this.art;
                this.currentCat = "digital";
            } else if (this.category == "paintings") {
                apiLink = "http://localhost:8888/api/paintings/" + this.art;
            } else if (this.category == "sculptures") {
                apiLink = "http://localhost:8888/api/sculptures/" + this.art;
            } else if (this.category == "photos") {
                apiLink = "http://localhost:8888/api/photos/" + this.art;                    
            }

            axios.get(apiLink)
                .then(response => {this.info = response.data});
        },

        methods: {
            capitalization: function (string) {
                
                if(string == "digital art") {
                    return "Digital Art";
                } else {
                    return string[0].toUpperCase() + string.substring(1);
                }
            }
        }
    };
</script>