@extends('backend.index')
@section('main-content')
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Image</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              	<h2>Gallery Image </h2>
              	<p>You can change images in the </p>
              	<a href="{{url('admin/gallery/create')}}"><button class="btn btn-primary btn-medium" style="margin: 5px;">Add Image</button></a>
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
              		@foreach($g as $a)
              		<tr class="info">
              		<td>{{$a -> id}}</td>
              		<td><img src="{{asset('backend/g_image/'.$a->image)}}" height="200px" width="200px"></td>
                  <td>{{$a-> description}}</td>
              		<!-- <td>{{$a->document}}</td>
              		<td>{{$a -> published_date}}</td> -->
              		
              		
              		
              		<td>
                    <a href="{{url('admin/gallery/'.$a->id.'/edit')}}"><button class="btn btn-primary">edit</button><br><br>
                    	<form method="post" action="{{url('admin/gallery/'.$a->id)}}">
                    		{{csrf_field()}}
                    		<input type="hidden" name="_method" value="delete">
                    		<button type="submit" class="btn btn-medium btn-danger">Delete</button>
                    		
                    	</form>
                    		

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