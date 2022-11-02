@extends('layouts.app')

@section('title')
    Nomads
@endsection


@section('content')
    
    <!-- Header Section -->
    <header class="text-center">
        <h1>Explore The Beautiful World
            <br>
            As Easy One Click
        </h1>
        <p class="mt-3">
            You will see beautiful
            <br>
            moment you never see before
        </p>
        <a href="#popular" class="btn btn-get-started px-4 mt-4">
            Get Started
        </a>
    </header>

    <!-- Main Section -->
    <main>

        <!-- Statistic Section -->
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>20K</h2>
                    <p>Members</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>12</h2>
                    <p>Countries</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>3K</h2>
                    <p>Hotel</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>72</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>

        <!-- Popular Text Section -->
        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Popular</h2>
                        <p>
                            Something that you never try
                            <br>
                            before in this world
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Wisata Popular Card -->
        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    @foreach ($items as $item)
                        <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                        style="background-image: url('{{ $item->galleries->count() ? Storage::url
                        ($item->galleries->first()->image) : '' }}');">
                            <div class="travel-country">{{ $item->location }}</div>
                            <div class="travel-location">{{ $item->title }}</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail', $item->slug) }}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Our Network -->
        <section class="section-our-network">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <h2>Our Networks</h2>
                        <p>
                            Companies are trusted us
                            <br>
                            more than just a trip
                        </p>
                    </div>
                    <div class="col-md-2">
                        <img src="frontend/assets/images/ana.png" alt="Ana Logo" class="network-logo">
                    </div>
                    <div class="col-md-2">
                        <img src="frontend/assets/images/disney.png" alt="Ana Logo" class="network-logo">
                    </div>
                    <div class="col-md-2">
                        <img src="frontend/assets/images/shangri-la.png" alt="Ana Logo" class="network-logo">
                    </div>
                    <div class="col-md-2">
                        <img src="frontend/assets/images/visa.png" alt="Ana Logo" class="network-logo">
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial Section -->
        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They Are Loving Us</h2>
                        <p>
                            Moments were giving them
                            <br>
                            the best experience
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial Card Section -->
        <section class="section section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/assets/images/Testimonial 1.png" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Eko Prasetyo</h3>
                                <p class="testimonial">
                                    " It's a really fantastic experience I ever had. Can't wait for next chance! "
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Ubud
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/assets/images/Testimonial 2.png" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Sabrina</h3>
                                <p class="testimonial">
                                    " Best experience i ever have in my life! Would go for another round soon! "
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Lombok
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/assets/images/Testimonial 3.png" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Sheena</h3>
                                <p class="testimonial">
                                    " Greatest time of my life! Gonna take my family with me next time! "
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Ubud
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                            I need help
                        </a>
                        <a href="{{ route('register') }}" class="btn btn-get-started px-4 mt-4 mx-1">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection