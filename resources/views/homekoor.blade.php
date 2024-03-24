@extends('layouts.main')

@section('container')
   
    
<div class="container-fluid">

   

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="showkoor" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            
                            <th style="display:none;">kodeMBKM</th>
                            <th>No</th>
                            <th>Jenis Kegiatan</th>
                            <th>Skema</th>
                            <th>Mitra</th>
                            <th>Periode</th>
                            <th>Detail</th>
                           
                        </tr>
                    </thead>
                    <tbody style="text-align:center;">
                    
                    @php
                    $value = 1;
                    @endphp
            
            @foreach($distinctRecords as $item)
            <tr>
                
                <td style="display:none;">{{ $item['kodeMBKM'] }}</td>
                <td>{{ $value }}</td>
                <td>{{ $item['jenisProgram'] }}</td>
                <td>{{ $item['jenisSkema'] }}</td>
                <td>{{ $item['namaMitra'] }}</td>
                <td>{{ $item['periode'] }}</td>
                <td><a href="#" class="action-link" data-parameter="additional-data">cek</a></td>
                <!-- Add more table cells as needed -->
            </tr>
            @php
                    $value++;
            @endphp
            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<script>
    $(document).ready(function() {
        // Inisialisasi DataTable
        var dataTable = $('#showkoor').DataTable();

        // Tambahkan event listener ke hyperlink di setiap baris
        $('#showkoor tbody').on('click', 'a', function(e) {
            e.preventDefault(); // Mencegah aksi default hyperlink

            // Ambil data dari baris yang sesuai
            var rowData = dataTable.row($(this).closest('tr')).data();

            // Kirim data ke fungsi Anda
            myFunction(rowData);
        });

        function myFunction(data) {
        // Logika fungsi Anda di sini
        console.log(data[0]);

        // Construct the URL with the parameter
        var url = "{{ route('cekkoor', ':id') }}";
        url = url.replace(':id', data[0]);
            
        window.location.href = url; 
    }
    });
</script>


@endsection
