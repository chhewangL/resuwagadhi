@extends('backend.index')
@section('main-content')
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            News & Download Page</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              	<h2>News of the project</h2>
              	<a href="{{url('admin/news/create')}}"><button class="btn btn-primary btn-medium" style="margin: 5px;">Add News</button></a>
              	<thead>
              		<tr style="background-color: gray;">
              		<th>id</th>
              		<th>Heading</th>
              		<th>Category</th>
              		<th>Download Documents</th>
              		<th>Published Date</th>
              		<th>function</th>
              	</tr>
              	</thead>
              	<tbody >
              		@foreach($n as $a)
              		<tr class="info">
              		<td>{{$a -> id}}</td>
              		<td>{{$a -> heading}}</td>
                  <td>{{$a-> category}}</td>
              		<td>{{$a->document}}</td>
              		<td>{{$a -> published_date}}</td>
              		
              		
              		
              		<td>
                    <a href="{{url('admin/news/'.$a->id.'/edit')}}"><button class="btn btn-primary">edit</button>
                    </a>
                    <br>
                    
                    <form method="post" action="{{url('admin/news/'.$a->id)}}">
                      {{csrf_field()}}
                      <input type="hidden" name="_method" value="delete">
                      <button type="submit" class="btn btn-danger btn-medium">delete</button>


                    
                    </form>



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