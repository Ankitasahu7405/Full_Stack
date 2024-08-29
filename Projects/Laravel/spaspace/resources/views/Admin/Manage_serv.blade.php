@extends('Admin.Layout.structure')

@section('main_container')

    <div class="content-wrapper">
        <div class="container">
			<div class="row pad-botm">
				<div class="col-md-12">
					<h4 class="header-line">SERVICE TABLE </h>
				</div>
			</div>
			<div class="col-md-12">
                <!--    Context Classes  -->
                    <div class="panel panel-default">                     
                        <div class="panel-heading">
                            MANAGE CUSTOMER
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive table-hover">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
											<th>Service Name</th>
											<th>Service Image</th>
											<th>Description</th>
											<th>Price</th>
											<th>Category ID</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
											foreach($arr_services as $s)
											{
										?>
										<tr class="odd gradeX">
											<td><?php echo $s->serv_id?></td>
											<td><?php echo $s->serv_nm?></td>
											<td><?php echo $s->serv_image?></td>
											<td><?php echo $s->desc?></td>
											<td><?php echo $s->price?></td>
											<td><?php echo $s->cate_id?></td>
											<td class="center">
												<a href="" class="btn btn-info" >Edit</a>
												<a href="{{url('Manage_serv/'.$s->serv_id)}}" class="btn btn-danger" >Delete</a>
												<a href="#" class="btn btn-success" >Status</a>
											</td>
										</tr>
										<?php
											}
										?> 
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
  
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="{{url('Admin/assets/js/jquery-1.10.2.js')}}"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="{{url('Admin/assets/js/bootstrap.js')}}"></script>
    <!-- DATATABLE SCRIPTS  -->
    <script src="{{url('Admin/assets/js/dataTables/jquery.dataTables.js')}}"></script>
    <script src="{{url('Admin/assets/js/dataTables/dataTables.bootstrap.js')}}"></script>
    <!-- CUSTOM SCRIPTS  -->
    <script src="{{url('Admin/assets/js/custom.js')}}"></script>
@endsection