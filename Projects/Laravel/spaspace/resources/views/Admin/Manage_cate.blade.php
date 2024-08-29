@extends('Admin.Layout.structure')

@section('main_container')

    <div class="content-wrapper">
        <div class="container">
			<div class="row pad-botm">
				<div class="col-md-12">
					<h4 class="header-line">CATEGORY TABLE</h4>
				</div>
			</div>
			<div class="col-md-12">
                <!--    Context Classes  -->
                    <div class="panel panel-default">                     
                        <div class="panel-heading">
                            MANAGE CATEGORY
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive table-hover">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
											<th>Category Name</th>
											<th>Category Image</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
											foreach($arr_categories as $c)
											{
										?>
										<tr class="odd gradeX">
											<td><?php echo $c->cate_id?></td>
											<td><?php echo $c->cate_nm?></td>
											<td><?php echo $c->cate_image?></td>
											<td class="center">
												<a href="" class="btn btn-info" >Edit</a>
												<a href="{{url('Manage_cate/'.$c->cate_id)}}" class="btn btn-danger" >Delete</a>
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