<?php
echo '<html><head><script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script></head></html>';

?>

<?php
include '../../connection.php';
?>

<?php

if (isset($_GET['facid'])) {
    
    $depid=$_GET['facid'];
    
    $query="delete from faculty where faculty_code='$depid'";
    $sbquery= mysqli_query($con, $query);
    
    if ($sbquery) {
        echo"<script>swal('Faculty Information Message', 'Faculty Deleted Successfully ... !', 'success');</script>";
        echo "<script>document.location='view_faculties.php'</script>";
    }else{
        echo"<script>swal('Faculty Information Message', 'Faculty Deleted Successfully ... !', 'success');</script>";
    }
    
}else{
    echo"<script>swal('Faculty Information Message', 'Faculty Deleted Successfully ... !', 'success');</script>";
}

?>