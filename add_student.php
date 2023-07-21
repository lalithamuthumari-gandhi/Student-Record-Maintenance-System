<?php
include("admin.php");
?>
<!DOCTYPE html>
<html>
<head>
 <title>Form</title>
 <style type="text/css">
.form-fill {
  background: #fff;
  box-sizing: border-box;
  box-shadow: 1px 2px 6px rgba(0, 0, 0, 0.4);
  font-family: sans-serif;
  margin: 60px auto;
  padding: 5px;
  width: 300px;
  height: 450px;
  border:2px solid DodgerBlue;
  background-color:white;
}
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}
  table,td 
  {
    border: 0px solid black; 
    border-collapse: collapse;
    padding: 5px;
  }
  td {
    padding: 10px;
}
  input.in,textarea,select
  {
   padding: 5px; /* 10px*/
   border-width: 2px; 
   border-color: #00ccff;
   border-radius: 2px; 
   border-style: solid;
   color:black;
   font-size:20px;
   width:300px;
  }
  #ccode{
     width:50px;
  }
  #phno{
    width:300px;
  }
  #photo{
   width:150px;
   height:150px;
   border-width: 2px; 
   border-color: #00ccff;
   border-radius: 2px; 
   border-style: solid;
   color:black;
  }
  #myfile
  {
     padding:10px;
  }
  button {
  width: 150px;  
  height: 40px;  
  border: none;    
  color:white; 
  top:90%;
 
  background-color:black;
  /*opacity:7px;*/
  font-weight:bold;
  font-size:150%;
  display: inline;
  font-size: 16px;
}
.btn1
{
 margin-left: 5px;
 margin-right:200px;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
}
button:hover
  {
    background-color:green;
    color:white;
  }
#btn
{
  margin-right:60px;
}
label{
   font-weight:bold;
}
 </style>
</head>
<body>
<center>
<br></br><br></br>
<form class="registration-container" action="save_student.php" method="post">

 <table align="center">
  <div style="text-align:center;margin-top:40px;">
<tr>
    <td><label>Photo:</label></td>
    <td><input type="file" id="myfile" name="myfile" required></td>
</tr>
<!--td><button type="submit" name="upload" id="btn">upload</button></td-->

<script>
  function photo()
  {
    var image=document.getElementById("image").value;
  }
</script>

<tr>
   <td><label>Student id</label>:</td>
    <td><input name="s_id" class="in" type="text" placeholder="student id"></input class="in"></td>
</tr>

<tr>
   <td><label>Roll number:</label></td>
   <td><input name="roll_no" class="in" type="text" placeholder="New roll number" required></input class="in"></td>
</tr>

  <tr>
   <td><label>First Name:</label></td>
   <td><input name="fname" class="in" type="text" placeholder="First Name" 
   pattern="[a-zA-Z]+" required></input class="in"></td>
  </tr>

  <tr>
  <td><label>Middle Name:</label></td>
  <td><input name="mname" class="in" type="text" placeholder="Middle Name" 
    pattern="[a-zA-Z]+"></input class="in"></td>
</tr>

<tr>
  <td><label>Last Name:</label></td>
  <td><input name="lname" class="in" type="text" placeholder="Last Name" 
    pattern="[a-zA-Z]+" required></input class="in"></td>
  </tr>

  <tr>
   <td><label>Gender:</label></td>
    <td><select name="dropdown1" required>
     <option value="Male" selected>Male</option>
     <option value="Female">Female</option>
    </select>
   </td>
</tr>

<tr>
   <td><label>Age:</label></td>
   <td><input name="age" class="in" type="text" placeholder="Age" required></input class="in"></td>
</tr>

  <tr>
   <td><label>Date of birth:</label></td>
   <td><input name="dob" class="in" type="date" placeholder="dd-mm-yyyy" required></input class="in"></td>
  </tr>

  <tr>
   <td><label>Blood group:</label></td>
   <td><input name="bgrp" class="in" type="text" placeholder="A,B,AB+,O" required></input class="in"></td>
  </tr>

  <tr>
   <td><label>Email:</label></td>
   <td><input name="email" class="in" type="text" placeholder="abc@example.com" 
   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required></input class="in"></td>
  </tr>

  <tr>
   <td><label>Mobile No.:</label></td>
   <td>
    <input name="s_mob" id="phno" class="in" type="tel" maxlength="10" placeholder="10 digit Number" 
    pattern="[0|1|2|3|4|5|6|7|8|9]{10}"></input class="in">
   </td>
  </tr>

  <tr>
   <td><label>Father's Name:</label></td>
   <td><input name="father_name" class="in" type="text" placeholder="Father's Name" 
   pattern="[a-zA-Z]+" required></input class="in"></td>
</tr>

<tr>
   <td><label>Mother's Name:</label></td>
   <td><input name="mother_name" class="in" type="text" placeholder="Mother's Name" 
   pattern="[a-zA-Z]+" required></input class="in"></td>
