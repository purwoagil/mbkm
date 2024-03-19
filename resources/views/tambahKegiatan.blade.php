@extends('layouts.main')

@section('container')
   
    
<div class="container bg-white">
    
      <div class="col-md-12 mb-1">
        <label for="inputState" class="form-label">Jenis Magang MBKM</label>
        <select id="inputState" class="custom-select">
          <option selected>Choose...</option>
          <option>...</option>
        </select>
      </div>
      <div class="col-md-12 mb-2">
        <label for="formFile" class="form-label">Skema kegiatan MBKM</label>
        <select id="inputState" class="custom-select">
            <option selected>Choose...</option>
            <option>...</option>
          </select>
      </div>
      <div class="col-md-12 mb-2">
        <label for="formFile" class="form-label">Nama Mitra MBKM</label>
        <select id="inputState" class="custom-select">
            <option selected>Choose...</option>
            <option>...</option>
          </select>
      </div>
      <div class="col-md-12 mb-5">
        <label for="formFile" class="form-label">Periode kegiatan</label>
        <select id="inputState" class="custom-select">
            <option selected>Choose...</option>
            <option>...</option>
          </select>
      </div>

      <div class="col-md-12 mb-4 ">
        <label for="formFile" class="form-label">Mata Kuliah Konfersi</label>
        {{-- <input class="form-control" type="text" id="formFile"> --}}
        <div>

            <table class="table table-borderless" id="datamaha" width="100%" cellspacing="0">
                {{-- <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis Kegiatan</th>
                    </tr>
                </thead> --}}
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Kerja Praktik</td>
                        <td>3 SKS</td>
                        <td>Argo Wibowo</td>

                        
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Sains Data</td>
                        <td>3 SKS</td>
                        <td>Argo Wibowo</td>
                    </tr>                  
                </tbody>
            </table>
    </div>
    </div>
    
    
    
</div>

@endsection
