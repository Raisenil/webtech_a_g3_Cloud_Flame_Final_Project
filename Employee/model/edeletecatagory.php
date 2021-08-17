<?php
require_once('db.php');

    $id=$_REQUEST['id'];
    $image_name=$_REQUEST['image_name'];

    $conn=getConnection();
    $sql="delete from tbl_category where id={$id}";
    $res=mysqli_query($conn,$sql);

    if($res==true){
        header('location: ../view/eviewcatagories.php');
    }else{
        echo "error deleting catagories";
    }

    if($image_name!=""){
        $path="../view/images/catagory/".$image_name;
        $remove=unlink($path);

        if($remove==false){
            echo "error removing pic";
            die();
        }
    }

    

?>