@extends('manager.layout.index')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Hospital Information
                    <small>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="txtCateName" placeholder="Please Enter Hospital Name" />
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="password" class="form-control" name="password" placeholder="Please Enter Hospital address" />
                    </div>
                    <div class="form-group">
                        <label>Telephone</label>
                        <input type="password" class="form-control" name="password" placeholder="Please Enter Hospital telephone" />
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <label class="radio-inline">
                            <input name="rdoStatus" value="1" checked="" type="radio">Visible
                        </label>
                        <label class="radio-inline">
                            <input name="rdoStatus" value="2" type="radio">Invisible
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">Add </button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
    </div>
    @endsection