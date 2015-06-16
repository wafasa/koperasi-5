
	<!-- PAGE table -->
	<div class="row">
		<div class="col-md-12">
			<!-- BOX -->
			<div class="box border orange">
				<div class="box-title">
					<h4><i class="fa fa-table"></i></i><?php 
					$f = $this->uri->segment(4);
					$h = $this->db->query("select name from tr_wf_type where id = '".$f."'")->row();
					echo $h->name;
					//print_r($f);

					 ?></h4> 
					<div class="tools hidden-xs">
					<a href="#box-config" data-toggle="modal" class="config">
					<i class="fa fa-cog"></i>
					</a>
					<a href="javascript:;" class="reload">
					<i class="fa fa-refresh"></i>
					</a>
					<a href="javascript:;" class="collapse">
					<i class="fa fa-chevron-up"></i>
					</a>
					<a href="javascript:;" class="remove">
					<i class="fa fa-times"></i>
					</a>
					</div>
				</div>
				<div class="box-body">
					<!-- Form-->
					<form class="form-horizontal row-border"  method="post" id="form">
						<div class="form-group">
							<label class="col-md-2 control-label">Code:</label> 
							<div class="col-md-4">
								<input type="text" value="<?php echo $edit->code;?>" name="code" id="code" class="form-control" placeholder="Code" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Name:</label> 
							<div class="col-md-4">
								<input type="text" value="<?php echo $edit->name;?>" name="name" id="name" class="form-control" placeholder="Name" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">P_Left:</label> 
							<div class="col-md-4">
								<input value="<?php echo $edit->p_left;?>" type="text" name="left" id="left" class="form-control" placeholder="Left" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">P_Top:</label> 
							<div class="col-md-4">
								<input value="<?php echo $edit->p_top;?>" type="text" name="top" id="top" class="form-control" placeholder="TOP" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">P_Width:</label> 
							<div class="col-md-4">
								<input value="<?php echo $edit->p_width;?>" type="text" name="width" id="width" class="form-control" placeholder="Width" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Description:</label> 
							<div class="col-md-4">
								<textarea name="descr" id="descr" cols="30" rows="10" class="form-control"><?php echo $edit->descr;?> </textarea>
							</div>
						</div>	
						<div class="form-group">
							<label class="col-md-2 control-label">Type ID:</label> 
							<div class="col-md-4">
								<span class="label label-primary" ><?php echo $type->name;?></span>
								<!-- <select name="type_id" id="type_id" class="select2-01 col-md-12 full-width-fix">
								<option value="0">Unidentify</option>
								<?php foreach($type as $g){
									if($g->id == $edit->type_id){
										$a = "selected";
									}else{
										$a = "";
									}
								?>
									<option  <?php echo $a; ?> value="<?php echo $g->id;?>"><?php echo $g->name;?></option>
									<?php } ?>
								</select> -->
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Parent:</label> 
							<div class="col-md-4">
								<select name="parent_id" id="parent_id" class="select2-01 col-md-12 full-width-fix">
								<!-- <option value="0">Unidentify</option> -->
								<?php foreach($data as $g){
									if($g->id == $edit->parent_id){
										$a = "selected";
									}else{
										$a = "";
									}
								?>
									<option  <?php echo $a; ?> value="<?php echo $g->id;?>"><?php echo $g->name;?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Active:</label> 
							<div class="col-md-4">
								<select class="form-control" name="active" id="active" class="select2-01 col-md-12">
									<option <?php if($edit->active == 1){echo "selected";}else{echo "";}?> value="1">Active</option>
									<option <?php if($edit->active == 0){echo "selected";}else{echo "";}?> value="0">Inctive</option>
								</select>
							</div>
						</div>
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
				url: '<?php echo base_url();?>index.php/tm/atype/execute_child/update/<?php echo $edit->id;?>',
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
						window.location = "../../child/"+"<?php echo $f;?>";
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