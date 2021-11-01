<?php 
 session_start();
  $sid=$_SESSION['email'];
 
//  if(empty($sid)){
//    header("location:index.php");
//  }

?>
<html>
    <head>
    <?php include("head.php") ;?>
  <style>
     </style>

    </head>
    <body>
    <?php include("nav.php");
    ?>
    <div class="container-fluid border">
        <div class="row">
            <div class="col-md-2 border ">
            
           
         
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  <a class="nav-link " id="" data-toggle="pill" href="#" role="tab" aria-controls="" aria-selected="true">Dashboard</a>
  <a class="nav-link " id="" data-toggle="pill" href="#" role="tab" aria-controls="" aria-selected="false">Profile</a>
  <a class="nav-link " id="" data-toggle="pill" href="#" role="tab" aria-controls="" aria-selected="false">Link</a>
  <a class="nav-link " id="" data-toggle="pill" href="#" role="tab" aria-controls="" aria-selected="false">change password</a>
  <a class="nav-link " id="" data-toggle="pill" href="#" role="tab" aria-controls="" aria-selected="true">About us</a>
  <a class="nav-link " id="" data-toggle="pill" href="#" role="tab" aria-controls="" aria-selected="false">Careers</a>
  <a class="nav-link " id="" data-toggle="pill" href="#" role="tab" aria-controls="" aria-selected="false">shortcut</a>
  <a class="nav-link " id="" data-toggle="pill" href="#" role="tab" aria-controls="" aria-selected="false">Event</a>
  <a class="nav-link " id="" data-toggle="pill" href="#" role="tab" aria-controls="" aria-selected="true">Services</a>
  <a class="nav-link " id="" data-toggle="pill" href="#" role="tab" aria-controls="" aria-selected="false">overview</a>
  <a class="nav-link " id="" data-toggle="pill" href="#" role="tab" aria-controls="" aria-selected="false">Messages</a>
  <a class="nav-link " id="" data-toggle="pill" href="#" role="tab" aria-controls="" aria-selected="false">Settings</a>
</div>
          </div>
            <div class="col-md-10 border bg-info">
            

                <?php include("show.php"); ?>
              
        </div>

        </div>
    </div>

    <section id="services" class="container">
   <h2 class="display-4 text-center mt-5 mb-3">Our Services</h2>
   
   <div class="row text-center">
      <div class="col-md-4 mb-4">
         <div class="card h-100">
            <img class="card-img-top" src="asset/team-1.jpg" alt="Design">
            <div class="card-body">
               <h4 class="card-title">Design</h4>
               <p class="card-text">Deliver the best user experience 
               with our carefully designed responsive websites and applications!</p>
            </div>
            <div class="card-footer py-4">
               <a href="#" class="btn btn-secondary">See portfolio &raquo;</a>
            </div>
         </div>
      </div>
      
      <div class="col-md-4 mb-4">
         <div class="card h-100">
            <img class="card-img-top" src="asset/team-2.jpg" alt="Development">
            <div class="card-body">
               <h4 class="card-title">Development</h4>
                  <p class="card-text">You need software that works on every device. 
                  Leverage the latest technologies and the most powerful tools!</p>
            </div>
            <div class="card-footer py-4">
               <a href="#" class="btn btn-secondary">See projects &raquo;</a>
            </div>
         </div>
      </div>
      
      <div class="col-md-4 mb-4">
         <div class="card h-100">
            <img class="card-img-top" src="asset/team-3.jpg" alt="Analytics">
            <div class="card-body">
               <h4 class="card-title">Analytics</h4>
               <p class="card-text">Consult our experts to set up proper goals and 
               find the best stack for your next application!</p>
            </div>
            <div class="card-footer py-4">
               <a href="#" class="btn btn-secondary">See testimonials &raquo;</a>
            </div>
         </div>
      </div>
   </div>
</section>
  


  




  
<div class="footer-copyright">
<div class="container-fluid">
<div class="row">
<div class="col-md-12 text-center bg-dark text-light ">
<p>Copyright  © 2021. All rights reserved.</p>
</div>
</div>
</div>
</div>
</footer>




<?php include("foot.php");?>
    </body>
</html>

    
        
   