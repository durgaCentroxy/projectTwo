<?php include 'header.php'; ?>
<body>
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <a href="#menu-toggle" id="menu-toggle">welcome user1</a>
                    <?php anchor('admin/login', 'Logout', 'class="link-class btn btn-danger", type="button"'); ?>
                </div>
            </div>
        </div>
    </div>
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                
                <li>
                    <a href="#"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-user"  style="margin-right: 10px;"></i>Profile</a>
                </li>
                
                <li>
                    <a href="#"><i class="fa fa-list" style="margin-right: 10px;"></i>Login History</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-file" style="margin-right: 10px;"></i>Support Guide</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
    </div>
<?php include 'footer.php'; ?>