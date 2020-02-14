@extends('layouts.app')

@section('content')
  <div id="offers-page">
    <div class="content-box">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <h1>Sign Up To Recieve Notifications For Deals</h1>

          <form>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="firstNameInput">First Name</label>
                  <input type="text" class="form-control" name="fname" id="firstNameInput" placeholder="John">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lastNameInput">Last Name</label>
                  <input type="text" class="form-control" name="lname" id="lastNameInput" placeholder="Smith">
                </div>
              </div>

            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="emailInput">Email address</label>
                  <input type="email" class="form-control" name="email" id="emailInput" placeholder="name@example.com">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="phoneInput">Phone Number</label>
                  <input type="text" class="form-control" name="phone" id="phoneInput" placeholder="0404-040-040">
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