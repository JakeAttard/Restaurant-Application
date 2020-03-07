@extends('layouts.landing')

@section('title')
{{$settings["general"]->site_title}} Australia's #1 burgers
@endsection

@section('content')
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
@endsection