@extends('layouts.main')

@section('base')
    @include('partials.nav')

    <main>
        <section-1>
            <div class="background">
                <img src="{{ asset('img/walkot1.jpg') }}" alt="" class="w-100 position-absolute" style="top: 0;">
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
    </main>
@endsection

@section('script')
    <script src="{{ asset('js/app.js') }}"></script>

@endsection
