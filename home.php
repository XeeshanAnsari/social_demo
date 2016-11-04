<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>home</title>
     <link rel="stylesheet" href="./css/style1.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome/css/font-awesome.css">
    <script src = "./js/new.js"></script>
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</head>
<body>
    <!--  Header  start -->
  <div id="mainContainerDiv"> 
    <div >
        <nav class="navbar navbar-default " id="header">
           <div class="container-fluid">
              <div class="navbar-header">
                <a href="#"><img src="./image/ln.png" id="brand" alt="Brand name">
                 </a>
              </div>
              <form class=" navbar-left" id="search-form" role="search">
                 <span id="form-group">
                   <input type="text" class="" id="form-control" placeholder="Search">
                   <button id="btn-search"><span class="glyphicon glyphicon-search"></span></button>
                 </span>
                 
              </form>
              <div class="navbar-right" id="right-nav">
                             
                    
                    
                    <a href="#" class="navbar-link "><p id="user-id"><img src="./image" alt="" id="user-id-img"><?php echo @$_GET['user_name'];?></p></a>
                    <a href="#" class="navbar-link "><p class="navbar-link  " id="user-home">Home</p></a>
                     <span class="header-logo  ">
                 
                        <a href="#"><span  class="glyphicon glyphicon-heart"></span></a>
                        <a href="#"><span  class="glyphicon glyphicon-heart"></span></a>
                        <a href="#"><span  class="glyphicon glyphicon-heart"></span></a>
                
                     </span>
                     <span class="header-logo" id="header-signout-icon">
                 
                       <a href="#"><span  class="glyphicon glyphicon-send"></span></a>
                     </span>
              </div>
           </div>
           
        </nav>
    </div>
    
    <!--  Header  end -->
    
    <!--  Main section start -->
   
       <div class="mainBox" >
          
          <div class="row ">
           <!-- Start left side body -->
        
              <div class=" col-sm-3" >
                 
                 <div id="left-box">
                    <!-- profile Box -->
                     <div class="profile">
                         
                         <div class="profile-blue">
                            <img src="./image/user-img.png" alt="profile Image" class="profile-img">
                          </div>
                     
                          <div class="profile-decs">
                              <div class="col-md-3">
                                  
                              </div>
                              <div class="col-md-9"><p><b><?php echo @$_GET['user_name'];?></b><br><br> 
                              </p>
                              </div>
                              <div class="tweet profile-rate col-md-4">POST<br><b>0</b></div>
                              <div class="following profile-rate col-md-4">FOLLOWING<br><b>0</b></div>
                              <div class="follower profile-rate col-md-4">FOLLOWERS<br><b>0</b></div>
                          </div>
                         
                     </div>  
                     <!-- profile Box -->   
                     
                     
                     <!-- group div  start-->
                     <div class="group-box">
                       
                        <div class="trend"><b>GROUPS</b></div>
                        
                           <div class="group-link">
                             <a href="#">Mardan</a>
                             <p>432 Post</p>
                           </div>
                            <div class="group-link">
                               <a href="#">SalamKPPolice</a>
                               <p>9,034 Post</p>
                            </div>
                            <div class="group-link">
                              <a href="#">ArmyCheif</a>
                              <p>3,034 Post</p>
                            </div>
                            <div class="group-link">
                              <a href="#">Jumma Mubarak</a>
                              <p>4,276 post</p>
                             </div>
                             <div class="group-link">
                                 <a href="#">All Group</a>
                                 <p>4,276 Groups</p>
                              </div>
                           
                          </div>  
                       
                       <!-- group div  end-->
                       
                       <!-- group div  start-->
                     <div class="group-box">
                       
                        <div class="trend"><b>PAGES</b></div>
                        
                           <div class="group-link">
                             <a href="#">Mardan</a>
                             <p>7578 Post</p>
                           </div>
                            <div class="group-link">
                               <a href="#">SalamKPPolice</a>
                               <p>9,034 Post</p>
                            </div>
                            <div class="group-link">
                              <a href="#">ArmyCheif</a>
                              <p>3,034 Post</p>
                            </div>
                            <div class="group-link">
                              <a href="#">Jumma Mubarak</a>
                              <p>4,276 Post</p>
                             </div>
                             <div class="group-link">
                                 <a href="#">All groups</a>
                                 <p>4,276 pages</p>
                              </div>
                           
                        </div>  
                    
                       <!-- group div  end-->
                       
                   </div>  
                </div>
                
                 <!-- Start left side body -->
                 
                 
                 <!-- start center side body -->
                <div class="col-md-6 " >
             
               
                  <div class="post-box" >
                     <form action="./database/post.php" method="post">
                        <div class="row " id="photo-select">
                            <div class="col-md-4 ">
                                <a href="#" class="glyphicon glyphicon-camera"> photo/video</a>
                            </div>
                            <div class="col-md-4">
                                <a href="#" class="glyphicon glyphicon-record"> LiveVideo</a>
                            </div>
                            <div class="col-md-4">
                                <a href="#" class="glyphicon glyphicon-camera"> photoAlbum</a>
                            </div>  
                        </div>  
                        <div class="" id="poxt-write">
                            <div class="float-left post-write-img">
                               <img src="#" alt="user pic">
                                                            
                            </div>
                            <div class="float-left post-write-field">
                                <textarea name="post_write" id="post-text"  placeholder="What's on your mind?"></textarea>
                            </div>
                        </div>  
                        
                        <div class=" row post-btn-tag ">
                            <div class="col-md-10">
                                
                            </div>
                            <div class="col-md-2">
                                <input type="submit" name="post" value="post" class="btn btn-primary btn-sm" id="post-btn">
                            </div>
                        </div>        
                      </form>                       
                   </div>
                    <div class="view-new-post" >
                         <a href="#">View More Post</a>
                    </div>
                    
                    
                    <!-- post box start  -->
                    <div class="post ">
                        <div class="row">
                            <div class="col-md-1">
                                <div class="post-img">
                                    <img src="./image/travel.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-11  " id="post-second">
                                <a href="#" class="name-user">Travel vibes <i class="fa fa-plane" aria-hidden="true"></i></a>
                                <span class="group-name">@travelVSCO . <a href="#">Sep 2</a></span>
                                 <p>Maldives</p>
                                 <a href="#" >Geo.tv/latest/13294...</a>
                                 
                                 <div class="post-image">
                                    <img src="./image/bank.jpg" alt="">
                                 </div>
                                 
                                 <div class="post-footer">  
                                   <i class="fa fa-reply" aria-hidden="true"> 1</i>
                                   <i class="fa fa-retweet" aria-hidden="true"> 1</i>
                                   <i class="fa fa-heart" aria-hidden="true"> 1</i>
                                 </div>
                                 
                            </div>
                        </div>
                        
                    </div>
                    <!-- post box start  -->
                    
           
                </div>
                <div class="col-md-3">
                    
                    <div class="find-gmail">
                       <div class="gmail-contact row">
                          <span class="gmail-image col-md-2"><img src="./image/gmail.png" alt=""></span>
                          <div class="col-md-9 gmail-text"> 
                              <div class="find-people-text">Find people you know </div>
                              <div class="import-contact-text">Import your contacts form Gmail</div>
                          </div>
                       </div>
                       <div class="connect-another">
                           <a href="#">Connect other address books</a>
                       </div>
                    </div>
               
                <!-- about funtionality in right side -->
                    <div class="about-twitter">
                       <span>2016 Twitter</span>
                        <a href="#">About </a>
                        <a href="#">Help </a>
                        <a href="#">Term</a>
                        <a href="#">privacy</a>
                        <a href="#">Cookies</a>
                        <a href="#">Ads info</a>
                        <a href="#">Brand</a>
                        <a href="#">Blog</a>
                        <a href="#">Status</a> 
                        <a href="#">Apps</a> 
                        <a href="#">Job</a>
                        <a href="#">Busniesses</a> 
                        <a href="#">Media</a>
                        <a href="#">Develper</a>      
                  </div>
               <div class="advertise-box">
                   <a href="#">Advertise with site</a>
               </div>   
                       
                       
                </div>
            </div>
        </div>
    <!--  Main section end-->
    </div> 
    
</body>
</html>
