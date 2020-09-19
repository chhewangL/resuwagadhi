@extends('backend.index')
@section('main-content')
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Image</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              	<h2>Slider Image </h2>
              	<p>You can only have 3 images in the slider</p>
              	<!-- <a href="{{url('admin/news/create')}}"><button class="btn btn-primary btn-medium" style="margin: 5px;">Add News</button></a> -->
              	<thead>
              		<tr style="background-color: gray;">
              		<th>id</th>
              		<th>Image</th>
              		<th>Description</th>
              		<!-- <th>Vacancy Notice</th>
              		<th>Published Date</th> -->
              		<th>function</th>
              	</tr>
              	</thead>
              	<tbody >
              		@foreach($n as $a)
              		<tr class="info">
              		<td>{{$a -> id}}</td>
              		<td><img src="{{asset('backend/sliderimage/'.$a->image)}}" height="200px" width="200px"></td>
                  <td>{{$a-> description}}</td>
              		<!-- <td>{{$a->document}}</td>
              		<td>{{$a -> published_date}}</td> -->
              		
              		
              		
              		<td>
                    <a href="{{url('admin/slider/'.$a->id.'/edit')}}"><button class="btn btn-primary">edit</button>
                    </a>
                    



                    </td>
              	</tr>
              	@endforeach
              	</tbody>
                
                  
                  
                </tbody>
               
                  
                
              </table>
              
            </div>
          </div>
          <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
        </div>
        <style type="text/css">
        	.table > thead > tr > td.info,
.table > tbody > tr > td.info,
.table > tfoot > tr > td.info,
.table > thead > tr > th.info,
.table > tbody > tr > th.info,
.table > tfoot > tr > th.info,
.table > thead > tr.info > td,
.table > tbody > tr.info > td,
.table > tfoot > tr.info > td,
.table > thead > tr.info > th,
.table > tbody > tr.info > th,
.table > tfoot > tr.info > th {
  background-color: #d9edf7;
}
.a
{
  text-decoration: none;
}
        </style>


@endsection