@extends('layouts.guest-master')

@section('content')

<div class="container pb-2">
    <div class="p-2 p-md-5 mb-4 rounded text-body-emphasis gambar">
        <div class="col-12 px-0 pt-5 text-center">
            <h1 class="display-4 text-white">Maju Bersama, Membangun Masa Depan</h1>
            <p class="fs-6 my-3 text-white">
                SITIK, Sistem Informasi Distribusi Logistik adalah solusi revolusioner bagi para petani di Desa Wonoanti, adalah jembatan baru yang menghubungkan Anda langsung dengan UMKM dan produsen tanpa perlu melewati tengkulak. Kami hadir untuk menghadirkan perubahan besar dalam cara Anda menjual produk pertanian Anda.
            </p>
        </div>
    </div>
</div>

<div class="bg-white container py-5">
    <div class="row g-5">
        <h2 class="display-5 link-body-emphasis mb-1 text-primary text-center fw-bold">Layanan Kami</h2>
        <div class="col-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0">Pengelolaan Distribusi</h3>
                    <p class="card-text mb-auto mt-3">Kami adalah mitra terpercaya Anda dalam pengelolaan distribusi hasil panen logistik desa.</p>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img class="bd-placeholder-img" src="{{ asset('assets/img/home-decor-1.jpg') }}" alt="" width="250" height="300">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0">Pengelolaan Pemasaran</h3>
                    <p class="card-text mb-auto mt-3">Kami tidak hanya menangani distribusi, tetapi juga membantu petani Desa Wonoanti dalam pengelolaan pemasaran hasil panen dengan cerdas dan efektif.</p>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img class="bd-placeholder-img" src="{{ asset('assets/img/home-decor-1.jpg') }}" alt="" width="250" height="300">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container pt-5">
    <div class="row g-5">
        <h2 class="display-5 link-body-emphasis mb-1 text-white text-center fw-bold">Produk Hasil Panen</h2>
        <div class="card-group">
        <div class="card">
            <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
            <a href="javascript:;" class="d-block">
                <img src="{{ asset('assets/img/kakao.jpg') }}" class="img-fluid border-radius-lg">
            </a>
            </div>

            <div class="card-body pt-2">
            <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">Produk Hasil Panen</span>
            <a href="javascript:;" class="card-title h5 d-block text-darker">
                Kakao
            </a>
            <p class="card-description mb-4">
                Kakao, harta berlimpah di desa Wonoanti, ditanam dengan cermat di tanah subur dan iklim ideal. Dusun Bulih menjadi basis utama, ladang rupiah bagi warga, yang terus meningkatkan kualitas dengan dukungan dari Dinas Petanian, produsen cokelat, dan Perhutani.
            </p>
            </div>
        </div>
        <div class="card">
            <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
            <a href="javascript:;" class="d-block">
                <img src="{{ asset('assets/img/gula-kelapa.jpg') }}" class="img-fluid border-radius-lg">
            </a>
            </div>

            <div class="card-body pt-2">
            <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">Produk Hasil Panen</span>
            <a href="javascript:;" class="card-title h5 d-block text-darker">
                Nira, Gula Kelapa
            </a>
            <p class="card-description mb-4">
                Desa Wonoanti, dengan topografi perbukitan dan hutan tropis subur, ditanami ribuan pohon kelapa yang menyokong para penderes nira. Lebih dari 200 warga menjadi penyadap, menghasilkan gula kelapa terbaik di Pacitan selama belasan tahun.      
            </p>
            </div>
        </div>
        <div class="card">
            <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
            <a href="javascript:;" class="d-block">
                <img src="{{ asset('assets/img/kecap-radja.jpg') }}" class="img-fluid border-radius-lg">
            </a>
            </div>

            <div class="card-body pt-2">
            <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">Produk Hasil Panen</span>
            <a href="javascript:;" class="card-title h5 d-block text-darker">
                Kecap "Radja"
            </a>
            <p class="card-description mb-4">
                Kecap "Radja", produk unggulan dari industri rumah tangga milik Bapak Gusnadi di Dusun Ngunut, Desa Wonoanti, telah mendapatkan sertifikasi PIR-T. Keberhasilannya tak terbatas pada Pacitan, juga mencapai pasar luar daerah seperti Ponorogo, Magetan, dan Wonogiri, menghadirkan kualitas rasa terbaik yang bersaing di pasaran.
            </p>
            </div>
        </div>
        </div>
    </div>
</div>

<div class="container pt-2 pb-5">
    <div class="row g-5">
        <div class="card-group">
        <div class="card">
            <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
            <a href="javascript:;" class="d-block">
                <img src="{{ asset('assets/img/jamu-instan.png') }}" class="img-fluid border-radius-lg">
            </a>
            </div>

            <div class="card-body pt-2">
            <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">Produk Hasil Panen</span>
            <a href="javascript:;" class="card-title h5 d-block text-darker">
                Jamu Instan
            </a>
            <p class="card-description mb-4">
                Pandemi Covid-19 membawa berkah bagi Bu Sulasmi, produsen jamu instan dari Desa Wonoanti. Setiap transaksi, ia siap mengirimkan 50-100 kg jamu siap konsumsi, yang laris hingga ke luar daerah. Untuk stamina dan energi alami, pilihlah Jamu Instan Bu Sulasmi.
            </p>
            </div>
        </div>
        <div class="card">
            <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
            <a href="javascript:;" class="d-block">
                <img src="{{ asset('assets/img/jamur.jpeg') }}" class="img-fluid border-radius-lg">
            </a>
            </div>

            <div class="card-body pt-2">
            <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">Produk Hasil Panen</span>
            <a href="javascript:;" class="card-title h5 d-block text-darker">
                Jamur Tiram & Kuping
            </a>
            <p class="card-description mb-4">
                Budidaya jamur tiram dan jamur kuping adalah investasi yang berkelanjutan. Dengan perawatan yang tepat, Anda dapat menikmati panen berkualitas tinggi dan nutrisi yang luar biasa dari dua jenis jamur yang lezat ini. Mulailah budidaya Anda dan jadikan kebun Anda sebagai sumber kelezatan sekaligus penghasilan. 
            </p>
            </div>
        </div>
        <div class="card">
            <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
            <a href="javascript:;" class="d-block">
                <img src="{{ asset('assets/img/nugget-lele.jpeg') }}" class="img-fluid border-radius-lg">
            </a>
            </div>

            <div class="card-body pt-2">
            <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">Produk Hasil Panen</span>
            <a href="javascript:;" class="card-title h5 d-block text-darker">
                Nugget Lele
            </a>
            <p class="card-description mb-4">
                Kelompok Masyarakat Dusun Ngunut memulai pengolahan ikan untuk memecahkan masalah pemasaran ikan lele dan mempromosikan gizi alami. Ibu-ibu anggota kini memiliki pekerjaan sampingan setelah bercocok tanam, dengan produk seperti Nugget Lele, Sempol Lele, dan Krupuk Lele yang dapat dipesan dari Ibu Dinia.
            </p>
            </div>
        </div>
        
        </div>
    </div>
</div>


@endsection