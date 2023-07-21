<?php
include("admin.php");
?>
<!DOCTYPE html>
<html>
  <style>
  h1{  
    text-align: center;  
    color:#000000;  
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
  margin-left: 230px;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
}
.btn2
{
margin-left : 680px;
top: 40%;
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
  margin: 60px auto;
  padding: 20px;
  width: 600px;
  height: 500px;
  border:2px solid DodgerBlue;
  background-color:white;
}
  .form-label {
    display: inline-block;
    font-size: 20px;
    font-weight:bold;
    margin: 0 10px 5px 0;
    text-align: left;
    width: 200px;
    top:50%;
    left:50%;
  }
  .field-row {
    width: 80%;
  }

  .center-button1 {
    font-weight:bold;
    font-size:20px;
    position: absolute;
    top: 74%;
    left: 40%;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    background:black;   /*linear-gradient(180deg, #808080, #2a2a2a);*/
    color: white;
    padding: 7px;
    font-size: 16px;
    width: 200px;
  }
  input[type=text]
  {
   width:200px;
   padding:10px 10px;
   margin:8px 0;
   display: inline-block;
   box-sizing:border-box;
   border:2px solid blue;
   font-size:15px;
  }
  #choose
  {
   width:200px;
   padding:10px 10px;
   margin:8px 0;
   display: inline-block;
   box-sizing:border-box;
   border:2px solid blue;
  }
  
    </style>
<body>
<br></br>
<h1>MARKS ENTRY</h1>
<!--button type="submit" name="viewbtn" onclick="viewall()" class="btn2" value="submit">View All</button-->
<script>
 function viewall() {
   window.open("cat_output.php");
  }  
 </script>

<form class="form-fill" action="save_mark_entry.php" method="post">
<div class="field-row">
<!--img style="float: right; margin: 30px 0px 15px 15px;" src="marks.jpg" width="250" height="320"/-->
  <br></br><label class="form-label">Roll number</label>
  <input type="text" id="roll" name="roll_no" class="field text-field email-field" 
  placeholder="Enter roll number" required>
</div>

<div class="field-row">
<label class="form-label">semester number</label>
<?php
include("database.php");
include("fetch_semno.php");
?>
<select name="sem_no" id="choose" onchange="getText(this)">
   <option>Select sem_no</option>
  <?php 
  foreach ($options as $option) {
  ?>
    <option><?php echo $option['sem_no']; ?> </option>
    <?php 
    }
   ?>
</select>

<!--script>
  function getText(element) 
  {
  var textHolder = element.options[element.selectedIndex].text
  document.getElementById("sem_num").value = textHolder;
  }
</script-->
<!--input type="hidden" name="sem_num" id="choose"-->
  <!--select id="choose" name="sem_no" class="field text-field email-field" required>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option></select-->
</div>

<div class="field-row">
<label class="form-label">Exam type</label>
<select id="choose" name="exam_type" onchange="getText(this)">
  <option value="CAT_1">CAT_1</option>
  <option value="CAT_2">CAT_2</option>
  <option value="sem">semester</option>
</select>

<!--script>
  function getText(element) 
  {
  var textHolder = element.options[element.selectedIndex].text
  document.getElementById("cat_num").value = textHolder;
  }
</script-->

<!--input type="hidden" name="cat_num" id="choose"-->

</div>

<div class="field-row" id="ch">
<label class="form-label">subject number</label>
<?php
include("database.php");
include("fetch_data.php");
?>
<select name="sub_no" id="choose" onchange="getText(this)">
   <option>Select Subject no</option>
  <?php 
  foreach ($options as $option) {
  ?>
    <option><?php echo $option['sub_no']; ?></option>
    <?php 
    }
   ?>
</select>

<!--script>
  function getText(element) 
  {
    let dropdownList=document.getElementById('choose');
    dropdownList.onchange=(ev)=>
    {
      console.log("Selected text: "+selectedOption.text);
    }
  }
</script-->
<!--input type="hidden" name="sub_num" id="choose"-->

<!--select id="choose" name="sub_name" >
  <option value="1">1</option>
</select-->
</div>

<div class="field-row">
<label class="form-label">Marks</label>
<input type="text" id="marks" name="marks" class="field text-field email-field" 
placeholder="Enter mark"><br></br>
</div>

<!--div class="field-row">
<label class="form-label">sem marks</label>
<input type="text" id="sem_mark" name="sem_marks" class="field text-field email-field" 
placeholder="Enter sem mark"><br></br>
</div-->

<div class="form-button">
<button type="submit" name="subbtn" class="btn1" value="submit">Submit</button>
<!--button type="submit" name="viewbtn" class="btn2" value="submit">View All</button-->
</div>

</form>
</body>
</html>
