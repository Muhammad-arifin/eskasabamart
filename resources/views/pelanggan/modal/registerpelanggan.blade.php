<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog model-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="registerModalLabel">Register</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3 row">
                <label for="Email" class="col-sm-3 col-form-label">Nama <span style="color:red;"></span></label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="nama" id="nama" value="" placeholder="Your Name" required>
                </div>
              </div>
               <div class="mb-3 row">
                <label for="Email" class="col-sm-3 col-form-label">Email <span style="color:red;"></span></label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="staticEmail" value="" placeholder="Your Email" required>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="password" class="col-sm-3 col-form-label">Password <span style="color:red;"></span></label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" id="Pesan" placeholder="Your Password" required>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="alamat" class="col-sm-3 col-form-label">Address 1 <span style="color:red;"></span></label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="alamat"name="alamat" placeholder="Input Address 1" required>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="alamat" class="col-sm-3 col-form-label">Address 2 <span style="color:red;">*</span></label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Input Address 2" required>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="tlp" class="col-sm-3 col-form-label">Phone Number<span style="color:red;">*</span></label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="tlp" name="tlp" placeholder="Input Phone Number" required>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="date" class="col-sm-3 col-form-label">Date Of Birth<span style="color:red;">*</span></label>
                <div class="col-sm-9">
                  <input type="date" class="form-control" id="date" name="date" placeholder="Input Phone Number" required>
                </div>
              </div>
              <button type="button" class="btn btn-success col-sm-12">Login</button>
              <p class="m-auto text-center p-2" style="font-size:12px">jika tidak belum ada akun register sekarang ..!</p>
              <button type="button" class="btn btn-danger col-sm-12" data-bs-dismiss="modal">Close</button>
        </div>

        </div>
      </div>
    </div>
  </div>
