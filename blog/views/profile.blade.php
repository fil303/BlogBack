@extends('asset.app')
@section('css_file')
  <link rel="stylesheet" href="{{ asset('public/vendors/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
@endsection
@section('main')
    <div class="card">
      <div class="card-body text-center">
        <div class="mb-4">
          <img src="{{ user('img')==null?asset('public/images.png'): asset('public/'.user('img')) }}" class="img-lg rounded-circle mb-2" alt="profile image">
          <h4>{{ user('name') }}</h4>
          <p class="text-muted mb-0">Gear : {{ user('gear') }}</p><br>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#PorfilPhoto">Change Photo</button>
        </div>
       <div class="card-body">
            <p class="clearfix">
              <span class="float-left">
                Status
              </span>
              <span class="float-right text-muted">
                {{ user('status') ? 'Active' : 'Inctive' }}
              </span>
            </p><hr>
            <p class="clearfix">
              <span class="float-left">
                Phone
              </span>
              <span class="float-right text-muted">
                {{ user('phone') }}
              </span>
            </p><hr>
            <p class="clearfix">
              <span class="float-left">
                Email
              </span>
              <span class="float-right text-muted">
                {{ user('email') }} <?php echo user('email_verified_at') !== null ? '( <span class="text-success" >Veified</span> )' : '<a type="button" href="'.url('/email/verify').'" class="btn btn-primary btn-sm" >Verify</a>'; ?> 
              </span>
            </p><hr>
            <p class="clearfix">
              <span class="float-left">
                Age
              </span>
              <span class="float-right text-muted">
                {{ user('age') }}
              </span>
            </p><hr>
            <p class="clearfix">
              <span class="float-left">
                Birthday
              </span>
              <span class="float-right text-muted">
                {{ user('birth') }}
              </span>
            </p><hr>
            <p class="clearfix">
              <span class="float-left">
                Gander
              </span>
              <span class="float-right text-muted">
                {{ getOption('gender',user('gender'),true,true)  }}
              </span>
            </p><hr>
            <p class="clearfix">
              <span class="float-left">
                City
              </span>
              <span class="float-right text-muted">
                {{ user('city')  }}
              </span>
            </p><hr>
            <p class="clearfix">
              <span class="float-left">
                State
              </span>
              <span class="float-right text-muted">
                {{ user('state')  }}
              </span>
            </p><hr>
            <p class="clearfix">
              <span class="float-left">
                Zip Code
              </span>
              <span class="float-right text-muted">
                {{ user('zip')  }}
              </span>
            </p><hr>
            <p class="clearfix">
              <span class="float-left">
                Country
              </span>
              <span class="float-right text-muted">
                {{ getOption('country',user('country'),true,true)  }}
              </span>
            </p><hr>
        </div>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#PorfilDetails">Update Profile</button>
      </div>
    </div>
{{-- PROFILE PHOTO --}}
    <div class="modal fade" id="PorfilPhoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          
          <div class="modal-body">
            <form action="{{ url('/profile/pic_update') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label>Profile Photo</label>
                <input type="file" name="image" class="form-control" required>
              </div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
          </div>
        </div>
      </div>
    </div>


    {{-- PROFILE DETAILS --}}
    <div class="modal fade" id="PorfilDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          
          <div class="modal-body">
            <form action="{{ url('/profile/update') }}" method="post" enctype="">
              @csrf
                  <div class="form-group">
                    <label>First name</label>
                    <input type="text" name="firstname" value="{{ user('firstname') }}" class="form-control" aria-describedby="" placeholder="Enter first name" required>
                  </div>
                  <div class="form-group">
                    <label>Middle name</label>
                    <input type="text" name="middlename" value="{{ user('middlename') }}" class="form-control" placeholder="Enter middle name">
                  </div>
                  <div class="form-group">
                    <label>Last name</label>
                    <input type="text" name="lastname" value="{{ user('lastname') }}" class="form-control" placeholder="Enter Last name" required>
                  </div>
                  <div class="form-group">
                    <label>Age</label>
                    <input type="number" name="age" value="{{ user('age') }}" class="form-control" placeholder="Input your age" required>
                  </div>
               {{--    <div class="form-group">
                    <label>Gender</label>
                    <select class="selectpicker" name="gender" data-width="100%" data-live-search="false" required>
                      <option></option>
                      <?php echo getOption('gender',user('gender')); ?>
                    </select>
                  </div> --}}
                  <div class="form-group">
                    <label>Brthday</label>
                    <input type="date" name="birth" value="{{ user('birth') }}" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Phome Number</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">+880</span>
                      </div>
                      <input type="text" name="phone" value="{{ user('phone') }}" class="form-control" aria-label="" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>City</label>
                    <input type="text" name="city" value="{{ user('city') }}" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>State</label>
                    <input type="text" name="state" value="{{ user('state') }}" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Zip</label>
                    <input type="number" name="zip" value="{{ user('zip') }}" class="form-control" required>
                  </div>
                  {{-- <div class="form-group">
                    <label>Country</label>
                    <select class="selectpicker" name="country" data-width="100%" data-live-search="false" required>
                      <option></option>
                      <?php echo getOption('country',user('country')); ?>
                    </select>
                  </div> --}}
                  <div class="form-group">
                    <label>Occupation</label>
                    <input type="text" name="occupation" value="{{ user('occupation') }}" class="form-control" placeholder="Your occupation">
                  </div>
                  <div>
                  <label>Education</label>
                    <input type="text" name="education" value="{{ user('education') }}" class="form-control" placeholder="Your education degree">
                  </div>


                  <br>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection
@section('js_file')
  <script src="{{ asset('public/vendors/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
@endsection