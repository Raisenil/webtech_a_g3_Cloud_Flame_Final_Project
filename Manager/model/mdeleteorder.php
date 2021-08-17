<?php
require_once('db.php');

    $id=$_REQUEST['id'];

    $conn=getConnection();
    $sql="delete from tbl_order where id={$id}";
    $res=mysqli_query($conn,$sql);

    if($res==true){
        header('location: ../view/mvieworder.php');
    }else{
        echo "error deleting catagories";
    }
?>