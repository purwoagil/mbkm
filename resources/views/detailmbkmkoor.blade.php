@extends('layouts.main')

@section('container')
   
    
<div class="container-fluid">
    
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col">
                <label for="formGroupExampleInput" class="form-label">{{$results0[0]->jenisProgram}}</label>
                </div>
                <div class="col">
                <label for="formGroupExampleInput" class="form-label">{{$results0[0]->periode}}</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                <label for="formGroupExampleInput" class="form-label">{{$results0[0]->jenisSkema}}</label>
                </div>
                <div class="col">
                <label for="formGroupExampleInput" class="form-label">{{$results0[0]->namaMitra}}</label>
                </div>
            </div>
        </div>
        <div class="card-body">


            @foreach($results2 as $item)
            <table class="table table-bordered" id="qwe" width="100%" cellspacing="0">
                    <tr>
                        <td>{{ $item['kodeMatkul'] }}</td>
                        <td>{{ $item['namaMatkul'] }}</td>
                        <td>{{ $item['sks'] }}</td>
                        <td>{{ $item['namaDosen'] }}</td>
                    </tr>
                </table>
            @endforeach

               

            

        </div>
    </div>

</div>

@endsection
