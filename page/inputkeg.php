<div class="card mt-5 p-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Input Kegiatan</a></li>
        <li class="breadcrumb-item active" aria-current="page">Home</li>
      </ol>
    </nav>

    <h4>#Tabel Input Kegiatan</h4>
    <table class="table">
        <a href="#" class="btn btn-primary col-sm-3 btn-sm mb-3" data-bs-toggle="modal" data-bs-target="#tambahsiswa">Input Kegiatan</a>
        <thead>
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">Aksi</th>
                  <th scope="col">Tanggal</th>
                  <th scope="col">Uraian Kegiatan</th>
                  <th scope="col">Status Validasi</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <th scope="row">1</th>
                  <td><a href="#">Edit</a> | <a href="#">Hapus</a></td>
                  <td>19 Agustus 2022</td>
                  <td>Coding</td>
                  <td>Diterima</td>
              </tr>
          </tbody> 
        </table>
</div>
<div class="modal fade" id="tambahsiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
          <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Input Kegiatan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
               </div>
               <div class="modal-body">
               <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Kegiatan</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
               </div>
          </div>
     </div>
</div>
      

