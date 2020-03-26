@include('header')


<body class="bg-gradient-primary">

    <div class="container">
        
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                </div>
                @foreach ($errors->all() as $error)
                    <li style="color:red">{{ $error }}</li>
                @endforeach
                <form  method="POST" action="register" class="user">
                    @csrf
                  <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="company_name" id="company_name" placeholder="Company Name" required>
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="address" id="address" placeholder="Address">
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="city" id="city" placeholder="City" required>
                    </div>
                    <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="state" id="state" placeholder="State" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="zip" id="zip" placeholder="Zip Code" >
                    </div>
                    <div class="col-sm-6">
                    <input type="number" class="form-control form-control-user" name="phone" id="phone" placeholder="Phone" required>
                    </div>
                  </div>
                  <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Administrator Details</h1>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="text" class="form-control form-control-user" name="first_name" id="first_name" placeholder="First name" >
                    </div>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-user" name="last_name" id="last_name" placeholder="Last name" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control form-control-user" name="email" id="email" placeholder="Email" required>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password" required>
                    </div>
                    <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
                    </div>
                  </div>
                  <input type="submit" class="btn btn-primary btn-user btn-block" value="Register Account">
                  
                  <!-- <hr> -->
                  <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                    <i class="fab fa-google fa-fw"></i> Register with Google
                  </a>
                  <a href="index.html" class="btn btn-facebook btn-user btn-block">
                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                  </a> -->
                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="#">Forgot Password?</a>
                </div>
                <div class="text-center">
                  <a class="small" href="signin">Already have an account? Login!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
    </div>

@include('footer')