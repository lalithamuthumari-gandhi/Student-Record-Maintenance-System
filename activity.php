<?php
include('student.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <!--link rel="stylesheet" href="marks_style.css"-->
  <style>
  h3{  
    text-align: center;  
    color:red; 
    font-size:25px;
  }  
  button {
  width: 150px;  
  height: 40px;  
  border: none;    
  color:white;
  background-color:black;
  font-weight:bold;
  display: inline;
  font-size: 20px;
}
.btn1
{
  margin-left: 100px;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
}
.btn2
{
   margin-top:0 auto;
   margin-left : 320px;
}
  button:hover
  {
    background-color:green;
    color:white;
  }
  .form-fill {
  background: #fff;
  box-sizing: border-box;
  box-shadow: 1px 2px 6px rgba(0, 0, 0, 0.4);
  font-family: sans-serif;
  margin: 10px auto;
  padding: 40px;
  width: 800px;
  height: 580px;
  border:2px solid DodgerBlue;
  background-color:white;
}
.form-label {
    display: inline-block;
    font-size: 20px;
    font-weight:bold;
    /*margin: 10 20px 10px 10;*/
    margin-left:55px;
    margin-right:25px;
    text-align:left;
    width: 200px;
    /*top:50%;
    left:50%;*/
  }
  .field-row {
    width: 80%;
  }
  input[type=text],#choose,#date
  {
   width:350px;
   padding:5px 5px;
   margin:8px 0;
   display: inline-block;
   box-sizing:border-box;
   border:2px solid blue;
   font-size:20px;
   font-weight:light;
   color:black;
  }
      </style>
  </head>
<body>
<br>
<h3>EXTRA CURRICULAR ACTIVITIES</h3><br>
<form class="form-fill" action="save_activity.php" method="post">
<div>
    <label class="form-label">student id</label>
    <input type="text" id="s_id" name="s_id" placeholder="Enter s_id" required>
  </div><br>

  <div>
    <label class="form-label">Roll number</label>
    <input type="text" id="roll" name="r_no" placeholder="Enter roll number" required>
  </div><br>

<div>
  <label class="form-label">Event name</label>    
  <input type="text" id="input" name="event" placeholder="Enter event name" required>
</div><br>

<div>
  <label class="form-label">Event place</label>
  <input type="text" name="place" placeholder="Enter event place" required>
</div><br>

  <div>
    <label class="form-label">Event date</label>
    <input type="date" name="date" id="date" placeholder="Enter event date" required>
  </div><br>

  <div>
    <label class="form-label">Result</label>    
    <select id="choose" name="result" placeholder="select price" required>
        <option value="select prize">select prize</option>
        <option value="1st prize">1st prize</option>
        <option value="2nd prize">2nd prize</option>
        <option value="3rd prize">3rd prize</option>
        <option value="participation">participation</option>
    </select>
   </div><br>

<div>
  <label class="form-label">Select a file</label>
  <input type="file" id="myfile" name="myfile" required>
</div><br>

<div>
  <button type="submit" class="btn2" name="subbtn" id="submit" value="submit">Submit</button>
</div>

</form>
</body>
</html>