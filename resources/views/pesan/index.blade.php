
        <!-- Product section-->
        <!doctype html>
        <html lang="en">
          <head>
            <title>Title</title>
            <!-- Required meta tags -->
            <meta charset="utf-8" />
            <meta
              name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no"
            />
        
            <!-- Bootstrap CSS v5.2.1 -->
            <link
              href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
              rel="stylesheet"
              integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
              crossorigin="anonymous"
            />
          </head>
@extends('layouts.navbar')
        
          <body>
            @section('content')
            <section class="py-5">
              <div class="container px-4 px-lg-5 my-5">
                  <div class="row gx-4 gx-lg-5 align-items-center">
                      <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ asset('image/' . $produk->image) }}" alt="..." /></div>
                      <div class="col-md-6">
                          <h1 class="display-5 fw-bolder">{{ $produk->nama }}</h1>
                          <div class="fs-5 mb-5">
                              <!-- <span class="text-decoration-line-through">Rp. {{ number_format ($produk->harga) }}</span> -->
                              <span>Rp. {{ number_format ($produk->harga) }}</span>
                              <p class="lead fw">Stok : {{$produk->stok}}</p>
                          </div>
                          <p class="lead fw-bolder">Deskripsi :</p>
                          <p>{{$produk->deskripsi}}</p>
                          
                      <form method="post" action="{{ url('pesan') }}/{{ $produk->id }}" >
                      @csrf
                          <div class="d-flex">
                              <input class="form-control text-center me-3" id="jumlah_pesan" name="jumlah_pesan" type="num" value="1" style="max-width: 3rem" />
                              <button class="btn btn-outline-dark flex-shrink-0" type="sumbit">
                                  <i class="bi-cart-fill me-1"></i>
                                  Add to cart
                              </button>
                          </div>
                      </form>
                      </div>
                  </div>
              </div>
          </section>
            <script
              src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
              integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
              crossorigin="anonymous"
            ></script>
        
            <script
              src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
              integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
              crossorigin="anonymous"
            ></script>
          </body>
        </html>
        
        <!-- Bootstrap core JS-->
@endsection