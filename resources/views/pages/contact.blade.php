@extends('layouts.app')

@section('title')
  Contact Us - {{$settings["general"]->site_title}}
@endsection

@section('content')
  <div id="contact-page">
    <div class="content-box">
      <div class="row">
        <div class="col-md-6">
          <h1>Contact Us</h1>
          <h3>Address</h3>
          <p>{{$settings["general"]->address_1}} {{$settings["general"]->address_2}},<br>
            {{$settings["general"]->city}}, {{$settings["general"]->state}} {{$settings["general"]->zipcode}}
          </p>
          <h3>Phone Number</h3>
          <p>
            <a href="tel:{{$settings["general"]->phone_number}}">{{$settings["general"]->phone_number}}</a>
            </p>
        </div>
        <div class="col-md-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3527.692185086046!2d153.29753351540646!3d-27.84999998273316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b9113f7db22a6e3%3A0x48153a970d0ec660!2sHungry%20Jack&#39;s%20Burgers%20Upper%20Coomera!5e0!3m2!1sen!2sau!4v1583565368826!5m2!1sen!2sau" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
      </div> 
    </div>
  </div>
@endsection