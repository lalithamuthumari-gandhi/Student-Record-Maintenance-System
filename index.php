<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title> 
      
</head>    
<body>    
    <form action="user_login.php" method="post">    
        <label><b>User Name</b></label><br><br> 

        <input type="text" name="uname" id="uname" placeholder="Username"><br><br>  

        <label><b>Password</b></label><br><br>    

        <input type="password" name="pass" id="myInput" placeholder="Password"><!-- /*pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"*/ title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br><br-->   
        <button>Login</button>
    </form>
</body>    
</html>     