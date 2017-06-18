@extends('admin.layout.index')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Users
                        <small>Edit</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label>Type of Account</label>
                            <select class="form-control">
                                <option value="0">Please Choose Type of Account</option>
                                <option value="">Patient</option>
                                <option value="">Hospital Employee</option>
                                <option value="">Manager</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input class="form-control" name="txtCateName" placeholder="Please Enter User Name" />
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Please Enter Password" />
                        </div>
                        <div class="form-group">
                            <label>User Description</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label>User Status</label>
                            <label class="radio-inline">
                                <input name="rdoStatus" value="1" checked="" type="radio">Visible
                            </label>
                            <label class="radio-inline">
                                <input name="rdoStatus" value="2" type="radio">Invisible
                            </label>
                        </div>
                        <button type="submit" class="btn btn-default">Update</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    </div>
@endsection