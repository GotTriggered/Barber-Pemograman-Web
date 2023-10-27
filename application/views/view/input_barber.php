<!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form <?php echo $nama_form;?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Barber</label>
                    <input class="form-control" id="nama" placeholder="Isi Nama Barber">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input class="form-control" id="alamat" placeholder="Isi Alamat">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No telp</label>
                    <input class="form-control" id="telp" placeholder="Isi No telp">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->