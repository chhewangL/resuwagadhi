@extends('frontend.index')
@section('main-content')
<div class="container">
	<div class="row">
            <div class="col-md-12">
               <!-- <h3 class="column-title">Latest News</h3> -->
               
            </div>

            <!-- Col end -->

           
         </div>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <h2>Latest News</h2>
                <!-- <a href="{{url('admin/news/create')}}"><button class="btn btn-primary btn-medium" style="margin: 5px;">Add News</button></a> -->
                <thead>
                    <tr style="background-color: gray;">
                    <th>SN</th>
                    <th>Heading</th>
                    <th>Category</th>
                    <th>Download Documents</th>
                    <th>Published Date</th>
                   
                </tr>
                </thead>
                <tbody >
                    @foreach($n as $a)
                    <tr class="info">
                    <td>{{$a -> id}}</td>
                    <td>{{$a -> heading}}</td>
                  <td>{{$a-> category}}</td>
                    <td><a href="{{asset('backend/newsfile/'.$a->document)}}" download> {{$a->document}}</a></td>
                    <td>{{$a -> published_date}}</td>
                </tr>
                @endforeach
                </tbody>
                
                  
                  
                </tbody>
               
                  
                
              </table>
    </div>
@endsection