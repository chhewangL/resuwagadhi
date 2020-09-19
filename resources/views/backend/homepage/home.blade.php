@extends('backend.index')
@section('main-content')
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel" >
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
<div class="container" >
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div>
        <img class="carousel-img-width" src="{{asset('backend/sliderimage/'.$n[0]->image)}}"
          alt="First slide" class="carousel-img-width" width="100%" height="300px">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">{{$n[0]->description}}</h3>
       
      </div>
    </div>
    <div class="carousel-item">
    
      <div>
        <img class="carousel-img-width" src="{{asset('backend/sliderimage/'.$n[1]->image)}}"
          alt="Second slide" class="carousel-img-width" width="100%" height="300px">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">{{$n[1]->description}}</h3>
        
      </div>
    </div>
    <div class="carousel-item">
      <div>
        <img class="carousel-img-width" src="{{asset('backend/sliderimage/'.$n[2]->image)}}"
          alt="Third slide" class="carousel-img-width" width="100%" height="300px">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">{{$n[2]->description}}</h3>
        
      </div>
    </div>
  </div>
        </div>

  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div>
<br>
<a href="{{url('admin/slider')}}"><button class=btn-primary>Change Slider Image</button></a>
<br>
<br>
<!-- notice table paginate -->

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              	<h2>News of the project</h2>
              	<!-- <a href="{{url('admin/news/create')}}"><button class="btn btn-primary btn-medium" style="margin: 5px;">Add News</button></a> -->
              	<!-- <thead> -->
              		<tr style="background-color: gray;">
              		<th>id</th>
              		<th>Heading</th>
              		<th>Category</th>
              		<th>Download Documents</th>
              		<th>Published Date</th>
              		
              	</tr>
              	<!-- </thead> -->
              	<tbody >
              		@foreach($m as $a)
              		<tr class="info">
              		<td>{{$a -> id}}</td>
              		<td>{{$a -> heading}}</td>
                  <td>{{$a-> category}}</td>
              		<td>{{$a->document}}</td>
              		<td>{{$a -> published_date}}</td>
              	</tr>
              	@endforeach
              	</tbody>
                
                  
                  
                </tbody>
               
                  
               
              </table>
 <a href="{{url('admin/news')}}"><button class=btn-primary>See more News</button></a>

 <br>
 <!-- gallery section -->
 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              	<h2>Gallery Image </h2>
              	<!-- <p>You can change images in the </p> -->
              	<!-- <a href="{{url('admin/gallery/create')}}"><button class="btn btn-primary btn-medium" style="margin: 5px;">Add Image</button></a> -->
              	<thead>
              		<tr style="background-color: gray;">
              		<th>id</th>
              		<th>Image</th>
              		<th>Description</th>
              		<!-- <th>Vacancy Notice</th>
              		<th>Published Date</th> -->
              		<!-- <th>function</th> -->
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
              		
              		
              		
              		<!-- <td>
                    <a href="{{url('admin/gallery/'.$a->id.'/edit')}}"><button class="btn btn-primary">edit</button><br><br>
                    	<form method="post" action="{{url('admin/gallery/'.$a->id)}}">
                    		{{csrf_field()}}
                    		<input type="hidden" name="_method" value="delete">
                    		<button type="submit" class="btn btn-medium btn-danger">Delete</button>
                    		
                    	</form>
                    		

                    </a>
                    



                    </td> -->
              	</tr>
              	@endforeach
              	</tbody>
                
                  
                  
                </tbody>
               
                  
                
              </table>
              <a href="{{url('admin/gallery')}}"><button class=btn-primary>See all Images</button></a>
              <br>
<h2>Testimonials</h2>
              <table class="table table-bordered">
                <thead>
                  <tr style="background-color: gray;">
                    <td>S.n </td>
                    <td>Name</td>
                    <td>image</td>
                    <td>post</td>
                    <td>saying</td>
                    <td>function</td>
                  </tr>

                </thead>
                <tbody>
                  @foreach($t as $a)
                  <tr>
                    <td>{{$a->id}}</td>
                    <td>{{$a->name}}</td>
                    <td><img src="{{asset('backend/testi_img/'.$a->image)}}" height="100px" width="200px"></td>
                    <td>{{$a->position}}</td>
                    <td>{{$a->sayings}}</td>
                    <td><a href="{{url('admin/testi/'.$a->id.'/edit')}}"><button class="btn btn-primary">edit</button>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>


@endsection