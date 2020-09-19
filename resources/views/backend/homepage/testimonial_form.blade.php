@extends('backend.index')
@section('main-content')
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            About Page</div>
          <div class="card-body">
          	<h2>Add News to the project webpage</h2>
          	
          	<form method="post" action="{{url('admin/testi/'.$t->id)}}" enctype="multipart/form-data">
          		{{csrf_field()}}
          		<input type="hidden" name="_method" value="put">
          		<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
             <label for="fname"><h6>Image</h6></label>
    <input type="file" id="fname" name="image" placeholder="" class="form-control" value="{{$t->image}}">
    @if($errors->has('image'))
    <span class="help-block" style="color: red;">
      <strong>
        {{$errors->first('image')}}
      </strong>
    </span>
    @endif
</div>
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="fname"><h6>name</h6></label>
    <input type="text" id="fname" name="name" placeholder="" class="form-control" value="{{$t->name}}">
    @if($errors->has('name'))
    <span class="help-block" style="color: red;">
      <strong>{{$errors->first('name')}}</strong>
    </span>
    @endif
</div>

<div class="form-group{{ $errors->has('post') ? ' has-error' : '' }}">
                                <label for="fname"><h6>Post</h6></label>
    <input type="text" id="fname" name="post" placeholder="" class="form-control" value="{{$t->position}}">
    @if($errors->has('post'))
    <span class="help-block" style="color: red;">
      <strong>{{$errors->first('post')}}</strong>
    </span>
    @endif
</div>

<div class="form-group{{ $errors->has('saying') ? ' has-error' : '' }}">
                                <label for="fname"><h6>Saying</h6></label>
    <input type="text" id="fname" name="saying" placeholder="" class="form-control" value="{{$t->sayings}}">
    @if($errors->has('saying'))
    <span class="help-block" style="color: red;">
      <strong>{{$errors->first('saying')}}</strong>
    </span>
    @endif
</div>


<input type="submit" name="submit" class="btn btn-primary">
          		
          	</form>



@endsection