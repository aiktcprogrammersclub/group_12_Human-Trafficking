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
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i>Cases</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		<?php
					$case= mysql_query("SELECT * From  case ORDER BY cid DESC");
					if($row=mysql_fetch_array($case))
					{			
						$case= mysql_query("SELECT * From  case ORDER BY cid DESC");
	                    while($cs=mysql_fetch_array($case))
	                    {
                            $name = ucfirst($cs['name']);
                ?>
					<! -- ROW OF PANELS -->
					<div class="row">
						<!-- TWITTER PANEL -->
						<div class="col-lg-4 col-md-4 col-sm-4 mb">
							<div class="white-panel pn">
                                <img src="images/<?php echo $cs['image'] ?>">
								<i class="fa fa-twitter fa-4x"></i>
								<p><?php echo $name; ?></p>
								<p class="user"><?php echo $cs['percentage']; ?></p>
							</div>
						</div><!-- /col-md-4 -->
					<?php
                        }
					}
					else{
						echo "&nbsp No Case Is Available.";
					}
					?>
					</div><! --/END ROW OF PANELS -->					
          		</div>
          	</div>
			
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
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>

    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
      
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
