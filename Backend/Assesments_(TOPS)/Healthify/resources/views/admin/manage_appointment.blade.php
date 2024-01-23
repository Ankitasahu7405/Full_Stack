@extends('admin.layout.structure')

@section('main_container')
    <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
						<h2>Appointment Tables</h2>   
                        <h5>Welcome Ankita Sahu !! Love to see you back.. </h5>                      
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
               
                <div class="col-md-12">
                    <!--    Context Classes  -->
                    <div class="panel panel-default">
                       
                        <div class="panel-heading">
                            Appointment
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table" id="table">
                                    <thead>
                                        <tr>
											<th>file</th>
                                            <th>ID</th>
											<th>Department</th>
                                            <th>Name</th>
                                            <th>Email</th>
											<th>Date</th>
                                            <th>Time</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(!empty($data_appointment))
											@foreach($data_appointment as $a)
											<tr>
												<td><img src="{{url('/upload/register/'.$a->file)}}" width="50px"></td>
												<td>{{$a->id}}</td>
												<td>{{$a->D_Id}}</td>
												<td>{{$a->Name}}</td>
												<td>{{$a->Email}}</td>
												<td>{{$a->Date}}</td>
												<td>{{$a->Time}}</td>
												<td>
													<a href="" class="btn btn-primary me-1">Edit</a>
													<a href="{{url('/delete/'.$a->id)}}" class="btn btn-danger me-1">Delete</a>		
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
@endsection