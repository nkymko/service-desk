@extends('layouts.main')

@section('base')

<body>
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <!-----image-------->
                    <img src="{{ asset('img/lambang.png') }}" alt="">
                    <div class="text">
                        <p>Selamat Datang di Website Service Desk<i>-Kominfotik</i></p>
                    </div>
                </div>
                <div class="col-md-6 right">
                    <div class="input-box">
                        <header>Log In</header>
                        <div class="input-field">
                            <input type="text" class="input" id="email" required autocomplete="off">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input" id="password" required>
                            <label for="password">Password</label>
                        </div>
                        <div class="input-field">
                            <input type="submit" class="submit" value="Log In">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>




@endsection