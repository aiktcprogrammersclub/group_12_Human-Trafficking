<?php
include('conn.php');
session_start();
?>
 
<script>
function check()
{
var r=confirm("Are you Sure you want to Delete!");
if (r==true)
  {
			return true;

	}
else
  {
		return false;
  }
}

function check1()
{
var r=confirm("Are you Sure you want to Edit!");
if (r==true)
  {
			return true;

	}
else
  {
		return false;
  }
}


</script>

<!DOCTYPE html>
<html lang="en">
<?php
include_once ("head.php");
?>

  <body>

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
                <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <?php
                            if(isset($_GET['id']))
                            {
                                $id = $_GET['id'];
                                $story= mysql_query("SELECT * From  story where sid=".$id);
								if($row=mysql_fetch_array($story))
								{
								$story= mysql_query("SELECT * From  story where sid=".$id);
	                           while($st=mysql_fetch_array($story))
	                           {
                                   $title = ucfirst($st['title']);
                                   ?>
                                    <h3><i class="fa fa-angle-right"></i><?php echo $title; ?></h3>
                          <hr>
                          <?php
                                   echo "<img src='assets/img/".$st['image']."'><hr>";
                                   echo $st['story'];
                               }
							   
							    }else{
								echo "&nbsp; Invalid Id Please Select Again";
							}
                            }
                            else
                            {
                          ?>
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Story</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th width="20%"><i class="fa fa-bullhorn"></i> Title</th>
                                  <th class="hidden-phone" width="60%"><i class="fa fa-question-circle"></i> Descrition</th>
                                  <th width="10%"><i class="fa fa-bookmark"></i> Date</th>
                                  <th width="10%"><i class=" fa fa-edit"></i> Option</th>
                                </tr>
                              </thead>
                              <tbody>
                            <?php
                                $story= mysql_query("SELECT * From  story");
	                           while($st=mysql_fetch_array($story))
	                           {
                                   $id = $st['sid'];
                                     echo "<tr>";
                                   echo '<td>';
                                   ?>
                                  <a href="buttons.php?id=<?php echo $id; ?>">
                                      <?php
                                   echo $st['title']."</a></td>";
								   $string=$st['story'];
									function trim_text($text, $count){ 
									$text = str_replace("  ", " ", $text); 
									$string = explode(" ", $text); 
									for ( $wordCounter = 0; $wordCounter <= $count; $wordCounter++ ){ 
										$trimed .= $string[$wordCounter]; 
										if ( $wordCounter < $count ){ $trimed .= " "; } 
										else { $trimed .= "..."; } 
									} 
									$trimed = trim($trimed); 
									return $trimed; 
									}
									$sto = trim_text($string, 10);
                                  echo '<td class="hidden-phone">'.$sto.'</td>';
                                  echo '<td>'.$st['date'].'</td>
                                  <td>';
                                   ?>
                                  <button class="btn btn-primary btn-xs"><a href="general.php?sid=<?php echo $id; ?>"><i class="fa fa-pencil"></i></a></button>
                                    <button class="btn btn-danger btn-xs"><a href="delete.php?sid=<?php echo $id; ?>" onclick="return check()"><i class="fa fa-trash-o "></i> </a></button>
                                  </td>
                              </tr>
                      <?php
                               }
							}
							
                                ?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
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
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
