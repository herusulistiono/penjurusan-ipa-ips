<div class="row">
  <div class="col-md-12">
    <div class="tile">
    	<div class="row">
          <div class="col-lg-6">
          	<?php echo form_open('#',array('id'=>'siswa')); ?>
          		<div class="form-group">
	               <label>NIS:</label>
	               <input type="text" class="form-control" name="nis" placeholder="NIS" autofocus/>
	            </div>
	            <div class="form-group">
	               <label>NAMA SISWA:</label>
	               <input type="text" class="form-control" name="nama_siswa" placeholder="NAMA SISWA"/>
	            </div>
	            <div class="form-group">
	               <label>NO TELP:</label>
	               <input type="text" class="form-control" name="notel" placeholder="NO TELP" onkeypress="javascript:return isNumber(event)"/>
	            </div>
	            <div class="form-group">
	            	<?php $agama=array('Buddha','Hindu','Islam','Kristen','Katolik'); ?>
	               <label>AGAMA:</label>
	               <select name="agama" class="form-control">
	               	<option value="">Agama</option>
	               	<?php foreach ($agama as $opt): ?>
	               	<?php echo '<option value="'.$opt.'">'.$opt.'</option>'; ?>
	               	<?php endforeach ?>
	               </select>
	            </div>
	            <div class="form-group">
	               <label>ALAMAT:</label>
	               <textarea name="alamat" class="form-control" placeholder="ALAMAT"></textarea>
	            </div>
	            <div class="form-group">
	               <label>NAMA BAPAK:</label>
	               <input type="text" class="form-control" name="namabapak" placeholder="NAMA BAPAK"/>
	            </div>
	            <div class="form-group">
	               <label>NAMA IBU:</label>
	               <input type="text" class="form-control" name="namaibu" placeholder="NAMA IBU"/>
	            </div>
          	<?php echo form_close(); ?>
          </div>
          <div class="col-lg-6"></div>
        </div>
        <div class="tile-footer">
        	<button class="btn btn-warning" type="button" onclick="save()">SIMPAN</button>
        	<?php echo anchor('siswa', 'BATAL',array('class'=>'btn btn-danger')); ?>
        </div>
    </div>
  </div>
</div>
<script type="text/javascript">
	function isNumber(evt) {
	    var iKeyCode = (evt.which) ? evt.which : evt.keyCode
	    if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
	      return false;
	    return true;
	  }
	function save() {
		$.ajax({
			url: '<?php echo site_url('siswa/save') ?>',
			type: 'POST',
			dataType: 'json',
			data: $('#siswa').serialize(),
			encode:true,
			success:function(data) {
				if (!data.success){
		         if(data.errors){
		            $.notify({
		              message: data.errors,
		              //icon: 'fa fa-warning' 
		            },{
		               type: "danger"
		            });
		            return false;
		         }
		      }else{
		         $.notify({
		            message: data.message,
		            //icon: 'fa fa-warning' 
		         },{
		            type: "success"
		         });
		         window.location.reload();
		      }
			}
		});
	}
</script>