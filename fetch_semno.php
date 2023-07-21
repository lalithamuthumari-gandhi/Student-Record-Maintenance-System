<?php 
    $query ="SELECT distinct sem_no FROM subjects";
    $result = $conn->query($query);
    //$result = mysqli_query($conn, $sql);
    if($result->num_rows> 0)
    {
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>