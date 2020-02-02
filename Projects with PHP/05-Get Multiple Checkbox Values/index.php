<?php include 'header.php';?>


<?php
    if(isset($_POST['Submit'])){
        $coder = $_POST['coder'];
        echo "You have selected : ";
        foreach ($coder as $lang=>$value){
            echo $value. ",";
        }
    }
?>


<form action="" method="post" name="myform" id="myform" >
    <table>
        <tr>
            <td>Language :</td>
            <td>
                <input type="checkbox" name="coder[]" value="Java"/>Java
                <input type="checkbox" name="coder[]" value="php"/>php
                <input type="checkbox" name="coder[]" value="C#"/>C#
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