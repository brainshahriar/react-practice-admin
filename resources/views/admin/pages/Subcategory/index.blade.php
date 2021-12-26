@extends('layouts.admin-master')

@section('content')



    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
      <div class="breadcrumb-title pe-3">Subategory</div>
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
            </li>

              <li class="breadcrumb-item active" aria-current="page">Subategory</li>





          </ol>

        </nav>
      </div>

    </div>
    <!--end breadcrumb-->
    <div class="row">
      <div class="col">
      <h6 class="mb-0 text-uppercase">All SubCategory</h6>
      </div>
      <div class="col">
      <a class="flex-right btn btn-success" href="#"  data-bs-toggle="modal" data-bs-target="#subcategory">Add</a>
      </div>
      @include('admin.pages.subcategory.addmodal')
    </div>

               @if(session()->has('success'))
       
                    <h3 class="alert alert-success">
                        {{ session()->get('success') }}
                    </h3>
            
                @endif
    <hr/>
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>#</th>
                <th>Categoy Name</th>
                <th>SubCategoy Name</th>
                <th>Action</th>

              </tr>
            </thead>
            <tbody>
                @foreach($subcategory as $row)
              <tr>

                <td>{{$loop->index+1}}</td>
                <td>{{$row->category->category_name}}</td>
                <td>{{$row->subcategory_name}}</td>

                <td> 
                  <a href="/delete-subcategory/{{$row->id}}"><i class='bx bx-trash'></i></a></td>
              </tr>

           @endforeach





            </tbody>

          </table>
        </div>
      </div>
    </div>


    <script>
      $(document).ready(function() {
        $('#example').DataTable();
        } );
    </script>
    <script>
      $(document).ready(function() {
        var table = $('#example2').DataTable( {
          lengthChange: false,
          buttons: [ 'copy', 'excel', 'pdf', 'print']
        } );

        table.buttons().container()
          .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
      } );
    </script>




@endsection
