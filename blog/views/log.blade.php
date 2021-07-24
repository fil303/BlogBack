@extends('asset.app')
@section('css_file')
	<link rel="stylesheet" href="{{ asset('public/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
@endsection
@section('main')

    <div class="card sm-w-log">
      <div class="card-body">
          <table id="order-listing" class="table smt-w-log">
            <thead>
              <tr>
                <th>&nbsp;</th>
                <th>TITLE</th>
                <th>DATE AT</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="badge badge-pill badge-danger"><i class="mdi mdi-comment"></i></div>
                </td>
                <td>Welcome at this site.</td>
                <td>05/12/2021</td>
              </tr>
              <tr>
                <td>
                  <div class="badge badge-pill badge-primary"><i class="mdi mdi-comment-check"></i></div>
                </td>
                <td>Welcome</td>
                <td>05/12/2021</td>
              </tr>
              <tr>
                <td>
                  <div class="badge badge-pill badge-primary"><i class="mdi mdi-comment-check"></i></div>
                </td>
                <td>Welcome</td>
                <td>02/07/2021</td>
              </tr>
            </tbody>
          </table>
      </div>
    </div>

    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Test</button>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"  aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Welcome</h5>
          </div>
          <div class="modal-body">
            Welcome, Hope You Have Fun With Us And Make Money Fast.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

@endsection
@section('js_file')
  <script src="{{ asset('public/vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('public/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ asset('public/js/data-table.js') }}"></script>
@endsection