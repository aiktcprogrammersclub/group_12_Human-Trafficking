      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.php"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">
                      <?php 
                    $admin= mysql_query("SELECT * From admin");
	                while($row=mysql_fetch_array($admin))
	                {
                         echo $row['name'];
                    }       
                    ?>
                  </h5>
              	  	
                  <li class="mt">
                      <a href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>UI Elements</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="general.php">Write Story</a></li>
                          <li><a  href="buttons.php">View Story</a></li>
                          <li><a  href="panels.php">View Case</a></li>
                          <li><a  href="write_case.php">Write Case</a></li>

                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Components</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="calendar.php">Calendar</a></li>
                          <li><a  href="gallery.php">View Gallery</a></li>
                          <li><a  href="add.php">Add Gallery</a></li>

                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Options</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="logout.php">Logout</a></li>
						  <li><a  href="changepass.php">Change Password</a></li>
                          <li><a  href="lock_screen.php">Lock Screen</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->