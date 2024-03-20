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
                        <th>Jenis Kegiatan</th>
                        <th>Skema</th>
                        <th>Mitra</th>
                        <th>Periode</th>
                        <th>Bukti MBKM</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Kerja Praktik</td>
                        <td>3 SKS</td>
                        <td>Argo Wibowo</td>
                        <td>2017/2018</td>
                        <td><a href="" class="">Unggah</a></td>

                        
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Sains Data</td>
                        <td>3 SKS</td>
                        <td>Argo Wibowo</td>
                        <td>2017/2018</td>
                        <td><a href="" class="">Unggah</a></td>
                    </tr>                  
                </tbody>
            </table>
    </div>
    </div>
    
    
    
</div>

@endsection
