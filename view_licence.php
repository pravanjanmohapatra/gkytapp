<?php
//require("access.php");
require_once("includes/conn.php");
 $re=$_GET['regg'];
 $query_reg="select * from tb_reg where regstration_no='$re'";
$res_reg=mysql_query($query_reg);
$row_reg=mysql_fetch_array($res_reg);
// $row_reg[image1];
?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>Certificate</title>
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

<body >



<div >
    

    
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
                    <li class="active">Certificate</li>
                </ul>
            </div>
        </div>
    </section>
    
        
    <!--Team Section / Default-->
   
   
   
        <!-- Contact Us Page 1 Area Start Here -->
        <div >
            <div >
                <div class="row">
                  <div >  </div>
				
                    <div >
                        <div >
                            <div >
							  <div >
                                <h2 style="margin-left:100px;" >ONLINE CERTIFICATE </h2>
                               </div>
                            
                            </div>
							
                        </div>
						
					
					  <div style="margin-left:100px;">
                    
					  <table width="100%" border="1" cellspacing="0" cellpadding="0" bordercolor="#000000" >
  <tr>
    <td colspan="4">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3"><img src="admin/cert_image/<?php echo $row_reg['image1'];?>" height="600" width="1200"    /></td>
    
  </tr>
</table>

	</td>
  </tr>

  </table>
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