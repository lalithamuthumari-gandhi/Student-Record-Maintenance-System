<?php
include('admin.php');
$conn = mysqli_connect("localhost", "root", "", "login");
if(isset($_POST['subbtn']))
{
    $sem_no=$_REQUEST['sem_no'];
    $sub_code=$_REQUEST['sub_code'];
    $sub_name=$_REQUEST['sub_name'];
    $sub_no=$_REQUEST['sub_no'];
    $max_cat=$_REQUEST['max_cats'];

    $avg_cat=$_REQUEST['average_cat'];
    $avg_ese=$_REQUEST['avg_ese'];

    $max_ese=$_REQUEST['max_ese'];
    $credits=$_REQUEST['credits'];

    //echo $sem_no," ",$sub_code;
    
$sql = "INSERT INTO subjects(sem_no,sub_code,sub_name,sub_no,max_cats,average_cat,average_ese,max_ese,credits)
VALUES('$sem_no','$sub_code','$sub_name','$sub_no','$max_cats','$avg_cat','$avg_ese','$max_ese','$credits')";

if(mysqli_query($conn, $sql))
{
    echo '<script>alert("Course is added successfully")</script>';
}
else
{
    echo '<script>alert("Complete your form")</script>';
} 
}
?>

<!DOCTYPE html>
<html>
  <head>
    <!--link rel="stylesheet" href="marks_style.css"-->
  <style>
  h3{  
    text-align: center;  
    color:red;  
  }  
  button {
  width: 150px;  
  height: 40px;  
  border: none;    
  color:white; 
  top:60%;
 
  background-color:black;
  font-weight:bold;
  font-size:150%;
  display: inline;
  font-size: 16px;
}
.btn1
{
  margin-left: 100px;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
}
.btn2
{
   margin-left : 320px;
}
  button:hover
  {
    background-color:green;
    color:white;
  }
  .form-fill {
  background: #fff;
  box-sizing: border-box;
  box-shadow: 1px 2px 6px rgba(0, 0, 0, 0.4);
  font-family: sans-serif;
  margin: 10px auto;
  padding: 10px;
  width: 830px;
  height: 780px;
  border:2px solid DodgerBlue;
  background-color:white;
}
  .form-label {
    display: inline-block;
    font-size: 15px;
    font-weight:bold;
    margin: 0 30px 25px 0;
    text-align: left;
    width: 200px;
    padding:1px;
    top:50%;
    left:50%;
  }
  .field-row {
    width: 50%;
  }

  .center-button1 {
    font-weight:bold;
    font-size:20px;
    position: absolute;
    top: 74%;
    left: 40%;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    background:black;   
    color: white;
    padding: 7px;
    font-size: 16px;
    width: 200px;
  }
  input[type=text],#choose,#date
  {
   width:400px;
   padding:10px 10px;
   margin:8px 0;
   display: inline-block;
   box-sizing:border-box;
   border:2px solid blue;
   font-size:20px;
   font-weight:bold;
   color:red;
  }
  table,td,#small{
         width:50px;
         margin-left:500px;
         margin-right:600px;
  }
      </style>
  </head>
<body>

<form class="form-fill" action="#" method="post">
<h3>NEW COURSE</h3><br></br>

<div>
  <label class="form-label">Sem number</label>
  <input type="text" id="roll" name="sem_no" placeholder="Enter sem number" required><br>
</div>

<div>
  <label class="form-label">Subject code</label> 
  <input type="text" id="name" name="sub_code" placeholder="Enter sub code" required><br>
</div>

<div>
  <label class="form-label">Subject name</label>    
  <input type="text" id="input" name="sub_name" placeholder="Enter sub name" required><br>
</div>

<div>
  <label class="form-label">Subject number</label>
  <input type="text" name="sub_no" placeholder="Enter sub number" required><br>
</div>

<div>
  <label class="form-label">maximum mark of CAT</label>
  <input type="text" name="max_cat" id="" placeholder="Enter maximum of CAT" required><br>
</div>


<div>
  <label class="form-label">average mark of CAT</label>
  <input type="text" name="avg_cat" id="" placeholder="Enter average of CAT" required><br>
</div>


<div>
  <label class="form-label">average mark of ESE</label>
  <input type="text" name="avg_ese" id="" placeholder="Enter average of ESE" required><br>
</div>


<div>
  <label class="form-label">maximum mark of ESE</label>
  <input type="text" name="max_ese" id="" placeholder="Enter maximum of ESE" required><br></br>
</div>

<div>
  <label class="form-label">Credits</label>
  <input type="text" name="credits" id="" placeholder="Enter event date" required><br></br>
</div>

<div>
  <button type="submit" class="btn2" name="subbtn" id="submit" value="submit">Submit</button>
</div>

</form>
</body>
</html>