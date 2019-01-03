@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <!-- include summernote css/js -->
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/admin.css">
@stop
    
@section('js')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>

    <script>
    $(document).ready(function () {
        $('.summer').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['codeview'],
                ["insert", ["link", "picture", "video"]]
            ]
        });
    });
    </script>
@stop