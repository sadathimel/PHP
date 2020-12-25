<?php include 'header.php';?>


<?php
    if(isset($_POST['Submit'])){
        $coder = $_POST['coder'];
        echo "Your are ". $coder." Coder";
    }
?>


<form action="" method="post" name="myform" id="myform" >
    <table>
        <tr>
            <td>Language :</td>
            <td>
                <select name="coder">
                    <option >Select One</option>
                    <option value="JAVA">JAVA</option>
                    <option value="PHP">PHP</option>
                    <option value="C#">C#</option>
                    <option value="JAVASCRIPT">JAVASCRIPT</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="Submit" value="Submit">
                <input type="reset" value="Clear">
            </td>    
        </tr>
    </table>
</form>





<?php include 'footer.php'; ?>