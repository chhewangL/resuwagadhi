@extends('backend.index')
@section('main-content')
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            About Page</div>
          <div class="card-body">
          	<h2>Edit form for project feature</h2>
          	@foreach($a as $b)
          	<form method="post" action="{{url('admin/about/'.$b->id)}}">
          		{{csrf_field()}}
          		<input type="hidden" name="_method" value="put">


          		<div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                                <label for="fname"><h6>Location</h6></label>
    <input type="text" id="fname" name="location" placeholder="" class="form-control" value="{{$b->location}}">
    @if($errors->has('location'))
    <span class="help-block" style="color: red;">
      <strong>{{$errors->first('location')}}</strong>
      
    </span>
    @endif
</div>

<div class="form-group{{ $errors->has('top') ? ' has-error' : '' }}">
                                <label for="fname"><h6>Type of Project</h6></label>
    <input type="text" id="fname" name="top" placeholder="" class="form-control" value="{{$b->type_of_project}}">
    @if($errors->has('top'))
    <span class="help-block" style="color: red;">
      <strong>{{$errors->first('top')}}</strong>
      
    </span>
    @endif
    
</div>
<div class="form-group{{ $errors->has('df') ? ' has-error' : '' }}">
                                <label for="fname"><h6>Design Flow</h6></label>
    <input type="text" id="fname" name="df" placeholder="" class="form-control" value="{{$b->design_flow}}">
    @if($errors->has('df'))
    <span class="help-block" style="color: red;">
      <strong>{{$errors->first('df')}}</strong>
    </span>
    @endif
    
</div>
<div class="form-group{{ $errors->has('gh') ? ' has-error' : '' }}">
                                <label for="fname"><h6>Gross Head</h6></label>
    <input type="text" id="fname" name="gh" placeholder="" class="form-control" value="{{$b->gross_head}}">
    @if($errors->has('gh'))
    <span class="help-block" style="color: red;">
      <strong>{{$errors->first('gh')}}</strong>
    </span>
    @endif
</div>
<div class="form-group{{ $errors->has('h') ? ' has-error' : '' }}">
                                <label for="fname"><h6>Headworks</h6></label>
    <input type="text" id="fname" name="h" placeholder="" class="form-control" value="{{$b->headwork}}">
    @if($errors->has('h'))
    <span class="help-block" style="color: red;">
      <strong>{{$errors->first('h')}}</strong>
    </span>
    @endif
</div>
<div class="form-group{{ $errors->has('tls') ? ' has-error' : '' }}">
                                <label for="fname"><h6>Tunnel length and size</h6></label>
    <input type="text" id="fname" name="tls" placeholder="" class="form-control" value="{{$b->tls}}">
    @if($errors->has('tls'))
    <span class="help-block" style="color: red;">
      <strong>{{$errors->first('tls')}}</strong>
    </span>
    @endif
</div>
<div class="form-group{{ $errors->has('pts') ? ' has-error' : '' }}">
                                <label for="fname"><h6>Powerhouse type and size</h6></label>
    <input type="text" id="fname" name="pts" placeholder="" class="form-control" value="{{$b->pts}}">
    @if($errors->has('pts'))
    <span class="help-block" style="color: red;">
      <strong>{{$errors->first('pts')}}</strong>
    </span>
    @endif
</div>
<div class="form-group{{ $errors->has('tct') ? ' has-error' : '' }}">
                                <label for="fname"><h6>Turbine capacity and Type</h6></label>
    <input type="text" id="fname" name="tct" placeholder="" class="form-control" value="{{$b->tct}}">
    @if($errors->has('tct'))
    <span class="help-block" style="color: red;">
      <strong>{{$errors->first('tct')}}</strong>
    </span>
    @endif
</div>
<div class="form-group{{ $errors->has('gct') ? ' has-error' : '' }}">
                                <label for="fname"><h6>Generator capacity and type</h6></label>
    <input type="text" id="fname" name="gct" placeholder="" class="form-control" value="{{$b->gct}}">
    @if($errors->has('gct'))
    <span class="help-block" style="color: red;">
      <strong>{{$errors->first('gct')}}</strong>
    </span>
    @endif
</div>
<div class="form-group{{ $errors->has('ic') ? ' has-error' : '' }}">
                                <label for="fname"><h6>Installed capacity</h6></label>
    <input type="text" id="fname" name="ic" placeholder="" class="form-control" value="{{$b->ic}}">
    @if($errors->has('ic'))
    <span class="help-block" style="color: red;">
      <strong>{{$errors->first('ic')}}</strong>
    </span>
    @endif
</div>
<div class="form-group{{ $errors->has('aeg') ? ' has-error' : '' }}">
                                <label for="fname"><h6>Annual Energy Generator</h6></label>
    <input type="text" id="fname" name="aeg" placeholder="" class="form-control" value="{{$b->aeg}}">
    @if($errors->has('aeg'))
    <span class="help-block" style="color: red;">
      <strong>{{$errors->first('aeg')}}</strong>
    </span>
    @endif
</div>
<div class="form-group{{ $errors->has('dme') ? ' has-error' : '' }}">
                                <label for="fname"><h6>Dry Month Energy</h6></label>
    <input type="text" id="fname" name="dme" placeholder="" class="form-control" value="{{$b->dme}}">
    @if($errors->has('dme'))
    <span class="help-block" style="color: red;">
      <strong>{{$errors->first('dme')}}</strong>
    </span>
    @endif
</div>
<div class="form-group{{ $errors->has('wme') ? ' has-error' : '' }}">
                                <label for="fname"><h6>Wet Months Energy</h6></label>
    <input type="text" id="fname" name="wme" placeholder="" class="form-control" value="{{$b->wme}}">
    @if($errors->has('wme'))
    <span class="help-block" style="color: red;">
      <strong>{{$errors->first('wme')}}</strong>
    </span>
    @endif
</div>
<div class="form-group{{ $errors->has('tll') ? ' has-error' : '' }}">
                                <label for="fname"><h6>Transmission line length/ voltage</h6></label>
    <input type="text" id="fname" name="tll" placeholder="" class="form-control" value="{{$b->tll}}">
    @if($errors->has('tll'))
    <span class="help-block" style="color: red;">
      <strong>{{$errors->first('tll')}}</strong>
    </span>
    @endif
</div>

<input type="submit" name="submit" class="btn btn-primary">
          		
          	</form>

@endforeach




          	</div>
          </div>
          		



@endsection