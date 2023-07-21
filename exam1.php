<?php
$conn = mysqli_connect("localhost", "root", "", "login");

// SQL query to select data from database
$sql = " SELECT * FROM grades";
$result = mysqli_query($conn, $sql);
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<head>
    <title>Admin Events</title>
    <link rel="stylesheet" href="admin_style.css">
    <!-- CSS FOR STYLING THE PAGE -->
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
  /*background-image: url('/css/searchicon.png'); 
  background-position: 15px 17px; 
  background-repeat: no-repeat; */
  
    width: 100%; 
    height: 20px;  
    border: none;  
    padding: 12px 20px 12px 40px; 
    border: 1px solid blue;    
    padding-left: 100px; 
    padding-right: 80px;
    margin-bottom: 50px;
    margin-left: auto;
    display: block;
    margin: 0 auto;
    width:400px;
    font-size: 150%;
    font-weight:bold;
    color:red;
}

#myTable {
  border-collapse: collapse; /* Collapse borders */
  width: 70%; /* Full-width */
  border: 1px solid #ddd; /* Add a grey border */
  font-size: 18px; /* Increase font-size */
  margin-left: auto;
  margin-right: auto;
  background-color:white;
  color:white;
}
#myTable th{
  text-align: left; 
  padding: 12px; 
  color:black;
} 
#myTable td {
  text-align: left; 
  padding: 12px; 
  font-weight:bold;
  font-size:100%;
  color:red;
}
#myTable tr {
  /* Add a bottom border to all table rows */
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  /* Add a grey background color to the table header and on hover */
  background-color: yellow;
}
</style>
</head>
<body>
<div class="navbar">
   <a onclick="sure()"><b>Logout</b></a>
   <div class="dropdown">
      <button class="dropbtn"><b>view details</b></button>
        <div class="dropdown-content">
           <a href="view_table.php"><b>student records</b></a>
           <a href="add_student.php"><b>Add students</b></a>
        </div>
   </div>
  <div class="dropdown">
      <button class="dropbtn"><b>Exam details</b></button>
      <div class="dropdown-content">
         <a href="exam1.php"><b>sem 1</b></a>
         <a href="#"><b>sem 2</b></a>
         <a href="#"><b>sem 3</b></a>
         <a href="#"><b>sem 4</b></a>
         <a href="exam1.php"><b>Internal 1</b></a>
         <a href="exam2.php"><b>Internal 2</b></a>
         <a href="final.php"><b>Final exam</b></a>
         
      </div>
  </div>
</div>
    <script>
        function sure()
        {
            alert("Are you sure, You want to logout?");
            window.location = "http://localhost/myproject/user_login.php";
        }
    </script>
<section>
        <h1>MCA DEPARTMENT</h1>
        <div class="search">
        <input type="text" id="myInput" onkeyup="myFunction()" 
            placeholder="Search for names.." title="Type in a name">
        </div>
        <br></br>
        <!-- TABLE CONSTRUCTION -->
        <table id="myTable">
            <tr>
                <th>ROLL NUMBER</th>
                <th>SEM_NUM</th>
                <th>SUB_NO</th>
                <th>CAT1_MARK</th>
                <th>CAT2_MARK</th>
                <th>SEM_MARK</th>
                <th>GRADE</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['roll_no'];?></td>
                <td><?php echo $rows['sem_no'];?></td>
                <td><?php echo $rows['sub_no'];?></td>
                <td><?php echo $rows['cat1_marks'];?></td>
                <td><?php echo $rows['cat2_marks'];?></td>
                <td><?php echo $rows['sem_marks'];?></td>
                <td><?php echo $rows['grade'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      /*document.write(td.txtContent," hi<br>");
      document.write(td.innerText," hello<br>");
      document.write(txtValue," 123<br>");*/
      if (txtValue.toUpperCase().indexOf(filter) > -1)
      {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
    </section>
</body>
</html>


