<!DOCTYPE html>
<head>
    <title>Admin Events</title>
    <link rel="stylesheet" href="admin_style.css">
</head>
<body>
<div class="navbar">
   <div class="dropdown">
      <button class="dropbtn" onclick="sure()"><b>Logout</b></button>
     
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
  <script>
        function sure()
        {
            alert("Are you sure, You want to logout?");
            window.location = "http://localhost/myproject/user_login.php";
        }
    </script>
</div>
</body>
</html>