@extends('asset.app')
@section('css_file')

@endsection
@section('main')
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-6 mx-auto">
            <div class="auth-form-light text-left p-5">
              <?php echo logo_other_side(); ?>
              @if(Session::has('status'))
                  <div class="alert alert-success" role="alert">
                    {{ Session::get('status') }}
                  </div>
              @endif
              <h4>Bro! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password" required>
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input" name="remember">
                      Remember Me
                    </label>
                  </div>
                  <a href="{{ url('/forgot-password') }}" class="auth-link text-black">Forgot password?</a>
                </div>{{-- 
                <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="mdi mdi-facebook mr-2"></i>Connect using facebook
                  </button>
                </div> --}}
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="{{ url('/register') }}" class="text-primary">SIGN UP</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>


@endsection
@section('js_file')

@endsection