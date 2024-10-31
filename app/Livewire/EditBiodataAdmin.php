<?php

namespace App\Livewire;

use App\Models\Data_User;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditBiodataAdmin extends Component
{
    public $adminId, $adminIdData, $dataAdmin, $email, $nama;
    public $tmpt_lahir, $tgl_lahir, $pekerjaan, $NIDN, $alamat;
    public $jenis_kelamin, $instansi, $num_telp, $Pendidikan, $thn_lulus;
    public $kewarganegaraan, $bhs_seharian, $pasFoto, $ktp;

    public function mount()
    {
        $authAdmin = Auth::guard('admin')->user();

        $this->dataAdmin = Data_User::where('no_Peserta', $authAdmin->no_Peserta)->first();

        $this->adminId = $authAdmin->id;
        $this->adminIdData = $this->dataAdmin->id;
        $this->nama = $this->dataAdmin->nama;
        $this->tmpt_lahir = $this->dataAdmin->tmpt_lahir;
        $this->tgl_lahir = $this->dataAdmin->tgl_lahir;
        $this->pekerjaan = $this->dataAdmin->pekerjaan;
        $this->NIDN = $this->dataAdmin->NIDN;
        $this->alamat = $this->dataAdmin->alamat;
        $this->jenis_kelamin = $this->dataAdmin->jenis_kelamin;
        $this->instansi = $this->dataAdmin->instansi;
        $this->num_telp = $this->dataAdmin->num_telp;
        $this->Pendidikan = $this->dataAdmin->Pendidikan;
        $this->thn_lulus = $this->dataAdmin->thn_lulus;
        $this->kewarganegaraan = $this->dataAdmin->kewarganegaraan;
        $this->bhs_seharian = $this->dataAdmin->bhs_seharian;
//        $this->pasFoto = $this->dataAdmin->pasFoto;
        $this->email = User::where('no_Peserta', $authAdmin->no_Peserta)->value('email');
    }
    public function render()
    {
        return view('livewire.edit-profile-admin', [
            'title' => 'Edit Biodata Admin'
        ]);
    }

    public function editProfileAdmin()
    {
        $this->validate([
            'nama' => 'required|string|max:100',
            'tmpt_lahir' => 'required|string|max:100',
            'tgl_lahir' => 'required|date',
            'pekerjaan' => 'required|string',
            'NIDN' => 'nullable|string',
            'alamat' => 'required|string',
            'jenis_kelamin' => 'required|in:Perempuan,Laki-Laki',
            'instansi' => 'required|string',
            'num_telp' => 'required|string',
            'email' => 'nullable|email|max:255|unique:users,email,' . $this->adminId,
            'Pendidikan' => 'required|string',
            'thn_lulus' => 'required|string',
            'kewarganegaraan' => 'required|string',
            'bhs_seharian' => 'required|string',
//            'pasFoto' => 'nullable|image|max:1024',
//            'ktp' => 'nullable|image|max:1024',
        ]);

        $admin = User::findOrFail($this->adminId);
        $data_admin = Data_User::findOrFail($this->adminIdData);

        $updates = [];
        $this->mapChangesToUpdates($data_admin, $updates);

        if ($this->email !== $admin->email) {
            $admin->update(['email' => $this->email]);
        }

        if (!empty($updates)) {
            $data_admin->update($updates);
            return redirect()->route('biodataAdmin', ['admins' => $this->dataAdmin, 'email' => $this->email])
                ->with('success', 'Data pengguna berhasil diperbarui!');
        } else {
            return redirect()->route('biodataAdmin', ['admins' => $this->dataAdmin, 'email' => $this->email])
                ->with('success', 'Data pengguna gagal diperbarui!');
        }
    }

    private function mapChangesToUpdates($data_admin, &$updates)
    {
        if ($this->nama !== $data_admin->nama) {
            $updates['nama'] = $this->nama;
        }

        if ($this->tmpt_lahir !== $data_admin->tmpt_lahir) {
            $updates['tmpt_lahir'] = $this->tmpt_lahir;
        }

        if ($this->tgl_lahir !== $data_admin->tgl_lahir) {
            $updates['tgl_lahir'] = $this->tgl_lahir;
        }

        if ($this->pekerjaan !== $data_admin->pekerjaan) {
            $updates['pekerjaan'] = $this->pekerjaan;
        }

        if ($this->NIDN !== $data_admin->NIDN) {
            $updates['NIDN'] = $this->NIDN;
        }

        if ($this->alamat !== $data_admin->alamat) {
            $updates['alamat'] = $this->alamat;
        }

        if ($this->jenis_kelamin !== $data_admin->jenis_kelamin) {
            $updates['jenis_kelamin'] = $this->jenis_kelamin;
        }

        if ($this->instansi !== $data_admin->instansi) {
            $updates['instansi'] = $this->instansi;
        }

        if ($this->num_telp !== $data_admin->num_telp) {
            $updates['num_telp'] = $this->num_telp;
        }

        if ($this->Pendidikan !== $data_admin->Pendidikan) {
            $updates['Pendidikan'] = $this->Pendidikan;
        }

        if ($this->thn_lulus !== $data_admin->thn_lulus) {
            $updates['thn_lulus'] = $this->thn_lulus;
        }

        if ($this->kewarganegaraan !== $data_admin->kewarganegaraan) {
            $updates['kewarganegaraan'] = $this->kewarganegaraan;
        }

        if ($this->bhs_seharian !== $data_admin->bhs_seharian) {
            $updates['bhs_seharian'] = $this->bhs_seharian;
        }
    }
}
