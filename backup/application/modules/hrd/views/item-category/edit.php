<div class="row">
	<div id="content" class="col-lg-12">
		<!-- PAGE HEADER-->
		<div class="row">
			<div class="col-sm-12">
				<div class="page-header">
				<!-- STYLER -->
				<!-- /STYLER -->
				<!-- BREADCRUMBS -->
				<!--<ul class="breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
					</li>
					<li>
					<a href="#">Other Pages</a>
					</li>
						<li>Blank Page</li>
				</ul>-->
				<!-- /BREADCRUMBS -->
				<div class="clearfix">
					<h3 class="content-title pull-left">Item Category</h3>
				</div>
				<div class="description"></div>
				</div>
			</div>
		</div>
	<!-- /PAGE HEADER -->
	<!-- PAGE table -->
	<div class="row">
		<div class="col-md-12">
			<!-- BOX -->
			<div class="box border yellow">
				<div class="box-title">
					<h4><i class="fa fa-table"></i>Form Item Category Edit </h4> 
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
							<label class="col-md-1 control-label">Code:</label> 
							<div class="col-md-3">
								<input type="text" value="<?php echo $edit->code;?>" name="code" id="code" class="form-control" placeholder="Code" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-1 control-label">Name:</label> 
							<div class="col-md-3">
								<input type="text" value="<?php echo $edit->name;?>" name="name" id="name" class="form-control" placeholder="Name" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-1 control-label">Description:</label> 
							<div class="col-md-3">
								<textarea name="descr" id="descr" cols="30" rows="10" class="form-control"><?php echo $edit->descr;?> </textarea>
							</div>
						</div>	
						<div class="form-group">
							<label class="col-md-1 control-label">Active:</label> 
							<div class="col-md-3">
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
				url: '<?php echo base_url();?>index.php/item/itemcategory/execute/update/<?php echo $edit->id;?>',
				type: "POST",
				dataType:"json",
				data: $("#form").serialize(),
				beforeSend: function(){
					$("#loading").show(); 
				},
				success:function(data){
				
					$.pnotify({
								title: 'Item Category Edited',
								text: 'Item Category Edited',
								animation: {
									effect_in: 'show',
									effect_out: 'slide'
								},
								type : "success",
							});
							
							setInterval(function() {
								
								window.location = "../";
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