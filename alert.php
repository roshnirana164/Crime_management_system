<?php
include("header.php");
?>
        <!-- Start Breadcrumb Section -->
        <section class="breadcrumb-section parallax" style="background-image: url(assets/images/bg/breadcrumb4.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title">
                            <h1>Alert</h1>
                        </div>
                        <div class="breadcrumb">
                            <ul>
                                <li>You Are Here :</li>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Element</a></li>
                                <li>Alert</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb Section -->


        <!-- Start Alert Section -->
        <section class="pad80">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="section-title left">
                            <h3>Default Alert</h3>
                        </div>
                        <div class="alert alert-success" role="alert">Well done! You successfully read this important alert message.</div>
                        <div class="alert alert-info" role="alert">Heads up! This alert needs your attention, but it's not super important.</div>
                        <div class="alert alert-warning" role="alert">Warning! Better check yourself, you're not looking too good.</div>
                        <div class="alert alert-danger" role="alert">Oh snap! Change a few things up and try submitting again.</div>
                    </div>
                    <div class="col-md-6">
                        <div class="section-title left">
                            <h3>Dismissal Alert</h3>
                        </div>
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>Well done! You successfully read this important alert message.
                        </div>
                        <div class="alert alert-info alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>Heads up! This alert needs your attention, it's not super important.
                        </div>
                        <div class="alert alert-warning alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>Warning! Better check yourself, you're not looking too good.
                        </div>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>Oh snap! Change a few things up and try submitting again.
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Alert Section -->
<?php
include("footer.php");
?>

       