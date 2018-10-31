<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <p>
          <?php echo anchor('siswa/add', 'Tambah',array('class'=>'btn btn-info btn-sm')); ?>
        </p>
        <table id="siswa" class="table table-hover" width="100%">
          <thead>
            <tr>
              <th width="9%">No</th>
              <th>NIS</th>
              <th>Nama Siswa</th>
              <th>Agama</th>
              <th>No Telp</th>
              <th class="no-sort">#</th>
            </tr>
          </thead>
          <tbody></tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<script>
  $('#siswa').DataTable({
  	"processing": true,
      "ajax": {
       "url": "<?php echo site_url('siswa/data_siswa') ?>",
       "type": "POST"
    },
    "sPaginationType": "full_numbers",
    "lengthMenu": [[15,50,100,500, -1], [15,50,100,500, "All"]],
    "order":[[0,"asc" ]],
    "columnDefs": [
      {"bSortable": false,"aTargets": ["no-sort"]},
    ]
  });
</script>