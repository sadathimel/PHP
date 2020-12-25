<?php include 'header.php';?>


<?php 

if(isset($_POST['submit'])){
    $coder = $_POST['coder'];
    echo "Your are ".$coder." Coder";
}


?>


<form action="" method="POST" name="myform" id="myform">
    <table>
        <tr>
            <td>Language : </td>
            <td>
                <select  name="coder">
                    <option>Select One</option>
                    <option value="JAVA">JAVA</option>
                    <option value="PHP">PHP</option>
                    <option value="C$">C#</option>
                    <option value="C++">C++</option>
                </select>
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