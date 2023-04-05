<!-- PHP  -->
<?php
$paragraph = $_POST['paragraph'];
$badword = $_POST['badword'];
$newparagraph = str_replace($badword,"***", $paragraph);
?>
<!-- HTML  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badword</title>
</head>
<body>
   <p><?php echo $paragraph?>. <span>La tua frase ha <?php echo strlen($paragraph)?></span>  caratteri.</p> 
   <p><?php echo $newparagraph?>. <span>La tua frase ha <?php echo strlen($newparagraph)?></span>  caratteri.</p>
</body>
</html>
