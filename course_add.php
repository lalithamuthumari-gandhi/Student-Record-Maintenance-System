<?php

include("admin.php");

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
/*button {
  width: 150px;  
  height: 40px;  
  border: none;    
  color:white; 
 
  margin-right: 150px;
  margin-left: 450px;
  background-color:black;
  
  font-weight:bold;
  font-size:150%;
  
  font-size: 16px;
}
/*#myInput {
    height: 20px;  
    border: none;  
    padding: 13px 20px 13px 40px; 
    border: 1px solid blue;    
    padding-left: 60px; 
    padding-right: 80px;
    margin-bottom: 50px;
    /*margin-left: auto;
    display: block;
    margin: 0 auto;
    width:0px;
    font-size: 15px;
    font-weight:bold;
    color:red;
}*/
input[type=text],button {
  display:inline-block;
  width: 190px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  color:bold red;
  background-color: white;
  margin-right: 250px;
  
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding:8px; /*12px 20px 12px 40px;*/
  vertical-align: middle;
  margin: 10px 50px;

  margin-top: 10px;
  margin-bottom: 8px;
  margin-right: 50px;
  margin-left: 80px;
  
  /*transition: width 0.4s ease-in-out;*/
}
input[type=text]:focus {
  width: 250px;
  box-sizing:border-box;
   border:2px solid blue;
}
#btn{
      background-color:black;
      color:white;
      font-size:20px;
      font-weight:bold;
}
button:hover
  {
    background-color:green;
    color:white;
  }
.icon-home.fa {
    margin: 0 5px 0 0;
}
i{
    margin: 0 auto;
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
    <br></br>
    <section>
        <h1>MCA COURSES</h1><br></br>
        <div class="search">
        <!--i class="fa fa-search" aria-hidden="true"></i-->
        <button type="submit" name="subbtn1" id="btn" class="btn1" onclick="add()"
         value="submit"><i class="fa fa-plus-square" aria-hidden="true"></i>Add</button>

        <!--button type="submit" name="subbtn2" id="btn" class="btn1" onclick="update()"
        value="submit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Update</button>

        <button type="submit" name="subbtn3" id="btn" class="btn1" onclick="del()"
        value="submit"><i class="fa fa-trash" aria-hidden="true"></i>Delete</button-->

        <input type="text" id="myInput" onkeyup="myFunction()" 
            placeholder="search sem_num" title="Type in number">
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

    <script>
      function add()
      {
          window.location = "http://localhost/myproject/course_insert.php";
      }
</script>

<script>
      function update()
      {
        window.location = "http://localhost/myproject/course_update.php";
      }
    </script>

<script>
      function del()
      {
        window.location = "http://localhost/myproject/course_delete.php";
      }
    </script>

    </section>   
</body> 
</html>