<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>include</title>
</head>
<body>
    <div class="header">
    <?php
    include 'source/header.html'
    ?>
    </div>
    <h1>O nás</h1>
    <ul>
        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur, suscipit.</li><br>
        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur, suscipit.</li>
    </ul>
    <div class="footer">
    <?php
    include 'source/footer.php'
    ?>
    </div>
</body>
</html>