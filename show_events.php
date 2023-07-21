<?php
$conn = mysqli_connect("localhost", "root", "", "login");

$sql = " SELECT * FROM activity";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<head>
    <title>Course Details</title>
    <link rel="stylesheet" href="admin_style.css" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
img{
        width:200px;
        height:200px;
}
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
    width:0px;
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
   
   <div class="dropdown">
      <button class="dropbtn"><b>Exam Results</b></button>
        <div class="dropdown-content">
           <a href="result.php"><b>internals</b></a>
           <a href="result.php"><b>semesters</b></a>
        </div>
        <a onclick="sure()"><b>Logout</b></a>
        <a href="courses.php"><b>course details</b></a>    
   </div>
   
</div>
    <section>
        <h1>MCA COURSES</h1>
        <div class="search">
            <input type="text" id="myInput" onkeyup="myFunction()" 
            placeholder="sem_num" title="Type in number"><i class="fas fa-search"></i>
        </div>
        <br></br>
        <table id="myTable">
            <tr>
                <th>EVENT NAME</th>
                <th>EVENT PLACE</th>
                <th>EVENT DATE</th>
                <th>RESULT</th>
                <th>FILE</th>
                <th>ROLL NUMBER</th>
                <th>NAME</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                $extensions_arr = array("jpg","jpeg","png");
                //while($rows=$result->fetch_assoc())
                while($data = mysqli_fetch_assoc($result))
                {
                    ?>
                    <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $data['event_name'];?></td>
                <td><?php echo $data['event_place'];?></td>
                <td><?php echo $data['event_date'];?></td>
                <td><?php echo $data['result'];?></td>
                <!--?php
                
                while($data = mysqli_fetch_assoc($result))
                 {
                    ?-->
                <td><img src="./image/<?php echo $data['file']; ?>">
                </td>
                <td><?php echo $data['roll_no'];?></td>
                <td><?php echo $data['student_name'];?></td>
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