<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />
  <link rel="stylesheet" href="css/icon-font.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="shortcut icon" type="image/png" href="img/favicon.png" />

  <title>Natours | Exciting tours for adventurous people</title>
</head>

<body>
  <div class="navigation">
    <input type="checkbox" class="navigation__checkbox" id="navi-toggle" />

    <label for="navi-toggle" class="navigation__button">
      <span class="navigation__icon">&nbsp;</span>
    </label>

    <div class="navigation__background">&nbsp;</div>
    <!--  &nbsp = espace en html -->
    <nav class="navigation__nav">
      <ul class="navigation__list">
        <li class="navigation__item">
          <a href="#" class="navigation__link"><span>01</span> About Natours</a>
        </li>
        <li class="navigation__item">
          <a href="#" class="navigation__link"><span>02</span> Your benefits</a>
        </li>
        <li class="navigation__item">
          <a href="#" class="navigation__link"><span>03</span> Popular tours</a>
        </li>
        <li class="navigation__item">
          <a href="#" class="navigation__link"><span>04</span> Stories</a>
        </li>
        <li class="navigation__item">
          <a href="#" class="navigation__link"><span>05</span> Book now</a>
        </li>
      </ul>
    </nav>
  </div>

  <header class="header">
    <div class="header__logo-box">
      <img src="img/logo-white.png" alt="Logo" class="header__logo" />
    </div>
    <div class="header__text-box">
      <h1 class="heading-primary">
        <span class="heading-primary--main">Outdoors</span>
        <span class="heading-primary--sub">is where life happens</span>
      </h1>

      <a href="#section-tours" class="btn btn--white btn--animated">Discover our tours</a>
    </div>
  </header>

  <main>
    <section class="section-about">
      <div class="u-center-text u-margin-bottom-big">
        <h2 class="heading-secondary">
          Exciting tours for adventurous people
        </h2>
      </div>
      <div class="row">
        <div class="col-1-of-2">
          <h3 class="heading-tertiary u-margin-bottom-small">
            You're going to fall in love with nature
          </h3>
          <p class="paragraph">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error
            iure temporibus dolor ad fugit velit, laudantium ab. Impedit ipsum
            excepturi qui possimus, nesciunt error voluptatum perspiciatis,
            odio totam, et tempore?
          </p>
          <h3 class="heading-tertiary u-margin-bottom-small">
            Live adventures like you never have before
          </h3>
          <p class="paragraph">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Perferendis ab voluptate dolorum, magni atque fugiat reiciendis.
            Laborum, cum accusantium, at quam soluta reiciendis id
            perspiciatis molestiae odio autem cupiditate! Iste.
          </p>
          <a href="#" class="btn-text">Learn more &rarr;</a>
        </div>
        <div class="col-1-of-2">
          <div class="composition">
            <img src="img/nat-1-large.jpg" alt="Photo 1" class="composition__photo composition__photo--p1" /><img src="img/nat-2-large.jpg" alt="Photo 2" class="composition__photo composition__photo--p2" /><img src="img/nat-3-large.jpg" alt="Photo 3" class="composition__photo composition__photo--p3" />
          </div>
        </div>
      </div>
    </section>

    <section class="section-features">
      <div class="row">
        <div class="col-1-of-4">
          <div class="feature-box">
            <i class="feature-box__icon icon-basic-world"></i>
            <h3 class="heading-tertiary">Explore the world</h3>
            <p class="feature-box__text">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error
              quasi blanditiis itaque accusamus praesentium alias
            </p>
          </div>
        </div>

        <div class="col-1-of-4">
          <div class="feature-box">
            <i class="feature-box__icon icon-basic-compass"></i>
            <h3 class="heading-tertiary">Meet nature</h3>
            <p class="feature-box__text">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error
              quasi blanditiis itaque accusamus praesentium alias
            </p>
          </div>
        </div>

        <div class="col-1-of-4">
          <div class="feature-box">
            <i class="feature-box__icon icon-basic-map"></i>
            <h3 class="heading-tertiary">Find your way</h3>
            <p class="feature-box__text">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error
              quasi blanditiis itaque accusamus praesentium alias
            </p>
          </div>
        </div>

        <div class="col-1-of-4">
          <div class="feature-box">
            <i class="feature-box__icon icon-basic-heart"></i>
            <h3 class="heading-tertiary">Live a healthier life</h3>
            <p class="feature-box__text">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error
              quasi blanditiis itaque accusamus praesentium alias
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section-tours" id="section-tours">
      <div class="u-center-text u-margin-bottom-big">
        <h2 class="heading-secondary">Most popular tours</h2>
      </div>

      <div class="row">
        <div class="col-1-of-3">
          <div class="card">
            <div class="card__side card__side--front">
              <div class="card__picture card__picture--1">&nbsp;</div>
              <!-- &nbps; =  espace " " -->
              <h4 class="card__heading">
                <span class="card__heading-span card__heading-span--1">
                  The sea explorer
                </span>
              </h4>
              <div class="card__details">
                <ul>
                  <li>3 day tour</li>
                  <li>Up to 30 people</li>
                  <li>2 tour guide</li>
                  <li>Sleep in cozy hotels</li>
                  <li>Difficulty : easy</li>
                </ul>
              </div>
            </div>
            <div class="card__side card__side--back card__side--back-1">
              <div class="card__cta">
                <div class="card__price-box">
                  <p class="card__price-only">Only</p>
                  <p class="card__price-value">$297</p>
                </div>
                <a href="#popup" class="btn btn--white">Book now !</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-1-of-3">
          <div class="card">
            <div class="card">
              <div class="card__side card__side--front">
                <div class="card__picture card__picture--2">&nbsp;</div>
                <!-- &nbps; =  espace " " -->
                <h4 class="card__heading">
                  <span class="card__heading-span card__heading-span--2">
                    The forest explorer
                  </span>
                </h4>
                <div class="card__details">
                  <ul>
                    <li>7 day tour</li>
                    <li>Up to 40 people</li>
                    <li>6 tour guide</li>
                    <li>Sleep in provided tents</li>
                    <li>Difficulty : medium</li>
                  </ul>
                </div>
              </div>
              <div class="card__side card__side--back card__side--back-2">
                <div class="card__cta">
                  <div class="card__price-box">
                    <p class="card__price-only">Only</p>
                    <p class="card__price-value">$497</p>
                  </div>
                  <a href="#popup" class="btn btn--white">Book now !</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-1-of-3">
          <div class="card">
            <div class="card__side card__side--front">
              <div class="card__picture card__picture--3">&nbsp;</div>
              <!-- &nbps; =  espace " " -->
              <h4 class="card__heading">
                <span class="card__heading-span card__heading-span--3">
                  The snow adventurer
                </span>
              </h4>
              <div class="card__details">
                <ul>
                  <li>5 day tour</li>
                  <li>Up to 15 people</li>
                  <li>3 tour guide</li>
                  <li>Sleep in provided tents</li>
                  <li>Difficulty : hard</li>
                </ul>
              </div>
            </div>
            <div class="card__side card__side--back card__side--back-3">
              <div class="card__cta">
                <div class="card__price-box">
                  <p class="card__price-only">Only</p>
                  <p class="card__price-value">$897</p>
                </div>
                <a href="#popup" class="btn btn--white">Book now !</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="u-center-text u-margin-top-huge">
        <a href="#" class="btn btn--green">Discover all tours</a>
      </div>
    </section>

    <section class="section-stories">
      <div class="bg-video">
        <video class="bg-video__content" autoplay muted loop>
          <source src="img/video.mp4" type="video/mp4" />
          <source src="img/video.webm" type="video/webm" />
          Your browser is not supported!
          <!-- Si les deux vidéos ne fonctionnent pas ce méssage apparait -->
        </video>
      </div>

      <div class="u-center-text u-margin-bottom-big">
        <h2 class="heading-secondary">We make people genuinely happy</h2>
      </div>
      <div class="row">
        <div class="story">
          <figure class="story__shape">
            <img class="story__image" src="img/nat-8.jpg" alt="Person on a tour" />
            <figcaption class="story__caption">Mary Smith</figcaption>
          </figure>
          <div class="story__text">
            <h3 class="heading-tertiary u-margin-bottom-small">
              I had the best week ever with my family
            </h3>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam
              temporibus tenetur vitae aut, maxime pariatur? Cupiditate labore
              modi, rem earum, tempora, ea voluptates minima quibusdam unde
              doloribus repellendus consequatur excepturi. lorem
            </p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="story">
          <figure class="story__shape">
            <img class="story__image" src="img/nat-9.jpg" alt="Person on a tour" />
            <figcaption class="story__caption">Jack Wilson</figcaption>
          </figure>
          <div class="story__text">
            <h3 class="heading-tertiary u-margin-bottom-small">
              WOW! My life is completely different now
            </h3>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam
              temporibus tenetur vitae aut, maxime pariatur? Cupiditate labore
              modi, rem earum, tempora, ea voluptates minima quibusdam unde
              doloribus repellendus consequatur excepturi. lorem
            </p>
          </div>
        </div>
      </div>

      <div class="u-center-text u-margin-bottom-big">
        x
        <a href="#" class="btn-text">Read all stories &rarr; </a>
      </div>
    </section>

    <section class="section-book">
      <div class="row">
        <div class="book">
          <div class="book__form">
            <form action="#" class="form" method="post">
              <div class="u-margin-bottom-medium">
                <h2 class="heading-secondary">Start booking now</h2>
              </div>
              <div class="form__group">
                <input type="text" class="form__input" placeholder="Full Name" id="name" required name="name" />
                <label for="name" class="form__label">Full name</label>
              </div>

              <div class="form__group">
                <input type="email" class="form__input" placeholder="Email address" id="email" required name="email" />
                <label for="email" class="form__label">Email address</label>
              </div>

              <div class="form__group u-margin-bottom-medium">
                <div class="form__radio-group">
                  <input type="radio" class="form__radio-input" id="small" name="tour" value="small" />
                  <label for="small" class="form__radio-label">
                    <span class="form__radio-button"></span>
                    Small tour group</label>
                </div>

                <div class="form__radio-group">
                  <input type="radio" class="form__radio-input" id="large" name="tour" value="large" />
                  <label for="large" class="form__radio-label">
                    <span class="form__radio-button"></span>
                    Large tour group</label>
                </div>
              </div>

              <div class="form__group">
                <button class="btn btn--green" type="submit">Next Step &rarr;</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="footer__logo-box">
        <img src="./img/logo-green-2x.png" alt="Full logo" class="footer__logo" />
      </div>
      <div class="row">
        <div class="col-1-of-2">
          <div class="footer__navigation">
            <ul class="footer__list">
              <li class="footer__item">
                <a href="#" class="footer__link">Company</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Contact us</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Carrers</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Privacy policy</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Terms</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-1-of-2">
          <p class="footer__copyright">
            Built by <a href="#" class="footer__link">Hadel LADGHEM</a> for
            his online course
            <a href="#" class="footer__link">Advanced CSS and SASS</a>.
            Copyright &copy; by Hadel Ladghem. You are 100% allowed to use
            this webpage for both personal and commercial usen but NOT to
            claim it as your own design. A credit to the original author,
            Jonas Schmedtman.
          </p>
        </div>
      </div>
    </footer>

    <div class="popup" id="popup">
      <div class="popup__content">
        <div class="popup__left">
          <img src="img/nat-8.jpg" alt="Tour photo" class="popup__img" />
          <img src="img/nat-9.jpg" alt="Tour photo" class="popup__img" />
        </div>
        <div class="popup__right">
          <a href="#section-tours" class="popup__close">&times;</a>
          <h2 class="heading-secondary u-margin-bottom-small">
            Start booking now
          </h2>
          <h3 class="heading tertiary u-margin-bottom-small">
            Important &ndash; Please read these terms before booking
          </h3>
          <p class="popup__text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis
            temporibus quis ad ut, quos expedita incidunt, autem ipsa
            exercitationem asperiores similique magni harum nihil pariatur
            itaque est modi laborum eius. Assumenda, veritatis dicta.
            Molestiae doloremque dolores odit id. Accusamus possimus, incidunt
            a quas tempora culpa optio saepe ea ad odio itaque molestiae est
            consequatur dicta animi repellat blanditiis nihil. Facere?
          </p>
          <a href="#" class="btn btn--green">Book now</a>
        </div>
      </div>
    </div>

    <!-- <section class="grid-test">
      <div class="row">
        <div class="col-1-of-2">Col 1 of 2</div>
        <div class="col-1-of-2">Col 1 of 2</div>
      </div>
      <div class="row">
        <div class="col-1-of-3">Col 1 of 3</div>
        <div class="col-1-of-3">Col 1 of 3</div>
        <div class="col-1-of-3">Col 1 of 3</div>
      </div>
      <div class="row">
        <div class="col-1-of-3">Col 1 of 3</div>
        <div class="col-2-of-3">Col 2 of 3</div>
      </div>
      <div class="row">
        <div class="col-1-of-4">Col 1 of 4</div>
        <div class="col-1-of-4">Col 1 of 4</div>
        <div class="col-1-of-4">Col 1 of 4</div>
        <div class="col-1-of-4">Col 1 of 4</div>
      </div>
      <div class="row">
        <div class="col-1-of-4">Col 1 of 4</div>
        <div class="col-1-of-4">Col 1 of 4</div>
        <div class="col-2-of-4">Col 2 of 4</div>
      </div>
      <div class="row">
        <div class="col-1-of-4">Col 1 of 4</div>
        <div class="col-3-of-4">Col 3 of 4</div>
      </div>
    </section> -->
  </main>
</body>

</html>