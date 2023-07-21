<!DOCTYPE html>
<style>
  body
  {
    background-color:white;
  }
#myTable {
  border-collapse: collapse;
  width: 90%; 
  border: 2px solid black; 
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
  border: 1px solid black; 
  color:red;
}
#myTable tr {
  border-bottom: 1px solid #ddd;
}
h1
{
  text-align:center;
}
button {
  width: 150px;  
  height: 40px;  
  margin-top:50px;
  margin-left:700px;
  border: none;    
  color:white; 
  background-color:black;
  font-weight:bold;
  /*display: inline;*/
  font-size: 16px;
}
.btn2
{
  /* margin-left : 600px;
   margin-right: 700px;*/
}
button:hover
{
    background-color:green;
    color:white;
}
#data{
  text-align:center;
}
#label1
{
    font-weight:bold;
    color:red;
    font-size:20px;
    margin-top:30px;
    margin-left:1000px;
}
#label2
{
    font-weight:bold;
    color:black;
    margin-left:200px;
    
    margin-top:50px;
    font-size:20px;
    /*margin-right:60px;
    margin-left:1000px;*/
}
</style>

<body>
<table id="myTable">
            <tr><td><?php echo "&emp"?>Roll number : </td></tr>
            <tr><td>Programme   : </th></tr>
            <tr><td>Branch      : </th></tr>
            <?php
               
            ?>
            </table>
    <section>
    <table id="myTable">
            <tr>
                <th>SEM_NO</th>
                <th>SUB_CODE</th>
                <th>SUB_NAME</th>
                <th>CREDITS</th>
                <th>CAT-I</th>
                <th>CAT-II</th>
                <th>ESE</th>
                <th>AVG POINTS</th>
                <th>GRADE</th>
            </tr>
<?php
//include('student.php');
$conn = mysqli_connect("localhost", "root", "", "login");

if(isset($_POST['s_btn']))
{
    $r_no=$_REQUEST['rno'];
    //echo $r_no;
    echo "<p style='color:black;font-weight:bold;font-size:20px;text-align:center;'>
    Roll Number :",$r_no,"&emsp;Programme : MCA&emsp;Branch : Computer Applications";


    
    $sql="SELECT * FROM subjects inner join grades on subjects.sub_no=grades.sub_no 
    where roll_no='$r_no' and subjects.sem_no=grades.sem_no";

    //echo $sql;
    $result = mysqli_query($conn, $sql);

    $ar[]=Array();
    $cr[]=Array();
    $i=0;
    $sem1Sum=0;
    $sem2Sum=0;
    $sem3Sum=0;
    $sem4Sum=0;
    $totalcredits=0;
    while($rows=$result->fetch_assoc())
    {
      $totalcredits=$totalcredits+$rows['credits'];
      if(strcmp($rows['sem_no'],1)==0)
      {
        $sem1Sum=$sem1Sum+bcmul($rows['credits'],$rows['total']/10);
      }
      else if(strcmp($rows['sem_no'],2)==0)
      {
        $sem2Sum=$sem2Sum+bcmul($rows['credits'],$rows['total']/10);
      }
      else if(strcmp($rows['sem_no'],3)==0)
      {
        $sem3Sum=$sem3Sum+bcmul($rows['credits'],$rows['total']/10);
      }
      else if(strcmp($rows['sem_no'],4)==0)
      {
        $sem4Sum=$sem4Sum+bcmul($rows['credits'],$rows['total']/10);
      }
      //$ar[$i]=;
      //$i=$i+1;
        ?>
        
                <tr>
                    <td><?php echo $rows['sem_no'];?></td>
                    <td><?php echo $rows['sub_code'];?></td>
                    <td><?php echo $rows['sub_name'];?></td>
                    <td><?php echo $rows['credits'];?></td>
                    <td><?php echo $rows['cat1_marks'];?></td>
                    <td><?php echo $rows['cat2_marks'];?></td>
                    <td><?php echo $rows['sem_marks'];?></td>
                    <td><?php echo $rows['total']/10;?></td>
                    <td><?php echo $rows['grade'];?></td>
                </tr>
      <?php
    } 
}
?>
</table>
</section>
<button class="btn2" onClick="window.print()">Print</button>
<!--label id=label1>Total credits : <?php echo $totalcredits;?>&emsp;</label-->
<label id="label2">CGPA :<?php echo ($sem1Sum+$sem2Sum+$sem3Sum+$sem4Sum)/$totalcredits;?></label>
 </body>
 </html>