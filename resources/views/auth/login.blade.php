@extends('layouts.layouts')

@section('content')
    <section style="margin-top: 100px">
        <div class="container col-lg-6 mt-5">
            <h3 class="fw-bold mt-5">Halaman Login Admin Pesantren</h3>
            <form action="" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Masukan Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Masukan Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary mb-5">Login</button>
            </form>
        </div>
    </section>
@endsection