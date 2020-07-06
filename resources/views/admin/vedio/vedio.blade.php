@extends('admin.admin_layouts')

@section('main-content')

<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Post</a></li>
			</ul>
 <a href=" {{ route('admin.vedio')}} " class="btn btn-primary pull-right ">Add Vedio</a> <br>

<div class="row-fluid sortable ui-sortable">	
				<div class="box span12">
					<div class="box-header">
						<h2><i class="halflings-icon align-justify"></i><span class="break"></span>All Vedios</h2>
						
					</div>
					 @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
					<div class="box-content">
						<table class="table table-bordered table-striped table-condensed">
							  <thead>
								  <tr>
								
									  <th>Title</th>
									  <th>Body</th>
									  <th>Link</th>
									  <th>Status</th>                                          
									  <th>Actions</th>                                          
								  </tr>
							  </thead>   
							  <tbody>
							  	  @foreach($vedios as $vedio)	
								<tr>
								
									<!-- <td> <img src=" {{asset('uploads/'.$vedio->image)}} "> </td> -->
									
									<td class="center">{{$vedio->title}}</td>
									<td class="center">{{$vedio->description}}</td>
									<td class="center">{{$vedio->link}}</td>
									<td class="center">
										<span class="label label-success">
											@if($vedio->published == 1)
											  Active
											 @else
											   inactive
											 @endif   
										</span>
									</td> 
									<td class="center ">
									<!-- <a class="btn btn-success" href="#">
										<i class="halflings-icon white zoom-in"></i>                                            
									</a> -->
								
									<a class="btn btn-danger"   href="{{ URL::to('delete-vedio/'.$vedio->id) }}"  >
										<i class="halflings-icon white trash"></i> 
									</a>
								</td> 
						                                 
								</tr>
								@endforeach	    	                               
							  </tbody>
						 </table>  
						 <div class="pagination pagination-centered">
						  <ul>
							<li><a href="#">Prev</a></li>
							<li class="active">
							  <a href="#">1</a>
							</li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">Next</a></li>
						  </ul>
						</div>     
					</div>
				</div><!--/span-->
			</div>

@endsection