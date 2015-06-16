	<!-- PAGE table -->
	<div class="row">
		<div class="col-md-12">
			<!-- BOX -->
			<div class="box border orange">
				<div class="box-title">
					<h4><i class="fa fa-reorder"></i>Barang<?php //echo $this->uri->segment(2); ?></h4> 					
				</div>
				<div class="box-body">
					<!-- Form-->
					<form class="form-horizontal row-border"  method="post" id="form">
						<div class="form-group">
							<label class="col-md-2 control-label">Code:</label> 
							<div class="col-md-4">
								<input type="text" value="<?php echo $code; ?>" name="code" id="code" class="form-control" placeholder="code" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Name:</label> 
							<div class="col-md-4">
								<input type="text" value="<?php echo $name; ?>"  name="name" id="name" class="form-control" placeholder="name" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Descr:</label> 
							<div class="col-md-4">
								<textarea  name="descr" id="descr" class="form-control"> <?php echo $descr; ?></textarea>		
							</div>
						</div>
						<?php if($f == 3){ ?>	
						<div class="form-group">
							<label class="col-md-2 control-label">Group:</label> 
							<div class="col-md-4">							
								<select  name="f1" id="f1" class="select2-01 col-md-12 full-width-fix">
									<option value="0">Unidentify</option>
									<?php 
										
										foreach($f1_def as $key=>$value) {
											if($f1 == $value->id)
												$selected = "selected";
											else
												$selected = "";
											print '<option '.$selected.' value="'.$value->id.'">'.$value->name.'</option>';
										}
									?>									
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Type:</label> 
							<div class="col-md-4">							
								<select  name="f2" id="f2" class="select2-01 col-md-12 full-width-fix">
									<option value="0">Unidentify</option>
									<?php 
										
										foreach($f2_def as $key=>$value) {
											if($f2 == $value->id)
												$selected = "selected";
											else
												$selected = "";
											print '<option '.$selected.' value="'.$value->id.'">'.$value->name.'</option>';
										}
									?>									
								</select>
							</div>
						</div>
						<?php } ?>
						<div class="form-group">
							<label class="col-md-2 control-label">Parent:</label> 
							<div class="col-md-4">							
								<select  name="parent_id" id="parent_id" class="select2-01 col-md-12 full-width-fix">
									<option value="0">Unidentify</option>
									<?php 
										
										foreach($parent as $key=>$value) {
											if($parent_id == $value->id)
												$selected = "selected";
											else
												$selected = "";
											print '<option '.$selected.' value="'.$value->id.'">'.$value->name.'</option>';
										}
									?>									
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Active:</label> 
							<div class="col-md-4">
								<select class="form-control" name="active" id="active" class="select2-01 col-md-12">
									<option <?php if($active == 1){echo "selected";}else{echo "";}?> value="1">Active</option>
									<option <?php if($active == 0){echo "selected";}else{echo "";}?> value="0">Inctive</option>
								</select>
							</div>
						</div>
						<input type="hidden" value="<?php echo $method; ?>" name="method" id="method">
						<input type="hidden" value="<?php echo $f; ?>" name="f" id="f">
						<input type="hidden" value="<?php echo $id; ?>" name="id" id="id">
						<input type="submit" class="btn btn-info btn-lg pull-right" onclick="save(this);" value="Save"/>
					</form>
					<div class="row"></div>
					<br />
					<div id="msg"></div>
					<!-- /Form-->
				</div>
			</div>
			<!-- /BOX -->
		</div>
	</div>
	
	<!-- /PAGE table -->
		
	
	</div>
</div>
<script type="text/javascript">

// Fungsi Untuk Tambah Data
function save(){
	$('#form').validate({
	    rules: {
	      code: {	        
	        required: true
	      },
	      name: {
	        required: true,        
	      },
	    },
		highlight: function(element) {
			$(element).closest('.control-group').removeClass('success').addClass('error');
		},
		success: function(element) {
			element
			.text('OK!').addClass('valid')
			.closest('.control-group').removeClass('error').addClass('success');
		},
		submitHandler: function(form){
			$.ajax({
				url: "<?php echo site_url('object/component_def/execute');?>",
				type: "POST",
				dataType:"json",
				data: $("#form").serialize(),
				beforeSend: function(){
					$("#loading").show(); 
				},
				success:function(data){
					$.pnotify({
						title: data.message,
						text: data.message,
						animation: {
							effect_in: 'show',
							effect_out: 'slide'
						},
						type : "success",
					});
					setInterval(function() {
						<?php if($method == "save"){ ?>
						window.location = "../index/<?php echo $f;?>";
						<?php }else{ ?>
						window.location = "../../index/<?php echo $f;?>";
						<?php } ?>
					}, 1000);					
				},
				error: function(){
					$("#msg").slideDown();
				}
			}); 
		},			
		debug:true
	});	
} 
</script>

<style type="text/css">
	label.valid {
		width: 24px;
		height: 24px;
		display: inline-block;
		text-indent: -9999px;
	}
	label.error {
		font-weight: bold;
		color: red;
		padding: 2px 8px;
		margin-top: 2px;
	}
</style>