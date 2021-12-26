<div class="col">
  <!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="subcategory" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add SubCategory</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="card-body">

            <form id="jquery-val-form" action="{{route('store-subcategory')}}" method="post">
              @csrf
                <div class="form-group">
                 <label class="form-label" for="basic-default-name">Choose Category Name</label>

					 <select class="form-select" aria-label="Default select example" name="category_id">
					  <option selected>Choose</option>
					  @foreach($category as $item)
					  <option value="{{$item->id}}">{{$item->category_name}}</option>
					  @endforeach
					</select>
                </div>

                <br>

                <div class="form-group">
                    <label class="form-label" for="basic-default-name">Subcategory Name</label>
                    <input type="text" class="form-control" id="basic-default-name" name="subcategory_name" placeholder="Enter Method Name" required/>
                </div>
        </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          <button type="Submit" class="btn btn-primary">Save</button>
      </div>
        </form>  
      </div>
    </div>
  </div>
</div>
