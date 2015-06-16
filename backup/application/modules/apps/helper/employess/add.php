<!-- BOX TABS -->
<div class="row">
    <div class="col-md-12">
    <!-- BOX -->
    	<div class="box border blue">
        	<div class="box-title">
            	<h4><i class="fa fa-columns"></i>Employee Data</h4>
            </div>
            <div class="box-body">
            	<div class="tabbable box-tabs">
                	<ul class="nav nav-tabs">
                    	<li>
                    		<a href="#box_tab8" data-toggle="tab"><i class="fa fa-desktop"></i>Login</a>
                    	</li>
                        <li>
                        	<a href="#box_tab7" data-toggle="tab"><i class="fa fa-desktop"></i>Experiences</a>
                        </li>
                        <li>
                        	<a href="#box_tab6" data-toggle="tab"><i class="fa fa-desktop"></i>Education</a>
                        </li>
                        <li>
                        	<a href="#box_tab5" data-toggle="tab"><i class="fa fa-flask"></i>Oficial</a>
                        </li>
                        <li class="active">
                        	<a href="#box_tab4" data-toggle="tab">PERSONAL</a>
                        </li>
                    </ul>
                    <!-- FORM -->
                    <form class="form-horizontal row-border"  method="post" id="form" enctype="multipart/form-data" >
                    <div class="tab-content">
                    	<!--START TAB4-->        
                        <div class="tab-pane active" id="box_tab4">
                        	<div class="form-group">
                            	<label class="col-md-2 control-label">Name</label>
                                <div class="col-md-3">                                   
                                	<span>First Name</span>
                                	<input type="text" name="txtNama1" class="form-control" />
                                </div>
                                <div class="col-md-3">
                                	<span>Midlle Name</span>
                                    <input type="text" name="txtNama2" class="form-control" />
                                </div>
                                <div class="col-md-3">
                                	<span>Family Name</span>
                                    <input type="text" name="txtNama3" class="form-control" />
                                </div>                                                     
                            </div>                                                                               
                            <div class="form-group">
                            	<label class="col-md-2 control-label">Phone</label>
                                <div class="col-md-4">
                                	<div class="input-group">
                                		<span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                		<input type="text" name="txtPhone1" size="25"  class="form-control textarea"  />
                                	</div>
                                </div>
                            </div>
                            <div class="form-group">
                            	<label class="col-md-2 control-label">Email</label>
								<div class="col-md-4">
                                	<div class="input-group">
                                		<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                		<input type="text" name="txtEmail1" size="25" class="form-control textarea" />
                                	</div>
                                </div>
                           	</div>
                            <div class="form-group">
                            	<label class="col-md-2 control-label">Berat</label>
                            	<div class="col-md-2">
                            		<input type="text" name="txtWeight" class="form-control textarea"  />Kg
                            	</div>
                            </div>
                            <div class="form-group">
                            	<label class="col-md-2 control-label">Tinggi</label>
                                <div class="col-md-2">
                                	<input type="text" name="txtHeight" class="form-control textarea"  />cm
                                </div>
                            </div>                                                                                                                                                                                         
                            <div class="form-group">
                            	<label class="col-md-2 control-label">Mothers Name</label>
                                <div class="col-md-4">
                                	<input type="text" name="txtMother" size="25" class="form-control textarea"  />
                                </div>
                            </div>
                            <div class="form-group">
                            	<label class="col-md-2 control-label">Nick Name</label>
								<div class="col-md-4">
									<input type="text" name="txtNickName" size="25"  class="form-control textarea"  />
								</div>
                            </div>
                            <div class="form-group">
                            	<label class="col-md-2 control-label">TMPT/TGL LAHIR</label>
                                <div class="col-md-10">
                                	<div class="row">
                                    	<div class="col-md-3">
                                        	<input type="text" name="txtBirthPlace" size="25" class="form-control textarea"  />
                                        </div>
                                    	<div class="col-md-4">
                                   			<div class="input-group">
                                            	<input type="text" name="txtBirth" id="datepicker1" class="form-control" data-mask="99/99/9999">
                                            	<span class="input-group-btn">
                                            		<button class="btn btn-primary" id="btndp1" type="button"><i class="fa fa-calendar" ></i> Date</button>
                                            	</span>
                                            </div>
                                        </div>
                                    </div>                 
                               	</div>
                            </div>                         
                            <div class="form-group">
                           		<label class="col-md-2 control-label">Sex Type</label>
                                <div class="col-md-4">
                                	<select name="TxtSex"  id="input1" class="select2-01 col-md-8">
                                     	<option value="0">N/A</option>
                                        <option value="1">Man</option>
                                        <option value="2">Woman</option>
                                    </select>
                               	</div>
                            </div>
                            <div class="form-group">
                            	<label class="col-md-2 control-label">Religion</label>
                                <div class="col-md-4">
                                	<select  size="1" name="TxtReligion"  id="input1" class="select2-01 col-md-8">
             							<option value="0">Not Specified</option>
                                        <?php 
                                        	foreach ($tr_hr_religion as $key => $value) {
                                        		echo "<option value = ".$value->id.">".$value->name."</option>";
                                        	}
                                        ?>
                                    </select>
                                </div>
                          	</div>
                            <div class="form-group">
                            	<label class="col-md-2 control-label">Marital Status</label>
                                <div class="col-md-4">
                                	<select size="1" name="TxtMarital"  id="input1" class="select2-01 col-md-8">
                                    	<option value="0">Not Specified</option>
                                        <?php 
                                        	foreach ($tr_hr_marital_status as $key => $value) {
                                        		echo "<option value = ".$value->id.">".$value->name."</option>";
                                        	}
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                            	<label class="col-md-2 control-label">Culture</label>
                                <div class="col-md-4">
                                	<select size="1" name="TxtEthnic"  id="input1" class="select2-01 col-md-8">
                                    	<option value="0">Not Specified</option>
                                    	 <?php 
                                        	foreach ($tr_hr_traditional as $key => $value) {
                                        		echo "<option value = ".$value->id.">".$value->name."</option>";
                                        	}
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                            	<label class="col-md-2 control-label">Blood Type</label>
                                	<div class="col-md-4">
                                		<select size="1" name="TxtBlood"  id="input1" class="select2-01 col-md-2">
                                        	<option value="0">N/A</option>
                                            <?php 
                                        		foreach ($tr_hr_blood_type as $key => $value) {
                                        		echo "<option value = ".$value->id.">".$value->name."</option>";
                                        	}
                                        	?>
                                        </select>
                                    </div>
                            </div>
                            <div class="form-group">
                            	<label class="col-md-2 control-label">Adreess 1</label>
                                <div class="col-md-10">
                                   	<div class="row">
                                       	<div class="col-md-6">
                                       		<textarea name="txtAddress1" id="autoexpanding" rows="7" cols="50" class="form-control textarea"  ></textarea>
                                       	</div>
                                   	</div>
                                   	<div class="row">
                                       	<div class="col-md-3">
                                       		<span>RT</span>
                                       		<input type="text" name="txtAdr1RT" size="10"  class="form-control textarea"  />
                                       	</div>
                                        <div class="col-md-3">
                                           	<span>RW</span>
                                           	<input type="text" name="txtAdr1RW" size="10" class="form-control textarea"  />
                                        </div>
                                   	</div>
                                  	<div class="row">        
                                      	<div class="col-md-4"><span>Kelurahan</span><input type="text" name="txtAdr1LRH" size="10"  class="form-control textarea"  /></div>
                                        <div class="col-md-4"><span>Kecamatan</span><input type="text" name="txtAdr1KCM" size="10" class="form-control textarea"  /></div>
										<div class="col-md-4"><span>KodePos</span><input type="text" name="txtZip1" size="15"  class="form-control textarea"  /></div>                                                       
                                    </div>           
                                    <div class="row">
                                       	<div class="col-md-5"><span>Province</span>
                                       		<select name="txtProv1" id="input1" class="select2-01 col-md-12">
                                               	<option value="0">Not Specified</option>
                                                <?php 
                                                foreach ($TR_SYS_AREA_PROVINCE as $key => $value) {
                                                echo "<option value = ".$value->id.">".$value->KODE." - ".$value->name."</option>";
                                            }
                                        ?>
                                            </select>                                
                                        </div>
	                                    <div class="col-md-5">
	                                      	<span>District</span>
	                                        <select name="txtDstr1" id="input1" class="select2-01 col-md-12">
	                                          	<option value="0">Not Specified</option>
                                                <?php 
                                                foreach ($TR_SYS_AREA_DISTRICT as $key => $value) {
                                                echo "<option value = ".$value->id.">".$value->code." - ".$value->name."</option>";
                                                }?>
	                                        </select>                                
	                                    </div>
                                    </div>   
                             	</div>
                            </div> 
                            <div class="form-group">
                            	<label class="col-md-2 control-label">Address 2</label>
                                <div class="col-md-10">
                                    <div class="row">
                                    	<div class="col-md-6"><textarea name="txtAddress2" id="autoexpanding" rows="7" cols="50" class="form-control textarea"></textarea></div>
                                  	</div>
                                    <div class="row">
                                    	<div class="col-md-3"><span>RT</span><input type="text" name="txtAdr2RT" size="10" class="form-control textarea"  /></div>
                                        <div class="col-md-3"><span>RW</span><input type="text" name="txtAdr2RW" size="10" class="form-control textarea"  /></div>
                                    </div>
                                    <div class="row">        
                                    	<div class="col-md-4"><span>Kelurahan</span><input type="text" name="txtAdr2LRH" size="10" class="form-control textarea"  /></div>
                                   		<div class="col-md-4"><span>Kecamatan</span><input type="text" name="txtAdr2KCM" size="10" class="form-control textarea"  /></div>
                                    	<div class="col-md-4"><span>KodePos</span><input type="text" name="txtZip2" size="15"  class="form-control textarea"  /></div>                                                       
                                   	</div>           
                                    <div class="row">
                                    	<div class="col-md-5"><span>Province</span>
                                        	<select name="txtProv2" id="input1" class="select2-01 col-md-12">
                                        		<option value="0">Not Specified</option>
                                                <?php 
                                                foreach ($TR_SYS_AREA_PROVINCE as $key => $value) {

                                                echo "<option value = ".$value->id.">".$value->KODE." - ".$value->name."</option>";
                                                }
                                                ?>
                                        	</select>                                
                                    	</div>
                                    	<div class="col-md-5"><span>District</span>
                                        	<select name="txtDstr2" id="input1" class="select2-01 col-md-12">
                                            	<option value="0">Not Specified</option>
                                                <?php 
                                                foreach ($TR_SYS_AREA_DISTRICT as $key => $value) {
                                                echo "<option value = ".$value->id.">".$value->code." - ".$value->name."</option>";
                                                }?>
                                            </select>                                
                                        </div>
                                    </div>   
                                    <div class="row">        
                                    	<div class="col-md-4"><span>Address Status</span>
											<select name="TxtStatAddr"  id="input1" class="select2-01 col-md-12" >
                                            	<option value="1">Rumah Sendiri </option>
                                                <option value="2">Rumah Kontrak/Sewa </option>
                                                <option value="3" >Ikut Saudara </option>
                                            </select>                                
                                        </div>
                                    </div>                           
                                </div>
                            </div> 
                            <div class="form-group">
                            	<label class="col-md-2 control-label">Upload Files</label>
                               	<div class="col-md-8">
                                <spa>Foto</spa>
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="input-group">
                                                    <div class="form-control uneditable-input"><i class="fa fa-file fileupload-exists"></i> 
                                                        <span class="fileupload-preview"></span>
                                                    </div>
                                                    <div class="input-group-btn">
                                                        <a class="btn btn-default btn-file">
                                                            <span class="fileupload-new">Select file</span>
                                                            <span class="fileupload-exists">Change</span>
                                                            <input  type="file" name="foto" id="userfile" class="file-input" /></a>
                                                            <input type="hidden" name="foto" id="userfile">
                                                            <input type="hidden" name="ktp" id="userfile">
                                                            <input type="hidden" name="kk" id="userfile">
                                                    </div>
                                                </div>
                                            </div>
                                	<spa>KTP</spa>
                                	<div class="fileupload fileupload-new" data-provides="fileupload">
												<div class="input-group">
													<div class="form-control uneditable-input"><i class="fa fa-file fileupload-exists"></i> 
														<span class="fileupload-preview"></span>
													</div>
													<div class="input-group-btn">
														<a class="btn btn-default btn-file">
															<span class="fileupload-new">Select file</span>
															<span class="fileupload-exists">Change</span>
															<input  name="ktp" id="userfile" type="file" class="file-input" /></a>
														
													</div>
												</div>
											</div>
											<spa>Kartu Keluarga</spa>
                                	<div class="fileupload fileupload-new" data-provides="fileupload">
												<div class="input-group">
													<div class="form-control uneditable-input"><i class="fa fa-file fileupload-exists"></i> 
														<span class="fileupload-preview"></span>
													</div>
													<div class="input-group-btn">
														<a class="btn btn-default btn-file">
															<span class="fileupload-new">Select file</span>
															<span class="fileupload-exists">Change</span>
															<input name="kk" id="userfile" type="file" class="file-input" /></a>														
													</div>
												</div>
											</div>
                                </div>

                            </div>                                                                                                                                                                                         
                    	</div>
                        <!--END TAB4-->          
                        <!--START TAB5-->      
                        <div class="tab-pane" id="box_tab5">
                            <div class="form-group">
                                <label class="col-md-2 control-label">Start Date</label>
                                
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <input type="text" name="txtStartDate" id="datepicker2" class="form-control" data-mask="99/99/9999"><span class="input-group-btn"> <button class="btn btn-primary" id="btndp2" type="button"><i class="fa fa-calendar" ></i> Date</button> </span>
                                            </div>                                                                                                                   
                                        </div>
                                                                          
                            </div>                                                                                                
                            <div class="form-group">
                                <label class="col-md-2 control-label">End Date</label>
                                
                                   
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <input type="text" name="txtEndDate" id="datepicker3"  class="form-control" data-mask="99/99/9999"><span class="input-group-btn"> <button class="btn btn-primary" id="btndp3" type="button"><i class="fa fa-calendar" ></i> Date</button> </span>
                                            </div>                                                                                                                   
                                        </div>
                                                                         
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">ID Card/Valid Until</label>
                                
                                   
                                        <div class="col-md-3">
                                            <input type="text" name="txtCard" size="25" class="form-control textarea"  />
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <input type="text" name="txtCardExp" id="datepicker4"  class="form-control" data-mask="99/99/9999"><span class="input-group-btn"> <button class="btn btn-primary" id="btndp4" type="button"><i class="fa fa-calendar" ></i> Date</button> </span>
                                            </div>
                                        </div>
                                   
                                
                            </div>                                                                                                                         
                            <div class="form-group">                                             
                                <label class="col-md-2 control-label">Division</label>
                                <div class="col-md-4">
                                    <select  name="txtDivId" id="input1" class="select2-01 col-md-12" >
                                        <option value="0">UNDEFINED</option>
                                        <?php 
                                                foreach ($tr_hr_div as $key => $value) {
                                                echo "<option value = ".$value->id.">".$value->code." - ".$value->name."</option>";
                                                }?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">                                             
                                <label class="col-md-2 control-label">Structural Level</label>
                                    <div class="col-md-4">
                                        <select  name="txtStrucId" id="input1" class="select2-01 col-md-12" >
                                            <option value="0">UNDEFINED</option>
                                            <?php 
                                                foreach ($tr_hr_stc as $key => $value) {
                                                echo "<option value = ".$value->id.">".$value->code." - ".$value->name."</option>";
                                                }?>
                                        </select>
                                    </div>
                            </div>                                                                                         
                            <div class="form-group">                                             
                                <label class="col-md-2 control-label">Functional Level</label>
                                <div class="col-md-4">
                                    <select  name="txtFuncId" id="input1" class="select2-01 col-md-12" >
                                        <option value="0">UNDEFINED</option>
                                        <?php 
                                                foreach ($tr_hr_fnc as $key => $value) {
                                                echo "<option value = ".$value->id.">".$value->code." - ".$value->name."</option>";
                                                }?>
                                    </select>
                                </div>
                            </div>                                                                                                                                                                                         
                            <div class="form-group">                                             
                                <label class="col-md-2 control-label">Entry Gate Name</label><!-- realsi ke tabel user info -->
                                <div class="col-md-4">
                                    <select  name="txtUSMC" class="select2-01 col-md-12">
                                        <option value="0">-= UNIDENTIFY =-</option>
                                         <?php 
                                                foreach ($USERINFO as $key => $value) {
                                                echo "<option value = ".$value->USERID.">".$value->Name."</option>";
                                                }?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Employee Number</label>
                                <div class="col-md-4">
                                    <input type="text" name="txtCode"  class="form-control textarea"  size="25" />
                                </div>
                            </div>
                        </div>
                        <!--END TAB5-->          
                        <!--START TAB6-->
                        <div class="tab-pane" id="box_tab6">
                            <!--start EDUCATION-->
                            <div class="form-group">
                                <label class="col-md-2 control-label">PENDIDIKAN TERAKHIR</label>
                                <div class="col-md-4">
                                    <select size="1" name="TxtEdu"  id="input1" class="select2-01 col-md-8">
                                        <option value="0">Not Specified</option>
                                        <?php 
                                                foreach ($TR_HR_EDUCATION_TYPE as $key => $value) {
                                                echo "<option value = ".$value->id.">".$value->code." - ".$value->name."</option>";
                                                }?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                <!-- DATA TABLES -->
                                <!-- /DATA TABLES -->
                                </div>
                            </div>
                            <!--end EDUCATIONS-->
                        </div>
                        <!--END TAB6-->
                        <!--START TAB7-->
                        <div class="tab-pane" id="box_tab7">
                            <!--start EXPERIENCES-->
                            <div class="form-group">
                                <div class="col-md-12">
                                <!-- DATA TABLES -->
                                </div>
                            </div>
                            <!--end EXPERIENCES-->
                        </div>
                        <!--END TAB7-->                                                                                  
                        <!--START TAB8-->
                        <div class="tab-pane" id="box_tab8">
                            <div class="form-group">
                                <label class="col-md-2 control-label">Login</label>
                                <div class="col-md-10">
                                    <div class="row">        
                                        <div class="col-lg-4"><span>User Name</span><input type="text" name="txtUserName2" size="25" class="form-control"  /> </div>
                                    </div>                           
                                    <div class="row">        
                                        <div class="col-lg-4"><span>Password</span><input type="password" name="txtPass1" size="25"  class="form-control textarea"  /></div>
                                        <div class="col-lg-4"><span>Verify Password </span><input type="password" name="txtPass2" size="25"  class="form-control textarea"  /></div>
                                    </div>                           
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Notes</label>
                                <div class="col-md-4"><textarea name="TxtDesc" id="autoexpanding" rows="7" cols="50" class="form-control textarea"  ></textarea></div>
                            </div>                       
                            <div class="form-group">
                                <label class="col-md-2 control-label">Activation</label>
                                <div class="col-md-4">
                                    <select name="TxtRem"  class="select expandable-list anthracite-gradient glossy" style="width:100px" tabindex="2" >
                                        <option value="1"  selected >Active </option>
                                        <option value="0"   >Inactive </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--END  TAB8-->                                                                                        
                    </div>
                <input type="submit" class="btn btn-info btn-lg pull-right" onclick="save(this);" value="Save"/>
                </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- BOX TABS -->

					
