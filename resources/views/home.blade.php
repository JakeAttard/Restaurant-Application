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

  @include('includes.food-categories-slider');
@endsection