<?php 
    $display_username = $_POST["username"];

    $weather_url = 'https://api.openweathermap.org/data/2.5/weather?q=Chicago,US&APPID=0d93240f9f061bd77087e4d66457cefe';
    $weather_json = file_get_contents($weather_url);
    $weather_array = json_decode($weather_json,true);

    $condition = $weather_array["weather"][0]["description"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Welcome,<?php echo " " . $display_username;?></title>
<link href="public/src/welcome.css" type="text/css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>

<header>
    <div class="navigation title-area">
        <a href="index.php"><img src="public/src/images/Logo.png"/></a>
    </div>
    <div class="navigation account-settings-area">
        <p><?php echo $display_username;?><i class="fas fa-angle-down"></i></p>
        <div class="dropdown-menu-area">
            <ul>
                <li>Profile</li>
                <li>Security</li>
                <li>Settings</li>
                <li>Alerts</li>
                <li>Sign Out</li>
            </ul>
        </div>
    </div>
</header>

<section class="greetings-area">
    <h1>Hello,<?php echo " " . $display_username;?><br/>
    <?php echo $condition;?></h1>
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
    <div class="bank-accounts account-3">Business Checking</div>
    <div class="bank-accounts account-4">Business Savings</div>
</section>

</body>
</html>