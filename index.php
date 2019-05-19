<!DOCTYPE html>
<html lang="en">
<head>
<title>Direct Capital</title>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="icon" href="favicon.png" />
<link rel="stylesheet" href="public/src/index.css" type="text/css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>
<header>
<!-- The Top Navigation Area -->
<div id="topNavWrapper">
<div id="siteLogo">
    <img src="src/images/Logo.png"/>
</div>
<div id="hamburger-logo-area">
    <i class="fas fa-bars"></i>
</div>

<div id="productNav">
    <ul>
    <li><a href="#">Credit Cards</a></li>
    <li><a href="#">Checking & Savings</a></li>
    <li><a href="#">Loans</a></li>
    <li><a href="#">Business</a></li>
    <li><a href="#">Commercial</a></li><br/>
    <li><i class="fas fa-times"></i></li>
    </ul>
</div>

<div id="searchNav">
    <ul>
    <li><i class="fas fa-search"></i><input type="search" name="search" placeholder="Search"></li>
    <li><a href="#"><i class="far fa-question-circle"></i>Support</a></li>
    <li><a href="#">Location</a></li>
    <li><a href="#">Sign In</a></li>
    </ul>
</div>
</div>
</header>
<!--------------------------------------------------------------------------------------->

<<<<<<< HEAD:public/index.php
        <!-- The Sign in Area -->
        <section id="loginArea">
            <div id="signInWrapper">
                <div id="signInIconArea">
                    <i class="fas fa-user-circle"></i>
                    <h2>Sign In</h2><br/>
                    <a href="#">or Set Up Online Access</a>
                </div>
                <div id="signUpArea">
                    <form action="welcome.php" method="POST">
                        <ul>
                            <li>
                                <label>Username</label><br/>
                                <input type="text" name="username" placeholder="Username" required><br/>
                                <input type="checkbox" name="rememberMe">Remember Me
                            </li>
                            <li>
                                <label>Password</label><br/>
                                <input type="password" name="password" placeholder="Password" required/><input type="submit" name="submit" value="Sign In"/><br/>
                                <a href="#">Forgot Username or Password?</a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </section>
        <!-- The Banner Area -->
        <section id="contentArea">
            <div id="bannerArea">
                <div id="creditCardBox">
                    <img src="src/images/creditCard.png"/>
                    <h1>Use your miles.<br/>The way you want to use them.</h1>
                    <p>With Direct Rewards, earn unlimited 3x miles.<br/>No blackouts!</p>
                    <form action="#">
                       <button type="submit">Learn More</button> 
                    </form>
                </div>
                <!-- CREDIT CARD BOX MOBILE VERSION -->
                <div id="credit-card-box-mobile">
                    <img src="./src/images/creditCard.png"/>
                </div>
            </div>
        </section>
        <!-- The Deals Area -->
        <section id="dealsArea">
            <table cellspacing="30">
                <tr>
                    <td>
                        <img src="./src/images/BitcoinLogo.png"/>
                        <h4>We are</br>Cryptocurrency Friendly</h4>
                        <p>Create a secure, bank independent, crypto wallet with us and start
                            receiving your assets in cryptocurrency. Pay your bills, mortgage, pretty 
                            much anything using Bitcoin or Litecoin.
                            <a href="#">Learn more.</a>
                        </p>
                    </td>
=======

<!-- The Sign in Area -->
<section id="loginArea">
<div id="signInWrapper">
<div id="signInIconArea">
    <i class="fas fa-user-circle"></i>
    <h2>Sign In</h2><br/>
    <a href="#">or Set Up Online Access</a>
</div>
<div id="signUpArea">
<form action="signIn.php" method="POST">
    <ul>
    <li>
    <label>Username</label><br/>
    <input type="text" name="username" placeholder="Username" required><br/>
    <input type="checkbox" name="rememberMe">Remember Me
    </li>

    <li>
    <label>Password</label><br/>
    <input type="password" name="password" placeholder="Password" required/><input type="submit" name="submit" value="Sign In"/><br/>
    <a href="#">Forgot Username or Password?</a>
    </li>
    </ul>
</form>
</div>
</div>
</section>
<!-- The Banner Area -->
<section id="contentArea">
<div id="bannerArea">
<div id="creditCardBox">
    <img src="src/images/creditCard.png"/>
    <h1>Use your miles.<br/>The way you want to use them.</h1>
    <p>With Direct Rewards, earn unlimited 3x miles.<br/>No blackouts!</p>
<form action="#">
    <button type="submit">Learn More</button> 
</form>
</div>
<!-- CREDIT CARD BOX MOBILE VERSION -->
<div id="credit-card-box-mobile">
    <img src="./src/images/creditCard.png"/>
</div>
</div>
</section>
<!-- The Deals Area -->
<section id="dealsArea">
<table cellspacing="30">
<tr>
<td>
    <img src="./src/images/BitcoinLogo.png"/>
    <h4>We are</br>Cryptocurrency Friendly</h4>
    <p>Create a secure, bank independent, crypto wallet with us and start
        receiving your assets in cryptocurrency. Pay your bills, mortgage, pretty 
        much anything using Bitcoin or Litecoin.
    <a href="#">Learn more.</a>
    </p>
