@extends('layouts.app')

@php
  $locale = App::getLocale();
@endphp

  @section('content')

    <!-- 1-section -->
       <x-hero :title="__('app.news')"  :breadcrumbs="[__('app.home') => url('/'), __('app.news') => url('/news')]" />

      <!-- 2-section -->
      <section class="py-[45px] md:py-[100px]">
        <div class="container">
          <div
          id="news-container"
            class="grid grid-cols-1 justify-center sm:grid-cols-2 lg:grid-cols-3 gap-[30px] justify-items-center"
          >
          @foreach ( $news as $new)
            
     
            <a href="{{route('newsIn.page', $new -> slug)}}" class="news-item max-w-[420px] bg-white shadow-sm newsHoverIn">
              <img class="w-full" src="{{ asset('storage/' . $new -> img) }}" alt="" />

              <div class="p-5">
                <h2
                  class="newsTitle text-[16px] sm:text-[18px] lg:text-[20px] font-[700] text-[#474747]  mb-[4px] sm:mb-[8px] lg:mb-[14px] text-center md:text-start"
                >
                  {{ $new -> {'title_' . $locale} }}
                </h2>
                <div
                  class="hidden md:block w-[60px] h-1 lg:h-[6px] bg-[#004B8B] mb-[12px] lg:mb-[14px]"
                ></div>

                <p
                  class="text-[#004B8B] text-[14px] font-[600] mb-[15px] text-center md:text-start"
                >
               {{ date('d.m.Y', strtotime($new->newsDate)) }}
                </p>
                <p class="font-[500] text-[#474747] text-center md:text-start">
                 {!! Str::limit($new->{'text_' . $locale}, 150) !!}
                </p>
              </div>
            </a>


     @endforeach

       
          </div>

          <div class="text-center mt-6 md:mt-[50px]">
            <button type="button"
            id="showMoreBtn"
              href="#"
              class=" group uppercase inline-flex items-center gap-2 text-[#004B8B] hover:text-white border-2 border-[#004B8B] px-5 md:px-[34px] py-3 md:py-[21px] font-[600] text-[14px] hover:bg-[#004B8B] transition duration-300"
            >
              показать еще
              <svg
                class="w-[7px] h-[13px] text-inherit group-hover:translate-y-0.5 group-hover:transition-transform rotate-90"
                viewBox="0 0 9.09375 16.0078"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M1.00391 15.0039L8.0332 8.00391L1.00391 1.00391"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                />
              </svg>
            </button>
          </div>
        </div>
      </section>

@endsection