@extends('admin.layout.structure')

@section('main_container')
    <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
						<h2>Customer Table</h2>   
                        <h5>Welcome Ankita Sahu !! Love to see you back.. </h5>                      
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
               
                <div class="col-md-12">
                    <!--    Context Classes  -->
                    <div class="panel panel-default">
                       
                        <div class="panel-heading">
                            Customer
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table" id="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
											<th>Country</th>
                                            <th>Name</th>
                                            <th>Email</th>
											<th>Mobile</th>
                                            <th>Address</th>
											<th>Gender</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @if(!empty($data_customer))
											@foreach($data_customer as $d)
											<tr>
												<td>{{$d->id}}</td>
												<td>{{$d->cid}}</td>
												<td>{{$d->name}}</td>
												<td>{{$d->email}}</td>
												<td>{{$d->phonenumber}}</td>
												<td>{{$d->address}}</td>
												<td>{{$d->gender}}</td>
												<td>
													<a href="{{url('/manage_cust/'.$d->id)}}" class="btn btn-success me-1">{{$d->status}}</a>
													<a href="" class="btn btn-primary me-1">Edit</a>
													<a href="{{url('/Delete/'.$d->id)}}" class="btn btn-danger me-1">Delete</a>
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