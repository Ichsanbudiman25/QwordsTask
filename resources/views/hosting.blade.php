@extends('layouts.mainLayout')
@section('title', 'Hosting')
@section('active', 'about')

<link href="/greenhost/css/bootstrap.min.css" rel="stylesheet">
            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 pt-5">
                        <div class="col-12 text-center text-lg-start">
                            <h1 class="display-4 text-white animated slideInLeft">Hosting</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center justify-content-lg-start animated slideInLeft">
                                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                                    <li class="breadcrumb-item text-white active" aria-current="page">Hosting</li>
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


        <!-- Pricing Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Cloud Hosting dan VPS Diskon Hingga 30% !</h1>
                    <p class="mb-1">Layanan unggulan dengan teknologi terbaik untuk website anda.</p>
                </div>
                @foreach($produkHostingList1 as $data)
                <div class="row gy-5 gx-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="position-relative shadow rounded border-top border-5 border-primary">
                            <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                                <i class="fa fa-share-alt text-white"></i>
                            </div>
                            <div class="text-center border-bottom p-4 pt-5">
                                <h4 class="fw-bold">{{$data->nama_produk}}</h4>
                                <p class="mb-0">{{$data->deskripsi_produk}}</p>
                            </div>
                            <div class="text-center border-bottom p-4">
                                <p class="text-primary mb-1">Latest Offer - <strong>Save 30%</strong></p>
                                <h1 class="mb-3">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">Rp</small>{{number_format($data->harga_produk)}}<small
                                        class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                                </h1>
                                <a class="btn btn-primary px-4 py-2" href="https://wa.me/6285659937420?text=Halo selamat malam saya ingin layanan hosting dengan nama produk *{{$data->nama_produk}}* nya dong kak..." target="_Blank">Buy Now</a>
                            </div>
                            <div class="p-4">
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>100 GB Disk Space</p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Unlimited Bandwith</p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Upgrade to Positive SSL</p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Automatic Malware Removal</p>
                                <p class="mb-0"><i class="fa fa-check text-primary me-3"></i>30 Days Money Back Guarantee</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach($produkHostingList2 as $data)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="position-relative shadow rounded border-top border-5 border-secondary">
                            <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-secondary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                                <i class="fa fa-server text-white"></i>
                            </div>
                            <div class="text-center border-bottom p-4 pt-5">
                                <h4 class="fw-bold">{{$data->nama_produk}}</h4>
                                <p class="mb-0">{{$data->deskripsi_produk}}</p>
                            </div>
                            <div class="text-center border-bottom p-4">
                                <p class="text-primary mb-1">Latest Offer - <strong>Save 30%</strong></p>
                                <h1 class="mb-3">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">Rp</small>{{number_format($data->harga_produk)}}<small
                                        class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                                </h1>
                                <a class="btn btn-secondary px-4 py-2" href="https://wa.me/6285659937420?text=Halo selamat malam saya ingin layanan hosting dengan nama produk *{{$data->nama_produk}}* nya dong kak..." target="_Blank">Buy Now</a>
                            </div>
                            <div class="p-4">
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>100 GB Disk Space</p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Unlimited Bandwith</p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Upgrade to Positive SSL</p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Automatic Malware Removal</p>
                                <p class="mb-0"><i class="fa fa-check text-primary me-3"></i>30 Days Money Back Guarantee</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach($produkHostingList3 as $data)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="position-relative shadow rounded border-top border-5 border-primary">
                            <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                                <i class="fa fa-cog text-white"></i>
                            </div>
                            <div class="text-center border-bottom p-4 pt-5">
                                <h4 class="fw-bold">{{$data->nama_produk}}</h4>
                                <p class="mb-0">{{$data->deskripsi_produk}}</p>
                            </div>
                            <div class="text-center border-bottom p-4">
                                <p class="text-primary mb-1">Latest Offer - <strong>Save 30%</strong></p>
                                <h1 class="mb-3">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">Rp</small>{{number_format($data->harga_produk)}}<small
                                        class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                                </h1>
                                <a class="btn btn-primary px-4 py-2" href="https://wa.me/6285659937420?text=Halo selamat malam saya ingin layanan hosting dengan nama produk *{{$data->nama_produk}}* nya dong kak..." target="_Blank">Buy Now</a>
                            </div>
                            <div class="p-4">
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>100 GB Disk Space</p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Unlimited Bandwith</p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Upgrade to Positive SSL</p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Automatic Malware Removal</p>
                                <p class="mb-0"><i class="fa fa-check text-primary me-3"></i>30 Days Money Back Guarantee</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Pricing End -->
        

        @include('layouts.bottom')