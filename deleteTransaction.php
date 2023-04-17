<?php
include("connection.php");
if(isset($_GET["deletedTra"])){
    $id = $_GET["deletedTra"];
    $query = "delete from transactions where id='$id'";
    try {
        mysqli_query($conn, $query);
    } catch(mysqli_sql_exception){
        echo "error has occured";
    }
}