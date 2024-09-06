<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="container">
    <?php 
    echo "<h1> My Personal Information </h1>";
    $Fullname="Rich Quint Juliana P. Manago";
    $Address="P-2, Bangko, Panaon Misamis Occidental";
    $Contact="09123456789";
    $Hobbies="Listening to music, Reading, Talking with Friends";
    $Social_media="YA N NY";
    
    
    echo "My name is: $Fullname <br>";
    echo "I live in: $Address<br>";
    echo "Contact: $Contact <br>";
    echo "I love to: $Hobbies <br>";
    echo "My social media account is:$Social_media <br>";

    ?>
    </div>
</body>
</html>