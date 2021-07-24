@extends('asset.app')
@section('css_file')
  <link rel="stylesheet" href="{{ asset('public/vendors/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
@endsection
@section('main')
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <?php echo logo_other_side(); ?>
                  <hr>
                  <h4 class="card-title">Follow all steps for REGISTER</h4>
                  @if ($errors->any())
                      @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                        {{ $error }}
                        </div>
                      @endforeach
                  @endif
                  <form id="example-form" action="{{ url('/register') }}" method="post">
                    @csrf
                    <div>

                      <h3>Profile</h3>
                      <section>
                        <h3>Profile</h3>
                        <div class="form-group">
                          <label>First name</label>
                          <input type="text" name="firstname" class="form-control" aria-describedby="" placeholder="Enter first name" required>
                        </div>
                        <div class="form-group">
                          <label>Middle name</label>
                          <input type="text" name="middlename" class="form-control" placeholder="Enter middle name">
                        </div>
                        <div class="form-group">
                          <label>Last name</label>
                          <input type="text" name="lastname" class="form-control" placeholder="Enter Last name" required>
                        </div>
                        <div class="form-group">
                          <label>Age</label>
                          <input type="number" name="age" class="form-control" placeholder="Input your age" required>
                        </div>
                        <div class="form-group">
                          <label>Gender</label>
                          <select class="selectpicker" name="gender" data-width="100%" data-live-search="false" required>
                            <option></option>
                            <?php echo getOption('gender'); ?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Brthday</label>
                          <input type="date" name="birth" class="form-control" required>
                        </div>
                      </section>


                      <h3>Contact</h3>
                      <section>
                        <h3>Contact</h3>
                        <div class="form-group">
                          <label>Phome Number</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">+880</span>
                            </div>
                            <input type="text" name="phone" class="form-control" aria-label="" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label>City</label>
                          <input type="text" name="city" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label>State</label>
                          <input type="text" name="state" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label>Zip</label>
                          <input type="number" name="zip" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label>Country</label>
                          <select class="selectpicker" name="country" data-width="100%" data-live-search="false" required>
                            <option></option>
                            <?php echo getOption('country'); ?>
                          </select>
                        </div>
                      </section>

                      <h3>Other</h3>
                      <section>
                         <h3>(Optional)</h3>
                        <div class="form-group">
                          <label>Occupation</label>
                          <input type="text" name="occupation" class="form-control" placeholder="Your occupation">
                        </div>
                        <div>
                        <label>Education</label>
                          <input type="text" name="education" class="form-control" placeholder="Your education degree">
                        </div>
                      </section>


                    <h3>Finish</h3>
                      <section>
                        <h3>Finish</h3>
                        <div class="form-group">
                          <label>Email address</label>
                          <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                          <label>Password</label>
                          <input type="password" name="password" class="form-control" placeholder="Password" minlength="8" required>
                        </div>
                        <div class="form-group">
                          <label>Confirm Password</label>
                          <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password" required>
                        </div>
                      {{--   <div class="form-check">
                          <label class="form-check-label">
                            <input class="checkbox" type="checkbox">
                            I agree with the Terms and Conditions.
                          </label>
                        </div> --}}
                      </section>
                    </div>
                    <button id="form_submit" type="submit" style="visibility: hidden;">Save</button>
                  </form>
                  <div class="text-center mt-4 font-weight-light">
                      Have an account? <a href="{{ url('/login') }}" class="text-primary">SIGN IN</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
@section('js_file')
  <script src="{{ asset('public/vendors/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
  <script src="{{ asset('public/vendors/jquery-steps/jquery.steps.min.js') }}"></script>
  <script src="{{ asset('public/vendors/jquery-validation/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('public/js/wizard.js') }}"></script>
@endsection