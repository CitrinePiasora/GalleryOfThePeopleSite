<template>
    <div class="contact-form">
        <div class="box-content col-md-12">
            <div class="row">
                <div class="col-md-7">
                    <div class="contact-form-inner">
                        <form id="app" v-on:submit.prevent="submitData">
                            <div class="form-group">
                                <p>
                                    <label for="name">Project Title:</label>
                                    <input name="name" type="text" id="name" v-model="title">
                                </p>
                                
                                <p>
                                    <label for="copyright">Artist:</label>
                                    <input name="copyright" type="text" id="name" v-model="artist">
                                </p>

                                <p>
                                    <label for="image">Image:</label>
                                    <input name="image[]" type="file" class="form-control-image" id="image" accept="image/*" v-on:change="onSelect" ref="file">
                                </p>

                                <p>
                                    <label for="category">Category:</label>
                                    <select name="category" id="category" v-model="category">
                                        <option disabled selected value> -- select an option -- </option>
                                        <option value="paintings">Physical Art</option>
                                        <option value="sculptures">Sculptures</option>
                                        <option value="photography">Photography</option>
                                        <option value="digital">Digital Art</option>
                                    </select>
                                </p>

                                <p>
                                    <label for="desc">Description:</label>
                                    <textarea name="desc" id="desc" v-model="description"></textarea>   
                                </p>
                                <input type="submit" class="mainBtn" id="submit" value="upload"/>
                            </div>
                        </form>
                    </div> <!-- /.contact-form-inner -->
                    <div id="message"></div>
                </div> <!-- /.col-md-7 -->
            </div> <!-- /.row -->
        </div> <!-- /.box-content -->
    </div> <!-- /.contact-form -->
</template>

<script>
    export default {
        data () {
            return {
                title: "",
                artist: "",
                file: null,
                description: "",
                category: ""
            }
        },
        
        props: ['userid'],

        methods: {
            onSelect() {
                this.file = this.$refs.file.files[0];
            },

            submitData: function (e) {
                e.preventDefault();

                let apiLink = "";
                const config = {
                    headers: {
                        'content-type': 'multipart/form-data',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    }
                }

                const formData = new FormData();
                formData.append('title', this.title);
                formData.append('copyright', this.artist);
                formData.append('description', this.description);
                formData.append('image', this.file);
                formData.append('uploader', this.userid);

                if(this.category == "digital") {
                    apiLink = "http://localhost:8888/api/digital";
                } else if (this.category == "paintings") {
                    apiLink = "http://localhost:8888/api/paintings"
                } else if (this.category == "sculptures") {
                    apiLink = "http://localhost:8888/api/sculptures";
                } else if (this.category == "photography") {
                    apiLink = "http://localhost:8888/api/photos";                    
                }
                
                axios.post(apiLink, formData, config)
                .then(response => {
                    console.log("Response", response.data);
                    window.location.href = 'home';
                })
                .catch( function (error) {
                    console.log(error);
                    alert("Please fill in all fields correctly");
                });
            }
        }
    }
</script>