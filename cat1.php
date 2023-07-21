<?php
$conn = mysqli_connect("localhost", "root", "", "login");

// SQL query to select data from database
$sql = " SELECT subjects.sem_no,subjects.sub_code,subjects.sub_name,subjects.max_cat,grades.cat1_marks FROM grades left join subjects on
grades.sub_no=subjects.sub_no WHERE grades.sem_no=1 and subjects.sem_no=1";

$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<head>
    <title>Course Details</title>
    <link rel="stylesheet" href="admin_style.css" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    height: 20px;  
    border: none;  
    padding: 13px 20px 13px 40px; 
    border: 1px solid blue;    
    padding-left: 60px; 
    padding-right: 80px;
    margin-bottom: 50px;
    /*margin-left: auto;*/
    display: block;
    margin: 0 auto;
    width:100px;
    font-size: 15px;
    font-weight:bold;
    color:red;
}

#myTable {
  border-collapse: collapse; /* Collapse borders */
  width: 90%; /* Full-width */
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
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: yellow;
}
</style>
</head>
<body>
<div class="navbar">
   <a onclick="sure()"><b>Logout</b></a>
   <div class="dropdown">
      <button class="dropbtn"><b>Exam Results</b></button>
        <div class="dropdown-content">
           <a href="result.php"><b>internals</b></a>
           <a href="result.php"><b>semesters</b></a>
        </div>
   </div>
  <a href="cat_list.php"><b>course details</b></a>     
</div>
    <section>
        <h1>MCA COURSES</h1>
        <div class="search">
            roll number<input type="text" id="myInput" onkeyup="myFunction()" 
            placeholder="sem_num" title="Type in number"><i class="fas fa-search"></i>
        </div>
        <br></br>
        <table id="myTable">
            <tr>
                <th>SEM NUM</th>
                <th>SUB CODE</th>
                <th>SUB NAME</th>
                <th>MAX CAT</th>
                <th>CAT1 MARK</th>
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
                <td><?php echo $rows['sem_no'];?></td>
                <td><?php echo $rows['sub_code'];?></td>
                <td><?php echo $rows['sub_name'];?></td>
                <td><?php echo $rows['max_cat'];?></td>
                <td><?php echo $rows['cat1_marks'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
        <script>
        function sure()
        {
            alert("Are you sure, You want to logout?");
            window.location = "http://localhost/myproject/user_login.php";
        }
    </script>
    <script>
     function myFunction() 
     {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
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
