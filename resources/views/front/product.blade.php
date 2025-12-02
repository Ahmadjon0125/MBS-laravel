@extends('layouts.app')

@php
  $locale = App::getLocale();
@endphp
  @section('content')

   <!-- 1-section -->
       <x-hero :title="__('app.product')"  :breadcrumbs="[__('app.home') => url('/'), __('app.product') => url('/portfolio')]" />

      <!-- 2-section -->
      <section class="py-6 sm:py-10 lg:pt-[95px] lg:pb-[100px]">
        <div class="container">
          <div class="flex gap-[30px] flex-wrap justify-center">
            <!-- almashadigan rasm -->
@foreach ( $products as $product )
  

            <a
              href="{{ route('productIn.page', $product -> slug) }}"
              style="
                background: url('{{asset('storage/' . $product -> bgImage)}}') no-repeat center / cover
              "
              class="max-w-[330px] lg:max-w-[420px] text-center text-white px-[10px] sm:px-[25px] lg:px-[40px] py-[34px] relative h-[330px] md:h-[420px] flex flex-col items-start justify-end hover:justify-center linkHover"
            >
              <div
                class="absolute inset-0 z-0 bg-[#004B8B] opacity-50 hover:opacity-80 linkHoverOpacity"
              ></div>
              <div class="z-1">
                <h3 class="md:text-[22px] font-bold  uppercase mb-[16px]">
                  {{ $product -> {'title_' . $locale} }}
                </h3>
                <div
                  class="w-[60px] h-[3px] md:h-[6px] bg-white mx-auto mb-[10px]"
                ></div>
                <p
                  class="text-[16px] font-[500] leading-relaxed mb-[15px] md:mb-[24px]"
                >
                 {!! Str::limit($product->{'text_' . $locale}, 150) !!}
                </p>
                <div
                  class="w-[30px] md:w-[50px] h-0 overflow-hidden bg-white mx-auto linkHoverInfo"
                >
                  <img
                    src="{{asset('storage/images/uslugarrow.svg')}}"
                    class="w-max px-[11px] py-[8px] md:px-[21px] md:py-[18px]"
                    alt=""
                  />
                </div>
              </div>
            </a>

     @endforeach
          </div>
        </div>
      </section>

     @endsection