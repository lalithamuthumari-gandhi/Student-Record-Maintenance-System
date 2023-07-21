<!--?php
$conn = mysqli_connect("localhost", "root", "", "login");

$sem_no=$_REQUEST['sem_no'];
$cat_no=$_REQUEST['cat_no'];
if($cat_no == 1)
{
    $cat_no_marks = "grades.cat1_marks";
}
else if($cat_no == 2)
{
    $cat_no_marks = "grades.cat2_marks";
}
// SQL query to select data from database
$sql = "SELECT grades.roll_no, GROUP_CONCAT(grades.sub_no order by grades.sub_no asc) as \"sub\",
 GROUP_CONCAT($cat_no_marks order by grades.sub_no asc) as \"marks\" FROM grades WHERE grades.sem_no='$sem_no'
group by grades.roll_no";

$sql1 = "SELECT * from subjects where subjects.sem_no='$sem_no' order by sub_no" ;

$result = mysqli_query($conn, $sql);
$sub_names = mysqli_query($conn, $sql1);
$i=0;
while($row = $sub_names->fetch_assoc()) 
{
    $sub_name[$i]=$row["sub_name"];
    $i=$i+1;
}
if ($result->num_rows > 0) 
{
    echo "<table>","<tr>",
    "<th>","Roll Number","</th>";
    
    
    for($j=0;$j<$i;$j++)
    {
        echo "<th>",$sub_name[$j],"</th>";
    }
    echo "</tr>";

    while($row = $result->fetch_assoc()) 
    {
        echo "<tr>";
        $r_no=$row["roll_no"];
       
        $str_arr1 = preg_split("/\,/", $row["sub"]);
        $str_arr2 = preg_split("/\,/", $row["marks"]); 
        echo "<td>",$r_no,"</td>";
       foreach($str_arr2 as $value)
       {
        echo "<td>",$value,"</td>";
       }
       echo "</tr>";
    }
    echo "</table>";
} 
else 
{
    echo "No records has been found";
}
?-->
<?php
include("admin.php");
?>
<!DOCTYPE html>

<style>
    h1 {
  text-align: center;
}
#l2{
    padding: 13px 20px 13px 40px;
    height: 50px; 
    margin-left:500px;
    margin-bottom:100px;
}
#l1{
    padding: 20px 30px 20px 30px;
    height: 50px; 
    margin-left:500px;
    margin-bottom:100px;
}
body
{
    background:Powderblue;
    font-family:sans-serif;
}
#myInput {
    height: 30px;  
    border: none;  
    padding: 13px 20px 13px 40px; 
    border: 1px solid blue;    
    padding-left: 60px; 
    padding-right: 80px;
    margin-bottom: 10px;
    /*margin-left: auto;*/
    display: block;
    margin: 0 auto;
    width:200px;
    font-size: 15px;
    font-weight:bold;
    color:red;
}

    </style>
<body>
<form action="#" method="post">
    <section>
        <br></br>
        <h1>CAT RESULTS</h1>
        <div class="search">
            <label id="l1">sem number</label><input type="text" name="sem_no" id="myInput" onkeyup="myFunction()" 
            placeholder="sem_num" title="Type in number"><i class="fas fa-search"></i>
            <label id="l2">cat number</label><input type="text" name="cat_no" id="myInput" onkeyup="myFunction()" >
        </div>
        <!--script>
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
    </script-->
        <br></br>
    </section>   
</form>
</body> 
</html>