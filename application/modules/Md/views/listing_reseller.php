
<link rel="stylesheet" href="<?php echo base_url('bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.css') ?>">
<div class="box">
  <!-- /.box-header -->
  <div class="box-body">
    <table id="dataTable" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Deposit</th>
          <th>Alamat</th>
          <th>Pin</th>
          <th>Status</th>
          <th>Upline</th>
          <th>Kelompok</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
          <?php $no = 1 ?>
          <?php foreach ($datalist as $data): ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $data->kode_reseller ." / " . $data->nama_reseller ?></td>
              <td><?php echo $data->deposit ?></td>
              <td><?php echo $data->alamat ?></td>
              <td><?php echo $data->pin ?></td>
              <td>
                  <?php if ($data->status == 1): ?>
                    <i class="fa fa-check" style="color:green"></i>
                  <?php else: ?>
                    <i class="fa fa-times txt-red" style="color:red"></i>
                  <?php endif ?>
              </td>
              <td><?php echo $data->kode_upline ?></td>
              <td><?php echo $data->kode_kelompok ?></td>
              <td>
                <a href="#"><i class="fa fa-search" data-toggle="modal" data-target="#myModal"></i></a>
              </td>
            </tr>
          <?php endforeach ?>
      </tbody>
      <tfoot>
      <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Deposit</th>
          <th>Alamat</th>
          <th>Pin</th>
          <th>Status</th>
          <th>Upline</th>
          <th>Kelompok</th>
        </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->
</div>
<!-- Trigger the modal with a button -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Detil Reseller</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>