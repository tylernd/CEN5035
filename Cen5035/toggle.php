
   <?php
   include('config.php');
   $query = mysqli_query($link,"select * from In_Class ");

   //Fetch Data form database
    while($row = mysqli_fetch_array($query)){
        $data[] = $row;
        }

       echo json_encode( $data );
   ?>
