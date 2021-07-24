@extends('asset.app')
@section('css_file')

@endsection
@section('main')


      <div class="card-body  bg-success">
          <div class="h4 text-center">Payment</div>
    




    <div class="card">
      <div class="card-body">
          <div class="row">
            <div class="col-sm-12 col-md-4">
               Bkash Number :
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">+880</span>
                  </div>
                  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
               <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Verify</button>
            </div>
          </div>
      </div>
    </div>

</div>
  
      <div class="card-body  bg-success">
          <div class="h4 text-center">Withdraw</div>
  

  <div class="card">
    <div class="card-body  text-primary">
      <div class="d-flex justify-content-center">
        <div class="mr-5">Blance  500.00<span class="h4">&#2547;</span></div>
        <div class="mr-5">Total_Earn  500.00<span class="h4">&#2547;</span></div>
        <div class="mr-5">Withdraw  500.00<span class="h4">&#2547;</span></div>
      </div>
    </div>
  </div>


   <div class="card">
      <div class="card-body">
          <div class="row">
            <div class="col-sm-12 col-md-4">
               Amount :
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">&#2547;</span>
                  </div>
                  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
               <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Withdraw Request</button>
            </div>
          </div>
      </div>
    </div>

</div>











    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"  aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            We send 4 digit Verify code to this +880165454855

            <hr>
            <h5>Enter 4 Digit Code</h5>
              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                </div>
              </div>
              <button class="btn btn-warning">Resend</button>
              <button class="btn btn-success">Verify</button>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

@endsection
@section('js_file')
 
@endsection