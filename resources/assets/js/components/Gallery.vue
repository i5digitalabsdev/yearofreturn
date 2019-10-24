<template>
   <div>
       <div class="col-lg-12 form-group m-b-20">
           <p>Images</p>
           <div class="col-lg-12">
               <Dropzone ref="myVueDropzone" id="dropzone" :options="dropzoneOptions"></Dropzone>
           </div>
       </div>
   </div>
</template>
<script>
    import Dropzone from 'vue2-dropzone'
    import 'vue2-dropzone/dist/vue2Dropzone.min.css'
    import {uploadImageUrl} from '../urls'
    import {uploadNews} from '../urls'

    export default{
        props:['gallery'],
        data(){
            return {
                type:'',
                fileTypes: 'image/*',
                uploadUrl:'',
                dropzoneOptions: {
                    url: uploadImageUrl + '/' + this.gallery,
                    thumbnailWidth: 150,
                    maxFilesize: 5,
                    headers: { 'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content }
                },
                loading: false
            }
        },
        components:{
            Dropzone
        }
    }
</script>