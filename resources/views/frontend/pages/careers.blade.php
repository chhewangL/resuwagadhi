@extends('frontend.index')
@section('main-content')
<div class="container">
	<div class="row">
            <div class="col-md-12">
               <!-- <h3 class="column-title">apply for vaccancies</h3> -->
               
            </div>

            <!-- Col end -->

           
         </div>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <h2>Vacancy Notice</h2>
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
                    @foreach($c as $a)
                    <tr class="info">
                    <td>{{$a -> id}}</td>
                    <td>{{$a -> heading}}</td>
                  <td>{{$a-> category}}</td>
                    <td><a href="{{asset('backend/newsfile/'.$a->document)}}" download> {{$a->document}}</a></td>
                    <td>{{$a -> published_date}}</td>
                </tr>
                @endforeach
                </tbody>
                    
                    
                    
                    <!-- <td>
                    <a href="{{url('admin/news/'.$a->id.'/edit')}}"><button class="btn btn-primary">edit</button>
                    </a>
                    <br>
                    
                    <form method="post" action="{{url('admin/news/'.$a->id)}}">
                      {{csrf_field()}}
                      <input type="hidden" name="_method" value="delete">
                      <button type="submit" class="btn btn-danger btn-medium">delete</button>


                    
                    </form>



                    </td> -->
                
                </tbody>
                
                  
                  
                </tbody>
               
                  
                
              </table>
    </div>
@endsection