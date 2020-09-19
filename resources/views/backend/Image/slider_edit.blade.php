@extends('backend.index')
@section('main-content')

<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Image</div>
          <div class="card-body">
            <h2>Slider image change</h2>
            
            <form method="post" action="{{url('admin/slider/'.$n->id)}}" enctype="multipart/form-data">
              {{csrf_field()}}
              <input type="hidden" name="_method" value="put">
              <div class="form-group">
             <label for="fname"><h6>Image</h6></label>
    <input type="file" id="image" name="image" placeholder="" class="form-control" value="{{$n ->image}}">
    
</div>


<div class="form-group">
                                <label for="fname"><h6>Description</h6></label>
    <input type="text" id="description" name="description" placeholder="" class="form-control" value="{{$n->description}}">
    
</div>


<input type="submit" name="submit" class="btn btn-primary">
              
            </form>



@endsection