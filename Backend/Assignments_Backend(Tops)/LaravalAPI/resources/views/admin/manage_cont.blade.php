@extends('admin.layout.structure')

@section('main_container')
    <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
						<h2>Contact Table</h2>   
                        <h5>Welcome Ankita Sahu !! Love to see you back.. </h5>                      
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
               
                <div class="col-md-12">
                    <!--    Context Classes  -->
                    <div class="panel panel-default">
                       
                        <div class="panel-heading">
                            Contact
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table" id="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
											<th>Subject</th>
                                            <th>Message</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(!empty($data_contact))
											@foreach($data_contact as $c)
											<tr>
												<td>{{$c->cont_id}}</td>
												<td>{{$c->name}}</td>
												<td>{{$c->email}}</td>
												<td>{{$c->subject}}</td>
												<td>{{$c->message}}</td>
												<td>
													<a href="" class="btn btn-primary me-1">Edit</a>
													<a href="{{url('/Delete/'.$c->cont_id)}}" class="btn btn-danger me-1">Delete</a>
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