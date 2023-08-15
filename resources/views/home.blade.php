@extends('layouts.main')

@section('base')
    @include('partials.nav')

    <main>
        <section-1>
            <div class="background position-absolute"  style="top: 0;">
                {{-- <img src="{{ asset('img/walkot1.jpg') }}" alt="" class="w-100"> --}}
            </div>
            <div class="container">
                <div class="text-hero mt-5">
                    <h2 class="text-center text-light">Suku Dinas Komunikasi, Informatika dan Statistik</h2>
                    <h2 class="text-center text-light"> Kota Administrasi Jakarta Timur</h2>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-7">
                        <div class="form">
                            <div class="input-group">
                                <button type="submit" class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></button>
                                <input class="form-control" id="email" name="email" type="text" placeholder="search..."/>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </section-1>
        <section-2>
            <div class="pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="item"> <span class="icon feature_box_col_one"><i class="bi bi-person-video3"></i></span>
                                <h6>Layanan rapat virtual</h6>
                                </div>
                            </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="item"> <span class="icon feature_box_col_two"><i class="bi bi-cloud"></i></span>
                                <h6>Layanan akun cloud</h6>
                                </div>
                            </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="item"> <span class="icon feature_box_col_four"><i class="bi bi-ticket"></i></span>
                                        <h6>Layanan jaringan internet</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="item"> <span class="icon feature_box_col_five"><i class="bi bi-newspaper"></i></span>
                                            <h6>Layanan peliputan berita</h6>
                                            </div>
                                        </div>
                        </div>
                    </div>
                </div>
        </section-2>
    </main>
@endsection

@section('script')
    <script src="{{ asset('js/app.js') }}"></script>

@endsection
