<?php

namespace App\Http\Controllers;

use App\Data;
use Storage;
use Illuminate\Http\Request;

class DataController extends Controller
{
   
    public function index()
    {
        return view('datas.index');
    }

  public function uploadta(Request $request)
  {
    $request->validate([
        'indo' => 'required|mimetypes:application/pdf|max:10000',
        'eng' => 'required|mimetypes:application/pdf|max:10000',
        'ta' => 'required|mimetypes:application/pdf|max:10000',
    ]);

    $request->file('indo')->storeAs("ta_file/$request->nim","AbstrakIndonesia_$request->nim.pdf");
    $request->file('eng')->storeAs("ta_file/$request->nim","AbstrakEnglish_$request->nim.pdf");
    $request->file('ta')->storeAs("ta_file/$request->nim","TA_$request->nim.pdf");

     // menghubungka dengan database
     Data::create([
        "nim"=> $request ->nim,
        "judul"=> $request ->judul,
        "indo"=> "AbstrakIndonesia_$request->nim.pdf",
        "eng"=>"AbstrakEnglish_$request->nim.pdf",
        "ta"=> "TA_$request->nim.pdf",
    ]);
    return redirect('Datas')->with('sukses','Data berhasil disimpan');

  }
}
