<?php
include('conn.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php
include_once ("head.php");
?>
  
    <link href="assets/js/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  
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
          	<h3><i class="fa fa-angle-right"></i> Calendar</h3>
			<?php 
							  date_default_timezone_set("Asia/Kolkata");
								$today = date("l jS \of F Y h:i:s A"); 
								echo $today;
							?>
              <!-- page start-->
              <div class="row mt">
                  <aside class="col-lg-9 mt">
                      <section class="panel">
                          <div class="panel-body">
                              <div id="calendar" class="has-toolbar"></div>
                          </div>
                      </section>
                  </aside>
              </div>
              <!-- page end-->
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
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
	<script src="assets/js/fullcalendar/fullcalendar.min.js"></script>    
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
	<script src="assets/js/calendar-conf-events.js"></script>    
  
  <script>
      //custom select box

      $(function(){
          $("select.styled").customSelect();
      });

  </script>
 <?php
  }else{
			header("Location:login.php");
}
         ?>
  </body>
</html>
