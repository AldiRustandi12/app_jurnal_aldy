<div class="card mt-5 p-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Data Siswa</a></li>
        <li class="breadcrumb-item active" aria-current="page">Home</li>
      </ol>
    </nav>

    <h4>#Tabel Data Siswa</h4>
    <table class="table">
        <a href="#" class="btn btn-primary col-sm-3 btn-sm mb-3" data-bs-toggle="modal" data-bs-target="#tambahsiswa">Tambah Siswa</a>
        <thead>
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">Aksi</th>
                  <th scope="col">Nama Siswa</th>
                  <th scope="col">Kelas</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">No HP</th>
                  <th scope="col">Email</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <th scope="row">1</th>
                  <td><a href="#">Edit</a> | <a href="#">Hapus</a></td>
                  <td>Aldi Rustandi</td>
                  <td>XII RPL 1</td>
                  <td>Desa Sentul</td>
                  <td>081317463872</td>
                  <td>anandaaldy153@gmail.com</td>
              </tr>
          </tbody> 
        </table>
</div>
<div class="modal fade" id="tambahsiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
          <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Tambah Siswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
               </div>
               <div class="modal-body">
               <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama Siswa</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Kelas</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Alamat</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">No HP</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
               </div>
          </div>
     </div>
</div>
      

