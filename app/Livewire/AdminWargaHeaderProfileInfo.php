<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminWargaHeaderProfileInfo extends Component
{
    public $admin;
    public $warga;


    public $listerners = [
        'updateAdminWargaHeaderInfo' => '$refresh'
    ];

    public function mount()
    {
        if (Auth::guard('admin')->check()) {
            $this->admin = Admin::findOrFail(auth()->id());
        }
    }

    public function render()
    {

        return view('livewire.admin-warga-header-profile-info');
    }
}
