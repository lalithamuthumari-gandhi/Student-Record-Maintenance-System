<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="marks_style.css">
<body>

<h1>SEMESTER MARKS ENTRY</h1>
<form class="form-fill" action="save_mark_entry.php" method="post">
<div class="field-row">
<!--img style="float: right; margin: 30px 0px 15px 15px;" src="marks.jpg" width="250" height="320"/-->
  <br></br><label class="form-label">Roll number</label>
<select id="choose" name="sem_no" placeholder="select roll number"required>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select>
  <!--input type="text" id="roll" name="r_no" class="field text-field email-field" placeholder="Enter roll number" required-->
</div>

<div class="field-row">
<label class="form-label">sem no</label>
  <select id="choose" name="sem_no" required>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option></select>
</div>

<div class="field-row">
<label class="form-label">sub name</label>
<select id="choose" name="sub_name" >
  <option value="1">1</option>
</select>
</div>

<div class="field-row">
<label class="form-label">sem marks</label>
<input type="text" id="cat_mark" name="cat_no" placeholder="Enter cat mark" required>
</div>

<div class="form-button">
<button type="submit" name="subbtn" class="center-button" value="submit">Submit</button>
</div>

</form>
</body>
</html>