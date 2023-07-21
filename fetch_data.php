<?php 
    $query ="SELECT distinct sub_no FROM subjects order by sub_no";
    $result = $conn->query($query);
    //$result = mysqli_query($conn, $sql);
    if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>