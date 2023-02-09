<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Dental Tech NC</title>
  <meta name="description" content="DentalTechNC, Dental, Services">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles.css">
  <link href="lightbox.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="lightbox.js"></script>
  <script src="index.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;1,400&display=swap"
    rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
    }
  </style>
</head>

<body>
  <div id="page-container">
    <div id="content-wrap">

      <header>

        <div class="navigation-container">

          <div class="navigation-container nav-item1">
            <a href="index.html">
              <img src="Images/dentaltechlogo.png" alt="logo" class="logo">
            </a>
          </div>

          <div class="navigation-container nav-item2">
            <nav>
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="service.html">Services</a></li>
                <li><a href="review.html">Reviews</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </nav>
          </div>

        </div>

      </header>

      <div class="main-container-index">

        <div class="main-container-index main-item1">
          <h1>Professional Dental Equipment Services</h1>
          <p>Your office equipment is a essential part of your practice ensuring both satisification for your patients
            and office staff. Dental Tech Services and Sales ensures your office is performing at its highest
            effieicecy. With 7+ years of experience in North Carolina, we provide your practice with the highest quality
            service at a price that beats every other competitor.</p>
          <p>The quality and care of your office is extremely important for us. Our ability to provide you with
            professional level service at a price that is affordable to you is what sets us apart from every other
            competitor.</p>
          <ul>
            <li>We provide both repair and preventative maintenance care.</li>
            <li>We have over 7+ years of experience serving local practices in the Raleigh-Durham area.</li>
            <li>Whether its a single practice or corporate, we can serve both.</li>
            <li>Our technicians are both ceritified and experienced, ensuring you receive the best quality care
              possible.</li>
            <li>We are a verified dealer for dental equipment. </li>
          </ul>
        </div>


        <div class="main-container-index main-item2">

          <h1>Services we provide</h1>

          <div class="main-container-index main-item2 image-container">

            <div class="main-container-index main-item2 main-image1">
              <!-- Lightbox effect -->
              <a href="Images/X-Ray.jpeg" data-lightbox="repair-image" data-title="Picture of equipment">
                <img src="Images/X-Ray.jpeg" alt="Image of a dental x-ray machine">
              </a>
              <h3>Repairs and Preventative Maintenance</h3>
              <p>Tired of hearing you need new equipment? At Dental Tech Services and Sales our focus is to repair your
                equipment, not replace. In addition to repairs, our preventative maintenance services aim to extend the
                life of your equipment.
              </p>
              <div class="list-holder">
                <ul>
                  <li>Delivery Units</li>
                  <li>Vacuum Pumps</li>
                  <li>Ultrasonic Scalers</li>
                  <li>X-Ray Units</li>
                </ul>
                <ul>
                  <li>Hand Pieces</li>
                  <li>Compressors</li>
                  <li>Chairs</li>
                  <li>Electrical and Plumbing</li>
                </ul>
              </div>

            </div>

            <div class="main-container-index main-item2 main-image2">
              <!-- Lightbox effect -->
              <a href="Images/office-build-1.JPEG" data-lightbox="office-image" data-title="Picture of office build">
                <img src="Images/office-build-1.JPEG" alt="Image of an office build being done by Dental Tech Services">
              </a>
              <h3>Office Builds</h3>
              <p>Are you in the market for a new office? Do you have an existing office that you want to renovate? We
                have experience in building and renovating offices to provide with a practice that is both beautiful and
                practical for you, your staff, and your patients.</p>
            </div>

          </div>

        </div>

        <div class="main-container-index main-item3">

          <div class="main-container-index main-item3 form-container-index">

            <div class="main-container-index main-item3 form-container-index form-container-item1">
              <p>Call to Schedule a Service Appointment!</p>
              <a href="tel:9196419140">919-641-9140</a>
            </div>

            <div id="changeElement" class="main-container-index main-item3 form-container-index form-container-item2">

              <form class="contact-form" action="contactform.php" method="post">

                <div class="row-form">
                  <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" placeholder="Firstname Lastname" autocomplete="name" aria-required="true" required>
                  </div>
                  <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input id="phone" name="phone" placeholder="XXX-XXX-XXXX" aria-required="true">
                  </div>
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" name="email" placeholder="name@email.com" aria-required="true" required>
                </div>

                <div class="form-group">
                  <label for="comment">Comment</label>
                  <textarea id="comment" name="comment" placeholder="Comment" aria-required="true" autocomplete="impp" required></textarea>
                </div>

                <div class="form-group">
                  <button type="submit" name="submit" class="formSubmit">SUBMIT</button>
                </div>

              </form>
            </div>

          </div>

        </div>

      </div>
    </div>

    <footer id="footer">

      <div class="footer-container">

        <div class="footer-container footer-item1">
          <div>
            <a href="index.html">
              <img src="Images/dentaltechlogo.png" alt="dentaltechnc logo" class="logo-footer">
            </a>
            <a class="phonelink" href="tel:9196385542">919-638-5542</a>
            <a class="email-link" href="mailto:dentaltechnc@gmail.com"><i
                class='bx bxs-envelope'></i>dentaltechnc@gmail.com</a>
          </div>
        </div>

        <div class="footer-container footer-item2">
          <div>
            <h1>Hours:</h1>
            <table class="footer-table">
              <tr>
                <td>Monday</td>
                <td>7AM - 5PM</td>
              </tr>
              <tr>
                <td>Tuesday</td>
                <td>7AM - 5PM</td>
              </tr>
              <tr>
                <td>Wednesday</td>
                <td>7AM - 5PM</td>
              </tr>
              <tr>
                <td>Thursday</td>
                <td>7AM - 5PM</td>
              </tr>
              <tr>
                <td>Friday</td>
                <td>7AM - 5PM</td>
              </tr>
              <tr>
                <td>Saturday</td>
                <td>7AM - 5PM</td>
              </tr>
              <tr>
                <td>Sunday</td>
                <td>Closed</td>
              </tr>
            </table>
          </div>
        </div>

        <div class="footer-container footer-item3">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3339717.318218167!2d-79.860994!3d35.1705173!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x69c386b8a3916a51!2sDental%20Tech%20Services%20and%20Sales!5e0!3m2!1sen!2sus!4v1663935477287!5m2!1sen!2sus"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

      </div>
    </footer>

  </div>

</body>

</html>