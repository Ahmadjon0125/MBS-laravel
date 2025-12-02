@extends('layouts.app')

  @section('content')

            <!-- 1-section -->
       <x-hero :title="__('app.contact')"  :breadcrumbs="[__('app.home') => url('/'), __('app.contact') => url('/contact')]" />

      <!-- 2-section -->
      <section
        class="pt-[25px] sm:pt-[45px] lg:pt-[75px] pb-[30px] sm:pb-[55px] lg:pb-[94px]"
      >
        <div class="container">
          <div
            class="flex  gap-[14px] sm:gap-[22px] lg:gap-[30px] flex-wrap lg:flex-nowrap justify-center"
          >
            <div
              class=" flex-col justify-center block max-w-[300px] sm:max-w-[350px] lg:max-w-[420px] w-full bg-[#F0F4F8] px-[20px] sm:px-[30px] lg:px-[40px] py-[20px] sm:py-[26px] lg:py-[34px] text-center"
            >
              <h5
                class="mb-[10px] text-[16px] font-[500] uppercase leading-none text-[#004B8B]"
              >
                Телефон
              </h5>
              <p class="font-[600] text-[20px] text-[#474747]">
                {{ $info -> phone }}
              </p>
            </div>

            <div
              class=" flex-col justify-center block max-w-[300px] sm:max-w-[350px] lg:max-w-[420px] w-full bg-[#F0F4F8] px-[20px] sm:px-[30px] lg:px-[40px] py-[20px] sm:py-[26px] lg:py-[34px] text-center"
            >
              <h5
                class="mb-[10px] text-[16px] font-[500] uppercase leading-none text-[#004B8B]"
              >
                Электронная почта
              </h5>
              <p class="font-[600] text-[20px] text-[#474747]">
                {{ $info -> email }}
              </p>
            </div>

            <div
              class=" flex-col justify-center block max-w-[300px] sm:max-w-[350px] lg:max-w-[420px] w-full bg-[#F0F4F8] px-[20px] sm:px-[30px] lg:px-[40px] py-[20px] sm:py-[26px] lg:py-[34px] text-center"
            >
              <h5
                class="mb-[10px] text-[16px] font-[500] uppercase leading-none text-[#004B8B]"
              >
                Адрес
              </h5>
              <p class="font-[600] text-[20px] text-[#474747]">
                {{ $info -> address }}
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- 3-section -->
      <section>
        <div class="container">
          <div>
            <h2
              class="text-[24px] sm:text-[30px] lg:text-[40px] font-[700] text-[#004B8B] mb-[4px] sm:mb-[8px] lg:mb-[14px] text-center uppercase"
            >
              {{ __('app.map') }}
            </h2>
            <div
              class="w-[60px] h-1 lg:h-[8px] bg-[#004B8B] mb-[15px] sm:mb-[35px] lg:mb-[50px] mx-auto"
            ></div>
          </div>
        </div>
        <div class="h-[300px] sm:h-[500px] lg:h-[700px]">

          <iframe
            src="{{ $map ->map }}"
            width="100%"
            height="100%"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </section>

@endsection