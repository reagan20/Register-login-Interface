</div> <!-- #end main-container -->

<!-- theme settings -->
<div class="site-settings clearfix hidden-xs">
    <div class="settings clearfix">
        <div class="trigger ion ion-settings left"></div>
        <div class="wrapper left">
            <ul class="list-unstyled other-settings">
                <li class="clearfix mb10">
                    <div class="left small">Nav Horizontal</div>
                    <div class="md-switch right">
                        <label>
                            <input type="checkbox" id="navHorizontal">
                            <span>&nbsp;</span>
                        </label>
                    </div>


                </li>
                <li class="clearfix mb10">
                    <div class="left small">Fixed Header</div>
                    <div class="md-switch right">
                        <label>
                            <input type="checkbox" id="fixedHeader">
                            <span>&nbsp;</span>
                        </label>
                    </div>
                </li>
                <li class="clearfix mb10">
                    <div class="left small">Nav Full</div>
                    <div class="md-switch right">
                        <label>
                            <input type="checkbox" id="navFull">
                            <span>&nbsp;</span>
                        </label>
                    </div>
                </li>
            </ul>
            <hr>
            <ul class="themes list-unstyled" id="themeColor">
                <li data-theme="theme-zero" class="active"></li>
                <li data-theme="theme-one"></li>
                <li data-theme="theme-two"></li>
                <li data-theme="theme-three"></li>
                <li data-theme="theme-four"></li>
                <li data-theme="theme-five"></li>
                <li data-theme="theme-six"></li>
                <li data-theme="theme-seven"></li>
            </ul>
        </div>
    </div>
</div>
<!-- #end theme settings -->

<!-- Dev only -->
<!-- Vendors -->

<script src="../scripts/plugins/d3.min.js"></script>
<script src="../scripts/plugins/c3.min.js"></script>
<script src="../scripts/plugins/screenfull.js"></script>
<script src="../scripts/plugins/perfect-scrollbar.min.js"></script>
<script src="../scripts/plugins/waves.min.js"></script>
<script src="../scripts/plugins/jquery.sparkline.min.js"></script>
<script src="../scripts/plugins/jquery.easypiechart.min.js"></script>
<script src="../scripts/plugins/bootstrap-rating.min.js"></script>
<script src="../scripts/app.js"></script>
<script src="../scripts/index.init.js"></script>

<script src="../scripts/additional-method.js"></script>
<script src="../scripts/jquery.validate.js"></script>
<script src="../scripts/validator.js"></script>

<!--  imported files o support datatable  -->
<script src="../styles/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="../styles/datatables/dataTables.bootstrap.js" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#example').dataTable();
    } );
</script>

</body>
</html>