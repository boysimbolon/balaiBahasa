<?php

namespace App\Livewire;

use App\Models\data_user;
use App\Models\pesan_ujian;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Livewire\Toeflschedule;
class Pembayaran extends Component
{
    public $Data,$tgl,$jm,$created,$va;

    public function mount()
    {
        if (auth('user')->check()) {
            // Mengambil pesanan berdasarkan id_user
            $userId=auth('user')->user()->id;
            $this->va=data_user::where('no_Peserta',auth('user')->user()->no_peserta)->first()->va;
            $this->Data = pesan_ujian::with('listujian.listruangan', 'listujian.tipeUjian')
                ->where('id_user', $userId)
                ->get();
        } elseif (session('guard') == 'mhs') {
            $nim = trim(session('atribut')->nim);
            $id_user = DB::connection('pmb')->table('registration_form')->where('nim', $nim)->select('id_user')->first();
            if (!$id_user) {
                session()->flash('error', 'ID user tidak ditemukan.');
                return;
            }
            $this->va=DB::connection('pmb')->table('users')->where('id', $id_user->id_user)->first()->virtual_account;
            // Mengambil pesanan berdasarkan nim
            $this->Data = pesan_ujian::with('listujian.listruangan', 'listujian.tipeUjian')
                ->where('nim', $nim)
                ->get();
        }
        $this->formatTanggalJamPesan();

    }
    private function formatTanggalJamPesan()
    {
        $this->tgl = $this->Data->map(function ($item) {
            return \Carbon\Carbon::parse($item->listujian->tanggal)->translatedFormat('l, d F Y');
        });

        $this->jm = $this->Data->map(function ($item) {
            return \Carbon\Carbon::parse($item->listujian->jam)->translatedFormat('H:i');
        });

        $this->created = $this->Data->map(function ($item) {
            return \Carbon\Carbon::parse($item->created_at)->translatedFormat('l, d F Y');
        });
    }

    public function render()
    {
        return view('livewire.pembayaran', [
            'title' => 'Pembayaran'
        ]);
    }
    public function Cek($id){
        $Method = new Toeflschedule();
        $Method->loadRuanganAndKapasitas();
        $kapasitas = $Method->kapasitas;
        // Mengecek jumlah peserta saat ini untuk ujian tertentu
        $jumlahPeserta = pesan_ujian::where('id_ujian', '=', $id['id_ujian'])->where('status',1)->count();
        if ($jumlahPeserta <= $kapasitas) {
            pesan_ujian::where('id', $id['id'])->update([
                'status' => 1 // Ubah status menjadi aktif setelah pembayaran
            ]);
            session()->flash('message', 'Pembayaran Terkonfirmasi');
            $this->mount();
        } else {
            session()->flash('message', 'Kuota Ujian Penuh');
        }
    }
}
