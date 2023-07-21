<?php
include('admin.php');
$conn = mysqli_connect("localhost", "root", "", "login");

// SQL query to select data from database
$sql = " SELECT FirstName,Role FROM users where Role!='Admin' and Role!='Staff' order by Role";
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
  
    height: 50px;  
    border: none;  
    padding: 12px 20px 12px 40px; 
    border: 2px solid blue;    
    padding-left: 100px; 
    padding-right: 80px;
    margin-bottom: 50px;
    margin-left: auto;
    display: block;
    margin: 0 auto;
    width:400px;
    font-size: 20px;
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
        /*table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family:sans-serif;
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }*/
    </style>
</head>
<body>
    <section>

        <br><h1>MCA DEPARTMENT</h1></br>
        <div class="search">
          <br></br>
        <input type="text" id="myInput" onkeyup="myFunction()" 
            placeholder="Search roll number.." title="Type in a name">
        </div>
        <br></br>
        <!-- TABLE CONSTRUCTION -->
        <table id="myTable">
            <tr>
                <th>FIRSTNAME</th>
                <th>ROLL NUMBER</th>
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
                <td><?php echo $rows['Role'];?></td>
                <td><?php echo $rows['FirstName'];?></td>
                
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
    //document.write("i=",i,"value<br>");
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