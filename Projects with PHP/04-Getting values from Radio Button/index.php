<?php include 'header.php';?>


<?php

    if(isset($_POST['gender'])){
        $gender = $_POST['gender'];
        echo $gender;

        if($gender == "Male"){
            echo "You are a Male";
        }elseif($gender == "Female"){
            echo "You are a Female";
        }else{
            echo "Others";
        }
    }

?>



<form action="" method="post" name="myform" id="myform">
    <table>
        <tr>
            <td>Gender :</td>
            <td>
                <input type="radio" name="gender" value="Male"/>Male
                <input type="radio" name="gender" value="Female"/>Female
                <input type="radio" name="gender" value="Others"/>Others
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Submit">
                <input type="reset" value="Clear">
            </td>    
        </tr>
    </table>
</form>





<?php include 'footer.php'; ?>