@extends('layouts.main')

@section('container')
   
    
<div class="container bg-white">
    
      <div class="col-md-12 mb-4 ">
        <label for="formFile" class="form-label">Mata Kuliah Konfersi</label>
        <div>

            <table class="table table-borderless" id="datamaha" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Mahasiswa</th>
                        <th>Jenis Kegiatan</th>
                        <th>Skema</th>
                        <th>Mitra</th>
                        <th>Periode</th>
                        <th>Konfirmasi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Kerja Praktik</td>
                        <td>3 SKS</td>
                        <td>Argo Wibowo</td>
                        <td>Argo Wibowo</td>
                        <td>2017/2018</td>
                        <td><button class="btn btn-success justify-content-between ">Terima</button><button class="btn btn-danger justify-content-between ">Tolak</button></td>

                        
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Sains Data</td>
                        <td>3 SKS</td>
                        <td>Argo Wibowo</td>
                        <td>Argo Wibowo</td>
                        <td>2017/2018</td>
                        <td><button class="btn btn-success justify-content-between ">Terima</button><button class="btn btn-danger justify-content-between ">Tolak</button></td>

                    </tr>                  
                </tbody>
            </table>
    </div>
    </div>
    
    
    
</div>

@endsection
