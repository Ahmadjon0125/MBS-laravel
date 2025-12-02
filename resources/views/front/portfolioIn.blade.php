@extends('layouts.app')
@php
    $locale = App::getLocale();
@endphp
@section('content')
    <!-- 1-section -->
    <x-hero :title="$portfolio->{'title_' . $locale}" :breadcrumbs="[__('app.home') => url('/'), __('app.portfolio') => url('/news'), $portfolio->{'title_' . $locale} => url('/')]" />

    <!-- 2-section -->
    <section class="pt-[35px] md:pt-[84px] pb-[30px] sm:pb-[50px] lg:pb-[100px]">
        <div class="container">
            <div>
                <h2
                    class="text-[24px] uppercase sm:text-[30px] lg:text-[40px] font-[700] text-[#004B8B] mb-[4px] sm:mb-[8px] lg:mb-[14px] text-center md:text-start">
                    {{ $portfolio->{'title_' . $locale} }}
                </h2>
                <div class="hidden md:block w-[60px] h-1 lg:h-[8px] bg-[#004B8B] mb-[12px] sm:mb-[18px] lg:mb-[28px]"></div>
                <p
                    class="text-[#474747] text-[14px] lg:text-[16px] xl:text-[18px] font-[500] mt-[24px] md:mt-[48px] text-center md:text-start">
                    {!! $portfolio->{'text_' . $locale} !!}
                </p>

                <div class="my-[25px] md:my-[48px]">
                    <!-- Main Swiper -->
                    <div class="swiper main-slider">
                        <div class="swiper-wrapper">

                          @foreach ($portfolio->photos ?? [] as $photo)
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/' . $photo) }}" />
                                </div>
                            @endforeach

                        </div>

                        <!-- Navigatsiya tugmalari -->
                        <div class="swiper-button-next next1"></div>
                        <div class="swiper-button-prev prev1"></div>
                    </div>

                    <!-- Thumb Swiper -->
                    <div class="swiper thumb-slider thumbSlider">
                        <div class="swiper-wrapper swiper-box">
                            @foreach ($portfolio->photos ?? [] as $photo)
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/' . $photo) }}" />
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>

                <p
                    class="text-[#474747] text-[14px] lg:text-[16px] xl:text-[18px] font-[500] mt-[24px] md:mt-[48px] text-center md:text-start">
{!! $portfolio -> {'text2_' . $locale} !!}
                </p>
                <div class="text-center mt-[25px] md:mt-[51px]"></div>
            </div>
        </div>
    </section>
@endsection
