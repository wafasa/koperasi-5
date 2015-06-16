	<!-- PAGE table -->
	<div class="row">
		<div class="col-md-12">
			<!-- BOX -->
			<div class="box border green">
				<div class="box-title">
					<h4><i class="fa fa-table"></i>Stock On hand</h4> 					
				</div>
				<div class="box-body">
				<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="data">
				<thead>
					<tr>						
						<th>No</th>
						<th>Code</th>
						<th>Name</th>															
						<th>Qty</th>															
						<th>Gudang</th>															
						<th>Rak</th>									
						<th>Status</th>						
						<th>Options</th>
					</tr>
				</thead>
				<tbody>
				<?php $no = 1; foreach ($data as $key => $value) { ?>
					
					<tr>
						<td><?php echo $no;?></td>
						<td><img width="70%"src="<?php echo base_url('qr_code').'/'.$value->code;?>.png"></td>
						<td><?php echo $value->name;?></td>
						<td><?php echo $value->qty;?></td>
						<td><?php echo $value->gudang;?></td>
						<td><?php echo $value->rak;?></td>
						<td><?php echo $value->status;?></td>						
						<td>
							<?php 
								echo "<a href='".site_url('gudang/soh/cloud/'.$value->id)."' class='btn btn-info btn-xs'>Upload</a>";
								echo " || <a href='".site_url('gudang/soh/form/'.$value->id)."' class='btn btn-warning btn-xs'>Update</a>";
							?></td>
					</tr>
					<?php $no++;} ?>
				</tbody>
				</table>
					<!-- <a class="btn btn-warning" href="<?php echo site_url('gudang/po/form');?>">Add New</a> -->
				</div>				
			</div>
			<!-- /BOX -->
		</div>
	</div>
	
	<!-- /PAGE table -->
		
	
	</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
	$('#data').dataTable({
		'sPaginationType': 'bs_full',
		"bProcessing": true,
		"aaSorting": [[0, "asc"]],
		"iDisplayLength": 10			
		
	});
	$('#data').each(function(){
		var datatable = $(this);
		var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
		search_input.attr('placeholder', 'Search');
		search_input.addClass('form-control input-sm');
		var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
		length_sel.addClass('form-control input-sm');
	});
	/*$('#data').delegate('.checkbox','change',function() {
		var i = $(this).attr('data-id');		
		var id = $(this).attr('data-id');
		if(this.checked){
			//alert("checked");
			$.ajax({
				url: '<?php echo site_url('inventory/issuer/execute/active/'); ?>',
				type: 'post',
				data: 'active=1&id='+i,
				success: function(result)
				{
					$('span-'+id).removeClass('label-default ').addClass('label-info');
					$('span-'+id).html('Active');					
				}
			});
		}else {
			//alert("unchecked");
			$.ajax({
				url: '<?php echo site_url('inventory/issuer/execute/active/');?>',
				type: 'post',
				data: 'active=0&id='+i,							
				success: function(result)
				{
					console.log();
					$('span-'+id).removeClass('label-info ').addClass('label-default');
					$('span-'+id).html('Inactive');
				}
			});
		}
	});*/
});
function del(btn)
{
	var cek = confirm("Apakah anda yakin akan menghapus??");
	if(cek==false)
	{
		return false;
	}
	else
	{
		var id = $(btn).attr('data-id');		
		$.ajax({
			url: "<?php echo site_url('purchasing/po/execute/delete/');?>",
			type: "POST",
			data:{data_id:id},
			crossDomain:true,
			beforeSend: function(){
				$("#msg").html("loading"); 
			},
			complete : function(){
				$("#msg").html("delete Sukses"); 
			}, 
			success: function(data) {				
				location.reload();
			},	
		});
		return false;
	}
}
</script>