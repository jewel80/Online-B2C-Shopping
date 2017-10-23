<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>
    <link href="{{ asset('admin')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('admin')}}/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="{{ asset('admin')}}/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="{{ asset('admin')}}/vendor/morrisjs/morris.css" rel="stylesheet">
    <link href="{{ asset('admin')}}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--<script src="{{ asset('admin/tinymce/jquery.tinymce.min.js')}}"></script>-->   
    <!-- <script src="{{ asset('admin/tinymce/tinymce.min.js')}}"></script> -->
    <!-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>
        tinymce.init({
        selector: "textarea",  
        plugins: "code link ",
        toolbar: "undo redo | cut copy paste"
    });
   </script> -->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">    @include('admin.includes.header')
            @include('admin.includes.menu')
        </nav>

        <div id="page-wrapper">
            @yield('content')
        </div>

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('admin')}}/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('admin')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('admin')}}/vendor/metisMenu/metisMenu.min.js"></script><!-- Morris Charts JavaScript -->
    <script src="{{ asset('admin')}}/vendor/raphael/raphael.min.js"></script>
    <script src="{{ asset('admin')}}/vendor/morrisjs/morris.min.js"></script>
    <script src="{{ asset('admin')}}/data/morris-data.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('admin')}}/dist/js/sb-admin-2.js"></script>

</body>

</html>
