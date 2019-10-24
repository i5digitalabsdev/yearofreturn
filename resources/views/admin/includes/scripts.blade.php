<script src="{{asset('js/app.js')}}"></script>
<script src="{{ asset ('/assets/js/jquery.js') }}"></script>
<script src="{{ asset ('/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset ('vendor/laravel-filemanager/js/lfm.js') }}"></script>
{{--<script src="{{ asset ('/assets/js/wow.min.js') }}"></script>--}}
{{--<script src="{{ asset ('/assets/js/morris.min.js') }}"></script>--}}
{{--<script src="{{ asset ('/assets/js/bootstrap-tagsinput.min.js') }}"></script>--}}
<script src="{{ asset ('/assets/js/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset ('/assets/js/metisMenu.min.js') }}"></script>
<script src="{{ asset ('/assets/js/lightbox.js') }}"></script>
{{--<script src="{{ asset ('/assets/js/bootstrap-imageupload.js') }}"></script>--}}
{{--<script src="{{ asset ('/assets/js/select2.min.js') }}"></script>--}}
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>


<script>
    $(document).ready(function() {
        $('input[name="daterange"]').daterangepicker();

        $('#lfm').filemanager('image');
        $('#lfmFile').filemanager('file');
        $('#summernote').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['Misc', ['fullscreen', 'codeview',]]

            ]
        });
        // Define function to open filemanager window
        let lfm = function(options, cb) {
            let route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
            window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
            window.SetUrl = cb;
        };

        // Define LFM summernote button
        let LFMButton = function(context) {
            let ui = $.summernote.ui;
            let button = ui.button({
                contents: '<i class="note-icon-picture"></i> ',
                tooltip: 'Insert image with filemanager',
                click: function() {
                    lfm({type: 'image', prefix: '/laravel-filemanager'}, function(url, path) {
                        context.invoke('insertImage', url);
                    });

                }
            });
            return button.render();
        };

        // Initialize summernote with LFM button in the popover button group
        // Please note that you can add this button to any other button group you'd like
        $('.postSummer').summernote({
            toolbar: [
                // ['Paragraph style', ['style', 'ol', 'ul', 'paragraph', 'height']]
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
                ['video', ['video']],
                ['Misc', ['fullscreen', 'codeview', 'undo','redo']],
                ['insert', ['link', 'table', 'hr','video']],
                ['popovers', ['lfm']],
            ],
            height: 300,

            buttons: {
                lfm: LFMButton
            }
        })
        $('.dropdown-toggle').dropdown()

    });
</script>

<script>
            @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif
</script>

<script src="{{ asset ('/assets/js/jquery.app.js') }}"></script>