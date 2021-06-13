<template>
    <div class="contact-form">
        <div class="box-content col-md-12">
            <div class="row">
                <div class="col-md-7">
                    <div class="contact-form-inner">
                        <form id="app" v-on:submit.prevent="submitData">
                            <div class="form-group">
                                <p>
                                    <label for="name">Project Name:</label>
                                    <input name="name" type="text" id="name" v-model="form.title">
                                </p>
                                
                                <p>
                                    <label for="copyright">Artist:</label>
                                    <input name="copyright" type="text" id="name" v-model="form.copyright">
                                </p>

                                <p>
                                    <label for="image">Image:</label>
                                    <input name="image[]" type="file" class="form-control-image" id="image" accept="image/*" @change="onSelect">
                                </p>

                                <p>
                                    <label for="category">Category:</label>
                                    <select name="category" id="category">
                                        <option disabled selected value> -- select an option -- </option>
                                        <option value="paintings">Physical Art</option>
                                        <option value="sculptures">Sculptures</option>
                                        <option value="photography">Photography</option>
                                        <option value="digital">Digital Art</option>
                                    </select>
                                </p>

                                <p>
                                    <label for="desc">Description:</label>
                                    <textarea name="desc" id="desc" v-model="form.description"></textarea>   
                                </p>
                                <input type="submit" class="mainBtn" id="submit" value="upload" @change="submitData" />
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
        name: 'app',
        data () {
            return {
            form: {
                    title: "",
                    artist: "",
                    body: "",
                    file: null,
                    description: ""
                }
            }
        },
        methods: {
            onSelect: function () {
                this.file = event.target.files[0]
            },

            submitData: function () {

                axios.put('http://localhost:8888/api/digital', {
                    action:'insert',
                    title: this.title,
                    copyright: this.artist,
                    path: 'i want to die',
                    uploader_id: 1,
                    description: this.description
                    })
                    .then(
                        alert("Data has been successfully created")
                        //redirect code to index.html
                    )
                    .catch(function (error) {
                        console.log(error);
                    })
            }
        }
    };
</script>