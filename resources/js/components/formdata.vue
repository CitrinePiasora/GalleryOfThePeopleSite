<template>
    <div class="contact-form">
        <div class="box-content col-md-12" v-show="editor != 1 && postUpId != userid ? false: true">
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
                                    <input name="image[]" type="file" class="form-control-image" id="image" accept="image/*" v-on:change="onSelect" ref="file" v-show="editor == 1 ? false: true">
                                    <input name="image" type="text" id="name" value="Image has already been uploaded" v-show="editor != 1 ? false: true" disabled>
                                </p>

                                <p>
                                    <label for="category">Category:</label>
                                    <select name="category" id="category" v-model="category" :disabled="editor">
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
                category: "",
                postUpId: 0,
            }
        },
        
        props: ['userid', 'editor', 'entryid', 'cat'],

        mounted () {
            if(this.cat != null) {
                let apiLink = "";

                if(this.cat == "digital") {
                    apiLink = "https://galleryofthepeople.my.id/api/digital/" + this.entryid;
                } else if (this.cat == "paintings") {
                    apiLink = "https://galleryofthepeople.my.id/api/paintings/" + this.entryid;
                } else if (this.cat == "sculptures") {
                    apiLink = "https://galleryofthepeople.my.id/api/sculptures/" + this.entryid;
                } else if (this.cat == "photos") {
                    apiLink = "https://galleryofthepeople.my.id/api/photos/" + this.entryid;                    
                }

                axios.get(apiLink)
                    .then(response => {
                        this.title = response.data.title;
                        this.description = response.data.description;
                        this.artist = response.data.copyright;
                        this.category = this.cat;
                        this.postUpId = response.data.uploader_id;
                    });
            }
        },

        methods: {
            onSelect() {
                this.file = this.$refs.file.files[0];
            },

            submitData: function (e) {
                e.preventDefault();

                let apiLink = "";

                if(this.category == "digital") {
                    apiLink = "https://galleryofthepeople.my.id/api/digital";
                } else if (this.category == "paintings") {
                    apiLink = "https://galleryofthepeople.my.id/api/paintings";
                } else if (this.category == "sculptures") {
                    apiLink = "https://galleryofthepeople.my.id/api/sculptures";
                } else if (this.category == "photos") {
                    apiLink = "https://galleryofthepeople.my.id/api/photos";                    
                }

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

                if(this.editor == 1) {
                    formData.append('entryid', this.entryid);
                    apiLink = apiLink + '/' + this.entryid + '/edit';
                    axios.get(apiLink, { params: {
                            entryid: this.entryid,
                            title: this.title,
                            artiste: this.artist,
                            desc: this.description

                        }, config
                        })
                    .then( response => {
                        console.log("Response", response.data);
                        window.location.href = 'https://galleryofthepeople.my.id/gallery/' + this.cat + '/' + this.entryid;
                    })
                    .catch( function (error) {
                        console.log(error);
                    })

                } else {                    
                    formData.append('uploader', this.userid);
                    formData.append('image', this.file);

                    axios.post(apiLink, formData, config)
                    .then( response => {
                        console.log("Response", response.data);
                        window.location.href = 'https://galleryofthepeople.my.id';
                    })
                    .catch( function (error) {
                        console.log(error);
                        alert("Please fill in all fields correctly");
                    });
                }
            }
        }
    }
</script>