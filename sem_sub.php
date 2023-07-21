<?php
include("database.php");
$val=$_GET["value"];
$val_M=mysqli_real_escape_string($conn,$val);

$sql="SELECT sub_name FROM subjects WHERE sem_no=1";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
    echo "<select>";
    while($rows=mysqli_fetch_assoc($result))
    {
        echo "<option>".$rows["D_Name"]."</option>";
    }
    echo "</select>";
}
else
{
    echo "<select> 
    <option>Select subject</option>
    </select>";
}
?>