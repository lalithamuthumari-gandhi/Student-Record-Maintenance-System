<!DOCTYPE html>    
<html>    
<head>    
    <title>Register Form</title> 
    <link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
<style>
body 
{
      background-image: url('./kec.jpg');
      background-size: cover;
}
input[type=text],input[type=password]
{
   width:350px;
   padding:12px 20px;
   margin:10px 0;
   display: inline-block;
   font-size:150px;
   box-sizing:border-box;
}
submit {
  width: 150px;  
    height: 30px;  
    border: none;  
    border-radius: 10px;  
    padding-left: 3px;  
    color: #FF0000; 
    opacity:5px;
    font-weight:bold;
    font-size:150%;
    display: inline;
}
.container{ 
        font-family: sans-serif;
        background: dimgrey;  
        width: 450px;  
        height:670px;
        top: 50%;
        left: 50%;
        overflow: hidden;  
        margin: auto;  
        margin: 20 0 0 450px; 
        padding: 25px;  
        border-radius: 20px ; 
        position: absolute; 
        transform:translate(-50%,-50%);
}
body  
{
  font-family: sans-serif;  
  background-image: url("./plain.jpg")center center cover no-repeat fixed;
  background-repeat: no-repeat;
  width:100%;
  height:70%; 
}  
*
{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
h2{  
    text-align: center;  
    font-size: xx-large;
    color: yellow;  
    padding-top: 0.50px;
    padding-right: 30px;
    padding-bottom: 40px;
    padding-left: 15px;
}  
/*.register{  
        width: 550px;  
        top: 50%;
        left: 50%;
        overflow: hidden;  
        padding: 110px;  
        background: dimgrey;  
        border-radius: 15px ; 
        position: absolute; 
        transform:translate(-50%,-50%);
} */ 
#roll,#fname,#midname,#lname,#uname,#pswrd,#cpswrd{  
    /*width: 300px;*/  
    height: 31px;  
    border: none;  
    border-radius: 3px;
    padding-top:10px ;  
    /*padding-left: 8px;
    padding-right: 8px;*/
    font-size: large;  
    outline:none;
    width: 80%;
}  
#roll,#fname,#midname,#lname,#uname,#pswrd,#cpswrd:focus
{
    border: 2px solid dodgerblue;
}
/*#fname{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;
    padding-top:5px ;  
    padding-left: 8px;
    padding-right: 8px;
    font-size: large;  
}  
#midname{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;
    padding-top:5px ;  
    padding-left: 8px;
    padding-right: 8px;
    font-size: large;  
}  
#lname{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;
    padding-top:5px ;  
    padding-left: 8px;
    padding-right: 8px;
    font-size: large;  
}  
#uname{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;
    padding-top:5px ;  
    padding-left: 8px;
    padding-right: 8px;
    font-size: large;  
}  
#pswrd{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;
    padding-top:5px ;    
    padding-left: 8px; 
    padding-right: 8px;
    font-size: large;
}  
#cpswrd{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;
    padding-top:5px ;    
    padding-left: 8px; 
    padding-right: 8px;
    font-size: large;
} */ 
#submit{  
    width: 150px;  
    height: 40px;  
    border: none;  
    border-radius: 10px;  
    padding-left: 7px;  
    color: #FF0000; 
    opacity:10px;
    font-weight:bold;
    font-size:150%;
    position: absolute;
    top: 90%;
    left: 45%;
    -ms-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
} 
.icon {
  margin:auto;
  padding: 10px;
  background:dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}
</style>
    <title><b>Register</b></title>
    <!--link rel="stylesheet" href="register.css"-->
</head>
<body>
   <div class="container">   
     <h2><b>Registration Form</b></h2> 
     <form onSubmit="return valid(this)" action="reg_log.php" method="post"> 
     <i class="fa fa-pencil icon" aria-hidden="true"></i><input type="text" name="rno" id="roll" placeholder="RollNo" required>    
        <br></br>   
     <i class="fa fa-black-tie icon" class="icon"></i><input type="text" name="fname" id="fname" placeholder="FirstName" required>    
        <br></br>
     <i class="fa fa-black-tie icon" aria-hidden="true"></i><input type="text" name="mname" id="midname" placeholder="MiddleName"> 
        <br></br>
     <i class="fa fa-black-tie icon" aria-hidden="true"></i><input type="text" name="lname" id="lname" placeholder="LastName" required> 
        <br></br>
     <i class="fa fa-user-circle-o icon" aria-hidden="true"></i><input type="text" name="uname" id="uname" placeholder="UserName" required> 
        <br></br>        
     <i class="fa fa-lock icon" aria-hidden="true"></i><input type="password" name="pswrd" id="pswrd" placeholder="Password" 
        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" onclick="valid()"required> 
        <br></br>
    <i class="fa fa-lock icon" aria-hidden="true"></i><input type="password" name="cpswrd" id="cpswrd" placeholder="Confirm Password" 
        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" onclick="valid()"required> 
        <script>
           function valid(form)
           {
            const password = form.pswrd.value;
            const confirmPassword = form.cpswrd.value;
            if (password != confirmPassword) {
               alert("Error! Invalid password!Try again");
               return false;
            } 
            else {
                //alert("Password Match. Congratulations!");
                return true;
            }
            }
        </script>
        <br></br>
        <button type="submit" name="regbtn" id="submit" value="submit">Register</button>
      </form>
   </div>
</body>
</html>