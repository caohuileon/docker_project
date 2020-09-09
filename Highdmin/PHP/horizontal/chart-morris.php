<?php require 'includes/header_start.php'; ?>

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="../plugins/morris/morris.css">

<?php require 'includes/header_end.php'; ?>


        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group float-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Highdmin</a></li>
                                    <li class="breadcrumb-item"><a href="#">Components</a></li>
                                    <li class="breadcrumb-item"><a href="#">Charts</a></li>
                                    <li class="breadcrumb-item active">Morris Chart</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Morris Chart</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-box">
                            <h4 class="header-title">Stacked Bar Chart</h4>

                            <div id="morris-bar-stacked" style="height: 350px;" class="mt-4"></div>

                        </div>
                    </div>

                    <div class="col-lg-6">

                        <div class="card-box">
                            <h4 class="header-title">Area Chart</h4>

                            <div id="morris-area-example" style="height: 350px;" class="mt-4"></div>

                        </div>
                    </div>

                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-lg-6">

                        <div class="card-box">
                            <h4 class="header-title">Line Chart</h4>

                            <div id="morris-line-example" style="height: 350px;" class="mt-4"></div>

                        </div> <!-- card-box -->

                    </div> <!-- end row -->

                    <div class="col-lg-6">
                        <div class="card-box">
                            <h4 class="header-title">Bar Chart</h4>

                            <div id="morris-bar-example" style="height: 350px;" class="mt-4"></div>

                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">

                    <div class="col-lg-6">

                        <div class="card-box">
                            <h4 class="header-title">Area Chart with Point</h4>

                            <div id="morris-area-with-dotted" style="height: 350px;" class="mt-4"></div>


                        </div>
                    </div>

                    <div class="col-lg-6">

                        <div class="card-box">
                            <h4 class="header-title m-t-0">Donut Chart</h4>

                            <div id="morris-donut-example" style="height: 350px;" class="mt-4"></div>

                        </div>
                    </div>

                </div>
                <!-- end row -->

            </div> <!-- end container-fluid -->
        </div>
        <!-- end wrapper -->


        <?php require 'includes/footer_start.php'; ?>
        
        <!--Morris Chart-->
        <script src="../plugins/morris/morris.min.js"></script>
        <script src="../plugins/raphael/raphael-min.js"></script>
        <script src="assets/pages/jquery.morris.init.js"></script>

        <?php require 'includes/footer_end.php'; ?>