</tr>

<tr>
   <td><label>Occupation:</label></td>
   <td><input name="work" class="in" type="text" placeholder="Occupation" 
   pattern="[a-zA-Z]+" required></input class="in"></td>
</tr>

<tr>
   <td><label>Parents Mobile No.:</label></td>
   <td>
    <input name="p_mob" id="phno" class="in" type="tel" maxlength="10" placeholder="10 digit Number"
     pattern="[0|1|2|3|4|5|6|7|8|9]{10}"></input class="in"></td>
   </td>
  </tr>
  <tr>

   <td><label>Address:</label></td>
   <td><textarea name="address" rows="5" cols="45" pattern="[a-zA-Z\s]+"required></textarea></td>
  </tr>
  
  <tr>
   <td><label>City:</label></td>
   <td><input name="city" class="in" type="text" placeholder="City" pattern="[a-zA-Z]+" required></input class="in"></td>
  </tr>
  
  <tr>
   <td><label>District:</label></td>
   <td><input name="district" class="in" type="text" placeholder="District" pattern="[a-zA-Z]+" required></input class="in"></td>
  </tr> 

  <tr>
   <td><label>State:</label></td>
   <td><input name="state" class="in" type="text" pattern="[a-zA-Z\s]+"
   placeholder="State" required></input class="in"></td>
  </tr>

  <tr>
   <td><label>Country:</label></td>
   <td><input name="country" class="in" type="text" placeholder="Country"  pattern="[a-zA-Z\s]+" required></input class="in"></td>
  </tr>

  <tr>
   <td><label>Community:</label></td>
   <td>
    <select name="dropdown2" required>
     <option value="BC" selected>BC</option>
     <option value="MBC">MBC</option>
     <option value="OC" selected>OC</option>
    </select>
   </td>
  </tr>

  <tr>
   <td><label>SSLC Mark:</label></td>
   <td><input name="sslc_mark" class="in" type="text" placeholder="Mark" required></input class="in"></td>
  </tr>

  <tr>
   <td><label>School Name:</label></td>
   <td><input name="sslc_school" class="in" type="text" pattern="[a-zA-Z\s]+"
   placeholder="Sslc school" required></input class="in"></td>
  </tr>

  <tr>
   <td><label>SSLC Passed out(year):</label></td>
   <td><input name="sslc_pass" class="in" type="text" placeholder="Passed year" required></input class="in"></td>
  </tr>
  

  <tr>
   <td><label>HSC Mark:</label></td>
   <td><input name="hsc_mark" class="in" type="text" placeholder="Mark" required></input class="in"></td>
  </tr>

  <tr>
   <td><label>School Name:</label></td>
   <td><input name="hsc_school" class="in" type="text" pattern="[a-zA-Z\s]+"
   placeholder="Hsc school" required></input class="in"></td>
  </tr>

  <tr>
   <td><label>HSC Passed out(year):</label></td>
   <td><input name="hsc_pass" class="in" type="text" placeholder="Passed year" required></input class="in"></td>
  </tr>

  <tr>
   <td><label>UG Course:</label></td>
   <td><input name="ug_crs" class="in" type="text" placeholder="B.Sc(specilization) or BCA)" required></input class="in"></td>
  </tr>
  
  <tr>
   <td><label>HSC Passed out(year):</label></td>
   <td><input name="hsc_pass" class="in" type="text" placeholder="Passed year" required></input class="in"></td>
  </tr>

  <tr>
   <td><label>UG CGPA:</label></td>
   <td><input name="ug_cgpa" class="in" type="text" placeholder="College Name" required></input class="in"></td>
  </tr>

  <tr>
   <td><label>College Name:</label></td>
   <td><input name="ug_college" class="in" type="text" pattern="[a-zA-Z\s]+"
   placeholder="UG college" required></input class="in"></td>
  </tr>

  <tr>
   <td><label>University:</label></td>
   <td><input name="ug_univ" class="in" type="text" pattern="[a-zA-Z\s]+" 
   placeholder="Under university" required></input class="in"></td>
  </tr>
  
  <tr>
   <td><label>College Location:</label></td>
   <td><input name="ug_loc" class="in" type="text" pattern="[a-zA-Z\s]+"
  placeholder="UG college location" required></input class="in"></td>
  </tr>
  <tr>

  <tr>
   <td><label>UG Passed out(year):</label></td>
   <td><input name="ug_pass" class="in" type="text"
   placeholder="Passed year" required></input class="in"></td>
  </tr>

   <td colspan="2" align="center">
   <button type="submit" name="subbtn" class="btn1" onclick="new_page()">Submit</button></td>
   <script>
    function new_page()
    { 
      <?php
      header("location:admin.php");
      exit();
      ?>
    }
    </script>
  </tr>
  </div>
 </table>

</form>
</center>
</body>

</html>