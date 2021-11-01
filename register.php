<?php
$error=false;
 include("class.php");
 $ob=new Project();


 if(isset($_POST['submit']))
 {
     $name=$_POST['name'];
     $password=$_POST['password'];
     $email=$_POST['email'];
     $age=$_POST['age'];
     $city=$_POST['city'];
    $tmp=$_FILES['att']['tmp_name'];
    $fname=$_FILES['att']['name'];
    $dest="Image/$fname";
    

    $res=$ob->validation();
    
    if(isset($res) && $res['error']==0){
    move_uploaded_file($tmp,$dest);
    $msg=$ob->register($name,$password,$email,$age,$city,$dest);
    
    }else{
        $error=$res;
    }
    
}
    


 
?>
<html>
<head>
<?php include("head.php") ;?>
<style>
    .error{
        color:red;
    }
</style>
</head>
<body>
    
<div class="jumbotron bg-info">
  <h1 class="display-4 text-center">Register Panel</h1>
  
    <?php 
    if(!empty($msg))
    {
        echo $msg;
    }
   ?>
  
</div>
    
    
  <div class="container border border-warning bg-success" style="width:700px;">
<form method="post" enctype="multipart/form-data">
    <h1>Register</h1>
  
    
    Name  <span class="error">* <?php echo $error?$error['Ename']:"";?></span>
    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter Your name" >
    
    Password  <span class="error">* <?php echo $error?$error['Epass']:"";?></span>
    <input type="password" class="form-control" name="password" aria-describedby="emailHelp" placeholder="Enter Your Password" >

    Email address  <span class="error">* <?php echo $error?$error['emailErr']:"";?></span>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    

    Age <span class="error">* <?php echo $error?$error['Eage']:"";?></span>
    <input type="text" class="form-control" name="age" aria-describedby="emailHelp" placeholder="Enter your Age" >
    
    City <span class="error">* <?php echo $error?$error['Ecity']:"";?></span>
    <input type="text" class="form-control" name="city" aria-describedby="emailHelp" placeholder="Enter Your city" >
    
    <div class="form-group">  <span class="error">* <?php //echo $Eimg;?></span>
    <label for="exampleFormControlFile1">Image</label>
    <input type="file" class="form-control-file"  name="att">
  </div>

<button type="submit" class="btn btn-dark" name="submit">submit</button>
    <a href="login.php" class="text-light">Existing users?</a>
</form>
</div>
<div class="footer-copyright">
<div class="container-fluid">
<div class="row">
<div class="col-md-12 text-center bg-dark text-white ">
<p>Copyright  © 2021. All rights reserved.</p>
</div>
</div>
</div>
</div>

<?php include("foot.php");?>
    </body>
</html>
