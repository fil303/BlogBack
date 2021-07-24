@extends('asset.app')
@section('css_file')
  <link rel="stylesheet" href="{{ asset('public/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
@endsection
@section('main')

  <div class="card">
    <div class="card-body bg-success text-primary">
      <div class="d-flex justify-content-center">
        @if(request()->input('page')=='draft')<div class="mr-5 h3">Draft Box</div>@endif
        @if(request()->input('page')=='panding')<div class="mr-5 h3">Panding Airticle</div>@endif
        @if(request()->input('page')=='published')<div class="mr-5 h3">Published Airticle</div>@endif
      </div>
    </div>
  </div>


  <div class="card sm-w">@php
    // print_r($article);
  @endphp
      <div class="card-body">
          <table id="order-listing" class="table smt-w">
            <thead>
              <tr>
                <th>#SN</th>
                <th>Title</th>
                @if(request()->input('page')=='published')<th>Click</th>@endif
                @if(request()->input('page')=='published')<th>View</th>@endif
                @if(request()->input('page')=='panding')<th>Status</th>@endif
                <th>Created At</th>
              </tr>
            </thead>
            <tbody>
              @foreach($article as $row)
               <tr>
                 <td>{{ $loop->iteration }}</td>
                 <td>{{ $row->title }}</td>
                 @if(request()->input('page')=='published')<td>20</td>@endif
                 @if(request()->input('page')=='published')<td>20</td>@endif
                 @if(request()->input('page')=='panding')<td>{{ getOption('post_status',$row->status,true,true) }}</td>@endif
                 <td>{{ date('d/m/Y',strtotime($row->created_at)) }}</td>
               </tr>
               @endforeach
            </tbody>
          </table>
      </div>
  </div>

@endsection
@section('js_file')
     <script src="{{ asset('public/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('public/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('public/js/data-table.js') }}"></script>
@endsection