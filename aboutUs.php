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
  <link rel="stylesheet" href="./styles/general.css" />
  <link rel="stylesheet" href="./styles/reset.css" />
  <link rel="stylesheet" href="./styles/aboutUs.css" />


</head>

<body>
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
  <div class="slider">
    <div class="sliderContent">
     <div>
      <h1>About Us</h1>
     <p class="p1">
        As one of the leading online retailers of mobile phones, our company is dedicated to providing our customers
        with the latest and greatest technology. With a diverse selection of devices from popular brands like Apple,
        Samsung, and Google, we make it easy for you to find the perfect phone to fit your needs. We pride ourselves on
        offering high-quality products at affordable prices, backed by our exceptional customer service.
      </p>
      <p class="p2">
        At our company, we believe that everyone should have access to the latest mobile phone technology without
        breaking the bank. That's why we work hard to offer competitive pricing on all of our products, ensuring that
        you get the best value for your money. We're committed to providing a seamless shopping experience, from our
        easy-to-use website to our fast and reliable shipping options.
      </p>
      <p class="p3">
        As a team of phone enthusiasts, we understand the importance of staying connected in today's fast-paced world.
        That's why we're constantly adding new and innovative products to our inventory, so you can stay up to date with
        the latest technology. Whether you're looking for a high-end smartphone, a durable phone for your outdoor
        adventures, or a budget-friendly option, we've got you covered. Shop with us today and discover why we're the
        go-to destination for mobile phone enthusiasts.
      </p>
     </div>
      <div class="silderButtons">
        <button type="button" class="prevButton"><</button>
            <button type="button" class="nextButton">></button>
      </div>
    </div>
  </div>
  <?php include "footer.php" ?>
</body>
<script>
  const sliderContent = document.querySelector(".sliderContent");
  const p1 = document.querySelector(".p1");
  const p2 = document.querySelector(".p2");
  const p3 = document.querySelector(".p3");
  const prevBtn = document.querySelector(".prevButton");
  const nextBtn = document.querySelector(".nextButton");

  let currentSlide = 0;
  const slides = [p1, p2, p3];

  function showSlide(index) {
    for (let i = 0; i < slides.length; i++) {
      slides[i].classList.remove("active");
    }
    slides[index].classList.add("active");
  }

  prevBtn.addEventListener("click", function () {
    currentSlide--;
    if (currentSlide < 0) {
      currentSlide = slides.length - 1;
    }
    showSlide(currentSlide);
  });

  nextBtn.addEventListener("click", function () {
    currentSlide++;
    if (currentSlide >= slides.length) {
      currentSlide = 0;
    }
    showSlide(currentSlide);
  });

  showSlide(0);
</script>

</html>