
<!-- bundle -->
<script src="{{ asset('/') }}backend/assets/js/vendor.min.js"></script>
<script src="{{ asset('/') }}backend/assets/js/app.min.js"></script>
<script src="{{ asset('/') }}backend/assets/js/vendor/toastrjs.min.js"></script>

<!-- quill js -->
<script src="{{ asset('/') }}assets/js/vendor/quill.min.js"></script>
<!-- quill Init js-->
<script src="{{ asset('/') }}assets/js/pages/demo.quilljs.js"></script>

@if(Session::has('success'))
    <script>
        $(document).ready(function () {
            toastr.success("{{ Session::get('success') }}");
        });
    </script>
@endif
@if(Session::has('error'))
    <script>
        $(document).ready(function () {
            toastr.success("{{ Session::get('error') }}");
        });
    </script>
@endif

<script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
</script>

<script>
    CKEDITOR.replace( 'editor' );
</script>
<script>
    CKEDITOR.replace( 'editor1' );
</script>
<script>
    CKEDITOR.replace( 'editor2' );
</script>

@yield('script')


{{--@section('script')--}}
{{--    <!-- quill js -->--}}
{{--    <script src="assets/js/vendor/quill.min.js"></script>--}}
{{--    <!-- quill Init js-->--}}
{{--    <script src="assets/js/pages/demo.quilljs.js"></script>--}}

{{--    <!-- SimpleMDE js -->--}}
{{--    <script src="assets/js/vendor/simplemde.min.js"></script>--}}
{{--    <!-- SimpleMDE demo -->--}}
{{--    <script src="assets/js/pages/demo.simplemde.js"></script>--}}


{{--@endsection--}}
