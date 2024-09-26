<?php

namespace App\Livewire;

use App\Models\data_user;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditBiodataUser extends Component
{
    use WithFileUploads;

    public $users, $email, $nama, $tmpt_lahir, $tgl_lahir, $pekerjaan;
    public $NIDN, $alamat, $jenis_kelamin, $instansi, $num_telp, $Pendidikan;
    public $thn_lulus, $kewarganegaraan, $bhs_seharian, $pasFoto, $ktp;

    public function mount()
    {
        $authUser = Auth::guard('user')->user();

        if ($authUser && $authUser->no_Peserta) {
            $this->users = data_user::where('no_Peserta', $authUser->no_Peserta)->first();

            // Initialize properties with current user data
            $this->nama = $this->users->nama;
            $this->tmpt_lahir = $this->users->tmpt_lahir;
            $this->tgl_lahir = $this->users->tgl_lahir;
            $this->pekerjaan = $this->users->pekerjaan;
            $this->NIDN = $this->users->NIDN;
            $this->alamat = $this->users->alamat;
            $this->jenis_kelamin = $this->users->jenis_kelamin;
            $this->instansi = $this->users->instansi;
            $this->num_telp = $this->users->num_telp;
            $this->Pendidikan = $this->users->Pendidikan;
            $this->thn_lulus = $this->users->thn_lulus;
            $this->kewarganegaraan = $this->users->kewarganegaraan;
            $this->bhs_seharian = $this->users->bhs_seharian;
            $this->pasFoto = $this->users->pasFoto;
            $this->email = User::where('no_Peserta', $authUser->no_Peserta)->value('email');
        } else {
            $this->users = null;
            $this->email = null;
        }
    }

    public function render()
    {
        return view('livewire.editprofile', [
            'title' => 'Edit Biodata',
            'users' => $this->users,
            'email' => $this->email
        ]);
    }

    public function editProfile()
    {
        // Validate the form data, ensure unique `nik` ignoring the current user
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
            'email' => 'required|email|max:255|unique:users,email,' . $this->users->id,
            'Pendidikan' => 'required|string',
            'thn_lulus' => 'required|string',
            'kewarganegaraan' => 'required|string',
            'bhs_seharian' => 'required|string',
            'pasFoto' => 'nullable|image|max:2048',
            'ktp' => 'nullable|image',
        ]);

        // Get the existing user data from the database
        $data_user = data_user::findOrFail($this->users->id);
        $user = User::findOrFail($this->users->id);

        // Initialize an array to hold the updates
        $updates = [];

        // Map changes to updates
        $this->mapChangesToUpdates($data_user, $updates);

        // Check if email has changed
        if ($this->email !== $user->email) {
            $user->update(['email' => $this->email]);
        }

        // Handle file uploads for pasFoto and ktp
        $this->handleFileUpload($data_user, 'pasFoto', $updates);
        $this->handleFileUpload($data_user, 'ktp', $updates);

        dd($updates);

        // Update only if there are changes
        if (!empty($updates)) {
            $data_user->update($updates);
            return redirect()->route('biodata-user', ['users' => $this->users, 'email' => $this->email])
                ->with('success', 'Data pengguna berhasil diperbarui!');
        } else {
            return redirect()->route('biodata-user', ['users' => $this->users, 'email' => $this->email])
                ->with('info', 'No changes detected to update.');
        }
    }

    private function mapChangesToUpdates($data_user, &$updates)
    {
        if ($this->nama !== $data_user->nama) {
            $updates['nama'] = $this->nama;
        }

        if ($this->tmpt_lahir !== $data_user->tmpt_lahir) {
            $updates['tmpt_lahir'] = $this->tmpt_lahir;
        }

        if ($this->tgl_lahir !== $data_user->tgl_lahir) {
            $updates['tgl_lahir'] = $this->tgl_lahir;
        }

        if ($this->pekerjaan !== $data_user->pekerjaan) {
            $updates['pekerjaan'] = $this->pekerjaan;
        }

        if ($this->NIDN !== $data_user->NIDN) {
            $updates['NIDN'] = $this->NIDN;
        }

        if ($this->alamat !== $data_user->alamat) {
            $updates['alamat'] = $this->alamat;
        }

        if ($this->jenis_kelamin !== $data_user->jenis_kelamin) {
            $updates['jenis_kelamin'] = $this->jenis_kelamin;
        }

        if ($this->instansi !== $data_user->instansi) {
            $updates['instansi'] = $this->instansi;
        }

        if ($this->num_telp !== $data_user->num_telp) {
            $updates['num_telp'] = $this->num_telp;
        }

        if ($this->Pendidikan !== $data_user->Pendidikan) {
            $updates['Pendidikan'] = $this->Pendidikan;
        }

        if ($this->thn_lulus !== $data_user->thn_lulus) {
            $updates['thn_lulus'] = $this->thn_lulus;
        }

        if ($this->kewarganegaraan !== $data_user->kewarganegaraan) {
            $updates['kewarganegaraan'] = $this->kewarganegaraan;
        }

        if ($this->bhs_seharian !== $data_user->bhs_seharian) {
            $updates['bhs_seharian'] = $this->bhs_seharian;
        }
    }

    private function handleFileUpload($data_user, $field, &$updates)
    {
        if ($this->{$field}) {
            // Delete the old file if it exists
            if ($data_user->{$field}) {
                Storage::disk('public')->delete($data_user->{$field});
            }

            // Store the new file
            $path = $this->{$field}->store($field, 'public');
            $updates[$field] = $path;
        }
    }
}
