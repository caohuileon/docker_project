<?php require 'includes/header_start.php'; ?>

        <!-- Bootstrap fileupload css -->
        <link href="../plugins/bootstrap-fileupload/bootstrap-fileupload.css" rel="stylesheet" />

        <!-- Dropzone css -->
        <link href="../plugins/dropzone/dropzone.css" rel="stylesheet" type="text/css" /> 

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
                                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                    <li class="breadcrumb-item active">File Uploads</li>
                                </ol>
                            </div>
                            <h4 class="page-title">File Uploads</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="header-title m-t-0">Bootstrap File Upload</h4>
                            <p class="text-muted font-14 m-b-10">
                                Your awesome text goes here.
                            </p>

                            <form action="#" class="form-horizontal ">
                                <div class="form-group row">
                                    <label class="col-3 col-form-label">Default</label>
                                    <div class="col-8">
                                        <input type="file" class="default" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-3 col-form-label">Without input</label>
                                    <div class="controls col-9">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <button type="button" class="btn btn-custom btn-file">
                                                <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select file</span>
                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                <input type="file" class="btn-light" />
                                            </button>
                                            <span class="fileupload-preview" style="margin-left:5px;"></span>
                                            <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-3 col-form-label">Image Upload</label>
                                    <div class="col-9">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="assets/images/small/img-1.jpg" alt="image" class="img-fluid" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <button type="button" class="btn btn-custom btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input type="file" class="btn-light" />
                                                </button>
                                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
                                            </div>
                                        </div>
                                        <div class="alert alert-info"><strong>Notice!</strong> Image preview only works in IE10+, FF3.6+, Chrome6.0+ and Opera11.1+. In older browsers and Safari, the filename is shown instead.</div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!--  end row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="header-title m-t-0">Dropzone File Upload</h4>
                            <p class="text-muted font-14 m-b-10">
                                Your awesome text goes here.
                            </p>

                            <form action="#" class="dropzone" id="dropzone">
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>

                            </form>
                            <div class="clearfix text-right mt-3">
                                <button type="button" class="btn btn-custom waves-effect waves-light">Submit</button>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- end container-fluid -->
        </div>
        <!-- end wrapper -->


        <?php require 'includes/footer_start.php'; ?>

        <!-- Bootstrap fileupload js -->
        <script src="../plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>

        <!-- Dropzone js -->
        <script src="../plugins/dropzone/dropzone.js"></script>

        <?php require 'includes/footer_end.php'; ?>