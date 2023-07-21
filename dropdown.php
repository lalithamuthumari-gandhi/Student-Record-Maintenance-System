<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="with=device-width,initial-scale=1.0">
   <!--link rel="stylesheet" href="admin_style.css"-->
<style>
*{
    margin:0;
    padding:0;
}
body
{
    background:white;
}
    .navbar {
    overflow: hidden;
    background-color: black;
    font-family: Arial;
  }
  .navbar{
    float: right;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  ul.list{
    color:white;
    background-color:black;
    display:inline-block;
    width:auto;
    list-style-type:none;
    float:right;
  }
  ul.list li{
    display:inline-block;
    padding:15px 40px;
    border-radius:5px; 
    background-color:#212121; 
    border-bottom:2px solid #0f0f0f;
  }
  ul.sub-menu{
    position:absolute;
    display:block;
    box-shadow:0 0 10px 0 #000;
    margin-left:-40px;
    margin-top:18px;
  }
  ul.sub-menu li{
    position:relative;
  }
  ul.super-sub{
    position:absolute;
    width:220px;
    left:152px;
    top:0px;
  }
  ul.super-menu li{
    box-shadow:0 0 10px 0 #000;
  }
</style>
</head>
<body>
<ul class="list"> 
  <li>student records
    <ul class="super-sub">
      <li>view records</li>
      <li>add student</li>
    </ul>
  </li>

  <li>Exam details
    <ul class="super-sub">
      <li>semester-I
        <ul class="super-sub">
          <li>CAT-I</li>
          <li>CAT-II</li>
        </ul>
      </li>
  </li>
  
      <li>semester-II
        <ul class="super-sub">
          <li>CAT-I</li>
          <li>CAT-II</li>
        </ul>
      </li>

      <li>semester-III
        <ul class="super-sub">
          <li>CAT-I</li>
          <li>CAT-II</li>
        </ul>
      </li>

      <li>semester-IV
        <ul class="super-sub">
          <li>CAT-I</li>
          <li>CAT-II</li>
        </ul>
      </li>

</ul>
</body>
</html>