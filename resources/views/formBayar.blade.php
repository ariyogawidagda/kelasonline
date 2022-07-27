@extends('layouts.main')

@section('isiHalaman')

    <!-- ======= Header ======= -->
    @include('layouts.navbar')
    <!-- End Header -->

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
          <h2>Pembayaran</h2>
          <p>Pembayaran untuk Paket Pelanggan</p>
        </div>
      </div>
    <!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing" style="height: 65vh;">
      <div class="container" data-aos="fade-up">

        <div class="row" >
            <form>
            @foreach ($mapelz as $mapels)
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Harga Langganan</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jumlah Tagihan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                  </div>
                  <div class="mb-3">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Pilih Pengajar</option>
                    <option value="1">Rona Litana</option>
                    <option value="2">Ratih Apsari</option>
                    <option value="3">Mario Jose</option>
                  </select>
                </div>
                  <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <button type="button" class="btn btn-success">Bayar Sekarang</button>
                  </div>
            </form>

          

        </div>

      </div>
    </section><!-- End Pricing Section -->

  </main><!-- End #main -->

  @endsection