@extends('anim_category.header')

@section('anim_category')
@section('tittle')
    AnimKU
@endsection


<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a>
                    <a href="{{ url('categori') }}">Categories</a>
                    <span>Fate Stay Night: Unlimited Blade</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Anime Section Begin -->
<section class="anime-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="anime__video__player">
                    <video id="player" playsinline controls data-poster="./videos/anime-watch.jpg">
                        <source src="{{ asset('/anime/videos/1.mp4') }}" type="video/mp4" />
                        <!-- Captions are optional -->
                        <track kind="captions" label="English captions" src="#" srclang="en" default />
                    </video>
                </div>
                <div class="anime__details__episodes">
                    <div class="section-title">
                        <h5>List Name</h5>
                    </div>
                    <a href="{{ url('#') }}">Ep 01</a>
                    <a href="{{ url('#') }}">Ep 02</a>
                    <a href="{{ url('#') }}">Ep 03</a>
                    <a href="{{ url('#') }}">Ep 04</a>
                    <a href="{{ url('#') }}">Ep 05</a>
                    <a href="{{ url('#') }}">Ep 06</a>
                    <a href="{{ url('#') }}">Ep 07</a>
                    <a href="{{ url('#') }}">Ep 08</a>
                    <a href="{{ url('#') }}">Ep 09</a>
                    <a href="{{ url('#') }}">Ep 10</a>
                    <a href="{{ url('#') }}">Ep 11</a>
                    <a href="{{ url('#') }}">Ep 12</a>
                    <a href="{{ url('#') }}">Ep 13</a>
                    <a href="{{ url('#') }}">Ep 14</a>
                    <a href="{{ url('#') }}">Ep 15</a>
                    <a href="{{ url('#') }}">Ep 16</a>
                    <a href="{{ url('#') }}">Ep 17</a>
                    <a href="{{ url('#') }}">Ep 18</a>
                    <a href="{{ url('#') }}">Ep 19</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="anime__details__review">
                    <div class="section-title">
                        <h5>Reviews</h5>
                    </div>
                    <div class="anime__review__item">
                        <div class="anime__review__item__pic">
                            <img src="{{ asset('/anime/img/anime/review-1.jpg') }}" alt="">
                        </div>
                        <div class="anime__review__item__text">
                            <h6>Chris Curry - <span>1 Hour ago</span></h6>
                            <p>whachikan Just noticed that someone categorized this as belonging to the genre
                                "demons" LOL</p>
                        </div>
                    </div>
                    <div class="anime__review__item">
                        <div class="anime__review__item__pic">
                            <img src="{{ asset('/anime/img/anime/review-2.jpg') }}" alt="">
                        </div>
                        <div class="anime__review__item__text">
                            <h6>Lewis Mann - <span>5 Hour ago</span></h6>
                            <p>Finally it came out ages ago</p>
                        </div>
                    </div>
                    <div class="anime__review__item">
                        <div class="anime__review__item__pic">
                            <img src="{{ asset('/anime/img/anime/review-3.jpg') }}" alt="">
                        </div>
                        <div class="anime__review__item__text">
                            <h6>Louis Tyler - <span>20 Hour ago</span></h6>
                            <p>Where is the episode 15 ? Slow update! Tch</p>
                        </div>
                    </div>
                    <div class="anime__review__item">
                        <div class="anime__review__item__pic">
                            <img src="{{ asset('/anime/img/anime/review-4.jpg') }}" alt="">
                        </div>
                        <div class="anime__review__item__text">
                            <h6>Chris Curry - <span>1 Hour ago</span></h6>
                            <p>whachikan Just noticed that someone categorized this as belonging to the genre
                                "demons" LOL</p>
                        </div>
                    </div>
                    <div class="anime__review__item">
                        <div class="anime__review__item__pic">
                            <img src="{{ asset('/anime/img/anime/review-5.jpg') }}" alt="">
                        </div>
                        <div class="anime__review__item__text">
                            <h6>Lewis Mann - <span>5 Hour ago</span></h6>
                            <p>Finally it came out ages ago</p>
                        </div>
                    </div>
                    <div class="anime__review__item">
                        <div class="anime__review__item__pic">
                            <img src="{{ asset('/anime/img/anime/review-6.jpg') }}" alt="">
                        </div>
                        <div class="anime__review__item__text">
                            <h6>Louis Tyler - <span>20 Hour ago</span></h6>
                            <p>Where is the episode 15 ? Slow update! Tch</p>
                        </div>
                    </div>
                </div>
                <div class="anime__details__form">
                    <div class="section-title">
                        <h5>Your Comment</h5>
                    </div>
                    <form action="#">
                        <textarea placeholder="Your Comment"></textarea>
                        <button type="submit"><i class="fa fa-location-arrow"></i> Review</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Anime Section End -->
@endsection
