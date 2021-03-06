<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Khóa Học Lập Trình Laravel Framework 5.x Tại Khoa Phạm">
    <meta name="author" content="">
    <title>Admin</title>
    {{--Bootstrap--}}
    {{--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">--}}
    {{--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">--}}

{{--jQuery--}}
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>--}}
    {{--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>--}}

    <base href="{{asset('')}}">
    <!-- Bootstrap Core CSS -->
    <link href="admin_asset/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="admin_asset/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="admin_asset/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="admin_asset/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="admin_asset/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#khamSoBo").hide();
            $("#chuanDoan").hide();
           // $("#chonBenh").hide();
            $("#hideThongTinChung").click(function(){
                //$("#chonBenh").show();
                $("#thongTinChung").hide();
                $("#khamSoBo").show();
                $("#chuanDoan").hide();
            });
            $("#hideKhamSoBo").click(function(){
                $("#khamSoBo").hide();
                $("#chuanDoan").show();
                $("#thongTinChung").hide();
            });
            $("#r_khamSoBo").click(function(){
                $("#khamSoBo").show();
                $("#chuanDoan").hide();
                $("#thongTinChung").hide();
            });
            $("#r_thongTinChung").click(function(){
                $("#chuanDoan").hide();
                $("#khamSoBo").hide();
                $("#thongTinChung").show();
            });
        });
    </script>
</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
     @include('hospital.layout.header')
    <!-- Page Content -->
     @yield('content')

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="admin_asset/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="admin_asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="admin_asset/bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="admin_asset/dist/js/sb-admin-2.js"></script>

<!-- DataTables JavaScript -->
<script src="admin_asset/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
<script src="admin_asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>
</body>

</html>
