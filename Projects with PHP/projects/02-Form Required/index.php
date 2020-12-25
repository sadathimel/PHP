<?php include 'header.php';?>

<?php 

if(isset($_POST['gender'])){
    $gen = $_POST['gender'];

    if($gen == 'Male'){
        echo 'You are a male';
    }elseif($gen == 'Female'){
        echo 'You are a Female';
    }else{
        echo 'Others';
    }
}

?>

<form action="" method="POST" name="myform" id="myform">
    <table>
        <tr>
            <td>Gender:</td>
            <td>
                <input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="Female">Female
                <input type="radio" name="gender" value="Others">Others
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="submit">
                <input type="reset" value="clear">
            </td>
        </tr>
    </table>
</form>



<?php include 'footer.php'; ?>