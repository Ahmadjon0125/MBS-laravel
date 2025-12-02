@extends('layouts.app')

  @section('content')
                @php
                    $locale = App::getLocale();
                @endphp
      <!-- 1-section -->
       <x-hero :title="__('app.about')"  :breadcrumbs="[__('app.home') => url('/'), __('app.about') => url('/about')]" />

      <!-- 2-section -->
      <section class="py-5 sm:py-20 lg:py-[100px]">
        <div class="container">

    <div class="clearfix">
        <div class="float-none md:float-left max-w-[400px] md:max-w-[500px] lg:max-w-[600px] md:mr-5 lg:mr-[70px] mb-5 lg:mb-[48px] mx-auto">
            <img
                src="{{ asset('storage/' . $abouts -> img) }}"
                class="object-cover w-full h-full"
                alt=""
            />
        </div>

        <p
            class="text-[#474747] leading-relaxed font-[500] text-[14px] lg:text-[16px] xl:text-[18px]"
        >
            {{ $abouts -> {'text_' . $locale} }} 
        </p>
    </div>

        </div>
      </section>

      <!-- 3-section -->
<section class="pb-[40px] md:pb-[91px]">
    <div class="container">
        <div>
            <p class="relative w-full xl:h-[660px] aspect-video overflow-hidden">
    <a
        href="{{ $abouts -> link}}"
        data-fancybox
        data-width="80%"
        data-height="75%"
        class="block w-full h-full relative"
        id="youtube-link"
    >
        <img
            alt="Video poster"
            class="w-full h-full object-cover"
            id="video-poster-img"
            src="{{ asset('storage/' . $abouts -> poster) }}" 
            />
            <!-- poster rasmni shuyoga qoyvorasiz Dilshodbek  -->

        <span
            class="absolute inset-0 flex items-center justify-center hover:bg-[#022D52]/50 transition"
        >
            <img
                src="{{asset('storage/images/Subtract.svg')}}"
                alt="Play"
                class="w-[30px] h-[40px] md:w-[60px] md:h-[70px]"
            />
        </span>
    </a>
</p>

              <p
              class="text-[#474747] text-[14px] lg:text-[16px] xl:text-[18px] font-[500] mt-[24px] md:mt-[48px] text-center md:text-start"
            >
                {{ $abouts -> { 'shortText_' . $locale } }}
            </p>
            </div>
    </div>
</section>

@endsection