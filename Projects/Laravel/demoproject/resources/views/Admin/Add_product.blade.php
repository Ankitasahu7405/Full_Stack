@extends('Admin.Layout.structure')

@section('main_container')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Forms Page</h2>   
                        <h5>Welcome!! , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            PRODUCTS
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Add Products</h3>
                                    <form role="form" action="{{('/Add_product')}}" method="post" >
										@csrf
                                        <div class="form-group">
                                            <label>Product Name</label>
                                            <input class="form-control" type="text" name="prod_name" placeholder="PLease Enter Name" />
                                        </div>
                                       <div class="form-group">
                                            <label>Product Description</label>
                                            <input class="form-control" type="text" name="prod_desc" placeholder="PLease Enter Description" />
                                        </div>
                                        <div class="form-group">
                                            <label>Product Price</label>
                                            <input class="form-control" type="text" name="prod_price" placeholder="PLease Enter Price" />
                                        </div>
                                        <div class="form-group">
                                            <label>Stock Quantity</label>
                                            <input class="form-control" type="text" name="prod_qunt" />
                                        </div>

                                        <button type="submit" name="submit" class="btn btn-default">Submit</button>
                                        <button type="reset" class="btn btn-primary">Cancel</button>

                                    </form>                             
								</div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>		   
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{url('Admin/assets/js/jquery-1.10.2.js')}}"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{url('Admin/assets/js/bootstrap.min.js')}}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{url('Admin/assets/js/jquery.metisMenu.js')}}"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="{{url('Admin/assets/js/custom.js')}}"></script>
    
@endsection