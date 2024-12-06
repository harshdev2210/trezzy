<!-- @extends('layouts.user_type.guest') -->

@section('content')



  <main class="main-content  mt-0"   style="background-image: url('{{ asset('assets/img/curved-images/driftstudio-bg.jpg') }}');  background-size: cover; background-position: center bottom 30%; min-height: 100vh;">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row" >
            <div class="col-xl-4 col-lg-5 col-md-12 d-flex flex-column mx-auto" style="">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                     <!-- <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('..public/assets/img/curved-images/curved6.jpg')"></div> -->
                    <img src="{{ asset('assets/img/driftsurfacestudio.png') }}" height="100px" width="310px"alt="image"/>
                  
                  <!-- <p class="mb-0">Create a new acount<br></p>driftsurefacestudio.png
                  <p class="mb-0">OR Sign in with these credentials:</p>
                  <p class="mb-0">Email <b>admin@softui.com</b></p>
                  <p class="mb-0">Password <b>secret</b></p> -->
                </div>
                <div class="card-body">
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                <script>
                    setTimeout(function(){
                        document.getElementById('errorAlert').style.display = 'none';
                    }, 5000); // Hide error message after 5 seconds (5000 milliseconds)
                </script>
                @endif
                @if(session('error'))
                    <div id="errorAlert" class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    <script>
                        setTimeout(function(){
                            document.getElementById('errorAlert').style.display = 'none';
                        }, 5000); // Hide error message after 5 seconds (5000 milliseconds)
                    </script>
                @endif
                  <form role="form" method="POST" action="{{route('login.user')}}">
                    @csrf
                    <label class="text-light font-weight-bolder">User Name</label>
                    <div class="mb-3  ">
                      <input type="text" class="form-control " name="email" id="email" placeholder="User Name" value="" aria-label="Email" aria-describedby="email-addon">
                      @error('email')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <label class="text-light font-weight-bolder">Password</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="" aria-label="Password" aria-describedby="password-addon">
                      @error('password')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                      <label class="form-check-label text-light" for="rememberMe">Remember me</label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign in</button>
                    </div>
                  </form>
                </div>
                <!-- <div class="card-footer text-center pt-0 px-lg-2 px-1"> -->
                <!-- <small class="text-muted">Forgot you password? Reset you password
                  <a href="/login/forgot-password" class="text-info text-gradient font-weight-bold">here</a>
                </small> -->
                  <!-- <p class="mb-4 text-sm mx-auto">
                    Don't have an account?
                    <a href="register" class="text-info text-gradient font-weight-bold">Sign up</a>
                  </p> -->
                <!-- </div> -->
              </div>
            </div>
            <!-- <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('..public/assets/img/curved-images/curved6.jpg')"></div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </section>
  </main>

@endsection
