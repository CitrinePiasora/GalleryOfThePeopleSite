<template>
    <div class="row">
        <!--<div class="blog-image col-md-12">
            <img src="{{asset($data['image'])}}">
        </div> 
        <div class="project-infos col-md-12">
            <div class="box-content">
                <h2 class="project-title">{{$data['title']}}</h2>
                
                    <blockquote>
                        {{$data['desc']}}
                    </blockquote>

                <ul class="project-meta">
                    <li><i class="fa fa-folder-open"></i><a href="{{route('subgalleries', $data['route'])}}">{{$data['db']}}</a></li>
                    <li><i class="fa fa-calendar-o"></i>{{$data['date']}}</li>
                    <li><i class="fa fa-users"></i>{{$data['by']}}</li>
                </ul>
            </div> 
        </div> -->
        <a>{{info}}</a>
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