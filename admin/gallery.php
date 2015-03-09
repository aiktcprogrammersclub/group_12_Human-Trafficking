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
          	<h3><i class="fa fa-angle-right"></i> Gallery</h3>
          	<hr>
				<div class="row mt">
				<?php
                    $gallery= mysql_query("SELECT * From gallery ORDER BY id DESC");
	                while($gl=mysql_fetch_array($gallery))
	                {
                ?>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
						<div class="project-wrapper">
		                    <div class="project">
		                        <div class="photo-wrapper">
		                            <div class="photo">
		                            	<a class="fancybox" href="images/<?php echo $gl['image']; ?>">
										<img class="img-responsive" src="images/thumbnail/<?php echo $gl['image']; ?>" alt=""></a>
		                            </div>
		                            <div class="overlay"></div>
		                        </div>
		                    </div>
		                </div>
					</div><!-- col-lg-4 -->
					<?php
								   }
					?>
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
	<script src="assets/js/fancybox/jquery.fancybox.js"></script>    
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
  
  <script type="text/javascript">
      $(function() {
        //    fancybox
          jQuery(".fancybox").fancybox();
      });

  </script>
  
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
