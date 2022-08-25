<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Registation</title>
  </head>
  <body>
  

  <div class="half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <div class="form-block">
              <div class="text-center mb-5">
              <h3>Register Account</h3>
              
              </div>
              <form action="{{route('register-process')}}" method="POST">
                @if (Session::has('success'))
                    <div class="alet alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
                @if (Session::has('fail'))
                    <div class="alet alert-danger">
                        {{Session::get('fail')}}
                    </div>
                @endif
                @csrf
                <div class="form-floating mb-4">
                    <input type="text" class="form-control" name="username" id="username" placeholder="Enter Your User Name" value="{{ old('username') }}" >
                    <label for="username">Username</label>
                    <span class="text-danger">
                    @error('username')
                    {{ $message }}
                    @enderror
                    </span>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your Password" value="{{ old('pass') }}" >
                    <label for="password">Password</label>
                    <span class="text-danger">
                    @error('password')
                    {{ $message }}
                    @enderror
                    </span>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Enter Your Ful Name " value="{{ old('fullname') }}" >
                    <label for="fullname">Full name</label>
                    <span class="text-danger">
                    @error('fullname')
                    {{ $message }}
                    @enderror
                    </span>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="address" id="address" placeholder="Enter Your Address" value="{{ old('address') }}" >
                    <label for="address">Address</label>
                    <span class="text-danger">
                    @error('address')
                    {{ $message }}
                    @enderror
                    </span>
                </div>

                <div class="form-floating mb-3">
                     <input type="text" class="form-control" name="email" id="email" placeholder="Enter Your Email" value="{{ old('email') }}" >
                     <label for="email">Email Address</label>
                     <span class="text-danger">
                     @error('eamail')
                     {{ $message }}
                     @enderror
                    </span>
                </div>
                
                <div class="d-sm-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Agree our <a href="#">Terms and Conditions</a></span>
                    <input type="checkbox" checked="checked"/>
                    <div class="control__indicator"></div>
                  </label>
                  <span class="ml-auto"><a href="#" class="forgot-pass">Have an account? Login</a></span> 
                </div>

                <input type="submit" value="Register" class="btn btn-block btn-primary">

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>