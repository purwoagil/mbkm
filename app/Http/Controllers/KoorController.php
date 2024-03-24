<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\mbkm;
use App\Models\matakuliah;
use Illuminate\Support\Str;

class KoorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $distinctRecords = mbkm::select('kodeMBKM','namaMitra', 'jenisProgram', 'jenisSkema', 'periode')
    ->distinct()
    ->get();
        
        //$data = mbkm::all();
        return view('homekoor',compact('distinctRecords'));
    }

    public function getData()
    {
       // Fetch data from the database


       $data = mbkm::all();
       
       
       // Add row numbers to the data
       $data->transform(function ($item, $key) {
           $item['no'] = $key + 1;
           return $item;
       });
       $data = $data->toArray();
       dd($data);
       // Return data as JSON response
       return response()->json($data);
    }

    public function getCek($id){
        $results0 = mbkm::select('kodeMBKM','namaMitra', 'jenisProgram', 'jenisSkema', 'periode')->distinct()->where('kodeMBKM', '=', $id)->get();
        $results1 = mbkm::where('kodeMbkm', '=', $id)->select('kodeMatkul')->get();
        $results2 = matakuliah::whereIn('kodeMatkul', $results1->pluck('kodeMatkul')->toArray())->get();
        return view('detailmbkmkoor',compact('results2','results0'));
    }


    public function tambahKegiatanKoorView()
    {
        
        return view('tambahKegiatanKoor');
    }
    public function konfirmasiMhsKoorView()
    {
        return view('konfirmasimhskoor');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          
            for ($x = 0; $x < COUNT($request['kodeMatkul']); $x++) {
                $mbkm = new Mbkm();
                if ($x==0){

                    $kode = Str::random(5);
                    while (mbkm::where('kodeMbkm', '=', $kode)->count()===1){
                    $kode = Str::random(5);
                    }

                }

                $mbkm->kodeMBKM = $kode;
                //dd($mbkm->kodeMBKM);
                $mbkm->jenisProgram = $request['jenisProgram'];
                $mbkm->jenisSkema = $request['jenisSkema'];
                $mbkm->namaMitra = $request['namaMitra'];
                $mbkm->periode = $request['periode'];
                $mbkm->sks = $request['sks'][$x];
                $mbkm->kodeMatkul = $request['kodeMatkul'][$x];
                $mbkm->namaMatkul = $request['namaMatkul'][$x];
                $mbkm->namaDosen = $request['namaDosen'][$x];
                $mbkm->save();
              }

        return redirect('/tambahkegiatankoor')->with('success', 'Insert Data successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
