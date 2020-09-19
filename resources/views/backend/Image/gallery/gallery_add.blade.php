@extends('backend.index')
@section('main-content')
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Image</div>
          <div class="card-body">
          	<h2>Add New images to the gallery</h2>
          	
          	<form method="post" action="{{url('admin/gallery')}}" enctype="multipart/form-data">
          		{{csrf_field()}}
          		<!-- <div class="form-group">
             <label for="fname"><h6>ID</h6></label>
    <input type="text" id="fname" name="heading" placeholder="" class="form-control" value="">
    
</div> -->
<div class="form-group">
             <label for="fname"><h6>Image</h6></label>
    <input type="file" id="fname" name="image" placeholder="" class="form-control" value="">
    
</div>
<!-- <div class="form-group">
                                <label for="fname"><h6>Category</h6></label>
                                <select name="category" class="form-control">
                                  <option value=""></option>
                                  <option value="career">Career</option>
                                  <option value="construction">Construction</option>
                                  <option value="">Commercial</option>
                                </select>
    
    
</div> -->

<div class="form-group">
                                <label for="fname"><h6>Discription</h6></label>
    <input type="text" id="fname" name="dis" placeholder="" class="form-control" value="">
    
</div>


<input type="submit" name="submit" class="btn btn-primary">
          		
          	</form>


@endsection