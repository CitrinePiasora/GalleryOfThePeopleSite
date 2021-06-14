<template>
    <div class="row">
        <div class="blog-image col-md-12">
            <img src="{{asset($data['image'])}}">
        </div> <!-- /.blog-image -->
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
            </div> <!-- /.box-content -->
        </div> <!-- /.col-md-12 -->
    </div> <!-- /.row -->
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
                apiLink = "http://localhost:8888/api/digital" . this.artID;
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