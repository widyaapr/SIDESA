<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminWargaHeaderProfileInfo extends Component
 {
    public $admin;
    public $warga;
    public $listerners = [
        'updateAdminWargaHeaderProfileInfo' => '$refresh'
    ];

    public function mounth(){
        if (Auth::guard('admin')->check()){
            $this->admin = Admin::findOrFail(auth()->id());
        }
    }

    public function render()
    {

        return view('livewire.admin-warga-header-profile-info');
    }
}
