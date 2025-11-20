@extends('layouts.app')

  @section('content')
      <!-- 1-section -->
      <section class="pt-[85px] lg:pt-[115px]">
        <div class="relative h-[400px] sm:h-[500px] lg:h-[700px]">
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <!-- swiper elementlarini yoziladi -->
               @foreach ($sliders as $slider)
                 
              
              <div
                class="swiper-slide relative heroSlider"
                style="
                  background: url('{{asset('storage/' . $slider -> bgImg)}}') no-repeat center / cover;
                "
              >
                <div class="swiper-overlay absolute inset-0 z-0"></div>
                <div
                  class="relative z-5 flex flex-col justify-center max-w-[400px] md:max-w-[600px] items-center"
                >
                  <h2
                    class="font-[700] text-[25px] sm:text-[40px] lg:text-[60px] uppercase text-white leading-none mb-[10px] sm:mb-[16px] lg:mb-[21px]"
                  >
                    {{$slider -> title}}
                  </h2>
                  <p
                    class="font-[500] text-[14px] sm:text-[18px] lg:text-[22px] text-white mb-[15px] sm:mb-[25px] lg:mb-[33px]"
                  >
                    {{$slider ->text}}
                  </p>
                  <a
                    href=""
                    class="font-[600] text-[14px] uppercase text-[#004B8B] px-[12px] sm:px-[25px] lg:px-[36px] py-[10px] sm:py-[16px] lg:py-[21px] w-max bg-white"
                    >Подробнее</a
                  >
                </div>
              </div>

               @endforeach
          
            </div>
            <div class="swiper-button-next" style="right: 40px"></div>
            <div class="swiper-button-prev" style="left: 40px"></div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>

      <!-- 2-section -->
      <section class="py-5 sm:py-20 lg:py-[100px]">
        <div class="container">
          <div
            class="flex flex-col md:flex-row sm:gap-[25px] lg:gap-[40px] xl:gap-[70px]"
          >
            <div class="flex-3">
              <img
                src="{{ asset('storage/' . $abouts -> img) }}"
                class="object-cover w-full h-full"
                alt=""
              />
            </div>
            <div
              class="flex-4 lg:flex-3 h-full flex flex-col text-center md:text-start mt-4"
            >
              <h2
                class="text-[24px] sm:text-[30px] lg:text-[40px] font-[700] text-[#004B8B] mb-[4px] sm:mb-[8px] lg:mb-[14px]"
              >
                О КОМПАНИИ
              </h2>
              <div
                class="hidden md:block w-[60px] h-1 lg:h-[8px] bg-[#004B8B] mb-[12px] sm:mb-[18px] lg:mb-[28px]"
              ></div>
              <p
                class="text-[#474747] leading-relaxed mb-[20px] lg:mb-[24px] xl:mb-[31px] font-[500] text-[14px] lg:text-[16px] xl:text-[18px]"
              >
        {{ Str::limit($abouts->text, 750) }}
              </p>

              <a
                href="#"
                class="group inline-flex self-start mx-auto md:mx-0 items-center text-[14px] px-[10px] sm:px-[20px] lg:px-[33px] py-[8px] sm:py-[12px] lg:py-[21px] bg-[#004B8B] hover:bg-[#003C6F] text-white font-[600] transition duration-300"
              >
                ПОДРОБНЕЕ
                <img
                  src="{{ asset('storage/images/podrobnee.svg')}}"
                  class="ml-[10px] group-hover:translate-x-1 group-hover:transition-transform pb-[1px]"
                />
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- 3-section -->
      <section
        class="py-6 sm:py-10 lg:pt-[95px] lg:pb-[100px]"
        style="background: url('{{ asset('storage/images/UslugiBg.jpg') }}') no-repeat center / cover"
      >
        <div class="container">
          <h2
            class="text-[24px] sm:text-[30px] lg:text-[40px] font-[700] text-[#004B8B] mb-[4px] sm:mb-[8px] lg:mb-[14px] text-center uppercase"
          >
            Услуги
          </h2>
          <div
            class="w-[60px] h-1 lg:h-[8px] bg-[#004B8B] mb-[12px] sm:mb-[18px] lg:mb-[28px] mx-auto"
          ></div>
          <div class="flex gap-[30px] flex-wrap justify-center ">
            <!-- almashadigan rasm -->

            @foreach ($services as $service )
              
         
            <a
                href="{{route('serviceIn.page', $service -> slug)}}"
              style="
                background: url('{{asset('storage/' . $service -> bgImage)}}') no-repeat center / cover;
              "
              class="max-w-[330px] lg:max-w-[420px] text-center text-white px-[10px] sm:px-[25px] lg:px-[40px] py-[34px] relative h-[330px] md:h-[420px] flex flex-col items-start justify-end hover:justify-center linkHover"
            >
              <div
                class="absolute inset-0 z-0 bg-[#004B8B] opacity-50 hover:opacity-80 linkHoverOpacity"
              ></div>
              <div class="z-1">
                <h3 class="md:text-[22px] font-bold uppercase mb-[16px]">
                  {{$service -> title}}
                </h3>
                <div
                  class="w-[60px] h-[3px] md:h-[6px] bg-white mx-auto mb-[10px]"
                ></div>
                <p
                  class="text-[16px] font-[500] leading-relaxed mb-[15px] md:mb-[24px]"
                >
                  {{Str::limit( $service-> text, 200)}}
                </p>
                <div
                  class="w-[30px] md:w-[50px] h-0 overflow-hidden  bg-white mx-auto mb-0 linkHoverInfo "
                >
                  <img
                    src="{{ asset('storage/images/uslugarrow.svg') }}"
                    class="w-max px-[11px] py-[8px] md:px-[21px] md:py-[18px]"
                    alt=""
                  />
                </div>
              </div>
            </a>
   @endforeach
         
          </div>
          <div class="text-center mt-6 md:mt-[50px]">
            <a
              href="#"
              class="group inline-flex items-center gap-2 text-[#004B8B] hover:text-white border-2 border-[#004B8B] px-5 md:px-[34px] py-3 md:py-[21px] font-[600] text-[14px] hover:bg-[#004B8B] transition duration-300"
            >
              ВСЕ УСЛУГИ
              <svg
                class="w-[18px] h-[18px] text-inherit group-hover:translate-x-1 group-hover:transition-transform"
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
            </a>
          </div>
        </div>
      </section>

      <!-- 4-section  -->

      <section class="pt-[50px] md:pt-[94px]">
        <div class="container">
          <h2
            class="text-[24px] sm:text-[30px] lg:text-[40px] font-[700] text-[#004B8B] mb-[4px] sm:mb-[8px] lg:mb-[14px] text-center uppercase"
          >
            Преимущества компании
          </h2>
          <div
            class="w-[60px] h-1 lg:h-[8px] bg-[#004B8B] mb-[12px] sm:mb-[18px] lg:mb-[28px] mx-auto"
          ></div>
          <div class="w-full bg-white py-10">
            <div class="w-full bg-white pb-10">
              <div class="flex flex-wrap justify-center gap-6 px-4">
                @foreach ($companys as $company)
                  
               
                <!-- Card 1 -->
                <div
                class="flex flex-col justify-between bg-white rounded-lg p-6 text-center hoverShadow flex-1 min-w-[250px] max-w-[300px] min-h-[220px]"
                >
                <div class="flex justify-center mb-3">
                  <img
                      src="{{ asset('storage/' . $company->icon) }}"
                      class="w-[60px] md:w-[100px]"
                      alt=""
                    />
                  </div>
                  <h3
                    class="text-[#004B8B] font-bold uppercase text-[20px] mb-2"
                  >
                    {{ $company -> title}}
                  </h3>
                  <p class="text-[#474747] text-[16px] font-medium">
                   {{ $company -> text}}
                  </p>
                </div>

                 @endforeach

              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- 5-section -->
      <section class="pb-0 sm:pb-5 md:pb-8">
        <div class="container">
          <h2
            class="text-[24px] sm:text-[30px] lg:text-[40px] font-[700] text-[#004B8B] mb-[4px] sm:mb-[8px] lg:mb-[14px] text-center uppercase"
          >
            Наши партнеры
          </h2>
          <div
            class="w-[60px] h-1 lg:h-[8px] bg-[#004B8B] mb-[12px] sm:mb-[18px] lg:mb-[28px] mx-auto"
          ></div>

          <section class="py-10">
            <div class="container mx-auto px-4">
              <!-- Swiper -->

              <div #swiperRef="" class="swiper mySwiper2">
                <div class="swiper-wrapper">
                  @foreach ( $partners as $partner)
                    
                  <div class="swiper-slide slides2">
                    <img src="{{asset('storage/' . $partner->img)}}" alt="" />
                  </div>
                  
                  @endforeach
               
                </div>
                <div class="swiper-pagination pag2"></div>
              </div>
            </div>
          </section>
        </div>
      </section>

@endsection