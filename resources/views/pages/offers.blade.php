@extends('layouts.app')

@section('title')
  Offers - {{$settings["general"]->site_title}}
@endsection

@section('content')
  <div id="offers-page">
    <div class="content-box">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <h1>Sign Up To Recieve Notifications For Deals</h1>

          <form method="POST" action="/offers">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="inputFname">First Name</label>
                  <input id="inputFname" type="text" class="form-control form-control-lg @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" placeholder="John" autofocus>
                    @error('fname')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="inputLname">Last Name</label>
                  <input id="inputLname" type="text" class="form-control form-control-lg @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" placeholder="Smith" autofocus>
                    @error('lname')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="inputEmail">Email address</label>
                  <input id="inputEmail" type="text" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="johnsmith@gmail.com" autofocus>
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="inputPhone">Phone Number</label>
                  <input id="inputPhone" type="tel" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" placeholder="0427 238 903" autofocus>
                    @error('phone_number')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <p>In signing up I acknowledge that I am 18 years of age or olders, want to recieve email offers from Billy Burgers and, if I select to join Dine Rewards, agree to the terms and conditions of the program.</p>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <button type="submit" class="btn btn-primary mb-2">Submit</button>
                </div>
              </div>
            </div>
          </form>

        </div>
      </div> 
    </div>
  </div>
@endsection