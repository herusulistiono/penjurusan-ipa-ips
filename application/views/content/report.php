<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="row">
        <div class="col-lg-6">
          <?php echo form_open('#',array('id'=>'check_report','class'=>'form-inline'));?>
            <div class="form-group mb-2">
              <label>NIS</label>
            </div>
            <div class="form-group mx-sm-3 mb-2">
              <input type="text" name="nis" id="nis" class="form-control" placeholder="NIS"/>
            </div>
            <button type="button" class="btn btn-primary mb-2" onclick="hasil()">Cek</button>
          <?php echo form_close(); ?>
        </div>
        <div class="col-lg-6">
          <?php echo form_open('#',array('id'=>'report','class'=>'form-inline'));?>
            <div class="form-group mb-2">
              <label>JURUSAN</label>
            </div>
            <div class="form-group mx-sm-3 mb-2">
              <select name="rekomendasijurusan" class="form-control">
                <option value="">PILIH JURUSAN</option>
                <option value="IPA">IPA</option>
                <option value="IPS">IPS</option>
              </select>
            </div>
            <button type="button" class="btn btn-primary mb-2" onclick="process()">Cek</button>
          <?php echo form_close(); ?>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12"><div id="data_view"></div></div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function hasil() {
    $.ajax({
      url: '<?php echo site_url('report/check_data') ?>',
      type: 'POST',
      dataType: 'json',
      data: $('#check_report').serialize(),
      encode:true,
      success:function (data) {
        console.log(data);
        var nis = $('input[name="nis"]').val();
        if(nis==''){
          $.notify({
            //title: "Upps : ",
            message: "NIS mohon diisi",
            icon: 'fa fa-warning' 
          },{
            type: "danger"
          });
          $('#nis').focus();
          return false;
        }
        if (data.length>0) {
          var tagHtml = '<table id="data_tables" class="table table-hover" width="100%"><thead><tr><th>No</th><th>NIS</th><th>NAMA</th><th>Jurusan</th></tr></thead>';
          var no=1;
          $.each(data, function(index, val) {
            tagHtml += '<tbody><tr><td>'+no++;+'</td>';
            tagHtml += '<td>'+val.nis+'</td>';
            tagHtml += '<td>'+val.nama+'</td>';
            tagHtml += '<td>'+val.rekomendasijurusan+'</td>';
            tagHtml += '</tr></tbody>';
          });
          tagHtml += '';
          tagHtml += '</table>';
         // $('#data_tables').DataTable();
          $('div#data_view').html(tagHtml);
        }else{
          alert('Data tidak tersedia');
          $('#nis').focus();
          window.location.reload();
        }
      }
    });
  }
  function process(){
    $.ajax({
      url: '<?php echo site_url('report/cetak') ?>',
      type: 'POST',
      dataType: 'json',
      data: $('#report').serialize(),
      encode:true,
      success:function (data) {
        console.log(data);
        var rekomendasijurusan = $('select[name="rekomendasijurusan"]').val();
        if(rekomendasijurusan==''){
          $.notify({
            //title: "Upps : ",
            message: "Silahkan Pilih Jurusan Terlebih Dahulu",
            icon: 'fa fa-warning' 
          },{
            type: "danger"
          });
          return false;
        }
        if (data.length>0) {
          var tagHtml = '<table id="data_tables" class="table table-hover" width="100%"><thead><tr><th>No</th><th>NIS</th><th>NAMA</th><th>Jurusan</th></tr></thead>';
          var no=1;
          $.each(data, function(index, val) {
            tagHtml += '<tbody><tr><td>'+no++;+'</td>';
            tagHtml += '<td>'+val.nis+'</td>';
            tagHtml += '<td>'+val.nama+'</td>';
            tagHtml += '<td>'+val.rekomendasijurusan+'</td>';
            tagHtml += '</tr></tbody>';
          });
          tagHtml += '';
          tagHtml += '</table>';
         // $('#data_tables').DataTable();
          $('div#data_view').html(tagHtml);
        }else{
          alert('Data Belum Ada')
          return false;
        }
      }
    });
  }
</script>