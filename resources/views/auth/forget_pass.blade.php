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
              @if(Session::has('errors'))
                  <div class="alert alert-danger" role="alert">
                    {{ Session::get('errors') }}
                  </div>
              @endif
              <h4>Bro! let's find your account</h4>
              <form class="pt-3" method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">RECOVER</button>
                </div>
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