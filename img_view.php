<?php
error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

	//echo "lalli"," ";
	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./image/" . $filename;

	//echo $filename,"  ",$tempname,"  ",$folder;
	$db = mysqli_connect("localhost", "root", "", "test");
	//echo "lalli hello";
	// Get all the submitted data from the form
	$sql = "INSERT INTO sam(photo) VALUES ('$filename')";

	// Execute query
	mysqli_query($db, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Image Upload</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<style>
	img{
          width:100px;
		  height 100px;
	}
	<!--link rel="stylesheet" type="text/css" href="style.css"-->
	</style>
</head>

<body>
	<div id="content">
		<form method="POST" action="" enctype="multipart/form-data">
			<div class="form-group">
				<input class="form-control" type="file" name="uploadfile" value="" />
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
			</div>
		</form>
	</div>

	<div id="display-image">
	<table id="myTable">
            <tr>
                <th>NAME</th>
                <th>certificate</th>
                <th>page_num</th>
                
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                $extensions_arr = array("jpg","jpeg","png","gif");
                while($rows=$result->fetch_assoc())
                {
					?>
					<tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['pswrd'];?></td>
                <td><?php echo $rows['photo'];?></td>
				</tr>
                
                <?php
                
                while($data = mysqli_fetch_assoc($result))
                 {
                    ?>
                    <td> <img src="./image/<?php echo $data['photo'];?>"
                    <?php
                 }
                 ?>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>
	</div>
</body>
</html>
