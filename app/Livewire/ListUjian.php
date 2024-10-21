<?php

namespace App\Livewire;

use App\Models\environtment;
use App\Models\list_ruangan;
use App\Models\list_ujian;
use App\Models\tipe_ujian;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ListUjian extends Component
{
    public $ujians, $modul_data, $jenis_ujian, $ruangan, $all_ujian_data;

    public function mount(){
        $this->ujians = list_ujian::with('tipeUjian', 'listruangan')->get();
        $this->modul_data = environtment::all();
        $this->jenis_ujian = tipe_ujian::all();
        $this->ruangan = list_ruangan::all();
        $this->all_ujian_data = list_ujian::join('environtment_ujian', 'list_ujian.id', '=', 'environtment_ujian.id_ujian')
            ->join('tipe_ujian', 'list_ujian.id_jenis_ujian', '=', 'tipe_ujian.id')
            ->join('list_ruangan', 'list_ujian.id_ruangan', '=', 'list_ruangan.id')
            ->select('list_ujian.*', 'environtment_ujian.*', 'tipe_ujian.*', 'list_ruangan.*', DB::raw("CONVERT(VARCHAR(8), list_ujian.jam, 108) as jam"))
            ->get();
//        dd($this->all_ujian_data);
    }

    public function editUjian($id)
    {
        session()->put('edit-ujian', $id);

        return $this->redirect(route('edit-ujian'));
    }

    public function render()
    {
        return view('livewire.list-ujian', [
            'title'=>'List Ujian'
        ]);
    }
}
