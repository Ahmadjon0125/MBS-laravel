@extends('layouts.app')

@php
    $locale = App::getLocale();
@endphp
@section('content')
    <!-- 1-section -->
    <x-hero :title="$new->{'title_' . $locale}" :breadcrumbs="[__('app.home') => url('/'), __('app.news') => url('/news'), $new->{'title_' . $locale} => url('/')]" />

    <!-- 2-section -->
    <section class="pt-[35px] sm:pt-[60px] lg:pt-[100px] pb-[30px] sm:pb-[55px] lg:pb-[91px]">
        <div class="container">
            <div>
                <img src="{{ asset('storage/' . $new->img) }}" alt="" class="mb-[20px] md:mb-[33px]" />
                <h2
                    class="text-[18px] sm:text-[22px] lg:text-[30px] font-[700] text-[#004B8B] mb-[4px] sm:mb-[8px] lg:mb-[14px] text-center md:text-start">
                    {{ $new->{'title_' . $locale} }}
                </h2>
                <div class="hidden md:block w-[60px] h-1 lg:h-[6px] bg-[#004B8B] mb-[12px] lg:mb-[14px]"></div>

                <p
                    class="text-[#004B8B] text-[14px] md:text-[18px] font-[600] mb-[15px] md:mb-[32px] text-center md:text-start">
                    {{ date('d.m.Y', strtotime($new->newsDate)) }}
                </p>
                <p class="font-[500] text-[#474747] text-[16px] md:text-[18px] text-center md:text-start">
                    {!! $new->{'text_' . $locale} !!}

                </p>
            </div>
        </div>
    </section>
@endsection
