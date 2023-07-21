<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title> 
<style>
button:hover
{
  background-color:white;
  color:red;
}
body 
{
font-family: sans-serif;
background-image: url('./kec.jpg');
background-size: cover;

}
input[type=text],input[type=password]
{
 width:400px;
 padding:12px 20px;
 margin:8px 0;
 display: inline-block;
 box-sizing:border-box;
}
label{  
  font-family: sans-serif;
  color:white;  
  font-size: 20px;
  text-align: justify-all;
} 
button {
  width: 150px;  
  height: 30px;  
  border: none;  
  border-radius: 10px;  
  padding-left: 3px;  
  color:black; 
  background-color:white;
  opacity:7px;
  font-weight:bold;
  font-size:150%;
  display: inline;
}
.btn1
{
 margin-right : 10px;
}
.btn2
{
margin-left : 10px;
}
#uname{  
  width: 400x;  
  height: 40px;  
  border: none;  
  border-radius: 3px;
  padding-top:5px ;  
  padding-left: 8px;
  padding-right: 8px;
  font-size: large;  
}  
#myInput{  
  width: 400px;  
  height: 40px;  
  border: none;  
  border-radius: 3px;
  padding-top:5px ;    
  padding-left: 8px; 
  padding-right: 8px;
  font-size: large;
}  
.container{ 
font-family: sans-serif;
  background: dimgrey;  
      width: 385px;  
      top: 50%;
      left: 50%;
      overflow: hidden;  
      margin: auto;  
      margin: 20 0 0 450px; 
      padding: 25px;  
      background: dimgrey;  
      border-radius: 15px ; 
      position: absolute; 
      transform:translate(-50%,-50%);
}
h1{  
  text-align: center;  
  color:#000000;  
  padding:0.02px;  
}  
h2{  
  text-align: justify;  
  font-size: xx-large;
  color: yellow;  
  padding-top: 0.5px;
  padding-right: 30px;
  padding-bottom: 20px;
  padding-left: 30px;
} 
    </style>
    <!--link rel="stylesheet" href="user_login.css"-->     
</head>    
<body> 
<h1>Kongu Engineering College - Perundurai, Erode.</h1><br>
<form name="myform" onsubmit="return valid(this)" action="new1.php" method="post">
<div class="container">
<h2>Department of MCA</h2>
      <label><b>Username</b></label><br>  
      <input type="text" name="username" id="uname" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
      placeholder="Username" required><br> 
      <!--script>  
        function validate()  
        {  
           var x=document.myform.username.value;  
           var atposition=x.indexOf("@");  
           var dotposition=x.lastIndexOf(".");  
           if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
              alert("Please enter a valid e-mail address");  
              return false;  
           }  
        }  
</script-->   
        <label><b>Password</b></label> <br>   
        <input type="password" name="password" id="myInput" placeholder="Password" 
        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required><br>
        <input type="checkbox" onclick="mycheckbox()">Show Password
        <script>
           function mycheckbox() 
           {
              var x = document.getElementById("myInput");
              if (x.type === "password") 
              {
                 x.type = "text";
              } 
              else 
              {
                 x.type = "password";
              }
           }
</script>
<br><br>
        <br><br> 
<!--script>  
function validateform()
{  
var name=document.myform.username.value;  
var password=document.myform.password.value;  
  
if (name==null || password==""){  
  alert("Name can't be blank");  
  return false;  
}else if(password.length<15){  
  alert("Password must be 15 characters long.");  
  return false;  
  }  
}  
</script-->   
<script>
           function valid(form)
           {
            
               alert("Login successfully");
               return false;
            } 
            else {
                //alert("Password Match. Congratulations!");
                return true;
            }
            
        </script>
        <button class="btn1" type="submit" name="submit1" onclick="reg_open()">Register</button>
        <script>
          function reg_open()
          {
             window.location = "http://localhost/myproject/register1.php";
          }
        </script>
        <button class="btn2" type="submit" name="submit">Login</button>
      
</form>     
</div>
</body>
</html>  

