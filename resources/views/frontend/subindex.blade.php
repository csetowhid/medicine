@extends('frontend.master')
@section('content')
    <section class="banner_static">
        <div class="vigo_container_one">
            <div class="banner_static_flex">
                <div class="banner_static_left">
                    <h1>
                        ENLIVEN BODY
                        <span>SUPPLIMENT</span>
                    </h1>
                    <div class="banner_static_wonder">
                        <p>
                            <i class="material-icons">
                                done_all
                            </i> FEEL LIGHTER
                        </p>
                        <p>
                            <i class="material-icons">
                                done_all
                            </i> FEEL STRONGER
                        </p>
                    </div>
                    <div class="banner_static_download">
                        <p>
                            Get our expert diet chart for free
                        </p>
                        <a href="#" class="btn_download">
                            download
                            <i class="material-icons">
                                get_app
                            </i>
                        </a>
                    </div>
                </div>
                <div class="banner_static_right">
                    <div class="banner_static_img">
                        <img src="{{asset('frontend/media/images/home6/banner-guy.png')}}" alt="">
                    </div>
                    <div class="banner_static_img">
                        <img src="{{asset('frontend/media/images/home6/banner-arrow.png')}}" alt="">
                    </div>
                    <div class="banner_static_img">
                        <img src="{{asset('frontend/media/images/home6/banner-circle.png')}}" alt="">
                    </div>
                    <div class="banner_static_img">
                        <img src="{{asset('frontend/media/images/home6/banner-bottle.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home5_recent">
        <div class="vigo_container_one">
            <div class="section_title_four">
                @if(isset($alpha_name))
                <h2>Drugs: {{$alpha_name}}</h2>
                    @endif
            </div>
            <div class="home5_recent_slide d-flex flex-row">
                @if(isset($sub_alpha))
                    @foreach($sub_alpha as $sub)
                        <div class="home5_recent_appreciate">
                            <a href="">
                                <button class="btn btn-success">
                                    {{$sub->sub_alpha_name}}
                                </button>
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection
