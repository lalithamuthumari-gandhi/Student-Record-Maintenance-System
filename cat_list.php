<?php
include("admin.php");
?>
<!DOCTYPE html>
<head>
    <title>CAT MARKS DETAILS</title>
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
<form action="cat_output.php" method="post">
    <section>
        <h1>MCA COURSES</h1>
        <div class="search">
            sem number<input type="text" name="sem_no" id="myInput" onkeyup="myFunction()" 
            placeholder="sem_num" title="Type in number"><i class="fas fa-search"></i>
            cat number<input type="text" name="cat_no" id="myInput" onkeyup="myFunction()" >
        </div>
        <br></br>
    </section>   
</form>
</body> 
</html>
