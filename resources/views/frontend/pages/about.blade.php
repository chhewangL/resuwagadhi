@extends('frontend.index')
@section('main-content')
<div id="banner-area" class="banner-area" style="background-image:url({{asset('frontend/images/banner/banner1.jpg')}}">
      <div class="banner-text">
         <div class="container">
            <div class="row">
               <div class="col-xs-12">
                  <div class="banner-heading">
                     <h1 class="banner-title">About Us</h1>
                     <ol class="breadcrumb">
                        <li>Home</li>
                        <li>Company</li>
                        <li><a href="#">About Us</a></li>
                     </ol>
                  </div>
               </div><!-- Col end -->
            </div><!-- Row end -->
         </div><!-- Container end -->
      </div><!-- Banner text end -->
   </div>
 <section id="main-container" class="main-container">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <h3 class="column-title">About the project</h3>
               <p>The company is developing Rasuwagadhi Hydroelectric Project having capacity of 111 MW. It is located in Gosaikunda Rural Municipality of Rasuwa district, Nepal. The project is accessible by the Kathmandu -Trisuli - Somdang road at a distance of 130 km to the north of Kathmandu to reach to Syabrubesi and then around 16 km from Syabrubesi to the project site at Rasuwagadhi. The Company has managed 50:50 debt-equity structure for financing the project.</p>

            </div>

            <!-- Col end -->

           
         </div><!-- Content row end -->

      </div><!-- Container end -->
   </section><!-- Main container end -->
   <section id="main-container" class="main-container">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <h3 class="column-title">General Overview</h3>
               <p>The project is a run-of-river type scheme having the capacity of 111 MW and the annual energy generation is 613.875 GWh with the available gross head of 167.9 m. The design discharge of the project is 80m3/sec in Q40 exceedance of time. The headworks site is located about 400 m downstream from the confluence of Kerung khola and Lende khola which are the Boundary Rivers of Nepal and China (Tibet). The total headrace tunnel length of the project is 4185 m up to the surge tank. Tail water from the powerhouse will be released to main river course through 659.3 m long tailrace tunnel in the downstream of powerhouse site. The project is located on Thuman and Timure of Gosaikunda Rural Municipality, Rasuwa.</p>

            </div>

            <!-- Col end -->

           
         </div><!-- Content row end -->

      </div><!-- Container end -->
   </section>
<section>
	<div class="container">
	<div class="row">
		<div class="col-md-12">
               
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
</div>
</div>
</section>


   <section id="main-container" class="main-container">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <h3 class="column-title">status of the project</h3>
               <p>• PPA signed with NEA on November 14, 2011. The revised RCOD is Poush 15, 2076.</p>
               <p>• Generation license obtained from DoED on Dec 6, 2012.</p>
               <p>• Debt portion of the project financed by Employees Provident Fund (EPF) for which the tri-partite loan agreement was signed among Rasuwagadhi Hydrpower Company, Chilime Hydropower Company and EPF on 8 December, 2011.</p>
               <p>• For Consulting Services of the Project, contract has been signed with M/S SMEC International Pty. Ltd., Australia on 3rd December, 2012.</p>
               <p>• For Lot 1: Civil and Hydro-mechanical works, contract (EPC contract model) has been signed with M/S China International Water and Electric Corporation (CWE), China on 5th Jan, 2014.</p>
               <p>• For Lot 2: Electromechanical works, contract (Plant and Design Built contract Model) has been signed with M/S VOITH Hydro Pvt. Ltd, India on 31 st July 2015. </p>
               <p>• For Lot 3: 132 KV Double Circuit Transmission Line, contract has been signed with M/S Mudbhary & Joshi Construction Pvt. Ltd, Nepal on 15 th June 2017.</p>
               <p>• All the Construction works are ongoing  and efforts are mande to meet the project completion schedule.</p>
               <p>• The expected Commercial Operation Date of the project is Falgun 7, 2076. The physical progress of the project is above 70% till the end of Ashwin 2076. </p>

            </div>

            
         </div><!-- Content row end -->

      </div><!-- Container end -->
   
   </section>

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