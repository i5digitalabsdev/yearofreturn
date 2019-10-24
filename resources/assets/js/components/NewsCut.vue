<template>
    <div>
        <form method="post"   enctype="multipart/form-data" >
            <h3 class="m-t-10 m-b-20">Add a news cut</h3>
            <div class="row add-products-container">
                <div class="col-lg-8 m-t-10 products-details">
                    <div class="col-lg-12 product-entity">
                        <div class="col-lg-12 form-group m-b-20">
                            <p>Date</p>
                            <input v-model="newsDate"  type="date" name="date" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-12 product-entity">
                        <div class="col-lg-12 form-group m-b-20">
                            <p>Images</p>
                            <div class="col-lg-12">
                                <Dropzone ref="myVueDropzone" id="dropzone" :options="dropzoneOptions"></Dropzone>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-3 m-t-30">
                <span><button :disabled="loading" type="button" @click="submitNews" value="Save Changes" id="buttonSubmit" class="btn btn-primary btn-block">Submit</button></span>
            </div>
        </form>

    </div>
</template>
<script>
    import Dropzone from 'vue2-dropzone'
    import 'vue2-dropzone/dist/vue2Dropzone.min.css'
    import {uploadImageUrl} from '../urls'
    import {uploadNews} from '../urls'

    export default{
        props:['news'],
        data(){
            return {
                newsDate:'',
                fileTypes: 'image/*',
                uploadUrl:'',
                dropzoneOptions: {
                    url: uploadImageUrl + '/' + this.news,
                    thumbnailWidth: 150,
                    maxFilesize: 2.0,
                    headers: { 'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content }
                },
                loading: false
            }
        },
        methods:{
            submitNews(){
                let data = {
                    date: this.newsDate,
                    news_id: this.news
                }
                this.loading = true
                $("#buttonSubmit").text('Saving..')

                axios.post(uploadNews, data).then((res)=>{
                    toastr.success('News cut added Successfully.', 'Success Message', {timeOut: 5000});
                    this.loading = false
                    $("#buttonSubmit").text('Save')
                }).catch((err) => {
                    toastr.error('Sorry an error occurred with your submission', 'Error Message', {timeOut: 5000});
                    this.loading = false
                    $("#buttonSubmit").text('Save')
                })


            }
        },
        components:{
            Dropzone
        }
    }
</script>