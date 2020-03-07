@extends('layouts.app')

@section('title')
  Offers Thankyou - {{$settings["general"]->site_title}}
@endsection

@section('content')
  <div id="offers-page">
    <div class="content-box">
      <div class="row">
        <div class="col-md-8 offset-md-2 thank-you">
          <h1>Thank you for signing up to recieve our offers.</h1>
          <p>You will be notified of all the special offers we have through email.</p>
        </div>
      </div> 
    </div>
  </div>
@endsection