</td>
>>>>>>> 9fe47528331279155fdcca8cc7be717bed006007:public/index.html
                    
<td>
    <img src="./src/images/DinningRewardsLogo.png"/>
    <h4>Dinning Cash Back Rewards</h4>
    <p>Earn unlimited cash back on dining and entertainment.
    <a href="#">Apply Now.</a>
    </p>
</td>
<td>
    <img src="./src/images/creditCardLogo.png"/>
    <h4>See If you're Pre-Qualified</h4>
    <p>You may be eligible for pre-qualified credit card offers.
        Don't worry, this won't impact your credit score.
    <a href="#">Find out now.</a>
    </p>
</td>
<td>
    <img src="./src/images/creditScoreIcon.png"/>
    <h4>View Your Credit Score</h4>
    <p>Use Credit Secure to view your credit score. Check for any suspicious activity
        and shut your card off incase of emergencies.
    <a href="#">Learn more.</a>
    </p>
</td>
</tr>
</table>

<!-- MOBILE TABLE ------------------------------------------->
<table>
<tr>
<td>
    <img src="./src/images/BitcoinLogo.png"/>
    <h4>We are</br>Cryptocurrency Friendly</h4>
    <p>Create a secure, bank independent, crypto wallet with us and start
        receiving your assets in cryptocurrency. Pay your bills, mortgage, pretty 
        much anything using Bitcoin or Litecoin.
    <a href="#">Learn more.</a>
    </p>
</td>
<td>
    <img src="./src/images/DinningRewardsLogo.png"/>
    <h4>Dinning Cash Back Rewards</h4>
    <p>Earn unlimited cash back on dining and entertainment.
    <a href="#">Apply Now.</a>
    </p>
</td>
</tr>
<tr>
<td>
    <img src="./src/images/creditCardLogo.png"/>
    <h4>See If you're Pre-Qualified</h4>
    <p>You may be eligible for pre-qualified credit card offers.
        Don't worry, this won't impact your credit score.
    <a href="#">Find out now.</a>
    </p>
</td>
<td>
    <img src="./src/images/creditScoreIcon.png"/>
    <h4>View Your Credit Score</h4>
    <p>Use Credit Secure to view your credit score. Check for any suspicious activity
        and shut your card off incase of emergencies.
    <a href="#">Learn more.</a>
    </p>
</td>
</tr>
</table>
</section>

<section id="learnArea">
    <h1>Learn and Grow Your Wealth With Us.</h1>
    <a href="#">Get Started</a>
</section>

<footer>
<div id="listWrapper">
<div id="listHeader">
<ul>
    <li><img src="./src/images/swishLogo.png"/></li>

    <li><img src="./src/images/instagramLogo.png"/></li>
    <li><img src="./src/images/twitterLogo.png"/></li>
    <li><img src="./src/images/facebookLogo.png"/></li>
    <li><img src="./src/images/linkedinLogo.png"/></li>
    <li><img src="./src/images/youtubeLogo.png"/></li>
</ul>
</div>
<div id="productsList">
    <ul> 
    <li>Credit Cards</li>
    <li>Checking & Savings</li>
    <li>Loans</li>
    <li>Business</li>
    <li>Commercial</li>
    </ul>
</div>
<div id="aboutList">
    <ul>
    <li>Corporate Information</li>
    <li>Careers & Jobs</li>
    <li>Diversity & Inclusion</li>
    <li>Investors</li>
    <li>Sustainability</li>
    <li>Canada</li>
    <li>UK</li>
    </ul>
</div> 
<div id="onTheGoList">
    <ul>
    <li>Locations & ATMs</li>
    <li>App</li>
    </ul>
</div>
<div id="legalList">
    <ul>
    <li>Patriot Act Certification</li>
    <li>Wolfsberg Questionnaire</li>
    <li>Subpoena Policy</li>
    <li>Additional Disclosures</li> 
    </ul>
</div>
<div id="supportList">
    <ul>
    <li>Credit Card Support</li>
    <li>Resources for the Military</li>
    <li>Accessibiliy Assistance</li>
    <li>Tweet @AskDirectCapital</li>
    <li>Call Us</li>
    </ul>
</div>
</div>
<div id="tablet-footer-list-wrapper">
    <div id="signUpDiv">
        <h2>Sign Up</h2>
    </div>
    <div id="products-div">
        <h2>Products</h2>
    </div>
    <div id="about-div">
        <h2>About</h2>
    </div>
    <div id="on-go-div">
        <h2>On the Go</h2>
    </div>
    <div id="legal-div">
        <h2>Legal</h2>
    </div>
    <div id="support-div">
        <h2>Support</h2>
    </div>
</div>
</footer>

<script src="./src/scripts/hamburgerDrop.js"></script>
</body>
</html>