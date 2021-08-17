<?php
require_once('db.php');

    $id=$_REQUEST['id'];

    $conn=getConnection();
    $sql="delete from tbl_book where id={$id}";
    $res=mysqli_query($conn,$sql);

    if($res==true){
        header('location: ../view/eviewbook-a-table.php');
    }else{
        echo "error deleting Table Book";
    }
?>