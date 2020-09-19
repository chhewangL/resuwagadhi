@extends('backend.index')
@section('main-content')


  
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            About Page</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              	<h2>Key Features of the project</h2>
                <tbody>
                	@foreach($a as $s)
                  <!-- <tr>
                    <th>id</th>
                    <td></td>
                </tr> -->
                <tr class="info">
                    <th>Location</th>
                    <td>{{$s->location}}</td>
                </tr>
                <tr class="info">
                    <th>Type of Project</th>
                    <td>{{$s->type_of_project}}</td>
                </tr>
                <tr class="info">
                    <th>Design flow</th>
                    <td>{{$s->design_flow}}</td>
                </tr>
                <tr class="info">
                    <th>Gross Head</th>
                    <td>{{$s->gross_head}}</td>
                </tr>
                <tr class="info">
                    <th>Headwork</th>
                    <td>{{$s->headwork}}</td>
                </tr>
                <tr class="info">
                    <th>Tunnel length and size</th>
                    <td>{{$s->tls}}</td>
                </tr>
                <tr class="info">
                    <th>Powerhouse Type and size</th>
                    <td>{{$s->pts}}</td>

                </tr>
                <tr class="info">
                    <th>Turbine capacity and type</th>
                    <td>{{$s->tct}}</td>
                </tr>
                <tr class="info">
                    <th>Generator capacity and type</th>
                    <td>{{$s->gct}}</td>
                </tr>
                <tr class="info">
                    <th>Installed capacity</th>
                    <td>{{$s->ic}}</td>
                </tr>
                <tr class="info">
                    <th>Annual Energy Generation</th>
                    <td>{{$s->aeg}}</td>
                </tr>
                <tr class="info">
                    <th>Dry Month Energy</th>
                    <td>{{$s->dme}}</td>
                </tr>
                <tr class="info">
                    <th>wet months energy</th>
                    <td>{{$s->wme}}</td>
                </tr>
                <tr class="info">
                    <th>transmission line length/ voltage</th>
                    <td>{{$s->tll}}</td>
                
                  </tr>
                  @endforeach
                </tbody>
               
                  
                
              </table>
              <a href="{{url('admin/about/create')}}"><button class="btn btn-primary"> change</button></a>
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
        </style>



@endsection