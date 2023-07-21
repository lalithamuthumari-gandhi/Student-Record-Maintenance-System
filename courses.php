<?php

include("student.php");

$conn = mysqli_connect("localhost", "root", "", "login");

$sql = " SELECT * FROM subjects order by sem_no,sub_no";
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
input[type=text] {
  width: 300px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 20px;
  color:bold red;
  background-color: white;
  margin-right: 280px;
  margin-left: 700px;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  text-align:center;
  /*transition: width 0.4s ease-in-out;*/
}
/*input[type=text]:focus {
  width: 290px;;
}*/
i{
    margin: 0 auto;
}
#myTable {
  border-collapse: collapse;
  width: 90%; 
  border: 1px solid #ddd; 
  font-size: 18px; 
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
    <br></br>
    <section>
        <h1>MCA COURSES</h1><br></br>
        <div class="search">
        <!--i class="fa fa-search" aria-hidden="true"></i-->    
        <input type="text" id="myInput" onkeyup="myFunction()" 
            placeholder="semester number" title="Type in number">
        </div>
        <br></br>
        <table id="myTable">
            <tr>
                <th>SEM_NUM</th>
                <th>SUB_CODE</th>
                <th>SUB_NAME</th>
                <th>SUB_NUM</th>
                <th>MAX_CATS</th>
                <th>AVERAGE_CAT</th>
                <th>AVERAGE_ESE</th>
                <th>MAX_ESE</th>
                <th>CREDITS</th>
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
                <td><?php echo $rows['sub_no'];?></td>
                <td><?php echo $rows['max_cats'];?></td>
                <td><?php echo $rows['average_cat'];?></td>

                <td><?php echo $rows['average_ese'];?></td>
                <td><?php echo $rows['max_ese'];?></td>
                <td><?php echo $rows['credits'];?></td>
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