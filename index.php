<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PhoneShop</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="./styles/all.min.css" />
  <link rel="stylesheet" href="./styles/index.css" />
  <link rel="stylesheet" href="./styles/general.css" />
  <link rel="stylesheet" href="./styles/reset.css" />

</head>

<body>
  <div id="index">
    <header id="header">
      <div class="headerPhoneContent container">
        <div class="part1">
          <a href="./index.php" class="headerIcon">PhoneShop <span>.</span></a>
          <i id="hamburgerMenuIcon" class="fa-solid fa-bars"></i>
        </div>
        <div id="dropdownLinks" class="dropdownLinks">
          <a href="./aboutUs.php">About Us</a>
          <a href="./login.php">Login</a>
          <a href="./register.php">Register</a>
        </div>
      </div>
      <div class="headerDestopContent container">
        <a href="./index.php" class="headerIcon">PhoneShop <span>.</span></a>
        <div class="headerLinks">
          <a href="./aboutUs.php">About Us</a>
          <a href="./login.php" class="login">Login</a>
          <a href="./register.php" class="register">Register</a>
        </div>
      </div>
    </header>
    <div class="indexContent">
      <div class="indexContentPart1">
        <div class="container">
          <h1>
            PhoneShop<span>.</span> The Best Way to Buy The <span>Smartphones</span> you love
          </h1>
        </div>
        <div></div>
        <div class="reasons container">Reasons to work with us</div>
      </div>
      <div class="coloredbg">
        <div class="indexContentPart2 container">
          <div class="part2Item">
            <img src="./image/newestPhone.png" alt="" />
            <div class="text">
              <h2>Get the <span>newest</span> Phone in the market</h2>
              <p>Find latest phone models on technology news and review sites.</p>
            </div>
          </div>
          <div class="part2Item reverse">
            <img src="./image/payOnline.png" alt="" />
            <div class="text">
              <h2>Make <span>online</span>Payment</h2>
              <p>Easily make online payments with secure payment portals.</p>
            </div>
          </div>
          <div class="part2Item">
            <img src="./images/ClientServices.png" alt="" />
            <div class="text">
              <h2><span>24/7</span> Client Services</h2>
              <p>Get round-the-clock client support with 24/7 services.</p>
            </div>
          </div>
        </div>
        <div class="homeLastSection container">
          <p>Shop anytime, anywhere with easy access to online stores</p>
          <a href="./login.php">Start Shopping Now</a>
        </div>
      </div>
    </div>
    <?php include "footer.php" ?>
  </div>
  <script src="./scripts/index.js"></script>
</body>

</html>