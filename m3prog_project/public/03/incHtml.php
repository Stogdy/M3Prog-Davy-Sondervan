<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $loggedIn = false;
    if(isSet($_GET['LoggedIn']))
    {
        $LoggedIn=true;
    include "views/myDashboard.html";
    }else {
    include "views/home.html";
    }
    ?>
</body>
</html>
