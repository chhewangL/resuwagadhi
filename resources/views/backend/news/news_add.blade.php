@extends('backend.index')
@section('main-content')

<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            About Page</div>
          <div class="card-body">
          	<h2>Add News to the project webpage</h2>
          	
          	<form method="post" action="{{url('admin/news')}}" enctype="multipart/form-data">
          		{{csrf_field()}}
          		<div class="form-group{{ $errors->has('heading') ? ' has-error' : '' }}">
             <label for="fname"><h6>Heading</h6></label>
    <input type="text" id="fname" name="heading" placeholder="" class="form-control" value="">
    @if($errors->has('heading'))
    <span class="help-block" style="color: red;">
      <strong>
        {{$errors->first('heading')}}
      </strong>
    </span>
    @endif
</div>
<div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                                <label for="fname"><h6>Category</h6></label>
                                <select name="category" class="form-control">
                                  <option value=""></option>
                                  <option value="career">Career</option>
                                  <option value="construction">Construction</option>
                                  <option value="">Commercial</option>
                                </select>
    @if($errors->has('category'))
    <span class="help-block" style="color: red;">
      <strong>{{$errors->first('category')}}</strong>
    </span>
    @endif
</div>

<div class="form-group{{ $errors->has('doc') ? ' has-error' : '' }}">
                                <label for="fname"><h6>Document</h6></label>
    <input type="file" id="fname" name="doc" placeholder="" class="form-control" value="">
    @if($errors->has('doc'))
    <span class="help-block" style="color: red;">
      <strong>{{$errors->first('doc')}}</strong>
    </span>
    @endif
</div>


<input type="submit" name="submit" class="btn btn-primary">
          		
          	</form>



@endsection