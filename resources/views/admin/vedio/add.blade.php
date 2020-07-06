@extends('admin.admin_layouts')

@section('main-content')

<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Add Vedio</a></li>
			</ul>


<div class="row-fluid sortable ui-sortable">
				<div class="box span12">

					 
					<div class="box-header" data-original-title="">
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Vedio</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action=" {{url('vedio')}} "  method="POST" enctype="multipart/form-data">
							{{csrf_field()}}
							<fieldset>
							
							  <div class="control-group">
								<label class="control-label" for="appendedInput">Vedio Title</label>
								<div class="controls">
								  <div class="input-append">
									<input id="" size="16" type="text" name="title" placeholder="Enter title here"> 
								  </div>
								 
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="appendedInput">Vedio Body</label>
								<div class="controls">
								  <div class="input-append">
									<textarea placeholder="Enter Details here" rows="3" name="description" ></textarea> 
								  </div>
								 
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="appendedInput">Vedio Link</label>
								<div class="controls">
								  <div class="input-append">
									<textarea placeholder="Enter Details here" rows="3" name="link" ></textarea> 
								  </div>
								 
								</div>
							  </div>

							   
							  <div class="control-group">
								<label class="control-label">Publish</label>
								<div class="controls">
								  <label class="checkbox inline">
									<div class="checker" id="uniform-inlineCheckbox1"><span class=""><input type="checkbox" id="inlineCheckbox1" name="published" value="1"></span></div> check for publish
								  </label>
								</div>
							  </div>



							    <div class="control-group">
								<label class="control-label">Choose Prefered Section</label>
								<div class="controls">
								  <label class="radio">
							
										
                                   <input type="radio" name="section" id="optionsRadios2" value="1">
								
									Section 1 
								  </label>
								  <div style="clear:both"></div>
								  <label class="radio">
								  <input type="radio" name="section" id="optionsRadios2" value="2">
								
									Section 2 
								  </label>
								</div>
							  </div>
							 
							
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Save changes</button>
								<button class="btn">Cancel</button>
							  </div>
							</fieldset>
						</form>
					</div>
				</div><!--/span-->

			</div>

@endsection





