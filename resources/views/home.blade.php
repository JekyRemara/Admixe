@extends('layouts.app') 

{{-- Perhatikan, nama folder view Anda di resources/views adalah 'layout' (tunggal). 
     Jika Anda belum mengubahnya, Anda harus menggunakan: @extends('layout.app')
     Saya asumsikan Anda sudah mengubahnya menjadi 'layouts' (jamak) agar sesuai dengan kode di bawah ini. --}}
     
@section('content')

    <div class="hero-content">
        <div class="container">
            <div class="row">
                <div class="col-12 offset-lg-2 col-lg-10">
                    <div class="entry-header">
                        <h2>Admixe</h2>

                        <div class="entry-meta-date">
                            06.28.018
                        </div>
                    </div>
                    <div class="countdown flex flex-wrap justify-content-between" data-date="2018/06/06">
                        <div class="countdown-holder">
                            <div class="dday"></div>
                            <label>Days</label>
                        </div>
                        <div class="countdown-holder">
                            <div class="dhour"></div>
                            <label>Hours</label>
                        </div>
                        <div class="countdown-holder">
                            <div class="dmin"></div>
                            <label>Minutes</label>
                        </div>
                        <div class="countdown-holder">
                            <div class="dsec"></div>
                            <label>Seconds</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 ">
                    <div class="entry-footer">
                        <a href="#" class="btn">Buy Tickets</a>
                        <a href="#" class="btn current">See Lineup</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="lineup-artists-headline">
                        <div class="entry-title">
                            <p>JUST THE BEST</p>
                            <h2>The Lineup Artists-Headliners</h2>
                        </div>
                        <div class="lineup-artists">
                            <div class="lineup-artists-wrap flex flex-wrap">
                                <figure class="featured-images">
                                    {{-- PERBAIKAN: img src menggunakan asset() --}}
                                    <a href="#"> <img src="{{ asset('images/black-chick.jpg') }}" alt=""> </a> 
                                </figure>
                                <div class="lineup-artists-description">
                                    <div class="lineup-artists-description-container">
                                        <div class="entry-title">
                                            Jamila Williams
                                        </div>
                                        <div class="entry-content">
                                            <p>Quisque at erat eu libero consequat tempus. Quisque mole stie convallis tempus. Ut semper purus metus, a euismod sapien sodales ac. Duis viverra eleifend fermentum. </p>
                                        </div>
                                        <div class="box-link">
                                            {{-- PERBAIKAN: img src menggunakan asset() --}}
                                            <a href=""><img src="{{ asset('images/box.jpg') }}" alt=""></a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lineup-artists-wrap flex flex-wrap">
                                <div class="lineup-artists-description">
                                    <figure class="featured-images d-md-none">
                                        {{-- PERBAIKAN: img src menggunakan asset() --}}
                                        <a href="#"> <img src="{{ asset('images/mathew-kane.jpg') }}" alt=""> </a> 
                                    </figure>
                                    <div class="lineup-artists-description-container">
                                        <div class="entry-title">
                                            Sandra Superstar
                                        </div>
                                        <div class="entry-content">
                                            <p>Quisque at erat eu libero consequat tempus. Quisque mole stie convallis tempus. Ut semper purus metus, a euismod sapien sodales ac. Duis viverra eleifend fermentum. </p>
                                        </div>
                                        <div class="box-link">
                                            {{-- PERBAIKAN: img src menggunakan asset() --}}
                                            <a href="#"><img src="{{ asset('images/box.jpg') }}" alt=""></a> 
                                        </div>
                                    </div>
                                </div>
                                <figure class="featured-image d-none d-md-block">
                                    {{-- PERBAIKAN: img src menggunakan asset() --}}
                                    <a href="#"> <img src="{{ asset('images/mathew-kane.jpg') }}" alt=""> </a> 
                                </figure>
                            </div>
                            <div class="lineup-artists-wrap flex flex-wrap">
                                <figure class="featured-images">
                                    {{-- PERBAIKAN: img src menggunakan asset() --}}
                                    <a href="#"> <img src="{{ asset('images/eric-ward.jpg') }}" alt=""> </a> 
                                </figure>
                                <div class="lineup-artists-description">
                                    <div class="lineup-artists-description-container">
                                        <div class="entry-title">
                                            DJ Crazyhead
                                        </div>
                                        <div class="entry-content">
                                            <p>Quisque at erat eu libero consequat tempus. Quisque mole stie convallis tempus. Ut semper purus metus, a euismod sapien sodales ac. Duis viverra eleifend fermentum. </p>
                                        </div>
                                        <div class="box-link">
                                            {{-- PERBAIKAN: img src menggunakan asset() --}}
                                            <a href="#"> <img src="{{ asset('images/box.jpg') }}" alt=""></a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <div class="the-complete-lineup">
                        <div class="entry-title">
                            <p>JUST THE BEST</p>
                            <h2>The Complete Lineup</h2>
                        </div>
                        <div class="row the-complete-lineup-artists">
                            {{-- SEMUA BAGIAN ARTIST DI BAWAH SUDAH BENAR MENGGUNAKAN asset('images/...') --}}
                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-images">
                                    <a href="#"> <img src="{{ asset('images/image-1.jpg') }}" alt=""> </a> 
                                    <a href="#" class="box-link"> <img src="{{ asset('images/box.jpg') }}" alt=""> </a> 
                                </figure>
                                <h2>Miska Smith</h2>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-images">
                                    <a href="#"> <img src="{{ asset('images/image-2.jpg') }}" alt=""> </a> 
                                    <a href="#" class="box-link"> <img src="{{ asset('images/box.jpg') }}" alt=""> </a> 
                                </figure>
                                <h2>Hayley Down</h2>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-images">
                                    <a href="#"> <img src="{{ asset('images/image-3.jpg') }}" alt=""> </a> 
                                    <a href="#" class="box-link"> <img src="{{ asset('images/box.jpg') }}" alt=""> </a> 
                                </figure>
                                <h2>The Band Song</h2>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-images">
                                    <a href="#"> <img src="{{ asset('images/image-4.jpg') }}" alt=""> </a> 
                                    <a href="#" class="box-link"> <img src="{{ asset('images/box.jpg') }}" alt=""> </a> 
                                </figure>
                                <h2>Pink Machine</h2>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-images">
                                    <a href="#"> <img src="{{ asset('images/image-5.jpg') }}" alt=""> </a> 
                                    <a href="#" class="box-link"> <img src="{{ asset('images/box.jpg') }}" alt=""> </a> 
                                </figure>
                                <h2>Brasil Band</h2>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-images">
                                    <a href="#"> <img src="{{ asset('images/image-6.jpg') }}" alt=""> </a> 
                                    <a href="#" class="box-link"> <img src="{{ asset('images/box.jpg') }}" alt=""> </a> 
                                </figure>
                                <h2>Mickey</h2>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-images">
                                    <a href="#"> <img src="{{ asset('images/image-7.jpg') }}" alt=""> </a> 
                                    <a href="#" class="box-link"> <img src="{{ asset('images/box.jpg') }}" alt=""> </a> 
                                </figure>
                                <h2>DJ Girl</h2>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-images">
                                    <a href="#"> <img src="{{ asset('images/image-8.jpg') }}" alt=""> </a> 
                                    <a href="#" class="box-link"> <img src="{{ asset('images/box.jpg') }}" alt=""> </a> 
                                </figure>
                                <h2>Stan Smith</h2>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="see-complete-lineup">
                                <div class="entry-footer">
                                    <a href="#" class="btn">See all lineup</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="homepage-next-events">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="entry-title">
                            <p>JUST THE BEST</p>
                            <h2>Our Next Events</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="next-event-slider-wrap">
                <div class="swiper-container next-event-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="next-event-content">
                                <figure class="featured-images">
                                    {{-- PERBAIKAN: img src menggunakan asset() --}}
                                    <img src="{{ asset('images/next-event-1.jpg') }}" alt=""> 

                                    <a href="#" class="entry-content flex flex-column justify-content-center align-items-center">
                                        <h3>Welcoming Party 2018</h3>
                                        <p>Green Palace, 22 Street, 23-28, Los Angeles California</p>
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="next-event-content">
                                <figure class="featured-images">
                                    {{-- PERBAIKAN: img src menggunakan asset() --}}
                                    <img src="{{ asset('images/next-event-2.jpg') }}" alt=""> 

                                    <a href="#" class="entry-content flex flex-column justify-content-center align-items-center">
                                        <h3>Welcoming Party 2018</h3>
                                        <p>Green Palace, 22 Street, 23-28, Los Angeles California</p>
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="next-event-content">
                                <figure class="featured-images">
                                    {{-- PERBAIKAN: img src menggunakan asset() --}}
                                    <img src="{{ asset('images/next-event-3.jpg') }}" alt=""> 

                                    <a href="#" class="entry-content flex flex-column justify-content-center align-items-center">
                                        <h3>Welcoming Party 2018</h3>
                                        <p>Green Palace, 22 Street, 23-28, Los Angeles California</p>
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="next-event-content">
                                <figure class="featured-images">
                                    {{-- PERBAIKAN: img src menggunakan asset() --}}
                                    <img src="{{ asset('images/next-event-1.jpg') }}" alt=""> 

                                    <a href="#" class="entry-content flex flex-column justify-content-center align-items-center">
                                        <h3>Welcoming Party 2018</h3>
                                        <p>Green Palace, 22 Street, 23-28, Los Angeles California</p>
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="next-event-content">
                                <figure class="featured-images">
                                    {{-- PERBAIKAN: img src menggunakan asset() --}}
                                    <img src="{{ asset('images/next-event-2.jpg') }}" alt=""> 

                                    <a href="#" class="entry-content flex flex-column justify-content-center align-items-center">
                                        <h3>Welcoming Party 2018</h3>
                                        <p>Green Palace, 22 Street, 23-28, Los Angeles California</p>
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="next-event-content">
                                <figure class="featured-images">
                                    {{-- PERBAIKAN: img src menggunakan asset() --}}
                                    <img src="{{ asset('images/next-event-3.jpg') }}" alt=""> 

                                    <a href="#" class="entry-content flex flex-column justify-content-center align-items-center">
                                        <h3>Welcoming Party 2018</h3>
                                        <p>Green Palace, 22 Street, 23-28, Los Angeles California</p>
                                    </a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next">
                    {{-- PERBAIKAN: img src menggunakan asset() --}}
                    <img src="{{ asset('images/button.png') }}" alt=""> 
                </div>
            </div>
        </div>
        
        <div class="home-page-last-news">
            <div class="container">
                <div class="header">
                    <div class="entry-title">
                        <p>JUST THE BEST</p>
                        <h2>Our Last News</h2>
                    </div>
                </div>
                <div class="home-page-last-news-wrap">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <figure class="featured-images">
                                {{-- PERBAIKAN: img src menggunakan asset() --}}
                                <a href="#"> <img src="{{ asset('images/news-image-1.jpg') }}" alt="fesival+celebration"> </a> 
                            </figure>
                            <div class="box-link-date">
                                <a href="#">03.12.18</a>
                            </div>

                            <div class="content-wrapper">
                                <div class="entry-content">
                                    <div class="entry-header">
                                        <h2><a href="#">10 Festival Tips</a></h2>
                                    </div>
                                    <div class="entry-meta">
                                        <span class="author-name"><a href="#"> By James Williams</a></span>
                                        <span class="space">|</span>
                                        <span class="comments-count"><a href="#">3 comments</a></span>
                                    </div>
                                    <div class="entry-description">
                                        <p>Quisque at erat eu libero consequat tempus.
                                            Quisque mole stie convallis tempus.
                                            Ut semper purus metus, a euismod sapien sodales ac.
                                            Duis viverra eleifend fermentum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <figure class="featured-images">
                                {{-- PERBAIKAN: img src menggunakan asset() --}}
                                <a href="#"> <img src="{{ asset('images/news-image-1.jpg') }}" alt="fesival+celebration"> </a> 
                            </figure>
                            <div class="box-link-date">
                                <a href="">03.12.18</a>
                            </div>

                            <div class="content-wrapper">
                                <div class="entry-content">
                                    <div class="entry-header">
                                        <h2><a href="#">New event calendar for this year</a></h2>
                                    </div>
                                    <div class="entry-meta">
                                        <span class="author-name"><a href="#">By James Williams</a></span>
                                        <span class="space">|</span>
                                        <span class="comments-count"><a href="#">3 comments</a></span>
                                    </div>
                                    <div class="entry-description">
                                        <p>Quisque at erat eu libero consequat tempus.
                                            Quisque mole stie convallis tempus.
                                            Ut semper purus metus, a euismod sapien sodales ac.
                                            Duis viverra eleifend fermentum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection