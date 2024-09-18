@extends('Admin.Layout.structure')

@section('main_container')  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
                <div class="row">
                    <div class="col-md-12">
                     <h2>PRODUCTS</h2>   
                        <h5>Welcome!! , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
            
                <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12">
                     <!--    Hover Rows  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Manage Product
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Product Name</th>
                                            <th>Product Description</th>
                                            <th>Product Price</th>
											<th>Stock Quantity</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										@if(!empty($data_product))
											@foreach($data_product as $p)
												<tr>
													<td>{{$p->id}}</td>
													<td>{{$p->prod_name}}</td>
													<td>{{$p->prod_desc}}</td>
													<td>{{$p->prod_price}}</td>
													<td>{{$p->prod_qunt}}</td>
													
													<td>
														<a href="edit_product/<?php echo $fetch->id;?>" class="btn btn-info me-1">Edit</a>
														<a href="{{url('delete_prod/'.$p->id)}}" class="btn btn-danger me-1">Delete</a>
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
                    <!-- End  Hover Rows  -->
                </div>         
            </div>
                <!-- /. ROW  -->
        </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{url('Admin/assets/js/jquery-1.10.2.js')}}"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{url('Admin/assets/js/bootstrap.min.js')}}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{url('Admin/assets/js/jquery.metisMenu.js')}}"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="{{url('Admin/assets/js/dataTables/jquery.dataTables.js')}}"></script>
    <script src="{{url('Admin/assets/js/dataTables/dataTables.bootstrap.js')}}"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="{{url('Admin/assets/js/custom.js')}}"></script>
    
@endsection