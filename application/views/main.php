
<!DOCTYPE html>

<!--[if IE 7 ]>  <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>  <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>  <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!-- Meta -->
<html lang="en">
<?php $this->load->view('temp/head'); ?>
<body id="bg">

<div class="page-wraper">
<div id="loading-area"></div>
    <!-- header -->
    <?php $this->load->view('temp/header'); ?>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content">
        <!-- Slider -->
        <?php $this->load->view($konten); ?>
		<!-- Content END-->
    </div>
    <!-- Footer -->
    <?php $this->load->view('temp/footer');?>
    
    <!-- Footer END-->
    <!-- scroll top button -->
    <button class="scroltop fa fa-chevron-up" ></button>
</div>
<!-- JavaScript  files ========================================= -->
<?php $this->load->view('temp/foot'); ?>
</body>
</html>