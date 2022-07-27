@extends('layouts.main')

@section('isiHalaman')

    <!-- ======= Header ======= -->
    @include('layouts.navbar')
    <!-- End Header -->


    <main id="main" data-aos="fade-in">

      <br>
      <!-- ======= Courses Section ======= -->
      <section id="courses" class="mt-5 courses">
        <div class="container" data-aos="fade-up">
  
          <div class="row" data-aos="zoom-in" data-aos-delay="100">
     
      @foreach ($langganans as $langganan)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="course-item">
                <img src="{{asset('/storage/' .$langganan->cover_image)}}" class="img-fluid" alt="...">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>Dekstop</h4>
                    <p class="price">{{ $langganan->harga_mapel }}</p>
                  </div>
  
                  <h3><a href="/detailKelas">{{ $langganan->nama_mapel }}</a></h3>
                  <p>{{ $langganan->deskripsi_mapel }}</p>
                  <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                      <img src="/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                      <span>Antonio</span>
                    </div>
                    <div class="trainer-rank d-flex align-items-center">
                      <i class="bx bx-user"></i>&nbsp;50
                      &nbsp;&nbsp;
                      <i class="bx bx-heart"></i>&nbsp;65
                    </div>
                  </div>
                </div>
              </div>
               
            </div>
            @endforeach
         
            <!-- End Course Item -->
  
            <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
              <div class="course-item">
                <img src="/img/course-2.jpg" class="img-fluid" alt="...">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>Dekstop</h4>
                    <p class="price">$250</p>
                  </div>
  
                  <h3><a href="/detailKelas">C + +</a></h3>
                  <p>Bahasa pemrograman C++ dikembangkan pada awal 1980. Pengembangannya berdasarkan bahasa C. Bahasa C++ banyak digunakan untuk sistem operasi desktop.</p>
                  <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                      <img src="/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
                      <span>Lana</span>
                    </div>
                    <div class="trainer-rank d-flex align-items-center">
                      <i class="bx bx-user"></i>&nbsp;35
                      &nbsp;&nbsp;
                      <i class="bx bx-heart"></i>&nbsp;42
                    </div>
                  </div>
                </div>
              </div>
            </div> End Course Item -->
  
            <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
              <div class="course-item">
                <img src="/img/course-3.jpg" class="img-fluid" alt="...">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>Dekstop</h4>
                    <p class="price">$180</p>
                  </div>
  
                  <h3><a href="/detailKelas">Phyton</a></h3>
                  <p>Python adalah sebuah bahasa pemrograman yang rilis pada tahun 1991. Struktur dari bahasa phyton ini sangat sederhana dan mirip dengan bahasa Inggris.</p>
                  <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                      <img src="/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
                      <span>Brandon</span>
                    </div>
                    <div class="trainer-rank d-flex align-items-center">
                      <i class="bx bx-user"></i>&nbsp;20
                      &nbsp;&nbsp;
                      <i class="bx bx-heart"></i>&nbsp;85
                    </div>
                  </div>
                </div>
              </div>
            </div> End Course Item -->
  
          </div>
  
        </div>
      </section><!-- End Courses Section -->
  
    </main>
    <!-- End #main -->


@endsection
