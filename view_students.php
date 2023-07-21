<?php
include('admin.php');
?>

<!DOCTYPE html>
<head>
    <title>Admin Events</title>
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
  /*margin:0;*/
  margin-left: 50px;
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
/*.center {
  display: block;
  margin-left: 600px;
  margin-right: 600px;
  width: 20%;
}*/
table,td 
{
    border: 0px solid black; 
    border-collapse: collapse;
    padding: 20px;
    margin-left: 50px;
}
td {
    padding: 5px;
    margin-left: 50px;
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
.center {
  display: block;
  margin-left: 50px;
  /*margin-right: 100px;*/
  width: 50%;
}
</style>
</head>

<form action="#" method="post">
<body>
<table algin="center" id="myTable">
  <tr>
      <br><h1>MCA DEPARTMENT</h1></br>
      <div class="search">
        <td><input type="text" name="rno" id="myInput"
        placeholder="Search roll number.." title="Type roll number"></td>
        <td><button type="submit" name="s_btn" onkeyup="myFunction()">search</button></td>
      </div>
  </tr>
</table><br></br>
</form>

<script>
function myFunction()
{
  <?php
    include('admin.php');
      $conn = mysqli_connect("localhost", "root", "", "login");

      if(isset($_POST['s_btn']))
      {
        $r_no=$_REQUEST['rno'];
        $sql = "SELECT * FROM students where Roll_no='$r_no'";
        //$sql1=""
        $result = mysqli_query($conn, $sql);
      while($rows=$result->fetch_assoc())
      { 
        ?>
      <center>
      <table align="center" id="myTable">
        <tr>
          <td><?php echo "<p style='color:red;'>Student photo</p>";?>
          <img class="center" src="./image/<?php echo $rows['Photo']; ?>"></td>
          <td><?php echo "<p style='color:red;'>Roll number</p>",$rows['Roll_no'];?></td></tr>
      
          <tr><td><?php echo "<p style='color:red;'>FirstName</p>",$rows['FirstName'];?></td>
          <td><?php echo "<p style='color:red;'>MiddleName</p>",$rows['MiddleName'];?></td>
          <td><?php echo "<p style='color:red;'>LastName</p>",$rows['LastName'];?></td></tr>

          <tr><td><?php echo "<p style='color:red;'>Gender</p>",$rows['Gender'];?></td>
          <td><?php echo "<p style='color:red;'>Age :",$rows['Age'];?></td>
          <td><?php echo "<p style='color:red;'>DateOfBirth :",$rows['Dob'];?></td></tr>

          <tr><td><?php echo "<p style='color:red;'>Blood Group</p>",$rows['Blood_Group'];?></td>
          <td><?php echo "<p style='color:red;'>Email</p>",$rows['Email'];?></td>
          <td><?php echo "<p style='color:red;'>Mobile No</p>",$rows['Mobile_no'];?></td></tr>

          <tr><td><?php echo "<p style='color:red;'>Father name</p>",$rows['Father_Name'];?></td>
          <td><?php echo "<p style='color:red;'>Mother name</p>",$rows['Mother_Name'];?></td>
          <td><?php echo "<p style='color:red;'>Parent number</p>",$rows['Parent_no'];?></td></tr>

          <tr><td><?php echo "<p style='color:red;'>Address</p>",$rows['Address'];?></td>
          <td><?php echo "<p style='color:red;'>City</p>",$rows['City'];?></td>
          <td><?php echo "<p style='color:red;'>District</p>",$rows['District'];?></td></tr>

          <tr><td><?php echo "<p style='color:red;'>State</p>",$rows['State'];?></td>
          <td><?php echo "<p style='color:red;'>Country</p>",$rows['Country'];?></td>
          <td><?php echo "<p style='color:red;'>Community</p>",$rows['Community'];?></td></tr>

          <tr><td><?php echo "<p style='color:red;'>SSLC mark</p>",$rows['Sslc_mark'];?></td>
          <td><?php echo "<p style='color:red;'>SSLC school</p>",$rows['Sslc_school'];?></td>
          <td><?php echo "<p style='color:red;'>Pass year</p>",$rows['Pass_year1'];?></td></tr>

          <tr><td><?php echo "<p style='color:red;'>HSC mark</p>",$rows['Hsc_mark'];?></td>
          <td><?php echo "<p style='color:red;'>HSC school</p>",$rows['Hsc_school'];?></td>
          <td><?php echo "<p style='color:red;'>Pass year</p>",$rows['Pass_year2'];?></td></tr>

          <tr><td><?php echo "<p style='color:red;'>UG course</p>",$rows['Ug_course'];?></td>
          <td><?php echo "<p style='color:red;'>UG CGPA</p>",$rows['Ug_cgpa'];?></td>
          <td><?php echo "<p style='color:red;'>UG College</p>",$rows['Ug_college'];?></td></tr>

          <td><?php echo "<p style='color:red;'>UG University</p>",$rows['Ug_university'];?></td>
          <td><?php echo "<p style='color:red;'>UG location</p>",$rows['Ug_location'];?></td>
          <td><?php echo "<p style='color:red;'>pass year</p>",$rows['Ug_pass_year'];?></td></tr>
        </tr>
        <?php
      }
      mysqli_close($conn);
    }
      ?>
</table>
</center>
}
</script>

</section>
</body>
</html>