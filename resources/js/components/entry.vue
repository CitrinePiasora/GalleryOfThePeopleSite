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
                    <li><i class="fa fa-folder-open"></i><a href="">{{category}}</a></li>
                    <li><i class="fa fa-calendar-o"></i>{{info['created_at']}}</li>
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
            }
        },

        props: ['category', 'art'],

        mounted () {
            let apiLink = "";

            if(this.category == "digital art") {
                apiLink = "http://localhost:8888/api/digital/" + this.art;
                console.log(apiLink);
            } else if (this.category == "paintings") {
                apiLink = "http://localhost:8888/api/paintings/" + this.art;
            } else if (this.category == "sculptures") {
                apiLink = "http://localhost:8888/api/sculptures/" + this.art;
            } else if (this.category == "photos") {
                apiLink = "http://localhost:8888/api/photos/" + this.art;                    
            }

            axios.get(apiLink)
                .then(response => {this.info = response.data});
        }
    };
</script>