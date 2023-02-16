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
                </div>
            </div>
        </div>
    </section>
@endsection
