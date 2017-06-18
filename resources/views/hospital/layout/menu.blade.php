<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                </div>
                <!-- /input-group -->
            </li>
            {{--<li>--}}
            {{--<a href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>--}}
            {{--</li>--}}
            <li>
                <a href="hospital/medicalRecord/list"><i class="fa fa-dashboard fa-fw"></i>Danh sách bệnh án</a>

            </li>
            <li>
                {{--<a href="hospital/medicalRecord/thongTinChung">--}}
                <a><i class="fa fa-users fa-fw"></i>Thêm bệnh án<span class="fa arrow"></span></a>
                <!-- /.nav-second-level -->
                <ul class="nav nav-second-level">
                    <li>
                        <a href="hospital/medicalRecord/themBenhAn-bệnh lao phổi">Bệnh lao phổi</a>
                    </li>
                    <li>
                        <a href="hospital/medicalRecord/themBenhAn-bệnh đái tháo đường">Bệnh đái tháo đường</a>
                    </li>
                    <li>
                        <a href="hospital/medicalRecord/themBenhAn-bệnh hen phế quản">Bệnh hen phế quản</a>
                    </li>
                    <li>
                        <a href="hospital/medicalRecord/themBenhAn-bệnh tăng huyết áp">Bệnh tăng huyết áp</a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>