<?php
require_once("includes/conn.php");
if(isset($_POST[submit]))
{
$reg=strtoupper($_POST[reg]);

$query_reg1="select * from tb_reg where regstration_no='$reg'";
$res_reg1=mysql_query($query_reg1);
$row_reg1=mysql_fetch_array($res_reg1);
$regs1=$row_reg1[regstration_no];
if($reg==$regs1)
{
header("location:view_licence.php?regg=$reg");
}
else
{
header("location:certificate.php?msg=1");

}

}

?>

<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>Gramin Khadya Bhandar Certificate</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/slider-setting.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" id="jssDefault" href="css/custom/theme-2.css"/>

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">


<link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32">






</head>

<body class="home layout_changer">



<div class="page-wrapper body_wrapper">
    

    
    <!-- Main Header / Header Style One-->

		<?php include "header.php" ?>
    <!--End Main Header -->
    

    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg-page-title-1.jpg);">
        <div class="auto-container">
            <h1>Certificate</h1>
        	<div class="bread-crumb-outer">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">GKB  Licence</li>
                </ul>
            </div>
        </div>
    </section>
    
        
    <!--Team Section / Default-->
   
   
   
        <!-- Contact Us Page 1 Area Start Here -->
        <div class="contact-us-page1-area">
            <div class="container">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">  </div>
				
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12  regd ">
                        <div class="row ">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							  <div class="content-box">
                                <h2 class="admit-card">ONLINE CERTIFICATE </h2>
                               </div>
                            
                            </div>
							
                        </div>
						
					
					  <div class="registration-details-area inner-page-padding">
                    
					  <form id="checkout-form" name="customer"  method="post" action="" enctype="multipart/form-data"  onSubmit="return chk();">	
						   <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="form-group">
                                    <label class="control-label lebel-txt" for="first-name">ENTER YOUR CERTIFICATE NO  *</label>
                                    <input type="text" name="reg" id="user-name" class="form-control input-txt">
                                </div>
                            
                            </div>
							
							  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							      
							      
                                <div class="pLace-order ">
                                    <input name="submit"  type="submit" value="Submit" class="theme-btn btn-style-one" >
                                </div>
                            </div>
							
                           </div>
					
						   
						   
						    </form>
                           </div>

                       
                    </div>
					
					 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">  </div>
                </div>
            </div>
        
        </div>
        <!-- Contact Us Page 1 Area End Here -->


    
  
    
	<?php include "footer.php" ?>
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>


<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jQuery.style.switcher.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/validation.js"></script>
<script src="js/script.js"></script>
</body>

</html>