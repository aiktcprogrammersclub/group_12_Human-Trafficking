<?php
include('conn.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php
include_once ("head.php");
?>

  <body>
<?php
if(isset($_SESSION['admin']))
{
?>
  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <?php
			include_once ("header.php");
			?>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
         <!--sidebar start-->
      <?php
      			include_once ("sidebar.php");
?>
      <!--sidebar end-->   
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Write Story</h3>
              
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i>Story</h4>
                      <form class="form-horizontal style-form" action="uploadphoto.php" method="post">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Photo/Image</label>
                              <div class="col-sm-10">
                                  <input type="file" name="image">
                              </div>
                          </div>
                          <button type="submit" class="btn btn-theme" name="submit">Upload Photo</button>
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
       <!--footer start-->
     <?php
			include_once ("footer.php");
			?>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jjquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>
 <?php
  }else{
			header("Location:login.php");
}
         ?>
  </body>
</html>
