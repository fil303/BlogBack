@extends('asset.app')
@section('css_file')
	<link rel="stylesheet" href="{{ asset('public/vendors/c3/c3.min.css') }}">
	<link rel="stylesheet" href="{{ asset('public/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
@endsection
@section('main')
	<div class="card">
		<div class="card-body bg-success text-primary">
			<div class="d-flex justify-content-center">
				<div class="mr-5">Blance  500.00<span class="h4">&#2547;</span></div>
				<div class="mr-5">Total_Earn  500.00<span class="h4">&#2547;</span></div>
				<div class="mr-5">Withdraw  500.00<span class="h4">&#2547;</span></div>
			</div>
		</div>
	</div>

	<div class="card">
		<div class="card-body">
          <h4 class="card-title">Post Overview</h4>
          <div id="c3-line-chart"></div>
		</div>
	</div>

	<div class="card">
		<div class="card-body bg-success text-primary">
			<h4 class="text-center">POST</h4>
			<div class="d-flex justify-content-center">
				<div class="mr-5">Reviewing: 5</div>
				<div class="mr-5">Publiched: 5</div>
				<div class="mr-5">Drift: 5</div>
			</div>
		</div>
	</div>
	          <div class="card sm-w">
            <div class="card-body">
              <h4 class="card-title">Data table</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table smt-w">
                      <thead>
                        <tr>
                            <th>#SN</th>
                            <th>Title</th>
                            <th>Click</th>
                            <th>View</th>
                            <th>Created At</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>1</td>
                            <td>Edinburgh Edinburgh Edinburgh ew York Edinburgh Edinburgh Edinburgh ew York Edinburgh Edinburgh Edinburgh ew YorkE dinburgh Edinburgh Edinburgh ew York</td>
                            <td>55</td>
                            <td>96</td>
                            <td>05/05/2021</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Edinburgh Edinburgh Edinburgh ew York Edinburgh Edinburgh Edinburgh ew York Edinburgh Edinburgh Edinburgh ew YorkE dinburgh Edinburgh Edinburgh ew York</td>
                            <td>55</td>
                            <td>96</td>
                            <td>05/05/2021</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Edinburgh Edinburgh Edinburgh ew York Edinburgh Edinburgh Edinburgh ew York Edinburgh Edinburgh Edinburgh ew YorkE dinburgh Edinburgh Edinburgh ew York</td>
                            <td>55</td>
                            <td>96</td>
                            <td>05/05/2021</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Edinburgh Edinburgh Edinburgh ew York Edinburgh Edinburgh Edinburgh ew York Edinburgh Edinburgh Edinburgh ew YorkE dinburgh Edinburgh Edinburgh ew York</td>
                            <td>55</td>
                            <td>96</td>
                            <td>05/05/2021</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Edinburgh Edinburgh Edinburgh ew York Edinburgh Edinburgh Edinburgh ew York Edinburgh Edinburgh Edinburgh ew YorkE dinburgh Edinburgh Edinburgh ew York</td>
                            <td>55</td>
                            <td>96</td>
                            <td>05/05/2021</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

@endsection
@section('js_file')
	<script src="{{ asset('public/vendors/d3/d3.min.js') }}"></script>
	<script src="{{ asset('public/vendors/c3/c3.js') }}"></script>
	<script src="{{ asset('public/js/c3.js') }}"></script>

 <script src="{{ asset('public/vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('public/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('public/js/data-table.js') }}"></script>
@endsection