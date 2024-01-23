@extends('admin.layout.structure')

@section('main_container')  
    <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
						<h2>Forms Page</h2>   
                        <h5>Welcome Ankita Sahu !! Love to see you back.. </h5>                      
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
               <div class="row">
					<div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Basic Form Examples</h3>
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" placeholder="PLease Enter Name"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" placeholder="PLease Enter Email" />
                                        </div>
										<div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" placeholder="PLease Enter Password" />
                                        </div>
                                        <div class="form-group">
                                            <label>Mobile</label>
                                            <input class="form-control" placeholder="PLease Enter Mobile" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="Male" id="optionsRadios1" value="Gender" />Male
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="Female" id="optionsRadios2" value="Gender"/>Female
                                                </label>
                                            </div>
                                        </div>
										
										<div class="form-group">
                                            <label>Language</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" />Hindi
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value=""/>English
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value=""/>Gujarati
                                                </label>
                                            </div>
                                        </div>
										
										<div class="form-group">
                                            <label>Country</label>
                                            <input class="form-control"/>
											
                                        </div>
										<div class="form-group">
                                            <label>File</label>
                                            <input type="file" />
                                        </div>
										</br>
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-primary">Reset Button</button>
                                    </form>
                                    <br/>
								</div>    
                     <!-- End Form Elements -->
                </div>
            </div>
            <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <h3>More Customization</h3>
                        <p>
							For more customization for this template or its components please visit official bootstrap 
							website i.e getbootstrap.com or <a href="http://getbootstrap.com/components/" target="_blank">click here</a> . 
							We hope you will enjoy our template. This template is easy to use, light weight and made with love by binarycart.com 
                        </p>
                    </div>
                </div>
            <!-- /. ROW  -->
		</div>
        <!-- /. PAGE INNER  -->
    </div>

@endsection