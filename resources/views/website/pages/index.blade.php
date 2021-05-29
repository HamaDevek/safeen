@extends('website.layout.app')
@section('content')
<header>
    <div class="carousel-default owl-carousel carousel-main carousel-nav-white background-dark text-center">
        <div class="item">
            <div class="s-12">
                <img src="{{asset('web/img/header.jpg')}}" alt="">
                <div class="carousel-content">
                    <div class="content-center-vertical line">
                        <div class="margin-top-bottom-80">
                            <h1 class="text-white margin-bottom-30 text-size-60 text-m-size-30 text-line-height-1">
                                Refugee Website</h1>
                            <div class="s-12 m-10 l-8 center">
                                <p class="text-white text-size-14 margin-bottom-40">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Magnam, debitis alias. Consectetur provident
                                    pariatur ducimus minus ipsa quis ipsum eius veniam soluta consequuntur?
                                    Pariatur voluptas provident molestiae aliquid enim dicta.</p>
                            </div>
                            <div class="line">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<section class="section">
    <div class="line">
        <h2 class="text-size-50 text-center">About Us</h2>
        <hr class="break-small background-primary break-center">
    </div>
    <div class="line">
        <div class="margin">
            <div class="s-12 m-12 l-2">
                <p class="h1 text-size-30 margin-m-bottom-30 text-primary text-line-height-1 text-right">We
                    Work<br> to help refugee</p>
            </div>
            <div class="s-12 m-12 l-5">
                <p class="text-size-14 margin-m-bottom-30 text-dark">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Beatae sunt, similique doloribus reprehenderit assumenda, illum atque a
                    cum cumque quam quod facilis rem ea sint autem deleniti nam aut. Nisi!
                </p>
            </div>
            <div class="s-12 m-12 l-5">
                <p class="text-size-14 text-dark">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Beatae sunt, similique doloribus reprehenderit assumenda, illum atque a
                    cum cumque quam quod facilis rem ea sint autem deleniti nam aut. Nisi!</p>
            </div>
        </div>
    </div>
</section>



<section class="section background-white">
    <center>
        <div class="line">
            <h2 class="text-size-50 text-center">Our Stats</h2>
            <hr class="break-small background-primary break-center">
            <div class="margin margin-top-bottom-50">
                <div class="s-12 m-12 l-3">
                    <div class="block">
                        <div class="count-to">
                            <span class="timer h1 text-size-50">{{count($refugee)}}</span>
                            <p class="h1 text-size-20 margin-top-10 text-dark text-thin">Refugee</p>
                        </div>
                    </div>
                </div>
                <div class="s-12 m-12 l-3">
                    <div class="block">
                        <div class="count-to">
                            <span class="timer h1 text-size-50">{{count($location)}}</span>
                            <p class="h1 text-size-20 margin-top-10 text-dark text-thin">Our Office</p>
                        </div>
                    </div>
                </div>
                <div class="s-12 m-12 l-3">
                    <div class="block">
                        <div class="count-to">
                            <span class="timer h1 text-size-50">{{count($location)}}</span>
                            <p class="h1 text-size-20 margin-top-10 text-dark text-thin">Our Team Member</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>
</section>

<hr class="break margin-top-bottom-0">

<section class="section-top-padding full-width">
    <h2 class="text-size-50 text-center">Our Offices</h2>
    <hr class="break-small background-primary break-center">
    <div class="tabs background-primary-hightlight">
        <div class="tab-item tab-active">
            <a class="tab-label active-btn">Office</a>
            <div class="tab-content lightbox-gallery">
                @foreach ($location as $item)
                <div class="s-12 m-6 l-3">
                    <a class="image-with-hover-overlay image-hover-zoom" href="{{$item->link_googl_map}}"
                        target="_blank">
                        <div class="image-hover-overlay background-primary">
                            <div class="image-hover-overlay-content text-center padding-2x">
                                <h2 class="text-thin">{{$item->name}}</h2>
                                <p>{{$item->address}}</p>
                            </div>
                        </div>
                        <img src="{{asset('storage/'.$item->image)}}" alt="" title="Office" />
                    </a>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>

<section class="section background-white text-center">
    <div class="line">
        <h2 class="text-size-50 text-center">Our Teams</h2>
        <hr class="break-small background-primary break-center">
        <div class="carousel-default owl-carousel carousel-wide-arrows">
            @foreach ($team as $item)
            <div class="item">
                <div class="s-12 m-12 l-7 center text-center">
                    <img class="image-testimonial-small" src="{{asset('storage/'.$item->image)}}" alt="">
                    <p class="h1 margin-bottom text-size-20">{{$item->email}} <br> {{$item->position}}</p>
                    <p class="h1 text-size-16">{{$item->name}}</p>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</section>

@endsection