<?php
  $path = $_SERVER['REQUEST_URI'];
  $path = explode('/', $path);
  $path = end($path);
?>
<div class="sidebar" data-color="purple" data-background-color="black">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="" class="simple-text logo-mini">
     
        </a>
        <a href="" class="simple-text logo-normal">
        <img src= "data:image/jpeg;base64,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" width= "130px" height= "80"/>
        </a>
      </div>
      <div class="sidebar-wrapper ps-container ps-theme-default ps-active-y">
        <!-- <div class="user">
          <div class="photo">
           <i class="material-icons">person</i>
          </div>
          <div class="user-info">
            <a data-toggle="collapse" href="#collapseExample" class="username">
              <span>
                <?php echo $this->session->userdata('gym_admin') ?>
                <b class="caret"></b>
              </span>
            </a>
            <div class="collapse" id="collapseExample">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url()."Admin/Profile" ?>">
                    <i class="material-icons">account_circle</i>
                    <span class="sidebar-normal"> My Profile </span>
                  </a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini"> S </span>
                    <span class="sidebar-normal"> Settings </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div> -->
        <ul class="nav">

          <li class="nav-item <?php if ($path == 'dashboard'){ echo 'active';} ?>">
            <a class="nav-link" href="<?php echo base_url('Admin/dashboard') ?>">
              <i class="material-icons">dashboard</i>
              <p> Dashboard </p>
            </a>
          </li>
          

          <li class="nav-item <?php if ($path == 'addPackage_Form' || $path == 'showDailyPackages' || $path == 'showMonthlyPackages' || $path == 'showTMPackages' || $path == 'showWorkoutPackages' || $path == 'showItems'){ echo 'active';}?>">
            <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
              <i class="material-icons">fitness_center</i>
              <p> Packages
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="componentsExamples">
              <ul class="nav">

                <?php
                if($this->session->userdata('access_level')==1)
                {
                  ?>

                <li class="nav-item <?php if ($path == 'addPackage_Form'){ echo 'active';} ?>">
                  <a class="nav-link" href="<?php echo base_url()."Admin/addPackage_Form" ?>">
                    <span class="sidebar-mini"> + </span>
                    <span class="sidebar-normal"> Add Packages/Items
                     
                    </span>
                  </a>
                 
                </li>

              <?php
                }

                 ?>
           
                <li class="nav-item <?php if ($path == 'showDailyPackages'){ echo 'active';} ?>">
                  <a class="nav-link" href="<?php echo base_url()."Admin/showDailyPackages" ?>">
                    <span class="sidebar-mini"> D </span>
                    <span class="sidebar-normal"> Daily Packages
                     
                    </span>
                  </a>
                 
                </li>
                <li class="nav-item <?php if ($path == 'showMonthlyPackages'){ echo 'active';} ?>">
                  <a class="nav-link" href="<?php echo base_url()."Admin/showMonthlyPackages" ?>">
                    <span class="sidebar-mini"> M </span>
                    <span class="sidebar-normal"> Monthly Packages </span>
                  </a>
                </li>
                <li class="nav-item <?php if ($path == 'showTMPackages'){ echo 'active';} ?>">
                  <a class="nav-link" href="<?php echo base_url()."Admin/showTMPackages" ?>">
                    <span class="sidebar-mini"> T/M </span>
                    <span class="sidebar-normal"> Therapy/Massage Packages </span>
                  </a>
                </li>
                    <li class="nav-item <?php if ($path == 'showWorkoutPackages'){ echo 'active';} ?>">
                  <a class="nav-link" href="<?php echo base_url()."Admin/showWorkoutPackages" ?>">
                    <span class="sidebar-mini"> W </span>
                    <span class="sidebar-normal"> Workout Packages </span>
                  </a>
                </li>

                        <li class="nav-item <?php if ($path == 'showItems'){ echo 'active';} ?>">
                  <a class="nav-link" href="<?php echo base_url()."Admin/showItems" ?>">
                    <span class="sidebar-mini"> J </span>
                    <span class="sidebar-normal"> Juices/Items </span>
                  </a>
                </li>


                
              </ul>
            </div>
          </li>

          <!------Members section start ----->
          <li class="nav-item <?php if ($path == 'addMemberForm' || $path == 'showAllMembers' || $path == 'showActiveMembers' || $path == 'showInActiveMemers' || $path == 'showDormantMembers' || $path == 'showFreezeMembers' || $path == 'showUnpaidMembers' || $path == 'showDailyVisitors'){ echo 'active';} ?>">
            <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
              <i class="material-icons">face</i>
              <p> Members
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples">
              <ul class="nav">
                <?php
                if($this->session->userdata('access_level')==1)
                {
                  ?>
                  <li class="nav-item <?php if ($path == 'addMemberForm'){ echo 'active';} ?>">
                  <a class="nav-link" href="<?php echo base_url()."Admin/addMemberForm" ?>">
                    <i class="material-icons">person_add</i>
                    <span class="sidebar-normal"> Add Members </span>
                  </a>
                </li>


                  <?php
                }


                 ?>
                      <li class="nav-item <?php if ($path == 'showAllMembers'){ echo 'active';} ?>">
                  <a class="nav-link" href="<?php echo base_url()."Admin/showAllMembers" ?>">
                    <i class="material-icons">group</i>
                    <span class="sidebar-normal"> Total Members </span>
                  </a>
                </li>
                <li class="nav-item <?php if ($path == 'showActiveMembers'){ echo 'active';} ?>">
                  <a class="nav-link" href="<?php echo base_url()."Admin/showActiveMembers" ?>">
                    <i class="material-icons">how_to_reg</i>
                    <span class="sidebar-normal"> Active Members </span>
                  </a>
                </li>
                <li class="nav-item <?php if ($path == 'showInActiveMemers'){ echo 'active';} ?>">
                  <a class="nav-link" href="<?php echo base_url()."Admin/showInActiveMemers" ?>">
                    <i class="material-icons">perm_identity</i>
                    <span class="sidebar-normal"> Inactive Members </span>
                  </a>
                </li>
          
                <li class="nav-item <?php if ($path == 'showDormantMembers'){ echo 'active';} ?>">
                  <a class="nav-link" href="<?php echo base_url()."Admin/showDormantMembers" ?>">
                    <i class="material-icons">airline_seat_individual_suite</i>
                    <span class="sidebar-normal"> Dormant Members </span>
                  </a>
                </li>
                <li class="nav-item <?php if ($path == 'showFreezeMembers'){ echo 'active';} ?>">
                  <a class="nav-link" href="<?php echo base_url()."Admin/showFreezeMembers" ?>">
                    <i class="material-icons">ac_unit</i>
                    <span class="sidebar-normal"> Freeze Members </span>
                  </a>
                </li>
                <li class="nav-item <?php if ($path == 'showUnpaidMembers'){ echo 'active';} ?>">
                  <a class="nav-link" href="<?php echo base_url()."Admin/showUnpaidMembers" ?>">
                    <i class="material-icons">account_circle</i>
                    <span class="sidebar-normal"> Unpaid Members </span>
                  </a>
                </li>
                <li class="nav-item <?php if ($path == 'showDailyVisitors'){ echo 'active';} ?>">
                  <a class="nav-link" href="<?php echo base_url()."Admin/showDailyVisitors"?>">
                    <i class="material-icons">account_circle</i>
                    <span class="sidebar-normal"> Daily Visitors </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <!------Members section end ----->


        <li class="nav-item <?php if ($path == 'Bar'){ echo 'active';} ?>">
            <a class="nav-link" href="<?php echo base_url()."Admin/Bar" ?>">
              <i class="material-icons">local_bar</i>
              <p> Items/Juice Bar </p>
            </a>
          </li> 


     
          <li class="nav-item <?php if ($path == 'showReports'){ echo 'active';} ?>">
            <a class="nav-link" href="<?php echo base_url()."Admin/showReports"?>">
              <i class="material-icons">timeline</i>
              <p> Sales Reports </p>
            </a>
          </li>
              <li class="nav-item <?php if ($path == 'showBalance'){ echo 'active';} ?>">
            <a class="nav-link" href="<?php echo base_url()."Admin/showBalance" ?>">
              <i class="material-icons">money</i>
              <p> Remaining balance </p>
            </a>
          </li>
          <li class="nav-item <?php if ($path == 'showLogs'){ echo 'active';} ?>">
            <a class="nav-link" href="<?php echo base_url()."Admin/showLogs" ?>">
              <i class="material-icons">receipt</i>
              <p> Logs </p>
            </a>
          </li>
            <li class="nav-item <?php if ($path == 'showBin'){ echo 'active';} ?>">
            <a class="nav-link" href="<?php echo base_url()."Admin/showBin" ?>">
              <i class="material-icons">delete</i>
              <p> Reports Bin </p>
            </a>
          </li>
          <?php
          if($this->session->userdata('access_level')==1)
          {
            ?>
               <li class="nav-item <?php if ($path == 'showAdmins'){ echo 'active';} ?>">
                <a class="nav-link" href="<?php echo base_url()."Admin/showAdmins" ?>">
                <i class="material-icons">group</i>
                <p> Admins </p>
              </a>
              </li>


            <?php
          }


          ?>
        


        </ul>
      <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 582px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 552px;"></div></div></div>
    <div class="sidebar-background"></div></div>