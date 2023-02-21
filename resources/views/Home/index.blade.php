@extends('Home.Layouts.layout')

@section('content')
    <section id='banner'>
        @livewire('banner')
    </section>

    <section id="card-menu">
        <div class="container">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            @livewire('category-choose')
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col">
                                    <h5 class="fw-bold">TopUp & Tagihan</h5>
                                </div>
                            </div>
                            <div class="row mt-3">
                                @livewire('top-up')
                            </div>
                        </div>
                    </div>
                    <div class="button-menu-wrapper">
                        @livewire('button-menu')
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="banner2">
        <div class="container mt-5">
            <div class="row">
                <a href="">
                    <img src="{{ asset('/storage/banner/banner5.jpg') }}" class="img-fluid">
                </a>
            </div>
        </div>
    </section>

    <section id="traktiran">
        @livewire('traktiran')
    </section>
@endsection
