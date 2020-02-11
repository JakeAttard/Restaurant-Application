<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Stylesheet -->
        <link rel="stylesheet" href="css/app.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>
    <body>
        <section id="welcome">
            <div class="welcome-menu">
                <div class="logo">
                  <img src="https://webstockreview.net/images/clipart-restaurant-restaurant-logo-5.png" alt="Logo">
                </div>
                <div class="menu">
                <div class="menu-title">
                    Menu
                </div>
                <ul class="links">
                    <li>
                    <a href="#">Menu</a>
                    </li>
                    <li>
                    <a href="#">Wait List</a>
                    </li>
                    <li>
                    <a href="#">Offers</a>
                    </li>
                    <li>
                    <a href="#">Gift Cards</a>
                    </li>
                </ul>
                </div>
      
                <div class="social-icons">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>
      
                <div class="location">
                <div class="address">
                    234 Main Street,<br>
                    Surfers Paradise, Gold Coast 4209
                </div>
                <div class="phone-number">
                    <a href="tel:+61452525251">0452-525-251</a>
                </div>
                </div>
            </div>
      
            <div class="welcome-jumbo">
              <div class="status">NEW</div>
              <h1>Billy Burger</h1>
              <img src="img/billyBurgerImg.png" class="burger-fries" alt="">
            </div>
            </section>
      
            <section id="information">
              <div class="restaurant-image">
                <img src="img/top-down.jpg" alt="">
              </div>
      
              <div class="info">
                <h2>We Started From The Bottom in 1987</h2>
                <div class="paragraphs">
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam sequi aliquid fugiat reprehenderit incidunt veniam esse. Iure nisi obcaecati officiis ab assumenda dolorem amet libero. Expedita ut odit beatae rem. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam sequi aliquid fugiat reprehenderit incidunt veniam esse. Iure nisi obcaecati officiis ab assumenda dolorem amet libero. Expedita ut odit beatae rem.</p>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam sequi aliquid fugiat reprehenderit incidunt veniam esse. Iure nisi obcaecati officiis ab assumenda dolorem amet libero. Expedita ut odit beatae rem. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam sequi aliquid fugiat reprehenderit incidunt veniam esse. Iure nisi obcaecati officiis ab assumenda dolorem amet libero. Expedita ut odit beatae rem.</p>
                </div>
      
                <a href="#" class="about-link">
                  <span>Learn more about restaurants</span>
                  <div class="circle-right">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                  </div>
                </a>
              </div>
            </section>
      
            <section id="food-preview">
              <h2>We have everything you need to kill your hunger</h2>
              <div class="button-rounded">
                View Our Menu
              </div>
              <div class="container">
                <div class="left-btn">
                  <i class="fa fa-chevron-left" aria-hidden="true"></i>
                </div>
                <div class="right-btn">
                  <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </div>
                <div class="food-slider">
                  <div class="sliding-system">
                    <div class="slide">
                      <div class="background"></div>
                      <div class="content">
                        <div class="food-title">
                          Starters
                        </div>
                        <p class="food-description">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum numquam, iusto iure debitis, porro ipsa temporibus voluptates qui praesentium obcaecati impedit, sequi quod quos fuga? Voluptatum ex animi error totam!
                        </p>
                        <div class="food-image">
                          <img src="img/startersImg.png" alt="">
                        </div>
                      </div>
                    </div>
                    <div class="slide">
                      <div class="background"></div>
                      <div class="content">
                        <div class="food-title">
                          Burgers
                        </div>
                        <p class="food-description">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum numquam, iusto iure debitis, porro ipsa temporibus voluptates qui praesentium obcaecati impedit, sequi quod quos fuga? Voluptatum ex animi error totam!
                        </p>
                        <div class="food-image">
                          <img src="img/burgerImg.png" alt="">
                        </div>
                      </div>
                    </div>
                    <div class="slide">
                      <div class="background"></div>
                      <div class="content">
                        <div class="food-title">
                          Entrees
                        </div>
                        <p class="food-description">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum numquam, iusto iure debitis, porro ipsa temporibus voluptates qui praesentium obcaecati impedit, sequi quod quos fuga? Voluptatum ex animi error totam!
                        </p>
                        <div class="food-image">
                          <img src="img/entreeImg.png" alt="">
                        </div>
                      </div>
                    </div>
                    <div class="slide">
                      <div class="background"></div>
                      <div class="content">
                        <div class="food-title">
                          Sides
                        </div>
                        <p class="food-description">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum numquam, iusto iure debitis, porro ipsa temporibus voluptates qui praesentium obcaecati impedit, sequi quod quos fuga? Voluptatum ex animi error totam!
                        </p>
                        <div class="food-image">
                          <img src="img/sideImg.png" alt="">
                        </div>
                      </div>
                    </div>
                    <div class="slide">
                      <div class="background"></div>
                      <div class="content">
                        <div class="food-title">
                          Deserts
                        </div>
                        <p class="food-description">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum numquam, iusto iure debitis, porro ipsa temporibus voluptates qui praesentium obcaecati impedit, sequi quod quos fuga? Voluptatum ex animi error totam!
                        </p>
                        <div class="food-image">
                          <img src="img/desertImg.png" alt="">
                        </div>
                      </div>
                    </div>
                    <div class="slide">
                      <div class="background"></div>
                      <div class="content">
                        <div class="food-title">
                          Drinks
                        </div>
                        <p class="food-description">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum numquam, iusto iure debitis, porro ipsa temporibus voluptates qui praesentium obcaecati impedit, sequi quod quos fuga? Voluptatum ex animi error totam!
                        </p>
                        <div class="food-image">
                          <img src="https://i.dlpng.com/static/png/3877536-ice-cream-desserts-transparent-background-png-png-arts-png-desserts-460_244_preview.webp" alt="">
                        </div>
                      </div>
                    </div>
                    <div class="slide">
                      <div class="background"></div>
                      <div class="content">
                        <div class="food-title">
                          Beers
                        </div>
                        <p class="food-description">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum numquam, iusto iure debitis, porro ipsa temporibus voluptates qui praesentium obcaecati impedit, sequi quod quos fuga? Voluptatum ex animi error totam!
                        </p>
                        <div class="food-image">
                          <img src="https://i.dlpng.com/static/png/3877536-ice-cream-desserts-transparent-background-png-png-arts-png-desserts-460_244_preview.webp" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
    </body>
</html>
