@extends('layouts.admin')

@section('content')
    <div class="container-fluid  dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Edit General Settings </h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ asset('/admin')}}" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit General Settings</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- ============================================================== -->
            <!-- basic form -->
            <!-- ============================================================== -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Edit General Settings</h5>
                    <div class="card-body">
                        <form method="POST" action="/admin/settings/general">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="inputSiteTitle">Site Title</label>
                                <input id="inputSiteTitle" type="text" class="form-control form-control-lg @error('site_title') is-invalid @enderror" name="site_title" value="{{ old('site_title', $general_setting->site_title) }}" required autocomplete="site_title" placeholder="Site Title" autofocus>
                                @error('site_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="inputLogoImageUrl">Logo Image Url</label>
                                <input id="inputLogoImageUrl" type="text" class="form-control form-control-lg @error('logo_image_url') is-invalid @enderror" name="logo_image_url" value="{{ old('logo_image_url', $general_setting->logo_image_url) }}" required autocomplete="logo_image_url" placeholder="Logo Image URL" autofocus>
                                @error('logo_image_url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="inputAddress1">Address 1</label>
                                <input id="inputAddress1" type="text" class="form-control form-control-lg @error('address_1') is-invalid @enderror" name="address_1" value="{{ old('address_1', $general_setting->address_1) }}" required autocomplete="address_1" placeholder="Address 1" autofocus>
                                @error('address_1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="inputAddress2">Address 2</label>
                                <input id="inputAddress2" type="text" class="form-control form-control-lg @error('address_2') is-invalid @enderror" name="address_2" value="{{ old('address_2', $general_setting->address_2) }}" autocomplete="address_2" placeholder="Enter Address 2" autofocus>
                                @error('address_2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="inputCity">City</label>
                                <input id="inputCity" type="text" class="form-control form-control-lg @error('city') is-invalid @enderror" name="city" value="{{ old('city', $general_setting->city) }}" required autocomplete="city" placeholder="Enter City" autofocus>
                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="inputState">State</label>
                                <input id="inputState" type="text" class="form-control form-control-lg @error('state') is-invalid @enderror" name="state" value="{{ old('state', $general_setting->state) }}" required autocomplete="state" placeholder="Enter State" autofocus>
                                @error('state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="inputZipCode">Zip Code</label>
                                <input id="inputZipCode" type="text" class="form-control form-control-lg @error('zipcode') is-invalid @enderror" name="zipcode" value="{{ old('zipcode', $general_setting->zipcode) }}" required autocomplete="zipcode" placeholder="Enter Zipcode" autofocus>
                                @error('zipcode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="inputPhoneNumber">Phone Number</label>
                                <input id="inputPhoneNumber" type="text" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number', $general_setting->phone_number) }}" required autocomplete="phone_number" placeholder="Enter Phone Number" autofocus>
                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                </div>
                                <div class="col-sm-6 pl-0">
                                    <p class="text-right">
                                        <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end basic form -->
            <!-- ============================================================== -->
        </div>
    </div>
@endsection