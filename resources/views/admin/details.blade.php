@extends('layouts.admin-master')

@section('content')

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css">

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
      <div class="breadcrumb-title pe-3">Employee Details</div>
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Employee Details</li>
          </ol>
        </nav>
      </div>

    </div>

    <hr/>

    <div class="row">
      <div class="col-md-6">
        <h4>In Status</h4>
        <table id="example" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>Date</th>
              <th>In Time</th>
              <th>Late Reason</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
              @foreach($attendence as $row)       
            <tr>
              <td>{{$loop->index+1}}</td>
                <td>{{$row->present_date}}</td>
              <td class="text-danger"><strong>{{$row->present_time}}</strong></td>
              <td>{{$row->reason}}</td>
              <td><button type="button" class="btn btn-sm btn-success px-2"><strong>{{$row->present_time}}</strong></button></td>
            </tr>
          @endforeach

          </tbody>

        </table>
      </div>
      <div class="col-md-6">
        <h4>Out Status</h4>
        <table id="example2" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>Date</th>
              <th>Out Time</th>
              <th>Out Reason</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
              @foreach($attendenceout as $row)       
            <tr>
              <td>{{$loop->index+1}}</td>
                <td>{{$row->out_date}}</td>
              <td class="text-danger"><strong>{{$row->out_time}}</strong></td>
              <td>{{$row->out_reason}}</td>
                 <td><button type="button" class="btn btn-sm btn-danger px-2"><strong>{{$row->out_time}}</strong></button></td>
            </tr>
          @endforeach

          </tbody>

        </table>
      </div>
  </div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.print.min.js"></script>
<script>
  $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
$(document).ready(function() {
    $('#example2').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>

@endsection
