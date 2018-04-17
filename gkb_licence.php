<?php
require_once("includes/conn.php");
if(isset($_POST[submit]))
{
$reg=strtoupper($_POST[reg]);
$mbo_no=$_POST[mbo_no];
$query_reg1="select * from tb_reg where regstration_no='$reg' and mobile='$mbo_no'";
$res_reg1=mysql_query($query_reg1);
$row_reg1=mysql_fetch_array($res_reg1);
$regs1=$row_reg1[regstration_no];
$mobile=$row_reg1[mobile];

if($reg==$regs1 && $mbo_no=$mobile)
{


//$regi=$_GET[reg];
$ss=rand(1000,9999);
$u_phone=$mobile;


$sql_edit="update tb_reg set opt_code='$ss' where regstration_no='$regs1'";
$res=mysql_query($sql_edit);
//header("location:view_licence.php?regg=$reg");
$destUrl = "http://37.48.104.215/app/smsapi/index.php?key=25A75483010D9C&routeid=100211&type=text&contacts=$u_phone&senderid=GKYTOD&msg=$ss";

$messageStatus = file_get_contents($destUrl);

header("location:gkb_licence.php?msg=2&reg=$reg");

}
else
{
header("location:gkb_licence.php?msg=1");

}

}
if(isset($_POST[submit1]))
{
 $reg=$_GET[reg];
$otp=$_POST[otp_code];

//exit;
$sql_otp="select * from tb_reg where opt_code='$otp' and regstration_no='$reg'";
$res_otp=mysql_query($sql_otp);
$row_otp=mysql_fetch_array($res_otp);
$rg=$row_otp[regstration_no];
$op=$row_otp[opt_code];
if($rg==$reg && $otp==$op)
{
header("location:view_licence.php?regg=$reg");
}
else
{
header("location:gkb_licence.php?msg=2&reg=$reg");

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
						   <?php
						   if($_GET[msg] == '2')
						   {
						   ?>
						   <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="form-group">
                                    <label class="control-label lebel-txt" for="first-name">ENTER YOUR OTP NO  *</label>
                                    <input type="text" name="otp_code" id="user-name" class="form-control input-txt">
                                </div>
                            
							
							  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							      
							      
                                <div class="pLace-order ">
                                    <input name="submit1"  type="submit" value="Submit" class="theme-btn btn-style-one" >
                                </div>
                            </div>
							
                           </div>
						   <?php
						   }
						   else
						   {
						   ?>
						   <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="form-group">
                                    <label class="control-label lebel-txt" for="first-name">ENTER YOUR CERTIFICATE NO  *</label>
                                    <input type="text" name="reg" id="user-name" class="form-control input-txt">
                                </div>
                            <div class="form-group">
                                    <label class="control-label lebel-txt" for="first-name">ENTER YOUR MOBILE NO  *</label>
                                    <input type="text" name="mbo_no" id="user-name" class="form-control input-txt">
                                </div>
                            </div>
							
							  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							      
							      
                                <div class="pLace-order ">
                                    <input name="submit"  type="submit" value="Submit" class="theme-btn btn-style-one" >
                                </div>
                            </div>
							
                           </div>
					       <?php
						   }
						   ?>
						   
						   
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