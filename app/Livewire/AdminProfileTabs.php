<?php

namespace App\Livewire;

use App\Models\Admin;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AdminProfileTabs extends Component
{
    public $tab = null;
    public $tabname = 'personal_details';
    protected $queryString = ['tab'];
    public $name, $email, $nik, $admin_id;

    public function selectTab($tab)
    {
        $this->tab = $tab;
    }

    public function mount()
    {
        $this->tab = request()->tab ? request()->tab : $this->tabname;
        if (Auth::guard('admin')->check()) {
            $admin = Admin::findOrFail(auth()->id());
            $this->admin_id = $admin->id;
            $this->name = $admin->name;
            $this->email = $admin->email;
            $this->nik = $admin->nik;
        }
    }

    public function updateAdminPersonalDetails()
    {
        $this->validate([
            'name' => 'required|min:5',
            'email' => 'required|email|unique:admins,email,' . $this->admin_id,
            'nik' => 'required|min:3|unique:admins,nik,' . $this->admin_id
        ]);

        Admin::find($this->admin_id)
            ->update([
                'name' => $this->name,
                'email' => $this->email,
                'nik' => $this->nik
            ]);

        $this->emit('updateAdminWargaHeaderInfo');
        $this->dispatchBrowserEvent('updateAdminInfo', [
            'adminName' => $this->name,
            'adminEmail' => $this->email
        ]);

        $this->showToastr('success', 'Personal Detailmu telah berhasil diubah');
    }

    public function showToastr($type, $message)
    {
        return $this->dispatchBrowserEvent('showToastr', [
            'type' => $type,
            'message' => $message

        ]);
    }

    public function render()
    {
        return view('livewire.admin-profile-tabs');
    }
}
