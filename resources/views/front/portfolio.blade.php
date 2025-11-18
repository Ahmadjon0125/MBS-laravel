@extends('layouts.app')

  @section('content')

          <!-- 1-section -->
       <x-hero :title="'Портфолио'"  :breadcrumbs="['Главная' => url('/'), 'Портфолио' => url('/portfolio')]" />

      <!-- 2-section -->
      <section class="py-6 sm:py-10 lg:pt-[95px] lg:pb-[100px]">
        <div class="container">
          <div class="flex gap-[30px] flex-wrap justify-center" id="card-container">
            <!-- almashadigan rasm -->

          <a
              href="portfolioIn.html"
              style="
                background: url('./img/portBg1.jpg') no-repeat center / cover;
              "
              class="card-item max-w-[360px] lg:max-w-[645px] text-center text-white px-[10px] sm:px-[25px] lg:px-[40px] py-[25px] lg:py-[34px] relative h-[330px] md:h-[420px] flex flex-col items-start justify-end hover:justify-center linkHover2"
            >
              <div
                class="absolute inset-0 z-0 bg-[#022D52] top-[35%] lg:top-[45%] opacity-80 linkHoverOpacity2  "
              ></div>
              <div class="z-1">
                <h3 class="md:text-[22px] font-bold uppercase mb-[16px]">
                  ЛАЗЕРНАЯ РЕЗКА МЕТАЛЛА
                </h3>
                <div
                  class="w-[60px] h-[3px] md:h-[6px] bg-white mx-auto mb-[10px]"
                ></div>
                <p
                  class="text-[16px] font-[500] leading-relaxed mb-[15px] md:mb-[24px]"
                >
                  минимальные отходы, высокая точность и аккуратная обработка
                  металлических деталей
                </p>
                <div
                  class="w-[30px] md:w-[50px] h-0 overflow-hidden bg-white mx-auto linkHoverInfo2  "
                >
                  <img
                    src="{{asset('storage/images/uslugarrow.svg')}}"
                    class="w-max px-[11px] py-[8px] md:px-[21px] md:py-[18px]"
                    alt=""
                  />
                </div>
              </div>
            </a>

            <a
              href="portfolioIn.html"
              style="
                background: url('./img/portBg2.jpg') no-repeat center / cover;
              "
              class=" card-item max-w-[360px] lg:max-w-[645px] text-center text-white px-[10px] sm:px-[25px] lg:px-[40px] py-[25px] lg:py-[34px] relative h-[330px] md:h-[420px] flex flex-col items-start justify-end hover:justify-center linkHover2"
            >
              <div
                class="absolute inset-0 z-0 bg-[#022D52] top-[35%] lg:top-[45%] opacity-80 linkHoverOpacity2"
              ></div>
              <div class="z-1">
                <h3 class="md:text-[22px] font-bold  uppercase mb-[16px]">
                  ЛАЗЕРНАЯ РЕЗКА МЕТАЛЛА
                </h3>
                <div
                  class="w-[60px] h-[3px] md:h-[6px] bg-white mx-auto mb-[10px]"
                ></div>
                <p
                  class="text-[16px] font-[500] leading-relaxed mb-[15px] md:mb-[24px]"
                >
                  минимальные отходы, высокая точность и аккуратная обработка
                  металлических деталей
                </p>
                <div
                  class="w-[30px] md:w-[50px] h-0 overflow-hidden bg-white mx-auto linkHoverInfo2"
                >
                  <img
                    src="./img/uslugarrow.svg"
                    class="w-max px-[11px] py-[8px] md:px-[21px] md:py-[18px]"
                    alt=""
                  />
                </div>
              </div>
            </a>

            <a
              href="portfolioIn.html"
              style="
                background: url('./img/portBg3.jpg') no-repeat center / cover;
              "
              class="card-item max-w-[360px] lg:max-w-[645px] text-center text-white px-[10px] sm:px-[25px] lg:px-[40px] py-[25px] lg:py-[34px] relative h-[330px] md:h-[420px] flex flex-col items-start justify-end hover:justify-center linkHover2"
            >
              <div
                class="absolute inset-0 z-0 bg-[#022D52] top-[35%] lg:top-[45%] opacity-80 linkHoverOpacity2"
              ></div>
              <div class="z-1">
                <h3 class="md:text-[22px] font-bold  uppercase mb-[16px]">
                  ЛАЗЕРНАЯ РЕЗКА МЕТАЛЛА
                </h3>
                <div
                  class="w-[60px] h-[3px] md:h-[6px] bg-white mx-auto mb-[10px]"
                ></div>
                <p
                  class="text-[16px] font-[500] leading-relaxed mb-[15px] md:mb-[24px]"
                >
                  минимальные отходы, высокая точность и аккуратная обработка
                  металлических деталей
                </p>
                <div
                  class="w-[30px] md:w-[50px] h-0 overflow-hidden bg-white mx-auto linkHoverInfo2"
                >
                  <img
                    src="./img/uslugarrow.svg"
                    class="w-max px-[11px] py-[8px] md:px-[21px] md:py-[18px]"
                    alt=""
                  />
                </div>
              </div>
            </a>

            <a
              href="portfolioIn.html"
              style="
                background: url('./img/portBg4.jpg') no-repeat center / cover;
              "
              class="card-item max-w-[360px] lg:max-w-[645px] text-center text-white px-[10px] sm:px-[25px] lg:px-[40px] py-[25px] lg:py-[34px] relative h-[330px] md:h-[420px] flex flex-col items-start justify-end hover:justify-center linkHover2"
            >
              <div
                class="absolute inset-0 z-0 bg-[#022D52] top-[35%] lg:top-[45%] opacity-80 linkHoverOpacity2"
              ></div>
              <div class="z-1">
                <h3 class="md:text-[22px] font-bold  uppercase mb-[16px]">
                  ЛАЗЕРНАЯ РЕЗКА МЕТАЛЛА
                </h3>
                <div
                  class="w-[60px] h-[3px] md:h-[6px] bg-white mx-auto mb-[10px]"
                ></div>
                <p
                  class="text-[16px] font-[500] leading-relaxed mb-[15px] md:mb-[24px]"
                >
                  минимальные отходы, высокая точность и аккуратная обработка
                  металлических деталей
                </p>
                <div
                  class="w-[30px] md:w-[50px] h-0 overflow-hidden bg-white mx-auto linkHoverInfo2"
                >
                  <img
                    src="./img/uslugarrow.svg"
                    class="w-max px-[11px] py-[8px] md:px-[21px] md:py-[18px]"
                    alt=""
                  />
                </div>
              </div>
            </a>

         

        <a
              href="portfolioIn.html"
              style="
                background: url('./img/portBg4.jpg') no-repeat center / cover;
              "
              class=" card-item max-w-[360px] lg:max-w-[645px] text-center text-white px-[10px] sm:px-[25px] lg:px-[40px] py-[25px] lg:py-[34px] relative h-[330px] md:h-[420px] flex flex-col items-start justify-end hover:justify-center linkHover2"
            >
              <div
                class="absolute inset-0 z-0 bg-[#022D52] top-[35%] lg:top-[45%] opacity-80 linkHoverOpacity2"
              ></div>
              <div class="z-1">
                <h3 class="md:text-[22px] font-bold  uppercase mb-[16px]">
                  ЛАЗЕРНАЯ РЕЗКА МЕТАЛЛА
                </h3>
                <div
                  class="w-[60px] h-[3px] md:h-[6px] bg-white mx-auto mb-[10px]"
                ></div>
                <p
                  class="text-[16px] font-[500] leading-relaxed mb-[15px] md:mb-[24px]"
                >
                  минимальные отходы, высокая точность и аккуратная обработка
                  металлических деталей
                </p>
                <div
                  class="w-[30px] md:w-[50px] h-0 overflow-hidden bg-white mx-auto linkHoverInfo2"
                >
                  <img
                    src="./img/uslugarrow.svg"
                    class="w-max px-[11px] py-[8px] md:px-[21px] md:py-[18px]"
                    alt=""
                  />
                </div>
              </div>
            </a>

             <a
              href="portfolioIn.html"
              style="
                background: url('./img/portBg4.jpg') no-repeat center / cover;
              "
              class=" card-item max-w-[360px] lg:max-w-[645px] text-center text-white px-[10px] sm:px-[25px] lg:px-[40px] py-[25px] lg:py-[34px] relative h-[330px] md:h-[420px] flex flex-col items-start justify-end hover:justify-center linkHover2"
            >
              <div
                class="absolute inset-0 z-0 bg-[#022D52] top-[35%] lg:top-[45%] opacity-80 linkHoverOpacity2"
              ></div>
              <div class="z-1">
                <h3 class="md:text-[22px] font-bold  uppercase mb-[16px]">
                  ЛАЗЕРНАЯ РЕЗКА МЕТАЛЛА
                </h3>
                <div
                  class="w-[60px] h-[3px] md:h-[6px] bg-white mx-auto mb-[10px]"
                ></div>
                <p
                  class="text-[16px] font-[500] leading-relaxed mb-[15px] md:mb-[24px]"
                >
                  минимальные отходы, высокая точность и аккуратная обработка
                  металлических деталей
                </p>
                <div
                  class="w-[30px] md:w-[50px] h-0 overflow-hidden bg-white mx-auto linkHoverInfo2"
                >
                  <img
                    src="./img/uslugarrow.svg"
                    class="w-max px-[11px] py-[8px] md:px-[21px] md:py-[18px]"
                    alt=""
                  />
                </div>
              </div>
            </a>


          </div>

          <div class="text-center mt-6 md:mt-[50px]">
            <button type="button"
            id="show-more-btn"
              href=""
              class="showPortfolio group uppercase inline-flex items-center gap-2 text-[#004B8B] hover:text-white border-2 border-[#004B8B] px-5 md:px-[34px] py-3 md:py-[21px] font-[600] text-[14px] hover:bg-[#004B8B] transition duration-300"
            >
             показать еще
              <svg
                class=" w-[7px] h-[13px] text-inherit group-hover:translate-y-0.5 group-hover:transition-transform rotate-90"
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