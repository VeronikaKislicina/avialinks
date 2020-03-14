<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>AVIALINKS</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script src="https://kit.fontawesome.com/62d18def75.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  </head>
  <body>

    <header>
      <div class="container">
        <div class="header-wrapper">

          <div class="logo-block">
            <a href="main-eng.html"> <img src="pics/logo/logo1.jpg" alt="logo"> </a>
          </div>


          <div class="right-block">

            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                <img src="pics/flags/united-kingdom.svg"> English
              </button>
              <ul class="dropdown-menu">
                <li><a href="main-eng.html"><img src="pics/flags/united-kingdom.svg"> English </a></li>
                <li><a href="rus-rub.html"><img src="pics/flags/russia.svg"> Русский </a></li>
                <li><a href="#"><img src="pics/flags/sweden.svg"> Svenska </a></li>
                <li><a href="#"><img src="pics/flags/finland.svg"> Suomi </a></li>
                <li><a href="#"><img src="pics/flags/usa.svg"> American English </a></li>
              </ul>
            </div>

            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                EUR €
              </button>
              <ul class="dropdown-menu">
                <li><a href="#">EUR €</a></li>
                <li><a href="#">USD $</a></li>
                <li><a href="#">GBP £</a></li>
                <li><a href="#">RUB ₽</a></li>
                <li><a href="#">SEK kr</a></li>
                <li><a href="#">KZT ₸</a></li>
                <li><a href="#">UZS som</a></li>
              </ul>
            </div>

            <ul class="navigation-block">
              <li> <a id="myBtn" href="#">Help</a> </li>
            </ul>

            <ul class="navigation-block">
              <li><a href="#">Subscribe</a> </li>
            </ul>

            <div id="myModal" class="modal">
              <div class="modal-content">
                <span class="close">&times;</span>
                  <div class="ask-booking">

                    <div class="wrapper">
                      <a href="https://www.kiwi.com/en/help" target="_blank">Have a booking</a>
                      <button onclick="toggleButton()" type="button" name="button">Don't have a booking</button>
                    </div>

                    <form action="contact-form.php" method="post" id="toggleForm" class="question-form">
                      <div class="form-control">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" placeholder="Full Name">
                      </div>
                      <div class="form-control">
                        <label for="email">Email:</label>
                        <input type="text" id="mail" name="mail" placeholder="Your Email">
                      </div>

                        <label for="message">Your Question:</label>
                        <textarea name="message" placeholder="Type your question here.."></textarea>


                      <button type="submit" value="submit">Send mail</button>
                    </form>

                  </div>
              </div>
            </div>

            <ul class="social">
              <li><a href="" target="_blank"> <i class="fab fa-instagram"></i> </a></li>
              <li><a href="" target="_blank"> <i class="fab fa-facebook-f"></i> </a></li>
            </ul>

            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                <i class="fas fa-bars"></i>
              </button>
              <ul class="dropdown-menu">
                <li><a href="terms-and-conditions-eng.html">Terms and conditions</a></li>
                <li><a href="private-policy-eng.html">Privacy policy</a></li>
                <li><a href="#">Travel stories</a></li>
              </ul>
            </div>

          </div>
        </div>
      </div>



    </header>
    <section class="main">
      <div class="container">

            <div id="widget-holder"></div>
            <script data-affilid="smartairkiwiwidget" data-width="100%" data-apigee-key="Ak6Ap9NE0FuLQGFKVAuOAKve156YMrmE" src="https://widget.kiwi.com/scripts/widget-search-iframe.js"></script>

      </div>
    </section>

    <script>
      //modal popup window
      var modal = document.getElementById("myModal");
      var btn = document.getElementById("myBtn");
      var span = document.getElementsByClassName("close")[0];

      btn.onclick = function() {
        modal.style.display = "block";
      }

      span.onclick = function() {
        modal.style.display = "none";
      }

      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }

      //popup window content
      function toggleButton() {
        var x = document.getElementById("toggleForm");
        if (x.style.display === "block") {
          x.style.display = "none";
        } else {
          x.style.display = "block";
        }
      }

    </script>
  </body>
</html>
