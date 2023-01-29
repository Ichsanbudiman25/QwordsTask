@extends('layouts.mainLayout')
@section('title', 'Artikel')

        <link href="viewArtikel/css/styles.css" rel="stylesheet" />

        <div class="py-5 mb-5" style="background-color:#8EC42F"></div>
        <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">
                                @foreach($viewArtikel as $data)
                                    {{$data->judul_artikel}}
                                @endforeach
                            </h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">
                                Posted on 
                                @foreach($viewArtikel as $data)
                                    {{$data->created_at}}
                                @endforeach
                                by 
                                @foreach($viewArtikel as $data)
                                    {{$data->penulis_artikel}}
                                @endforeach
                            </div>
                            <!-- Post categories-->
                            <a
                                class="badge bg-secondary text-decoration-none link-light"
                                href="#!"
                                >Web Design</a
                            >
                            <a
                                class="badge bg-secondary text-decoration-none link-light"
                                href="#!"
                                >Freebies</a
                            >
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4">
                            <img
                                class="img-fluid rounded"
                                src="/images/{{$data->gambar_artikel}}"
                                alt="..."
                                width= "900px"
                                style="height:400px"
                            />
                        </figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            @foreach($viewArtikel as $data)
                                {!!$data->isi_artikel!!}
                            @endforeach
                        </section>
                    </article>

                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header">Selamat datang QwordsTask Artikel</div>
                        <div class="card-body">
                            Jangan lupa untuk mengecek nama domain yang kamu inginkan dan pastikan pakai hosting dari <a href="/">QwordsTask</a>  ya guyss!!!...
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <center>
            <hr style="width:650px">
            <hr style="width:500px">
        </center>
               <!-- Team Start -->
               <div class="container-xxl py-5">
            <div class="container px-lg-5">
            <center>
                <h2>Berita/Artikel lainnya</h2><br>

            </center>
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
    </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="viewArtikel/js/scripts.js"></script>
    </body>
</html>
