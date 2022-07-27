@extends('layouts.main')

@section('isiHalaman')

<!-- ======= Header ======= -->
@include('layouts.navbar')
<!-- End Header -->

<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">
            <h2> Mentor </h2>
            <p> Untuk tumbuh, Anda perlu melangkah keluar dari zona nyaman Anda untuk dapat memperoleh pengalaman dan pembelajaran baru. Seorang mentor yang baik mampu mengidentifikasi zona nyaman Anda dan mengembangkan langkah-langkah dan kegiatan dalam tujuan Anda yang akan memaksa Anda untuk menjadi nyaman di luar zona Anda. </p>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
        <div class="container" data-aos="fade-up">
            @foreach($pengajars as $pengajar)
            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                    <img src="{{asset('/storage/' .$pengajar->foto_pengajar)}}" class="img-fluid" alt="...">
                        <div class="member-content">
                            <h4> {{ $pengajar->nama_pengajar }} </h4>
                            <span> {{ $pengajar->matkul_pengajar }}</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

               @endforeach

            </div>

        </div>
    </section><!-- End Trainers Section -->

</main>
@endsection