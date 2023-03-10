@extends('templates.base')

@section('title', 'Tambah Data')
@section('content')

<form action="{{ route('pendonor.check') }}" method="post">

    @csrf
    @method('put')
        <label>Pendonor Harus tidak memenuhi kriteria sebagai berikut:</label><br/>
        <input type="checkbox" name="fruits[]" value="1"> Pernah menderita Hepatitis B <br/>
        <input type="checkbox" name="fruits[]" value="2"> Dalam jangka waktu 6 bulan sesudah kontak erat dengan penderita hepatitis <br/>
        <input type="checkbox" name="fruits[]" value="3"> Dalam jangka waktu 6 bulan sesudah mendapat transfusi <br/>
        <input type="checkbox" name="fruits[]" value="4"> Dalam jangka waktu 6 bulan sesudah tato/tindik telinga <br/>
        <input type="checkbox" name="fruits[]" value="5"> Dalam jangka waktu 72 jam sesudah operasi gigi <br/>
        <input type="checkbox" name="fruits[]" value="6"> Dalam jangka waktu 6 bulan sesudah operasi kecil<br/>
        <input type="checkbox" name="fruits[]" value="7"> Dalam jangka waktu 12 bulan sesudah operasi kecil <br/>
        <input type="checkbox" name="fruits[]" value="8"> Dalam jangka waktu 24 jam sesudah vaksinasi polio, influenza, kolera, stetanus dipteria atau profilaksis <br/>
        <input type="checkbox" name="fruits[]" value="9"> Dalam jangka waktu 2 minggu sesudah vaksinasi virus hidup parotitis epidemica, measles dan tetanus toxin <br/>
        <input type="checkbox" name="fruits[]" value="10"> Dalam jangka waktu 1 minggu sesudah gejala alergi menghilang <br/>
        <input type="checkbox" name="fruits[]" value="11"> Dalam jangka waktu 1 tahun sesudah transplantasi kulit <br/>
        <input type="checkbox" name="fruits[]" value="12"> Sedang hamil dan dalam jangka waktu 6 bulan sesudah persalinan <br/>
        <input type="checkbox" name="fruits[]" value="13"> Sedang menyusui <br/>
        <input type="checkbox" name="fruits[]" value="14"> Ketergantungan obat <br/>
        <input type="checkbox" name="fruits[]" value="15"> Alkoholisme akut dan kronis <br/>
        <input type="checkbox" name="fruits[]" value="16"> Mengidap Sifilis <br/>
        <input type="checkbox" name="fruits[]" value="17"> Menderita Tuberkulosis secara klinis <br/>
        <input type="checkbox" name="fruits[]" value="18"> Menderita epilepsi dan sering kejang <br/>
        <input type="checkbox" name="fruits[]" value="19"> Menderita penyakit kulit pada vena (pembuluh darah balik) yang akan ditusuk <br/>
        <input type="checkbox" name="fruits[]" value="20"> Mempunyai kecenderungan perdarahan atau penyakit darah, misalnya thalasemia <br/>
        <input type="checkbox" name="fruits[]" value="21"> Seseorang yang termasuk kelompok masyarakat yang berisiko tinggi mendapatkan HIV dan AIDS (homoseks, morfinis, berganti-ganti pasangan seks dan pemakai jarum suntik tidak steril) <br/>
        <input type="checkbox" name="fruits[]" value="22"> Pengidap HIV dan AIDS menurut hasil jpemeriksaan saat donor darah <br/>
        <input type="checkbox" name="fruits[]" value="23"> Syarat donor darah untuk perempuan, sebaiknya sedang tidak dalam masa haid <br/>


    <br>

        <button type="submit">Submit</button>

</form>
@endsection
