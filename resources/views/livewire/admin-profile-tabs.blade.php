<div>
    <div class="profile-tab height-100-p">
        <div class="tab height-100-p">
            <ul class="nav nav-tabs customtab" role="tablist">
                <li class="nav-item">
                    <a wire:click.prevent='selectTab("personal_details")' class="nav-link {{ $tab == 'personal_details' ? 'active' : '' }}"
                     data-toggle="tab" href="#personal_details" role="tab">Personal Detail</a>
                </li>
                <li class="nav-item">
                    <a wire:click.prevent='selectTab("update_password")' class="nav-link {{ $tab == 'update_password' ? 'active' : '' }}" data-toggle="tab" href="#update_password" role="tab">Update Password</a>
                </li>

            </ul>
            <div class="tab-content">
                <!-- Timeline Tab start -->
                <div class="tab-pane {{ $tab == 'personal_details' ? 'active show' : '' }}" id="personal_details" role="tabpanel">
                    <div class="pd-20">
                        <form wire:submit.prevent='updateAdminPersonalDetails()'>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Nama Lengkap</label>
                                        <input type="text" class="form-control" wire:model='name' placeholder="Masukkan Nama Lengkap">
                                        @error('name')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" wire:model='email' placeholder="Masukkan Nama Lengkap">
                                        @error('email')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">NIK</label>
                                        <input type="text" class="form-control" wire:model='nik' placeholder="Masukkan NIK">
                                        @error('nik')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </form>
                    </div>
                </div>
                <!-- Timeline Tab End -->
                <!-- Tasks Tab start -->
                <div class="tab-pane fade {{ $tab == 'update_password' ? 'active show' : '' }}" id="update_password" role="update_password">
                    <div class="pd-20 profile-task-wrap">
                    -------- Update Password -------
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
