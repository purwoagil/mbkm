@extends('layouts.main')

@section('container')
   
@if(session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

    <form action="/tambahkegiatankoor" method="post">
      @csrf
<div class="container bg-white from-group"  id="user-inputs">
  <div class="row g-3">
      <div class="col-md-12 mb-1">
        <label for="inputState" class="form-label">Jenis Magang MBKM</label>
        <select id="jenisProgram" name="jenisProgram" class="custom-select">
          <option selected>Magang Merdeka</option>
          <option >Studi Independen</option>
          <option >Kompetisi/Lomba</option>
        </select>
      </div>
      <div class="col-md-12 mb-2">
        <label for="formFile" class="form-label">Skema kegiatan MBKM</label>
        <input type="text" class="form-control" id="jenisSkema" name="jenisSkema">
      </div>
      <div class="col-md-12 mb-2">
        <label for="formFile" class="form-label">Nama Mitra MBKM</label>
        <input type="text" class="form-control" id="namaMitra" name="namaMitra">
      </div>
      <div class="col-md-12 mb-2">
        <label for="formFile" class="form-label">Periode kegiatan</label>
        <input type="text" class="form-control" id="periode" name="periode">
      </div>

      <div class="col-md-12 mt-2 mb-2">
        <label for="formFile" class="form-label">Mata Kuliah Konversi</label>
      </div>
  </div>
  <div class="row g-3 mb-1">

          <div class=" col-2">
            <input type="text" class="form-control" placeholder="Kode" id="kodeMatkul" name="kodeMatkul[]" aria-label="Kode Matakuliah">
          </div>
          <div class="col-4">
            <input type="text" class="form-control" placeholder="Mata Kuliah" id="namaMatkul" name="namaMatkul[]"  aria-label="Nama Mata kuliah">
          </div>
          <div class="col-1">
            <input type="text" class="form-control" placeholder="Sks" id="sks" name="sks[]">
          </div>
          <div class="col-4">
            <input type="text" class="form-control" placeholder="Nama Dosen" id="namaDosen" name="namaDosen[]">
          </div>
          <div class="col-1">
          <button type="button" id="add-input" class="btn btn-success">+</button>
          </div>

  </div>
  

  </div>

  <div class="container bg-white">

    <div class="row g-3"> 
          <div class="col-12 mt-5" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>

    </div>

  </div>
  </form>

  
<script>
    document.getElementById('add-input').addEventListener('click', function() {
        var userInputDiv = document.getElementById('user-inputs');
        
        // Create a new div for the new input fields
        var newInputDiv = document.createElement('div');
        newInputDiv.classList.add('row');
        newInputDiv.classList.add('g-3');
        newInputDiv.classList.add('mb-1');
        
        // Add input fields for name and email
        newInputDiv.innerHTML = `
        <div class="col-2">
            <input type="text" class="form-control" placeholder="Kode" id="kodeMatkul" name="kodeMatkul[]" aria-label="Kode Matakuliah">
          </div>
          <div class="col-4">
            <input type="text" class="form-control" placeholder="Mata Kuliah" id="namaMatkul" name="namaMatkul[]"  aria-label="Nama Mata kuliah">
          </div>
          <div class="col-1">
            <input type="text" class="form-control" placeholder="Sks" id="sks" name="sks[]" aria-label="Sks">
          </div>
          <div class="col-4">
            <input type="text" class="form-control" placeholder="Nama Dosen" id="mbkm[][namaDosen]" name="namaDosen[]">
          </div>
          <div class="col-1">
            <button type="button" class="btn btn-danger remove-input">-</button>
          </div>
        `;
        // Append the new input fields to the main container
        userInputDiv.appendChild(newInputDiv);
        
    });

    // Function to remove input fields
    document.addEventListener('click', function(event) {
        if (event.target && event.target.classList.contains('remove-input')) {
            event.target.closest('.row').remove();
        }
    });
    
</script>





@endsection
