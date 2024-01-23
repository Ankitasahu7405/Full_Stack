@extends('admin.layout.structure')

@section('main_container')
    <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
						<h2>Patients Tables</h2>   
                        <h5>Welcome Ankita Sahu !! Love to see you back.. </h5>                      
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
               
                <div class="col-md-12">
                    <!--    Context Classes  -->
                    <div class="panel panel-default">
                       
                        <div class="panel-heading">
                            Patients
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table" id="table">
                                    <thead>
                                        <tr>
											<th>file</th>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
											<th>Address</th>
                                            <th>Gender</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(!empty($data_registration))
											@foreach($data_registration as $r)
											<tr>
												<td><img src="{{url('/upload/register/'.$r->file)}}" width="50px"></td>
												<td>{{$r->id}}</td>
												<td>{{$r->Name}}</td>
												<td>{{$r->Email}}</td>
												<td>{{$r->Address}}</td>
												<td>{{$r->Gender}}</td>
												<td>
													<a href="{{url('/view-pateints/'.$r->id)}}" class="btn btn-success me-1">{{$r->status}}</a>
												</td>
											</tr>
											@endforeach
											
											@else	
											<tr>
												<td> DATA NO FOUND </td>
											</tr>	
										@endif											
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--  end  Context Classes  -->
                </div>
            </div>
                <!-- /. ROW  -->
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
@endsection