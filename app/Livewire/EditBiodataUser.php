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

    public $userId, $userIdData, $users, $admins, $email, $nama, $tmpt_lahir, $tgl_lahir, $pekerjaan;
    public $NIDN, $alamat, $jenis_kelamin, $instansi, $num_telp, $Pendidikan;
    public $thn_lulus, $kewarganegaraan, $bhs_seharian, $pasFoto, $ktp;

    public function mount()
    {
        $authUser = Auth::guard('user')->user();
        $authAdmin = Auth::guard('admin')->user();

        if ($authUser && $authUser->no_Peserta) {
            $this->users = data_user::where('no_Peserta', $authUser->no_Peserta)->first();

            // Initialize properties with current user data
            $this->userId = $authUser->id;
            $this->userIdData = $this->users->id;
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
//            $this->pasFoto = $this->users->pasFoto;
            $this->email = User::where('no_Peserta', $authUser->no_Peserta)->value('email');
        } else {
            $this->users = null;
            $this->email = null;
        }

        if ($authAdmin && $authAdmin->no_Peserta) {
            $this->admins = data_user::where('no_Peserta', $authAdmin->no_Peserta)->first();

            // Initialize properties with current user data
            $this->userId = $authAdmin->id;
            $this->userIdData = $this->admins->id;
            $this->nama = $this->admins->nama;
            $this->tmpt_lahir = $this->admins->tmpt_lahir;
            $this->tgl_lahir = $this->admins->tgl_lahir;
            $this->pekerjaan = $this->admins->pekerjaan;
            $this->NIDN = $this->admins->NIDN;
            $this->alamat = $this->admins->alamat;
            $this->jenis_kelamin = $this->admins->jenis_kelamin;
            $this->instansi = $this->admins->instansi;
            $this->num_telp = $this->admins->num_telp;
            $this->Pendidikan = $this->admins->Pendidikan;
            $this->thn_lulus = $this->admins->thn_lulus;
            $this->kewarganegaraan = $this->admins->kewarganegaraan;
            $this->bhs_seharian = $this->admins->bhs_seharian;
//            $this->pasFoto = $this->admins->pasFoto;
            $this->email = User::where('no_Peserta', $authAdmin->no_Peserta)->value('email');

//            dd($this->userId);
        } else {
            $this->admins = null;
            $this->email = null;
        }
    }

    public function render()
    {
        if (Auth::guard('user')) {
            return view('livewire.editprofile', [
                'title' => 'Edit Biodata',
                'users' => $this->users,
                'email' => $this->email
            ]);
        } elseif (Auth::guard('admin')) {
            return view('livewire.editprofile', [
                'title' => 'Edit Biodata',
                'admins' => $this->admins,
                'email' => $this->email
            ]);
        }
    }

    public function editProfile()
    {
        $authUser = Auth::guard('user')->user();
        $authAdmin = Auth::guard('admin')->user();

        try {
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
                'email' => 'nullable|email|max:255|unique:users,email,' . $this->userId,
                'Pendidikan' => 'required|string',
                'thn_lulus' => 'required|string',
                'kewarganegaraan' => 'required|string',
                'bhs_seharian' => 'required|string',
//            'pasFoto' => 'nullable|image|max:1024',
//            'ktp' => 'nullable|image|max:1024',
            ]);

            $data_user = data_user::findOrFail($this->userIdData);
            $user = User::findOrFail($this->userId);

//        $this->handleFileUpload($data_user, 'pasFoto', $updates);
//        $this->handleFileUpload($data_user, 'ktp', $updates);

            $updates = [];
            $this->mapChangesToUpdates($data_user, $updates);

            if ($this->email !== $user->email) {
                $user->update(['email' => $this->email]);
            }

            if ($authAdmin) {
                if (!empty($updates)) {
                    $data_user->update($updates);
                    return redirect()->route('biodataadmin', ['admins' => $this->admins, 'email' => $this->email])
                        ->with('success', 'Data pengguna berhasil diperbarui!');
                } else {
                    return redirect()->route('biodataadmin', ['admins' => $this->admins, 'email' => $this->email])
                        ->with('info', 'No changes detected to update.');
                }
            } elseif ($authUser) {
                if (!empty($updates)) {
                    $data_user->update($updates);
                    return redirect()->route('biodata-user', ['users' => $this->users, 'email' => $this->email])
                        ->with('success', 'Data pengguna berhasil diperbarui!');
                } else {
                    return redirect()->route('biodata-user', ['users' => $this->users, 'email' => $this->email])
                        ->with('info', 'No changes detected to update.');
                }
            }
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
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

//    private function handleFileUpload($data_user, $field, &$updates)
//    {
//        if ($this->{$field}) {
//            // Delete the old file if it exists
//            if ($data_user->{$field}) {
//                Storage::disk('public')->delete($data_user->{$field});
//            }
//
//            // Store the new file
//            $path = $this->{$field}->store($field, 'public');
//            $updates[$field] = $path;
//        }
//    }
}
