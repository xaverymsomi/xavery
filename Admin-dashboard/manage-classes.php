<?php include ("bar.php");

include('../config/config.php');
if(strlen($_SESSION['username'])=="")
    {   
    header("Location: index.php"); 
    }
    else{
?>


<div class="main-page">
    <div class="container-fluid">
        <div class="row page-title-div">
            <div class="col-md-6">
                <h2 class="title">Manage Classes</h2>
            </div>
            <!-- /.col-md-6 text-right -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    <section class="section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h5>View Classes Info</h5>
                            </div>
                        </div>
                        <div class="panel-body p-20">
                            <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Class Name</th>
                                        <th>Creation Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Class Name</th>
                                        <th>Creation Date</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr><?php $i = 1;
                                        while ($i<=0) {
                                            $i++;
                                        }?>
                                        <td><?php echo "$i"; ?></td>
                                        <?php $sql = "SELECT * FROM tbl_class";
                                        $query = mysqli_query($dbconnect, $sql);
                                         
                                        $count_row = mysqli_num_rows($query);

                                        if ($count_row > 0) {
                                             while($key = mysqli_fetch_assoc($query)) { ?>
                                                <td><?php echo $key['class_name']; ?></td>
                                                <td><?php echo $key['date_created']; ?></td>
                                                <td>
                                                    <a href="edit-class.php?classid=<?php?>">
                                                        <i class="fa fa-edit" title="Edit Record"></i>
                                                        <i class="fa fa-d" title="Edit Record"></i>
                                                        <i class="fa fa-edit" title="Edit Record"></i> 
                                                    </a>
                                                </td>
                                        </tr>
                                        <?php } } }?>
                                    </tbody>
                                </table>
                                <!-- /.col-md-12 -->
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.col-md-12 -->
            </div>
        </div>
        <!-- /.panel -->

     <!-- jquery vendor -->
    <script src="../assets/js/lib/jquery.min.js"></script>
    <script src="../assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="../assets/js/lib/menubar/sidebar.js"></script>
    <script src="../assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->

    <script src="../assets/js/lib/bootstrap.min.js"></script>
    <script src="../assets/js/scripts.js"></script>
    <!-- bootstrap -->

    <script src="../assets/js/lib/calendar-2/moment.latest.min.js"></script>
    <script src="../assets/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <script src="../assets/js/lib/calendar-2/pignose.init.js"></script>
    <script src="../assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="../assets/js/lib/weather/weather-init.js"></script>
    <script src="../assets/js/lib/circle-progress/circle-progress.min.js"></script>
    <script src="../assets/js/lib/circle-progress/circle-progress-init.js"></script>
    <script src="../assets/js/lib/chartist/chartist.min.js"></script>
    <script src="../assets/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
    <script src="../assets/js/lib/sparklinechart/sparkline.init.js"></script>
    <script src="../assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="../assets/js/lib/owl-carousel/owl.carousel-init.js"></script>
    <!-- scripit init-->
    <script src="../assets/js/dashboard2.js"></script>
</body>

</html>                                        