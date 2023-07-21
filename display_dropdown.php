<?php
include("database.php");
include("fetch-data.php");
?>
<select name="sub_name">
   <option>Select Course</option>
  <?php 
  foreach ($options as $option) {
  ?>
    <option><?php echo $option['sub_name']; ?> </option>
    <?php 
    }
   ?>
</select>