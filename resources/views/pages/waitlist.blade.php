@extends('layouts.app')

@section('content')
  <div id="waitlist-page">
    <div class="content-box">
      <div class="row">
        <div class="col-md-6">
          <h1>Get On The Waitlist</h1>

          <form>
            <div class="form-group">
              <label for="emailInput">Email address</label>
              <input type="email" class="form-control" name="email" id="emailInput" placeholder="name@example.com">
            </div>
            <div class="form-group">
              <label for="phoneInput">Phone Number</label>
              <input type="text" class="form-control" name="phone" id="phoneInput" placeholder="0404-040-040">
            </div>
            <div class="form-group">
              <label for="guestsInput">Number Of Guests</label>
              <select name="guests" class="form-control" id="guestsInput">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
              </select>
            </div>
            <div class="form-group">
              <label for="timeInput">Time Of Arrival</label>
              <select name="time" class="form-control" id="timeInput">
                <option value="12">12:00pm</option>
                <option value="12:30">12:30pm</option>
                <option value="1">1:00pm</option>
                <option value="1:30">1:30pm</option>
                <option value="2">2:00pm</option>
                <option value="2:30">2:30pm</option>
                <option value="3">3:00pm</option>
                <option value="3:30">3:30pm</option>
                <option value="4">4:00pm</option>
                <option value="4:30">4:30pm</option>
                <option value="5">5:00pm</option>
                <option value="5:30">5:30pm</option>
                <option value="6">6:00pm</option>
                <option value="6:30">6:30pm</option>
                <option value="7">7:00pm</option>
                <option value="7:30">7:30pm</option>
                <option value="8">8:00pm</option>
              </select>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary mb-2">Confirm</button>
            </div>
          </form>

        </div>
        <div class="col-md-6">
          <p>Please Note: This is not a reservation. You will be added to the current wait list. You may have a short wait once you arrive while we prepare your table.</p>
        </div>
      </div> 
    </div>
  </div>
@endsection