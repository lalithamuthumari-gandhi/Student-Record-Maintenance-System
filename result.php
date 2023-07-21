<?php
include("student.php");
/*$conn = mysqli_connect("localhost", "root", "", "login");
$r_no=$_REQUEST['rno'];
$sql="SELECT *FROM subjects inner join grades on subjects.sub_no=grades.sub_no 
where subjects.sem_no=1 and roll_no='$r_no'";
$result = mysqli_query($conn, $sql);*/
?>

<!DOCTYPE html>
<head>
    <title>Student Events</title>
    <link rel="stylesheet" href="admin_style.css">
<style>
h1 {
  text-align: center;
}
body
{
    background:Powderblue;
    font-family:sans-serif;
}
#myInput {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  font-weight:bold;
  color:red;
  border: none;
  width:200px;
}
#myTable {
  border-collapse: collapse; 
  border: 1px solid #ddd; 
  font-size: 18px;
  margin-left: auto;
  margin-right: auto;
  background-color:white;
  color:white;
}
#myTable th{
  text-align: left; 
  padding: 5px; 
  color:black;
} 
#myTable td {
  text-align:left; 
  padding: 5px; 
  font-weight:bold;
  font-size:100%;
  color:black;
  margin:0;
}
#myTable tr {
  border-bottom: 0px solid PowderBlue;
}
#myTable tr.header, #myTable tr:hover {
  background-color: PowderBlue;
}
img{
      width:350px;
      height:250px;
}
.center {
  display: block;
  margin-left: 600px;
  margin-right: 600px;
  width: 20%;
}
table,td 
{
    border: 0px solid black; 
    border-collapse: collapse;
    padding: 20px;
}
td {
    padding: 10px;
}
button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background-color: #555;
  color: white;
  font-size: 17px;
  border: none;
}
.t1 {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  width:120px;
}

</style>
</head>
<body>
<form action="new_result.php" method="post">
<table algin="center" id="myTable">
  <tr>
      <br><h1>MCA DEPARTMENT</h1></br>
      <div class="search">
        <td><input type="text" name="rno" id="myInput"
        placeholder="Search roll number.." title="Type roll number"></td>
        <td><button type="submit" name="s_btn" onkeyup="sem()">search</button></td>
      </div>
  </tr>
</table><br></br>
</form>
<!--table id="myTable">
            <tr>
                <th>ROLL_NUM</th>
                <th>SEM_NUM</th>
                <th>SUB_CODE</th>
                <th>SUB_NAME</th>
                <th>CREDITS</th>
                <th>CAT-I</th>
                <th>CAT-II</th>
                <th>ESE</th>
                <th>GRADE</th>
            </tr>
/<script>
function sem()
{
    echo"kdlkjfkla";
    //<table align="center" id="myTable">
}
</script>

    <script>
        function sure()
        {
            alert("Are you sure, You want to logout?");
            window.location = "http://localhost/myproject/user_login.php";
        }
    </script-->
</body>
</html>
    