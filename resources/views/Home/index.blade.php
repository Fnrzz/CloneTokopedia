@extends('Home.Layouts.layout')

@section('content')
    <section id='banner'>
        <div class="container">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($banners as $banner => $image)
                        <div class="carousel-item {{ $banner == 0 ? 'active' : '' }}">
                            <img src="{{ asset('/storage/banner/' . $image->name) }}" class="d-block w-100" alt="...">
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
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

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
