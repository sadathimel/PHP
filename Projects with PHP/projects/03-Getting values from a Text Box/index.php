<?php include 'header.php';?>

<?php 

if(isset($_POST['coder'])){
    $coder = $_POST['coder'];
    echo 'You have selected: ';
    foreach ($coder as $lan => $value) {
        echo $value.",";
    }
}

?>

<form action="" method="POST" name="myform" id="myform">
    <table>
        <tr>
            <td>Gender:</td>
            <td>
                <input type="checkbox" name="coder[]" value="PHP">PHP
                <input type="checkbox" name="coder[]" value="JAVA">JAVA
                <input type="checkbox" name="coder[]" value="C#">C#
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" value="submit">
                <input type="reset" value="clear">
            </td>
        </tr>
    </table>
</form>



<?php include 'footer.php'; ?>