{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <input type="text" name="nid">
       
        <select name="role" id="">
            <option value="1">Admin</option>
            <option value="2">Vandor</option>
            <option value="3">User</option>
        </select>
        
   
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}



{{-- =============================================Rgistration from ===================================================== --}}

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket Plus">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracketplus">
    <meta property="og:title" content="Bracket Plus">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Bracket Plus Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="{{ asset('backend') }}/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/lib/select2/css/select2.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('backend') }}/css/bracket.css">
  </head>

  <body>
    
    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> Online  <span class="tx-info">Shop BD</span> <span class="tx-normal">]</span></div>
        <div class="tx-center mg-b-40">The Admin Template For Perfectionist</div>

        <form method="POST" action="{{ route('register') }}">
          @csrf
        <div class="form-group">
            <select name="role" id="" class="form-control">
               <option value="">----------------Select Role---------------------</option>
               <option value="1">Admin</option>
               <option value="2">Vandor</option>
               <option value="3">User</option>
            </select>

        </div><!-- form-group -->

        <div class="form-group"  >
          <input type="text" class="form-control"  name="name" placeholder="Enter your username">
        </div><!-- form-group -->



        <div class="form-group">
          <input type="text" class="form-control"  name="email" placeholder="Enter your Email ID">
        </div><!-- form-group -->


        <div class="form-group">
            <input type="text" class="form-control"  name="nid" placeholder="Enter Your NID Number">
          </div><!-- form-group -->

        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Enter your password">
        </div><!-- form-group -->

        <div class="form-group">
          <input type="password" class="form-control" name="password_confirmation" placeholder="Enter your Confirm passwrod">
        </div><!-- form-group -->

        
       {{-- --------------birthday section------------------------- --}}

        {{-- <div class="form-group">
          <label class="d-block tx-11 tx-uppercase tx-medium tx-spacing-1">Birthday</label>
          <div class="row row-xs">
            <div class="col-sm-4">
              <select class="form-control select2" data-placeholder="Month">
                <option label="Month"></option>
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
              </select>
            </div><!-- col-4 -->
            <div class="col-sm-4 mg-t-20 mg-sm-t-0">
              <select class="form-control select2" data-placeholder="Day">
                <option label="Day"></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div><!-- col-4 -->
            <div class="col-sm-4 mg-t-20 mg-sm-t-0">
              <select class="form-control select2" data-placeholder="Year">
                <option label="Year"></option>
                <option value="1">2010</option>
                <option value="2">2011</option>
                <option value="3">2012</option>
                <option value="4">2013</option>
                <option value="5">2014</option>
              </select>
            </div><!-- col-4 -->
          </div><!-- row -->
        </div><!-- form-group --> --}}


       
        <div class="form-group tx-12">By clicking the Sign Up button below, you agreed to our privacy policy and terms of use of our website.</div>
        <button type="submit" class="btn btn-info btn-block">Sign Up</button>
    </form>
        <div class="mg-t-40 tx-center">Not yet a member? <a href="{{ route('login') }}" class="tx-info">Login </a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <script src="{{ asset('backend') }}/lib/jquery/jquery.min.js"></script>
    <script src="{{ asset('backend') }}/lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="{{ asset('backend') }}/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('backend') }}/lib/select2/js/select2.min.js"></script>
    <script>
      $(function(){
        'use strict';

        $('.select2').select2({
          minimumResultsForSearch: Infinity
        });
      });
    </script>

  </body>
</html>
