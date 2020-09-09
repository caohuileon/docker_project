<?php require 'includes/header_start.php'; ?>

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
                                    <li class="breadcrumb-item active">Flot Chart</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Flot Chart</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

                <div class="row">

                    <div class="col-lg-6">
                        <div class="card-box">
                            <h4 class="header-title">Multiple Statistics</h4>

                            <div id="website-stats" style="height: 350px;" class="flot-chart mt-5"></div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card-box">
                            <h4 class="header-title">Line Chart</h4>

                            <div id="website-stats1" style="height: 350px;" class="flot-chart mt-5"></div>
                        </div>
                    </div>

                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-box">
                            <h4 class="header-title">Donut Pie</h4>

                            <div id="donut-chart">
                                <div id="donut-chart-container" class="flot-chart mt-5" style="height: 350px;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card-box">
                            <h4 class="header-title">Realtime Statistics</h4>

                            <div id="flotRealTime" style="height: 350px;" class="flot-chart mt-5"></div>
                        </div>
                    </div>

                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-box">
                            <h4 class="header-title">Line Chart</h4>

                            <div id="line-chart-alt" class="mt-5" style="height:350px;">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card-box">
                            <h4 class="header-title">Combine Chart</h4>

                            <div id="combine-chart">
                                <div id="combine-chart-container" class="flot-chart mt-5" style="height: 350px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">

                    <div class="col-lg-6">
                        <div class="card-box">
                            <h4 class="header-title">Stacked Bar chart</h4>

                            <div id="ordered-bars-chart" style="height: 350px;" class="mt-5"></div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card-box">
                            <h4 class="header-title">Pie Chart</h4>

                            <div id="pie-chart">
                                <div id="pie-chart-container" class="flot-chart mt-5" style="height: 350px;">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end row -->

            </div> <!-- end container-fluid -->
        </div>
        <!-- end wrapper -->


        <?php require 'includes/footer_start.php'; ?>

        <!-- Flot chart -->
        <script src="../plugins/flot-chart/jquery.flot.min.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.time.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.resize.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.selection.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.stack.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.orderBars.min.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.crosshair.js"></script>
        <script src="../plugins/flot-chart/curvedLines.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.axislabels.js"></script>
        <script src="assets/pages/jquery.flot.init.js"></script>

        <?php require 'includes/footer_end.php'; ?>