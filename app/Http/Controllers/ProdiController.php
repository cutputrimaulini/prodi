<?php

namespace App\Http\Controllers;

use App\Prodi;
use App\Persetujuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\User;
use App\FormPA;
class ProdiController extends Controller
{
  
    public function getProdi($id){
        $prodis = Http::get('https://siakad.sitpa.my.id/api/prodi')->json();
        $prodi = User::hydrate($prodis)->where('id', $id)->first(); // memfilter json berdasarkan id prodi
        if($prodi){
            return $prodi; // mengembalikan data prodi yg setelah di filter bila ditemukan
        }else{
            return "null";
        }
    }
    public function index()
    {
        $user = auth()->user();
        $prodi = prodi::where('status', null)->where('prodi_id', $user->prodi_id)->get();
        if($prodi){
            $prodiData = $this->getProdi($user->prodi_id);
        }
        return view('prodi.index', ['prodi' => $prodi, 'prodinama' => $prodiData->nama_prodi]);
    }
 
    public function persetujuan()
    {        
        $user = auth()->user();
        $prodiData = $this->getProdi($user->prodi_id);
        $persetujuan = persetujuan::where('prodi_id', $user->prodi_id)->where('status', "!=" ,null)->get();
        return view('prodi.persetujuan', ['persetujuan' => $persetujuan,'prodinama' => $prodiData->nama_prodi]);
    }

    // kumpulan form PA
    public function formpa()
    {        
        $user = auth()->user();
        $usersData = Http::get('https://siakad.sitpa.my.id/api/mahasiswa')->json();
        $prodiData = $this->getProdi($user->prodi_id);
        $data = FormPA::all();
        $datafix = [];       
        foreach ($data as $key) {
            # code...
            $userFind = User::hydrate($usersData)->where('nim_mhs', $key['nim'])->where('prodi_id', $user->prodi_id)->first();
            if ($userFind) {
                $key['nama_mhs'] = $userFind['nama_mhs'];
                array_push($datafix, $key);
            }
        }
        
        return view('prodi.formpa',['data' => $datafix, 'prodinama' => $prodiData->nama_prodi]);
    }
 
//     public function store(Request $request)
//     {
//         prodi::create($request->all());
//         return redirect('prodi|create');
//     }

    // public function edit(Request $request, $id)
    // {
    //     $request->validate([
    //         'alasan' => 'request'
    //     ])
    //     $data =DB::table('pengajuan_judul')->where('id',$id)->edit(['alasan' => $request->alasan]);
    //     return redirect()->back();
    // }


    public function update(Request $request, $id)
    {
        
        $request->validate([
            'status' => 'required'
        ]);
        
        $data = DB::table('pengajuan_judul')->where('id',$id)->update([
            'status' => $request->status,
            'alasan' => $request->alasan
        ]);
        return redirect()->back();
        // echo 'success';
    }

  

}
