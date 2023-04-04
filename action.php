<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badword</title>
</head>
<body>
   <p><?php echo $_POST['paragraph']?>. <span>La tua frase ha <?php echo strlen($_POST['paragraph'])?></span>  caratteri.</p> 
   <p><?php echo str_ireplace($_POST['badword'],"***", $_POST['paragraph'])?>. <span>La tua frase ha <?php echo strlen($_POST['paragraph'])?></span>  caratteri.</p>
</body>
</html>
