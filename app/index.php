<?php require_once('include/header.php');?>
<!-- main-container -->
<?php require_once('include/side_panel.php');?>

    <!-- content-here -->
    <div class="content-container" id="content">

        <div class="page page-ui-tables">
            <div class="page-wrap">
                <!-- row -->
                <div class="row">

                    <!-- Data Table -->
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">USER ACCOUNTS</div>
                            <div class="panel-body">

                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th><strong>S/N</strong></th>
                                            <th><strong>FIRST NAME</strong></th>
                                            <th><strong>LAST NAME</strong></th>
                                            <th><strong>USERNAME</strong></th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php
                                        $stmt=$conn->query("SELECT * FROM users WHERE user_id='$id'");
                                        $count=1;
                                        while($row=mysqli_fetch_assoc($stmt)){

                                            ?>
                                            <tr>
                                                <td><?php echo $count;?>.</td>
                                                <td><?php echo $row['first_name'];?></td>
                                                <td><?php echo $row['last_name'];?></td>
                                                <td><?php echo $row['username'];?></td>
                                            </tr>
                                            <?php
                                            $count++;
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>


                    </div>
                    <!-- #end row -->
                </div> <!-- #end page-wrap -->
            </div>


        </div>

<?php require_once('include/footer.php');?>