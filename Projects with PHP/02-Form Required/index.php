<?php
    $fonts = "verdana";
    $bgcolor ="#444";
    $fontcolor = "#fff";
    $errname = $erremail = $errweb = $errgender = " "; 

    $name = $email = $website = $comment = $gender = " ";
                

                if($_SERVER["REQUEST_METHOD"] == "POST"){

                if(empty($_POST["name"])){
                    $errname = "<span style='color:red'> Name is required.</span>";
                }else {
                    $name       = validate($_POST["name"]);
                }
                
                if(empty($_POST["email"])){
                    $erremail = "<span style='color:red'> Name is required.</span>";
                }else {
                    $email       = validate($_POST["email"]);
                }

                if(empty($_POST["website"])){
                        $errweb = "<span style='color:red'> Website is required.</span>";
                    }else {
                        $website       = validate($_POST["website"]);
                    }

                if(empty($_POST["gender"])){
                    $errgender = "<span style='color:red'> Gender is required.</span>";
                }else {
                    $Gender       = validate($_POST["gender"]);
                }
                
                    
                $comment    = validate($_POST["comment"]);
                

                echo "Name :".$name."<br/>";
                echo "Email :".$email."<br/>";
                echo "Website :".$website."<br/>";
                echo "Comment :".$comment."<br/>";
                echo "Gender :".$gender;
                }

                function validate($data){
                    $data = trim($data);
                    $data = stripcslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Syntax</title>
    <style>
        body{font-family:<?php echo $fonts;?>}.phpcoding{width: 900px; margin: 0 auto; background: <?php echo "#ddd" ?>;} 
        .headeroption, .footeroption{background:<?php echo $bgcolor;?> ; color:<?php echo $fontcolor; ?> ; text-align: center;padding:20px;} 
        .headeroption h2, .footeroption h2{margin:0;}
        .maincontent{min-height:400px; padding:20px;}
    </style> 
</head>
<body>
    <div class="phpcoding">
        <section class="headeroption">
            <h2><?php echo "PHP Fundamaentals Training"; ?> </h2>
        </section>

        <section class="maincontent">

        <hr/>
        PHP Form Validation
        <hr/>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <table>

            <tr>
                <td>Name</td>
                <td><input type="text" name="name" />*<?php echo $errname ?></td>
            </tr>
            <tr>
                <td>E-mail : </td>
                <td><input type="text" name="email"/>*<?php echo $erremail ?></td>
            </tr>
            <tr>
                <td>Website : </td>
                <td><input type="text" name="website"/>*<?php echo $errweb ?></td>
            </tr>
            <tr>
                <td>Comment : </td>
                <td><textarea name="comment" rows="5" cols="40"></textarea></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="gender" value="female">Female
                    <input type="radio" name="gender" value="male">Male
                    *<?php echo $errgender ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="submit">
                </td>
            </tr>
        </table>
        </form>

        </section>

        <section>
        <section class="footeroption">
            <h2><?php echo "Traing With Sadat Himel"; ?> </h2>
        </section>
        </section>
    </div>
</body>
</html>