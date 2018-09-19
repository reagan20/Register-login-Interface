<div class="main-container clearfix">
    <!-- main-navigation -->
    <aside class="nav-wrap" id="site-nav" data-perfect-scrollbar="">
        <div class="nav-head">
            <!-- site logo -->
            <a href="index" class="site-logo text-uppercase">
                <i class="ion ion-disc"></i>
            </a>
        </div>

        <nav class="site-nav clearfix" role="navigation">
            <div class="profile clearfix mb15">
                <div class="group">
<!--                    <h5 class="name">--><?php //echo $fullname;?><!--</h5>-->
                    <a class="btn btn-default btn-sm" href="../logout"><i class="fa fa-sign-out"></i> Logout</a>
                </div>
            </div>
            <!-- navigation -->
            <ul class="list-unstyled clearfix nav-list mb15">
                <li>
                    <a href="javascript:;">
                        <i class="ion ion-android-options"></i>
                        <span class="text">Users</span>
                        <i class="fa fa-users"></i>
                    </a>
                    <ul class="inner-drop list-unstyled">
                        <li><a href="index">User Details</a></li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- nav-foot -->
        <footer class="nav-foot">
            <p><?php echo date('Y');?> &copy; </p>
        </footer>

    </aside>