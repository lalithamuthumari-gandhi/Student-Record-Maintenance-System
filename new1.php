<?php
$conn = mysqli_connect("localhost", "root", "", "login"); 
    $sql = "SELECT * FROM users WHERE UserName='"
    . $_POST["username"] . "' AND
    Password='" . $_POST["password"] . "'";
    //echo $sql;
    $result = mysqli_query($conn, $sql);
    $storeArray = Array();
    $row = mysqli_fetch_array($result);
    $storeArray[] =  $row['Role'];  
    //print_r($storeArray);
    if($storeArray[0] == 'Admin') 
    {
        echo '<script>alert("Login successfully")</script>';
        header("location:admin.php");
        exit();
    }
    else if($storeArray[0] == 'Staff')
    {
        header("location:staff_page.php");
        exit();
    }
    else if(is_null($storeArray[0]) ==0 )
    {
        header("location:student.php");
    }
    else 
    {
        echo '<script>alert("Invalid username/password")</script>';
        header("location:user_login.php");
        /*?>
        <hr>
        <font color="red"><b>
                <h3>Sorry Invalid Username and Password<br>
                    Please Enter Correct Credentials</br></h3>
            </b>
        </font>
        <hr>
         
        <?php*/
    }
    
?>