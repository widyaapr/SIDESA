<p>Hallo, {{$admin->name}}</p>
<p>
    Kami telah menerima perminataan untuk menghapus password untuk SIDESA dengan {{ $admin->email }}.
    Kami dapat menghapus password dengan klik tombol dibawah ini:
    <br>
    <a href="{{ $actionLink }}" target="_blank" style="color:#fff; border-color: #22bc66; border-style:solid; border-width:5px 10px; background-color: #22bc66; display:inline-block; text-decoration:none; border-radius: 3px; box-shadow: 0 2px 3px rgba(0,0,0,16); -webkit-text-size-adjust:none;box-sizing: border-box;">Reset Password</a>
    <br>
    <b>NB:</b> Link ini akan valid sampai 15 menit
    <br>
    Jika kamu tidak meminta untuk penghapusan password ini, silakan abaikan pesan ini
    
</p>