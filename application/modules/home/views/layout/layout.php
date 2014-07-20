<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Website Title -->
    <title>Silkforest | Theme for TEO</title>

    <!-- Meta data for SEO -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Template stylesheet -->
    <link rel="icon" href="images/TEO.png">
    <link href="<?php echo base_url()?>public/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="<?php echo base_url()?>public/css/bootstrap/bootstrap-theme.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="<?php echo base_url()?>public/css/styles.css" rel="stylesheet" type="text/css" media="all">

    <!-- Jquery and plugins -->
    <script type="text/javascript" src="<?php echo base_url()?>public/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>public/js/jquery.zoom.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>public/js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>public/js/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>public/js/imagesloaded.pkgd.min.js"></script>


</head>

<body>
    <!-- Begin Header -->
        <?php $this->load->view("layout/header"); ?>
    <!-- End Header -->
    
    <!-- Begin Content -->
    <section class="clearfix Content">
            <div id="masonry" class="widthMasonry">
                <!-- Begin Sidebar -->
                    <?php $this->load->view("layout/sidebar"); ?>
                <!-- End Sidebar -->

                    <?php $this->load->view($template); ?>                                
            </div>
    </section>
    <!-- End Content -->

    <!-- Begin Footer -->   
        <?php $this->load->view("layout/footer"); ?>
    <!-- End Footer -->

<!--js-->
    <script type="text/javascript" src="<?php echo base_url()?>public/js/teo.js"></script>
</body>
</html>