</div>
</div>
<script type="text/javascript">
$(function() {
    
    $( "#datepicker1" ).datepicker({
      dateFormat: "yy-mm-dd"
    });   
    $("#btndp1").click(function () {
       $("#datepicker1" ).datepicker("show");
    });
    $( "#datepicker2" ).datepicker({
      dateFormat: "yy-mm-dd"
    });   
    $("#btndp2").click(function () {
       $("#datepicker2" ).datepicker("show");
    });
    $( "#datepicker3" ).datepicker({
      dateFormat: "yy-mm-dd"
    });   
    $("#btndp3").click(function () {
       $("#datepicker3" ).datepicker("show");
    });
     $( "#datepicker4" ).datepicker({
      dateFormat: "yy-mm-dd"
    });   
    $("#btndp4").click(function () {
       $("#datepicker4" ).datepicker("show");
    });
    
            
  });
// Fungsi Untuk Tambah Data
function save(){
    
    $('#form').validate({
        rules: {
          txtNama1: {           
            required: true
          },
          txtUserName2: {
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
            var formData = new FormData(form);
            $.ajax({
                url: '<?php echo site_url();?>apps/employess/execute/save',
                type: "POST",
                dataType: 'json',
                cache: false,
                contentType: false,
                processData: false,
                data: formData,//$("#form").serialize().,
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
                        window.location = "./";
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