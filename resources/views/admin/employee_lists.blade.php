@extends('layouts.admin-master')

@section('content')

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
      <div class="breadcrumb-title pe-3">Employee Lists</div>
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Employee Lists</li>
          </ol>
        </nav>
      </div>
    </div>
    <!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase">Employee</h6>
    <hr/>
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Employee ID</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($employee as $row)
              <tr>

                <td>{{$loop->index+1}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->designation}}</td>
                <td>00{{$row->id}}</td>
                <td><a href="{{ url('details/'.$row->id) }}" type="button" class="btn btn-sm btn-success px-2">See Details</a></td>

              </tr>
  @endforeach

            </tbody>

          </table>
        </div>
      </div>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script>
  		$(document).ready(function() {
  			$('#example').DataTable();
  		  } );
  	</script>





@endsection
