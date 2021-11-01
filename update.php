<?php
 include("class.php");
 $ob=new Project();
$emailErr=$Ename=$Eage=$Ecity=$Eimg=$Epass="";
    $arr=$ob->updation();

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
     move_uploaded_file($tmp,$dest);
     
     
     
     $msg=$ob->update($name,$password,$email,$age,$city,$dest);
    
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
  <h1 class="display-4 text-center">Update Panel</h1>
  
</div>
    
    
  <div class="container border border-warning bg-primary" style="width:700px;">
<form method="post" enctype="multipart/form-data">
    <h1>Update</h1>
    Name  <span class="error">* <?php echo $Ename;?></span>
    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" value="<?php echo $arr['name'] ?>" >
    
    Password  <span class="error">* <?php echo $Epass;?></span>
    <input type="password" class="form-control" name="password" aria-describedby="emailHelp" value="<?php echo $arr['password'] ?>" >

    Email address  <span class="error">* <?php echo $emailErr;?></span>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" value="<?php echo $arr['email'] ?>">
    

    Age <span class="error">* <?php echo $Eage;?></span>
    <input type="text" class="form-control" name="age" aria-describedby="emailHelp"  value="<?php echo $arr['age'] ?>">
    
    City <span class="error">* <?php echo $Ecity;?></span>
    <input type="text" class="form-control" name="city" aria-describedby="emailHelp" value="<?php echo $arr['city'] ?>" >
    
    <div class="form-group">  <span class="error">* <?php echo $Eimg;?></span>
    <label for="exampleFormControlFile1">Image</label>
    <input type="file" class="form-control-file"  name="att">
  </div>
    
    
  

   
  <button type="submit" class="btn btn-dark" name="submit">submit</button>
  
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
