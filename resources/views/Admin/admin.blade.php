@extends('layout.auth')


@section('isi')
    <div class="bg-slate-900 m-4  w-full justify-center mx-4  h-32">
        <h1 class=" text-white py-4 text-center">
            Selamat Datang <b>
                {{ Auth::user()->email }}
            </b>
        </h1>

        <p class="text-white text-center">
            role Anda Adalah <b class="text-teal-400">
                {{ Auth::user()->role }}
            </b>
        </p>

    </div>
@endsection()
