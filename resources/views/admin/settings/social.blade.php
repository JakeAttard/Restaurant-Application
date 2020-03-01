@extends('layouts.admin')

@section('content')
    <div class="container-fluid  dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Edit Social Settings </h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ asset('/admin')}}" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Social Settings</li>
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
                    <h5 class="card-header">Edit Social Settings</h5>
                    <div class="card-body">
                        <form method="POST" action="/admin/settings/social">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="inputFacebookUrl">Facebook Url</label>
                                <input id="inputFacebookUrl" type="text" class="form-control form-control-lg @error('facebook_url') is-invalid @enderror" name="facebook_url" value="{{ old('facebook_url', $social_setting->facebook_url) }}" autocomplete="facebook_url" placeholder="Enter Facebook URL" autofocus>
                                @error('facebook_url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                           <div class="form-group">
                                <label for="inputInstagramUrl">Instagram Url</label>
                                <input id="inputInstagramUrl" type="text" class="form-control form-control-lg @error('instagram_url') is-invalid @enderror" name="instagram_url" value="{{ old('instagram_url', $social_setting->instagram_url) }}" autocomplete="instagram_url" placeholder="Enter Instagram URL" autofocus>
                                @error('instagram_url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="inputTwitterUrl">Twitter Url</label>
                                <input id="inputTwitterUrl" type="text" class="form-control form-control-lg @error('twitter_url') is-invalid @enderror" name="twitter_url" value="{{ old('twitter_url', $social_setting->twitter_url) }}" autocomplete="twitter_url" placeholder="Enter Twitter URL" autofocus>
                                @error('twitter_url')
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