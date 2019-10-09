<?php
$configData = file_get_contents('include/config.json');
$config = json_decode($configData);

?>
<!DOCTYPE html>
<html>

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142534981-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-142534981-1');
</script>

  <meta charset="utf-8">
  <title>Paint & Vino | Painting and Wine Events in Prague</title>
  <meta name="google-site-verification" content="MSeHkOXbL5W34bcyCO-mU7k4cyKyzq8tRhLpuXsENC8" />
  <meta name="description" content="Creative art and group painting workshops with wine in Prague, Czech Republic.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="images/icons/favicon.ico" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/queries.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800|Roboto+Condensed:400,700" rel="stylesheet">
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142534981-1"></script>


</head>

<body>
  <section id="title">
    <div class="container-fluid">
      <img class="pv-logo ml-auto" src="images/web-banner-07.png" alt="Paint and Vino Logo">
      <!-- Nav Bar -->
      <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#paint-vino"
          aria-controls="paint-vino" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar-section" id="paint-vino">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#location">Location</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
            <li class="nav-item">
              <a class="nav-link" href="https://www.facebook.com/PaintVino"><i
                  class="fab fa-facebook-square fa-2x"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.instagram.com/paintandvino.prague/"><i
                  class="fab fa-instagram fa-2x"></i></a>

            </li>
          </ul>

        </div>

      </nav>
    </div>

    <div class="background-img">
      <!-- <img src="images/paint-brush-banner.jpg" class="background-img">  -->
      <br>

    </div>


    <!-- Title Section -->
    <div class="layer main-section container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <h1 class="mobile-heading big-heading">Painting Workshops in Prague</h1>
          <div class="">
            <img class="nodesktop strv-img" src="images/heading2.jpg" alt="Paint and Vino Logo">
          </div>
          <p class="heading-text">

            There’s no better city for this art and wine combo than in Prague.
            Not an artist? No problem. Our step-by-step workshops come with practice rounds to get you comfortable
            before diving into the real thing. In just a few hours, you’ll learn and apply all the basics to create your
            own artwork to take home.
            All materials and superhero capes are provided.
          </p>






          <div class="">
            <form id="paypalButton" class="form-group" action="https://www.paypal.com/cgi-bin/webscr" method="post"
              target="">
              <input type="hidden" name="cmd" value="_xclick">
              <input type="hidden" name="business" value="2767QPMH7QGWJ">

              <p class="payment-text form-control-plaintext">Which wine as your sidekick?</p>
              <select name="item_number" class="pay-form form-control">
                <option value="White Wine">
                  <p class="text-center">White</p>
                </option>
                <option value="Red Wine">
                  <p>Red</p>
                </option>
              </select>
              <p class=" payment-text form-control-plaintext">How many spots?</p>
              <input class="pay-form form-control" type="number" name="quantity" value="1" min="1"
                max="<?php echo $event->openingNb;?>">




              <input type="hidden" name="lc" value="US">
              <input type="hidden" name="item_name" value="Paint & Vino Reservation">
              <input type="hidden" name="amount" value="600.00">
              <input type="hidden" name="currency_code" value="CZK">
              <input type="hidden" name="button_subtype" value="services">
              <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">






              <div class="container-fluid text-center">
                <?php 
                    $a = "openingNb";
                    if ( $a = 0 ) { echo '<button id="buyButton" type="submit" disabled class="form-control-sm btn btn-md btn-dark" role="button" value="Book Now">Book Now</button>'; } else { echo '<button id="buyButton"  type="submit" class="form-control-sm btn btn-md btn-dark" role="button" value="Book Now">Book Now</button>';} ?>

                <a class="nomobile noipad form-control-sm btn btn-md btn-dark" href="#contact" role="button">Request
                  Private Event</a>
              </div>
              <?php
                      $event = $config->events[0];
                      switch ($event->openingNb)
                      {
                        case 0:
                          echo 'Sorry, this session is all booked!';
                          break;
                        case 1:
                          echo '1 seat left (', $event->dateShort,')<br/> Book your spot!';
                          break;
                        default:
                          echo $event->openingNb, ' spots left (', $event->dateShort,')';
                          break;


                      }
                    ?>
            </form>
            <div class="container-fluid text-center">
              <a class="nodesktop form-control-sm btn btn-md btn-dark" href="#contact" role="button">Request Private
                Event</a>
            </div>

          </div>
        </div>
        <!-- Event Card -->

        <div class="card-padding col-lg-6 col-md-6 col-sm-12">
          <div class="card mx-auto">
            <div class="card-body">
              <h5 class="card-title">Upcoming Group Events</h5>
              <img src="images/events/<?php echo htmlentities($event->imgPath); ?>.jpg" class="card-img-top" alt="event image">
              <p class="card-text"><?php echo htmlentities($event->date); ?></p>
              <p class="card-text"><i class="fas fa-wine-glass-alt"></i> <?php echo htmlentities($event->time); ?></p>
            </div>

          </div>
          <img class="nodesktop strv-img" src="images/heading1.jpg" alt="picture of painting">





  </section>

  <!-- Features Section -->
  <section class="colored-section" id="features">
    <div class="container-fluid">
      <div class="feature-row row">

        <div class="feature-box col-lg-3 col-md-6 col-sm-6">
          <img class="feature-icons" src="images/icons/brush.svg" alt="icon of brush">
          <h3 class="feature-title">Team Building</h3>
          <p class="feature-text">At your workplace or ours?</p>
        </div>

        <div class="feature-box col-lg-3 col-md-6 col-sm-6">
          <img class="feature-icons" src="images/icons/clipboard.svg" alt="icon of clipboard">
          <h3 class="feature-title">Private Events</h3>
          <p class="feature-text">Birthdays, groups, min 4 ppl</p>
        </div>

        <div class="feature-box col-lg-3 col-md-6 col-sm-6">
          <img class="feature-icons" src="images/icons/gift.svg" alt="icon of gifts">
          <h3 class="feature-title">Gift Cards Available</h3>
          <p class="feature-text">You want 'em, we've got 'em</p>
        </div>


        <div class="feature-box col-lg-3 col-md-6 col-sm-6">
          <img class="feature-icons" src="images/icons/credit-card.svg" alt="icon of giftcard">
          <h3 class="feature-title">Payment</h3>
          <p class="feature-text">600 CZK - Everything Included</p>
        </div>
      </div>




    </div>

  </section>

  <section class="colored-section" id="gallery">
    <div id="carouselExampleIndicators" class="carousel slide gallery-container" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol>

      <div class="carousel-inner image-container">
        <div class="carousel-item active">
          <div class="d-flex flex-row justify-content-around">
            <div class="image-div carousel1"></div>
            <div class="image-div carousel2"></div>
            <div class="image-div carousel3"></div>

          </div>
          <div class="d-flex flex-row justify-content-around">
            <div class="image-div carousel4"></div>
            <div class="image-div carousel5"></div>
            <div class="image-div carousel6"></div>

          </div>


        </div>
        <div class="carousel-item">

          <div class="d-flex flex-row justify-content-around">
            <div class="image-div carousel7"></div>
            <div class="image-div carousel8"></div>
            <div class="image-div carousel9"></div>
          </div>

          <div class="d-flex flex-row justify-content-around">
            <div class="image-div carousel10"></div>
            <div class="image-div carousel11"></div>
            <div class="image-div carousel12"></div>
          </div>

        </div>
        <div class="carousel-item">
          <div class="d-flex flex-row justify-content-around">
            <div class="image-div carousel13"></div>
            <div class="image-div carousel14"></div>
            <div class="image-div carousel15"></div>
          </div>
          <div class="d-flex flex-row justify-content-around">
            <div class="image-div carousel16"></div>
            <div class="image-div carousel17"></div>
            <div class="image-div carousel18"></div>
          </div>



        </div>
        <div class="carousel-item">
          <div class="d-flex flex-row justify-content around">
              <div class="image-div carousel19"></div>
              <div class="image-div carousel20"></div>
              <div class="image-div carousel21"></div>
          </div>
          <div class="d-flex flex-row justify-content around">
             
          <div class="image-div carousel22"></div>
          <div class="image-div carousel23"></div>
          <div class="image-div carousel24"></div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>








  </section>
  <!-- Testimonial Section -->
  <section class="orange-section" id="mission">

    <div id="carouselTestimonialSlide" class="carousel slide carousel-fade container-fluid" data-ride="carousel"
      data-interval="7000" data-pause="hover|false">
      <h1 class="heading">What Our Painters Say</h1>
      <ol class="test-indicators carousel-indicators">
        <li data-target="#carouselTestimonialSlide" data-slide-to="0" class="active"></li>
        <li data-target="#carouselTestimonialSlide" data-slide-to="1"></li>
        <li data-target="#carouselTestimonialSlide" data-slide-to="2"></li>
        <li data-target="#carouselTestimonialSlide" data-slide-to="3"></li>
        <li data-target="#carouselTestimonialSlide" data-slide-to="4"></li>

      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <h2 class="testimonial-text">"As someone who is completely non-artistic, I have to say that Alysa did an
            amazing job helping me create
            a
            lovely painting! She was so patient with our group and we had a blast. The 2 hours went by in a flash but
            we all
            ended up with finished products. I highly recommend a paint & vino night - it was such a unique and
            creative way to be social!"
          </h2>
          <img class="testimonial-icons" src="images/icons/user-16.svg" alt="Icon of testimonial avatar">
          <h2 class="testimonial-text">– <em>B. Butzer</em></h2>
        </div>
        <div class="carousel-item">
          <h2 class="testimonial-text">"What a fantastic evening out with the girls. We couldn't believe Alysa could
            teach us to paint something
            we
            would actually hang on our walls in just 2 hours! We've already started recommending this event to
            everyone.
            Perfect for team building or practicing your English language skills - A+"
          </h2>
          <img class="testimonial-icons" src="images/icons/user-7.svg" alt="Icon of testimonial avatar">
          <h2 class="testimonial-text">– <em>M. LeBlanc</em></h2>
        </div>
        <div class="carousel-item">
          <h2 class="testimonial-text">"Please try these workshops to reveal your inner artist and if you think you
            don't have any - you're
            wrong! ;)
            Everything is about good teacher and good atmosphere - you will have both here. Nice music, good wine and
            probably the best teacher you can find in Prague!"</h2>
          <img class="testimonial-icons" src="images/icons/user-6.svg" alt="Icon of testimonial avatar">
          <h2 class="testimonial-text">– <em>E. Cherepanova</em></h2>
        </div>
        <div class="carousel-item">
          <h2 class="testimonial-text">"The workshop with Alysa was brilliant, she is very warm and patient and we had a
            really good time
            learning
            something new! I recommend to give it a try!"</h2>
          <img class="testimonial-icons" src="images/icons/user-19.svg" alt="Icon of testimonial avatar">
          <h2 class="testimonial-text">– <em>L. De Dios</em></h2>
        </div>
        <div class="carousel-item">
          <h2 class="testimonial-text">
            "Alysa prepared a perfect private painting session for us with some delicious wine in a stellar location.
            She was
            helpful and excited to see what we made. It was an all around 10/10 afternoon experience. I would highly
            recommend."
          </h2>
          <img class="testimonial-icons" src="images/icons/user-15.svg" alt="Icon of testimonial avatar">
          <h2 class="testimonial-text">– <em>S. Olds</em></h2>
        </div>
      </div>
    </div>




  </section>




  <!-- Location Section -->
  <section class="colored-section " id="location">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
          <h2 class="h2-location">Location</h2>
          <br>
          <p class="p-location">Krizikova Street, Prague 8<br> Note: Workshops can also take place in local cafes or
            parks.
            Exact location will always be confirmed in your reservation email.
          </p>


        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
          <img src="images/location.jpg" class="strv-img mx-auto" alt="Image of Location of Painting Classes">
        </div>

      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact">
    <div class="orange-section container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <h1>Contact</h1>
          <br>
          <img class="alysa-img" src="images/profile.png" alt="Image of Alysa">
          <h4 class="contact-heading">Alysa – Director and painting instructor</h4>
          <h4 class="contact-heading">Mobile: +420 773 047 368</h4>

        </div>

        <div class="mobile-padding col-lg-6">
          <form action="https://formspree.io/alyyamada@gmail.com" method="POST" />
          <div class="form-group">
            <h1>Say Hello!</h1>
            <input type="text" name="_replyto" class="form-control" id="exampleFormControlInput1"
              placeholder="you@email.com">
          </div>
          <div class="form-group form-row">
            <div class="col">
              <input type="text" name="firstname" class="form-control" placeholder="First Name">
            </div>
            <div class="col">
              <input type="text" name="lastname" class="form-control" placeholder="Last Name">
            </div>
          </div>
          <div class="form-group">
            <textarea type="text" name="message" class="form-control" id="exampleFormControlTextarea1"
              rows="10"></textarea>
          </div>
          <input type="submit" class="form-control btn btn-lg btn-dark" value="Send">
          <input type="hidden" name="_subject" value="Message From paint-and-vino" />
          </form>
        </div>
      </div>
  </section>

  <footer class="colored-section" id="footer">
    <div class="container-fluid">
      <p>© Copyright 2019 Paint & Vino</p>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>


</body>

</html>