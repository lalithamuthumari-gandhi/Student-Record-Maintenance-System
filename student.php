<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="with=device-width,initial-scale=1.0">
   <!--link rel="stylesheet"  href="youtube_style.css"-->
   <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
   :root {
  --color-primary: #0073ff;
  --color-white: #e9e9e9;
  --color-black: #141d28;
  --color-black-1: #212b38;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: sans-serif;
 
}

.logo {
  color: var(--color-white);
  font-size: 30px;
}

.logo span {
  color: var(--color-primary);
}

.menu-bar {
  background-color: var(--color-black);
  height: 80px;
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 5%;
  position: relative;
}

.menu-bar ul {
  list-style: none;
  display: flex;
}

.menu-bar ul li {
  padding: 10px 30px;
  position: relative;
}

.menu-bar ul li a {
  font-size: 20px;
  color: var(--color-white);
  text-decoration: none;
  transition: all 0.3s;
  float:left;
}

.menu-bar ul li a:hover {
  color:darkorange;
}
.fas {
  
  margin-left: 10px;
  padding-top: 3px;
}
.dropdown-menu {
  display: none;
}

.menu-bar ul li:hover .dropdown-menu {
  display: block;
  position: absolute;
  left: 0;
  top: 100%;
  background-color: var(--color-black);
}

.menu-bar ul li:hover .dropdown-menu ul {
  display: block;
  margin: 10px;
}

.menu-bar ul li:hover .dropdown-menu ul li {
  width: 150px;
  padding: 10px;
}

.dropdown-menu-1 {
  display: none;
}

.dropdown-menu ul li:hover .dropdown-menu-1 {
  display: block;
  position: absolute;
  left: 150px;
  top: 0;
  background-color: var(--color-black);
}

.hero {
  height: calc(100vh - 80px);
  background-image: url(./bg.jpg);
  background-position: center;
}
</style>

<body>
<div class="menu-bar">
<h1 class="logo">STUDENT<span>HOME</span></h1>
    <ul>
        <!--li><a href="home.php"><i class="fa fa-home"></i><b>Home</b></a></li-->
      <li><a href="courses.php"><i class="fa fa-newspaper-o" aria-hidden="true"></i></i><b>Course details</b></a></li>
      <li><a href="result.php"><i class="fa fa-book" aria-hidden="true"></i></i><b>Exam results</b></a></li>
      <!--li><a href="#"><i class="fa fa-folder-open" aria-hidden="true"></i><b>Exam schedule</b></i></a></li-->
      <li><a href="activity.php"><i class="fa fa-sign-out" aria-hidden="true"></i><b>Activity</b></a></li>
        <!--li><a href="#"><i class="fa fa-folder-open" aria-hidden="true"></i><b>Faculty</b></i></a></li>
        <li><a href="#"><i class="fa fa-folder-open" aria-hidden="true"></i><b>Gallery</b></i></a></li-->
      <li><a onclick="sure()"><i class="fa fa-sign-out" aria-hidden="true"></i><b>Logout</b></a></li>
    </ul>
</div>
    
</body>
</html>
<script>
        function sure()
        {
            alert("Are you sure, You want to logout?");
            window.location = "http://localhost/myproject/user_login.php";
        }
    </script>






