@extends('templates.base')

@section('title', 'Tambah Data')
@section('content')
<form action="{{ route('pendonor.store') }}" method="post">
    <a href="{{ route('logout') }}">Logout</a><br>

    @csrf
    <label for="nama" >Nama</label><br>
    <input type="text" name="nama" required><br>
    <label for="email" >Email</label><br>
    <input type="email" name="email" required><br>
    <label for="password" >Password</label><br>
    <input type="password" name="password" required><br>
    <label for="jenis_kelamin">Jenis Kelamin :</label><br>
        <select name="jenis_kelamin" id="jenis_kelamin">
            <option value="1">Laki-laki</option>
            <option value="0">Perempuan</option>
        </select>
    <br>
    <label for="tanggal_lahir">Tanggal Lahir</label><br>
    <input type="text" name="tanggal_lahir"><br>
    <label for="alamat">alamat</label><br>
    <input type="text" name="alamat"><br>



    <label>Pendonor Harus tidak memenuhi kriteria sebagai berikut:</label><br/>
        <input type="checkbox" name="kelayakanpertama[]" value="1"> Pernah menderita Hepatitis B <br/>
        <input type="checkbox" name="kelayakanpertama[]" value="2"> Dalam jangka waktu 6 bulan sesudah kontak erat dengan penderita hepatitis <br/>
        <input type="checkbox" name="kelayakanpertama[]" value="3"> Dalam jangka waktu 6 bulan sesudah mendapat transfusi <br/>
        <input type="checkbox" name="kelayakanpertama[]" value="4"> Dalam jangka waktu 6 bulan sesudah tato/tindik telinga <br/>
        <input type="checkbox" name="kelayakanpertama[]" value="5"> Dalam jangka waktu 72 jam sesudah operasi gigi <br/>
        <input type="checkbox" name="kelayakanpertama[]" value="6"> Dalam jangka waktu 6 bulan sesudah operasi kecil<br/>
        <input type="checkbox" name="kelayakanpertama[]" value="7"> Dalam jangka waktu 12 bulan sesudah operasi kecil <br/>
        <input type="checkbox" name="kelayakanpertama[]" value="8"> Dalam jangka waktu 24 jam sesudah vaksinasi polio, influenza, kolera, stetanus dipteria atau profilaksis <br/>
        <input type="checkbox" name="kelayakanpertama[]" value="9"> Dalam jangka waktu 2 minggu sesudah vaksinasi virus hidup parotitis epidemica, measles dan tetanus toxin <br/>
        <input type="checkbox" name="kelayakanpertama[]" value="10"> Dalam jangka waktu 1 minggu sesudah gejala alergi menghilang <br/>
        <input type="checkbox" name="kelayakanpertama[]" value="11"> Dalam jangka waktu 1 tahun sesudah transplantasi kulit <br/>
        <input type="checkbox" name="kelayakanpertama[]" value="12"> Sedang hamil dan dalam jangka waktu 6 bulan sesudah persalinan <br/>
        <input type="checkbox" name="kelayakanpertama[]" value="13"> Sedang menyusui <br/>
        <input type="checkbox" name="kelayakanpertama[]" value="14"> Ketergantungan obat <br/>
        <input type="checkbox" name="kelayakanpertama[]" value="15"> Alkoholisme akut dan kronis <br/>
        <input type="checkbox" name="kelayakanpertama[]" value="16"> Mengidap Sifilis <br/>
        <input type="checkbox" name="kelayakanpertama[]" value="17"> Menderita Tuberkulosis secara klinis <br/>
        <input type="checkbox" name="kelayakanpertama[]" value="18"> Menderita epilepsi dan sering kejang <br/>
        <input type="checkbox" name="kelayakanpertama[]" value="19"> Menderita penyakit kulit pada vena (pembuluh darah balik) yang akan ditusuk <br/>
        <input type="checkbox" name="kelayakanpertama[]" value="20"> Mempunyai kecenderungan perdarahan atau penyakit darah, misalnya thalasemia <br/>
        <input type="checkbox" name="kelayakanpertama[]" value="21"> Seseorang yang termasuk kelompok masyarakat yang berisiko tinggi mendapatkan HIV dan AIDS (homoseks, morfinis, berganti-ganti pasangan seks dan pemakai jarum suntik tidak steril) <br/>
        <input type="checkbox" name="kelayakanpertama[]" value="22"> Pengidap HIV dan AIDS menurut hasil jpemeriksaan saat donor darah <br/>
        <input type="checkbox" name="kelayakanpertama[]" value="23"> Syarat donor darah untuk perempuan, sebaiknya sedang tidak dalam masa haid <br/>


    <button type="submit">Simpan</button>


</form>
@endsection
