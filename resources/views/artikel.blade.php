@extends('layouts.mainLayout')
@section('title', 'Artikel')

<link href="/greenhost/css/bootstrap.min.css" rel="stylesheet">

            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 pt-5">
                        <div class="col-12 text-center text-lg-start">
                            <h1 class="display-4 text-white animated slideInLeft">Berita/Artikel</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center justify-content-lg-start animated slideInLeft">
                                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                                    <li class="breadcrumb-item text-white active" aria-current="page">Berita/Artikel</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 40, 51, 0.8);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->

        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Berita dan Artikel Terkini dari QwordsTask</h1>
                    <p class="mb-1">Baca berita dan artikel kami setiap hari.</p>
                </div>
                <div class="row g-4">
                    @foreach($artikelList as $data)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                            <div class="text-center p-4">
                                <img class="img-fluid mb-4" src="/images/{{$data->gambar_artikel}}" width="250px" style="height:100px" alt="">
                                <h6 class="fw-bold mb-1">{{Str::limit($data->judul_artikel, 30)}}</h6>
                                <small>Designation</small>
                            </div>
                            <div class="d-flex justify-content-center bg-primary p-3">
                                <a class="btn btn-warning" href="/view_Artikel/{{$data->id_artikel}}">Read More...</a>
                                <!-- <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-instagram"></i></a> -->
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- Team End -->
        

        @include('layouts.bottom')