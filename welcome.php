<?php 
    $display_username = $_POST["username"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Welcome,<?php echo " " . $display_username;?></title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
<link href="public/src/welcome.css" type="text/css" rel="stylesheet"/>
</head>
<body>

<header>
    <div class="navigation title-area">
        <img src="public/src/images/Logo.png"/>
    </div>
    <div class="navigation account-settings-area">
        <p><?php echo $display_username;?><i class="fas fa-angle-down"></i></p>
        <div class="dropdown-menu-area hide-dropdown">
            <ul>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Security</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Alerts</a></li>
                <li><a href="index.php">Sign Out</a></li>
            </ul>
        </div>
    </div>
</header>

<section class="greetings-area">
    <h1>Hello,<?php echo " " . $display_username;?><br/><span><!--WEATHER DATA--></span></h1>
</section>

<section class="bank-accounts-area">
    <div class="bank-accounts account-1">
        <p>Checking</p>
        <p>$500.00</p>
    </div>
    <div class="bank-accounts account-2">
        <p>Savings</p>
        <p>$23,000</p>
    </div>
    <div class="bank-accounts account-3">
        <p>Business Checking</p>
        <p>$500,000</p>
    </div>
    <div class="bank-accounts account-4">
        <p>Business Savings</p>
        <p>$1,000,000</p>
    </div>
</section>

<script src="public/src/scripts/welcome.js"></script>
<script src="public/src/scripts/weatherAjax.js"></script>
</body>
</html>