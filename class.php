<?php 
 class Project{
     private $conn;
     public $mail;
     public $msg;
    
    function __construct()
    {
        $this->conn=mysqli_connect("localhost","root","","register1") or die("disconnet");

    }

    function register($name,$password,$email,$age,$city,$dest){
        
        if(mysqli_query($this->conn,"INSERT INTO reg(name,password,email,age,city,image) VALUES('$name','$password','$email','$age','$city','$dest');"))
        {
            
            $msg="Registerd Successfully";
            header("location:login.php");
            return $msg;
        }
        else {
            $msg="Not Registered";
            return $msg;
        }
    
    }
    function login($email,$password){
        $fetch=mysqli_query($this->conn,"select * from reg where email='$email';");
        if(mysqli_num_rows($fetch)>0){
            while($arr=mysqli_fetch_assoc($fetch)){
            if($arr['email']==$email && $arr['password']==$password){
                session_start();
                $_SESSION['email']=$email;
                $msg="success";
                  header("location:dashboard.php");
                return $msg;
            }
            else{
                $msg="not success";
                return $msg;
            }
        }

        }
    }

   
    function update($name,$password,$email,$age,$city,$dest){
        
        
        if(mysqli_query($this->conn,"update reg set name='$name',password='$password',age='$age',city='$city',image='$dest' where email='$email'")){
        $msg="update success";
        header("location:dashboard.php");
        return $msg;
    }
        else{
            $msg="not update";
            return $msg;
        }
        
    }
    function validation(){
    $emailErr=$Ename=$Eage=$Ecity=$Epass=NULL;

            $name=$_POST['name'];
            $password=$_POST['password'];
            $email=$_POST['email'];
            $age=$_POST['age'];
            $city=$_POST['city'];
            $tmp=$_FILES['att']['tmp_name'];
            $fname=$_FILES['att']['name'];
            $dest="Image/$fname";
        if(empty($name)){
            $emailErr="plz enter email";
          }
          if(empty($password)){
            $Epass="plz enter username";
          }
          if(empty($email)){
            $Ename="plz enter email";
          }
          if(empty($age)){
              $Eage="plz enter age";
          }
          if(empty($city)){
            $Ecity="plz enter city";
          }
          if(empty($emailErr) and empty($Ename) and empty($Eage) and empty($Ecity) and empty($Epass)){
              return $return= array("error"=>0 );
            ;
          }else{
            return $return= array("error"=>1,
                "emailErr"=>$emailErr,"Ename"=>$Ename,"Eage"=>$Eage,"Ecity"=>$Ecity,"Epass"=>$Epass
             );
          }
        
         
    }
    function display(){
       //session_start();
        $email=$_SESSION['email'];
        $selectquery="select * from reg where email='$email' "; 
        $query=mysqli_query($this->conn,$selectquery);
        $res=mysqli_fetch_assoc($query);
        return $res;
        

    }
    function updation(){
        session_start();
        $email=$_SESSION['email'];
        $selectquery="select * from reg where email='$email' "; 
        $query=mysqli_query($this->conn,$selectquery);
        $res=mysqli_fetch_assoc($query);
        return $res;

    }
    function delete(){
        
        $email=$_SESSION['email'];
        $selectquery="delete from reg where email='$email' "; 
        if($query=mysqli_query($this->conn,$selectquery)){
            return true;
            
        }else{
            return false;
        }
    
    }
    function changepassword($old_password,$new_password,$confirm_password){
        session_start();
        $email=$_SESSION['email'];
        $sql=mysqli_query($this->conn,"SELECT * FROM reg where email='$email'");
        $num=mysqli_fetch_assoc($sql);
        $ol_password=$num['password'];
        if($old_password==$ol_password){
            if($new_password==$confirm_password){
                if(mysqli_query($this->conn,"update student set password='$new_password' where email='$email' "))
                {
                    $msg="success";
                    header("location:dashboard.php");
                }else{
                    $msg="not success";
                }
            }
            else{
                $msg="not changes ";
            }
        }
    }

    function __destruct()
    {
        mysqli_close($this->conn);
    }
 }
?>