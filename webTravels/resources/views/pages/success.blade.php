@extends('layouts.success')

@section('title', 'Checkout Success')

@section('content')
    <main>
        <section class="success-checkout-section">
            <div class="container">
                <div class="row">
                    <div class="ml-auto mr-auto text-center">
                        <div class="mail-image">
                            <a href="#">
                                <img src="{{ url('frontend/assets/images/ic_mail.png') }}" alt="" >
                            </a>
                        </div>
                        <div class="text-center">
                            <h2>Yay! Success</h2>
                            <p>
                                We've sent you email for trip instruction
                                <br>
                                please read it as well
                            </p>
                        </div>
                        <a href="{{ url('/') }}" class="btn btn-home-page mb-2 px-4">
                            Home Page
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection