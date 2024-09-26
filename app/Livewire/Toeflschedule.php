<?php

namespace App\Livewire;

use App\Models\list_ujian;
use App\Models\pesan_ujian;
use App\Models\tipe_ujian;
use Livewire\Component;

class Toeflschedule extends Component
{
    public $jenis,$tanggal,$jam,$ruangan,$kapasitas,$kuota;
    public $pesan,$tgl,$jm,$created;
    public function mount(){
        $this->jenis = tipe_ujian::select('jenis_ujian')->get();
        $tanggal = list_ujian::select('tanggal')->get()->map(function($item) {
            return \Carbon\Carbon::parse($item->tanggal)->translatedFormat('l, d F Y');
        });
        $this->tanggal = $tanggal;
        $jam = list_ujian::select('jam')->get()->map(function($item) {
            return \Carbon\Carbon::parse($item->jam)->translatedFormat('H:i');
        });
        if(auth('user')->check()) {
            $this->pesan = pesan_ujian::with('listruangan', 'listujian.tipeUjian')
                ->where('id_user', '=', auth('user')->user()->id)->get();
            $this->tgl = $this->pesan->map(function($item){
                return \Carbon\Carbon::parse($item->listujian->tanggal)->translatedFormat('l, d F Y');
            });
            $this->jm = $this->pesan->map(function($item){
                return \Carbon\Carbon::parse($item->listujian->jam)->translatedFormat('H:i');
            });
            $this->created = $this->pesan->map(function($item){
                return \Carbon\Carbon::parse($item->created_at)->translatedFormat('l, d F Y');
            });
        }elseif (session('guard') == 'mhs'){
            $this->pesan = pesan_ujian::with('listruangan', 'listujian.tipeUjian')
                ->where('nim', '=', trim(session('atribut')->nim))->get();
            $this->tgl = $this->pesan->map(function($item){
                return \Carbon\Carbon::parse($item->listujian->tanggal)->translatedFormat('l, d F Y');
            });
            $this->jm = $this->pesan->map(function($item){
                return \Carbon\Carbon::parse($item->listujian->jam)->translatedFormat('H:i');
            });
            $this->created = $this->pesan->map(function($item){
                return \Carbon\Carbon::parse($item->created_at)->translatedFormat('l, d F Y');
            });
        }
        $this->jam = $jam;
        $this->ruangan = list_ujian::with('listruangan')->get();
        $this->kapasitas = list_ujian::with('listruangan')->get();
        $this->kuota = 50;
    }
    public function render()
    {
        if(auth('user')->check()){
            return view('livewire.toeflschedule');
        }elseif(session('guard') == 'mhs'){
            return view('livewire.toefl-schedule-mhs');
        }
    }
}
