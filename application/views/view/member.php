        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel <?php echo $judul;?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="<?php echo base_url();?>Pelanggan/form_input"><button type="button" class="btn btn-primary">Input <?php echo $judul;?> <i class="fa fa-plus"></i></button></a>
                <br>
                <br>
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Pelanggan</th>
                    <th>Alamat</th>
                    <th>No Telp</th>
                    <th>Poin</th>
                    <th>Status Bonus</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Bima</td>
                    <td>Mitra Raya</td>
                    <td>12345678</td>
                    <td>5</td>
                    <td>Bisa diambil</td>
                    <td>
                      <a href="#"><button class="btn btn-danger">Hapus <i class="fa fa-trash"></i></button></a>
                      <a href="#"><button class="btn btn-warning">Edit <i class="fa fa-edit"></i></button></a>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
      </div><!-- /.container-fluid -->
    </div>

      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
