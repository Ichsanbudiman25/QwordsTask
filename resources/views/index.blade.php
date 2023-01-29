@extends('layouts.mainLayout')
@section('title', 'Page Home')
    <!-- Customized Bootstrap Stylesheet -->
    <link href="/greenhost/css/bootstrap.min.css" rel="stylesheet">
        <!-- Navbar & Hero Start -->
        <!-- <div class="container-xxl position-relative p-0"> -->

            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5">
                        <div class="col-lg-6 pt-5 text-center text-lg-start">
                            <h1 class="display-4 text-white mb-4 animated slideInLeft">Cloud Hosting</h1>
                            <p class="text-white animated slideInLeft">Cloud Hosting Indonesia dengan pelayanan terbaik dan harga murah serta diskon nama domain.</p>
                            <h1 class="text-white mb-4 animated slideInLeft">
                                <small class="align-top fw-normal" style="font-size: 15px; line-height: 25px;">Mulai dari:</small>
                                <span>Rp14.000</span>
                                <small class="align-bottom fw-normal" style="font-size: 15px; line-height: 33px;">/ Mo</small>
                            </h1>
                            <a href="https://wa.me/6285659937420?text=Halo selamat malam saya ingin layanan hosting dan domain dari QwordsTask nya dong kakk..." target="_Blank" class="btn btn-secondary py-sm-3 px-sm-5 me-3 animated slideInLeft">Get Started Now</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn" src="/greenhost/img/hero.png" alt="">
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


        <!-- Domain Search Start -->
        <div class="container-xxl domain mb-5" style="margin-top: 90px;">
            <div class="container px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-title position-relative text-center mx-auto mb-4 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                            <h1 class="mb-3">Cari nama domain yang bagus yuk</h1>
                            <p class="mb-1">Cari nama domain terbaik dengan QwordsTask.</p>
                        </div>
                        <div class="position-relative w-100 my-3 wow fadeInUp" data-wow-delay="0.3s">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Masukan nama domain Anda">
                            <button type="button" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Search</button>
                        </div>
                        <div class="row g-3 wow fadeInUp" data-wow-delay="0.5s">
                            @foreach($produkDomainList as $data)
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                <h5 class="fw-bold text-primary mb-1">{{$data->nama_produk}}</h5>
                                <p class="mb-0">Rp{{number_format($data->harga_produk)}}/thn</p>
                            </div>
                            @endforeach
                            <!-- <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                <h5 class="fw-bold text-primary mb-1">.net</h5>
                                <p class="mb-0">$9.99/year</p>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                <h5 class="fw-bold text-primary mb-1">.org</h5>
                                <p class="mb-0">$9.99/year</p>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                <h5 class="fw-bold text-primary mb-1">.us</h5>
                                <p class="mb-0">$9.99/year</p>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                <h5 class="fw-bold text-primary mb-1">.eu</h5>
                                <p class="mb-0">$9.99/year</p>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                <h5 class="fw-bold text-primary mb-1">.co.uk</h5>
                                <p class="mb-0">$9.99/year</p>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Domain Search End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-4">
                            <h1 class="mb-2">Selamat datang ke QwordsTask</h1>
                        </div>
                        <p class="mb-4">Kami adalah perusahaan penyedia layanan domain dan hosting yang ada di Indonesia. Memiliki lebih dari 10.000 klien yang tersebar diseluruh Indonesia.</p>
                        <div class="row g-3">
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="bg-light rounded text-center p-4">
                                    <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                    <p class="mb-0">Experts</p>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="bg-light rounded text-center p-4">
                                    <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">17023</h2>
                                    <p class="mb-0">Clients</p>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="bg-light rounded text-center p-4">
                                    <i class="fa fa-check fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                    <p class="mb-0">Projects</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="/greenhost/img/about.png">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


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

        <!-- Comparison Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Hosting dan Domain</h1>
                    <p class="mb-1">Berikut adalah kelebihan layanan hosting dan domain kami.</p>
                </div>
                <div class="row g-5 comparison position-relative">
                    <div class="col-lg-6 pe-lg-5">
                        <div class="section-title position-relative mx-auto mb-4 pb-4">
                            <h3 class="fw-bold mb-0">Hosting</h3>
                        </div>
                        <div class="row gy-3 gx-5">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <i class="fa fa-server fa-3x text-primary mb-3"></i>
                                <h5 class="fw-bold">99.99% Uptime</h5>
                                
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <i class="fa fa-shield-alt fa-3x text-primary mb-3"></i>
                                <h5 class="fw-bold">100% Secured</h5>
                                
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <i class="fa fa-cog fa-3x text-primary mb-3"></i>
                                <h5 class="fw-bold">Control Panel</h5>
                                
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                <i class="fa fa-headset fa-3x text-primary mb-3"></i>
                                <h5 class="fw-bold">24/7 Support</h5>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ps-lg-5">
                        <div class="section-title position-relative mx-auto mb-4 pb-4">
                            <h3 class="fw-bold mb-0">Domain</h3>
                        </div>
                        <div class="row gy-3 gx-5">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <i class="fa fa-server fa-3x text-secondary mb-3"></i>
                                <h5 class="fw-bold">99.99% Uptime</h5>
                                
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <i class="fa fa-shield-alt fa-3x text-secondary mb-3"></i>
                                <h5 class="fw-bold">100% Secured</h5>
                                
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <i class="fa fa-cog fa-3x text-secondary mb-3"></i>
                                <h5 class="fw-bold">Control Panel</h5>
                                
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                <i class="fa fa-headset fa-3x text-secondary mb-3"></i>
                                <h5 class="fw-bold">24/7 Support</h5>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Comparison Start -->

        

        @include('layouts.bottom')