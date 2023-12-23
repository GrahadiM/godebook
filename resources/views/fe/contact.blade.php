@extends('layouts.fe.index')

@section('content')

    <!-- TESTIMONIALS, CTA & SERVICE -->
    <div>
        <div class="container">
            <div class="testimonials-box">
                <!-- TESTIMONIALS -->
                <div class="testimonial">
                    <h2 class="title">testimonial</h2>
                    <div class="testimonial-card">
                        <img src="{{ asset('customer') }}/assets/images/testimonial-1.jpg" alt="alan doe" class="testimonial-banner" width="80" height="80">
                        <p class="testimonial-name">Alan Doe</p>
                        <p class="testimonial-title">CEO & Founder Invision</p>
                        <img src="{{ asset('customer') }}/assets/images/icons/quotes.svg" alt="quotation" class="quotation-img"
                            width="26">
                        <p class="testimonial-desc">
                            Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor dolor sit amet.
                        </p>
                    </div>
                </div>
                <!-- CTA -->
                <div class="cta-container">
                    <img src="{{ asset('customer') }}/assets/images/cta-banner.jpg" alt="Best Online Support" class="cta-banner">
                    <a href="https://wa.me/+62085767113554?text=Halo%20saya%20pelanggan%20dari%20GodeBook,%20Apakah%20saya%20bisa%20bertanya%20tentang%20web%20tersebut?" class="cta-content">
                        <h2 class="cta-title">Best Online Support</h2>
                        <p class="cta-text">Hours: 8AM - 11PM</p>
                        <button class="cta-btn">Call Us Now Via WA</button>
                        <p class="discount">Click Me</p>
                    </a>
                </div>
                <!-- SERVICE -->
                <div class="service">
                    <h2 class="title">Our Services</h2>
                    <div class="service-container">
                        <a href="javascript:void(0)" class="service-item">
                            <div class="service-icon">
                                <ion-icon name="boat-outline"></ion-icon>
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">Worldwide Delivery</h3>
                                <p class="service-desc">For Order Over $100</p>
                            </div>
                        </a>
                        <a href="javascript:void(0)" class="service-item">
                            <div class="service-icon">
                                <ion-icon name="rocket-outline"></ion-icon>
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">Next Day delivery</h3>
                                <p class="service-desc">UK Orders Only</p>
                            </div>
                        </a>
                        <a href="javascript:void(0)" class="service-item">
                            <div class="service-icon">
                                <ion-icon name="call-outline"></ion-icon>
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">Best Online Support</h3>
                                <p class="service-desc">Hours: 8AM - 11PM</p>
                            </div>
                        </a>
                        <a href="javascript:void(0)" class="service-item">
                            <div class="service-icon">
                                <ion-icon name="arrow-undo-outline"></ion-icon>
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">Return Policy</h3>
                                <p class="service-desc">Easy & Free Return</p>
                            </div>
                        </a>
                        <a href="javascript:void(0)" class="service-item">
                            <div class="service-icon">
                                <ion-icon name="ticket-outline"></ion-icon>
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">30% money back</h3>
                                <p class="service-desc">For Order Over $100</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TESTIMONIALS, CTA & SERVICE -->

@endsection
