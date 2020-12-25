<?php include 'header.php';?>

<?php 

if(isset($_POST['username'])){
    $uname = $_POST['username'];
    echo "UserName is: " .$uname;
}

 ?>

<form action="" method="POST" name="myform" id="myform">
    <table>
        <tr>
            <td>UserName:</td>
            <td><input type="text" name="username" required="1"></td>
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