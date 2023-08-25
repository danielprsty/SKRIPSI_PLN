

		 {!! Form::open(array('url'=>'dailyreport', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Daily Report</legend>
				{!! Form::hidden('id', $row['id']) !!}{!! Form::hidden('id_team_leader', $row['id_team_leader']) !!}					
									  <div class="form-group row  " >
										<label for="Tanggal Pekerjaan" class=" control-label col-md-4 text-left"> Tanggal Pekerjaan <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  
				<div class="input-group input-group-sm m-b" style="width:150px !important;">
					{!! Form::text('tanggal_pekerjaan', $row['tanggal_pekerjaan'],array('class'=>'form-control form-control-sm date')) !!}
					<div class="input-group-append">
					 	<div class="input-group-text"><i class="fa fa-calendar"></i></span></div>
					 </div>
				</div> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Waktu Kerja" class=" control-label col-md-4 text-left"> Waktu Kerja <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <input  type='text' name='waktu_kerja' id='waktu_kerja' value='{{ $row['waktu_kerja'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Foto Before" class=" control-label col-md-4 text-left"> Foto Before <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="foto_before" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="foto_before-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["foto_before"],"pekerjaan") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Foto Progress" class=" control-label col-md-4 text-left"> Foto Progress <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="foto_progress" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="foto_progress-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["foto_progress"],"pekerjaan") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Foto After" class=" control-label col-md-4 text-left"> Foto After <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="foto_after" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="foto_after-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["foto_after"],"pekerjaan") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> </fieldset></div>

			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-default btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-default btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
				  </div>	  
			
		</div> 
		 <input type="hidden" name="action_task" value="public" />
		 {!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
