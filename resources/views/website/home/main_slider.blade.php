@if (count($sliders) > 0)

<div class="main_slid">

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach ($sliders as $key => $slider)

            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $key }}" class="{{ $loop->first ? 'active' : '' }}" aria-current="true" aria-label="Slide 1"></button>

            @endforeach
        </div>
        <div class="carousel-inner">
            <div class="container">
                @foreach ($sliders as $key => $slider)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <div class="home position-relative">
                            <img src="{{ $slider->image }}" class="d-block w-100" alt="one">
                            <div class="slid position-absolute">
                                <div class="d-flex align-items-center h-100">
                                    <div class="px-3 text-center">
                                        @isset($slider->title)
                                            <span class="display-4 main_color h1">{{ $slider->title }}</span>
                                        @endisset
                                        <div class="">
                                            {{-- <form action="{{ route('product.show', $slider['product_id']) }}"
                                                enctype="multipart/form-data" method="GET"> --}}
                                                <button tybe="submit"
                                                    class="main_border button_slid transition-me h2 rounded py-4 px-5">See
                                                    More</button>
                                            {{-- </form> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="d-none d-md-block">
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" style="border:none; background-color:white;">
                <div class="slide_np d-flex justify-content-center align-items-center transition-me">
                    <i class="icon-long-arrow-left h2 m-0"></i>
                </div>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" style="border:none; background-color:white;">
                <div class="slide_np d-flex justify-content-center align-items-center transition-me">
                    <i class="icon-long-arrow-right h2 m-0"></i>
                </div>
            </button>
        </div>
    </div>

</div>

@endif
