@extends('layouts.app')

@php
  $locale = App::getLocale();
@endphp
  @section('content')



      <!-- 1-section -->
       <x-hero :title="$product -> { 'title_' . $locale}"  :breadcrumbs="[__('app.home') => url('/'), __('app.product') => url('/news'), $product -> { 'title_' . $locale} => url('/')]" />

      <!-- 2-section -->
      <section
        class="pt-[35px] md:pt-[84px] pb-[30px] sm:pb-[50px] lg:pb-[100px]"
      >
        <div class="container">
          <div>
            <h2
              class="uppercase text-[24px] sm:text-[30px] lg:text-[40px] font-[700] text-[#004B8B] mb-[4px] sm:mb-[8px] lg:mb-[14px] text-center md:text-start"
            >
             {{ $product -> { 'title_' . $locale} }}
            </h2>
            <div
              class="hidden md:block w-[60px] h-1 lg:h-[8px] bg-[#004B8B] mb-[12px] sm:mb-[18px] lg:mb-[28px]"
            ></div>
            <p
              class="text-[#474747] text-[14px] lg:text-[16px] xl:text-[18px] font-[500] mt-[24px] md:mt-[48px] text-center md:text-start"
            >
              {!! $product -> {'text_' . $locale} !!}
            </p>

            <div class="my-[25px] md:my-[48px]">
              <!-- Main Swiper -->
              <div class="swiper main-slider">
                <div class="swiper-wrapper">
                  @foreach ($product -> photos ?? [] as $photo)
                    
                
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
                  @foreach ($product -> photos ?? [] as $photo)
                    
                
                  <div class="swiper-slide">
                    <img src="{{ asset('storage/' . $photo) }}" />
                  </div>
         @endforeach

                </div>
              </div>
            </div>
   
            <div>
              {!! $product -> {'list_items_' . $locale} !!}
            </div>
<!-- 
            <ul>
              <li class="flex items-center">
                <span class="w-[3px] h-[3px] bg-[#004B8B] rounded mr-1"></span>
                <p class="text-[#474747] font-[500] text-[16px] md:text-[18px]">
                   Столы, стулья и шкафы в стиле «лофт»,
                </p>
              </li>

              <li class="flex items-center">
                <span class="w-[3px] h-[3px] bg-[#004B8B] rounded mr-1"></span>
                <p class="text-[#474747] font-[500] text-[16px] md:text-[18px]">
                Офисная мебель на металлическом каркасе,
                </p>
              </li>

              <li class="flex items-center">
                <span class="w-[3px] h-[3px] bg-[#004B8B] rounded mr-1"></span>
                <p class="text-[#474747] font-[500] text-[16px] md:text-[18px]">
                  Ресепшн-стойки,
                </p>
              </li>

              <li class="flex items-center">
                <span class="w-[3px] h-[3px] bg-[#004B8B] rounded mr-1"></span>
                <p class="text-[#474747] font-[500] text-[16px] md:text-[18px]">
                   Настенные панели и декоративные конструкции,
                </p>
              </li>

              <li class="flex items-center">
                <span class="w-[3px] h-[3px] bg-[#004B8B] rounded mr-1"></span>
                <p class="text-[#474747] font-[500] text-[16px] md:text-[18px]">
                Шкафы, кресла и стеллажи для хранения архивов и документов.
                </p>
              </li>
            </ul> -->

            <div class="text-center mt-[25px] md:mt-[51px]">
              <button
                
                class="openModal uppercase group inline-flex self-start justify-center items-center text-[14px] px-[10px] sm:px-[20px] lg:px-[33px] py-[8px] sm:py-[12px] lg:py-[21px] bg-[#004B8B] hover:bg-[#003C6F] text-white font-[600] transition duration-300"
              >
                {{ __('app.req') }}
                <img
                  src="{{ asset('storage/images/qalam.svg') }}"
                  class="ml-[10px] group-hover:translate-x-1 group-hover:transition-transform"
                />
              </button>
            </div>
          </div>
        </div>
      </section>

             <!-- Modal fon -->
    <!-- Modal (bitta) -->
    <div class="modalOverlay" id="modalOverlay">
      <div class="modalBox">
        <h2
          class="text-center lg:text-start text-[#004B8B] font-[700] text-[25px] sm:text-[35px] lg:text-[50px] mb-[15px] sm:mb-[30px] lg:mb-[42px] leading-none"
        >
          Make a request</span>
        </h2>

        <form class="modalForm" method="POST" action="{{ route('form.page') }}">
          @csrf
          <input type="text" name="phone" placeholder="Phone number" />
          <input type="email" name="email" placeholder="Email" />
          <textarea placeholder="Comment" name="comment"></textarea>

          <button type="submit" class="sendBtn">Send</button>
        </form>
      </div>
    </div>


@endsection

