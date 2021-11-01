<?php
include("class.php");
$ob=new Project();

    $msg=$ob->display();
   if(isset($_REQUEST['id'])){
       $de=$ob->delete();
       if($de){
        echo "<script>window.location.href='register.php'</script>";
       }
       else{
        echo "<script>window.location.href='dashboard.php'</script>";
       }
   } 
   
    ?>

<html>
    <head>
        <title></title>
        

    </head>
    <body>
   <?php 

    include("head.php");

?>
    <table class="table table-dark table-hover">
    <thead>
    
        <th> Id</th>
        <td><?php echo $msg['id'];?></td>
      </tr>
    </thead>
    <tbody>
      
    <tr>
        <th>image</th>
        <td><img src="<?php echo $msg['image'];?>" alt=""></td>
       </tr>
     
      <tr>
        <th>name</th>
        <td><?php echo $msg['name'];?></td>
       </tr>
      
       <tr>
        <th>Password</th>
        <td><?php echo $msg['password'];?></td>
       </tr>

       <tr>
        <th>Email</th>
        <td><?php echo $msg['email'];?></td>
       </tr>
       <tr>
        <th>age</th>
        <td><?php echo $msg['age'];?></td>
       </tr>
       <tr>
        <th>city</th>
        <td><?php echo $msg['city'];?></td>
       </tr>

       <tr>
        <th>image path</th>
        <td><?php echo $msg['image'];?></td>
       </tr>

       <tr>
          <th rowspan="2">Operation</th>
          <td><a href="update.php?id=<?php echo $msg['id'];?>" class="text-light">Edit</td>
        
      </tr>
          <td><a href="?id=<?php echo $msg['id'];?>" class="text-light">Delete</td>

       </tr>
      
     
      
    </tbody>
  </table>

   
   
    <?php include("foot.php"); ?>
    </body>
</html>