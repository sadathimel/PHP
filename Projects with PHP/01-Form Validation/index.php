<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Syntax</title>
    <style>
        body{font-family:<?php echo $fonts;?>}.phpcoding{width: 900px; margin: 0 auto; background: <?php echo "#ddd" ?>;} 
        .headeroption, .footeroption{background:<?php echo $black;?> ; color:<?php echo $fontcolor; ?> ; text-align: center;padding:20px;} 
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
                <td><input type="text" name="name" required /></td>
            </tr>
            <tr>
                <td>E-mail : </td>
                <td><input type="text" name="email" required /></td>
            </tr>
            <tr>
                <td>Website : </td>
                <td><input type="text" name="website" required /></td>
            </tr>
            <tr>
                <td>Comment : </td>
                <td><textarea name="comment" rows="5" cols="40" required ></textarea></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="gender" value="female">Female
                    <input type="radio" name="gender" value="male">Male
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

            <?php
                $name = $email = $website = $comment = $gender = " ";

                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $name       = validate($_POST["name"]);
                    $email      = validate($_POST["email"]);
                    $website    = validate($_POST["website"]);
                    $comment    = validate($_POST["comment"]);
                    $gender     = validate($_POST["gender"]);

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
        
        </section>

        <section>
        <section class="footeroption">
            <h2><?php echo "Traing With Sadat Himel"; ?> </h2>
        </section>
        </section>
    </div>
</body>
</html>