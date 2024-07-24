@extends('layouts.app')

@section('content')
<main id="main" class="main">
    <div class="content transition">
        <h2 class="text-center mb-4">Holidays</h2>
        <div class="container-fluid">
            <div class="row">
                <!-- First Holiday Image -->
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="{{ asset('empassests/img/holiday 1.jpg') }}" class="card-img-top" alt="Holiday 1">
                    </div>
                </div>

                <!-- Second Holiday Image -->
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="{{ asset('empassests/img/holiday 2.jpg') }}" class="card-img-top" alt="Holiday 2">
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
