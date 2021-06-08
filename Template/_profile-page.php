<section id="profile-site">
     <div class="text-center font-rubik py-4">
          <h1>Profile</h1>
     </div>
     <div class="container py-5">
               <div class="col-4 offset-4 shadow py-4">
                    <div class="text-center text-white">
                         <h4 class="py-3">
                              <?php
                              if (isset($user['firstName'])) {
                                   printf('%s %s', $user['firstName'], $user['lastName']);
                              }
                              ?>
                         </h4>
                    </div>
                    <div class="user-info px-3 text-center text-white">
                    <ul class="font-rubik navbar-nav">
                         <li class="nav-link"><i>First Name: </i><span><?php echo isset($user['firstName']) ? $user['firstName']:'';?></span></li>
                         <li class="nav-link"><i>Last Name: </i><span><?php echo isset($user['lastName']) ? $user['lastName']:'';?></span></li>
                         <li class="nav-link"><i>Email: </i><span><?php echo isset($user['email']) ? $user['email']:'';?></span></li>
                         <li class="nav-link"><i>User Name: </i><span><?php echo isset($user['userName']) ? $user['userName']:'';?></span></li>
                    </ul>          
               </div>             
          </div>
     </div>
</section>