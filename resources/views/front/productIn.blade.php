@extends('layouts.app')

  @section('content')

      <!-- 1-section -->
      <section class="pt-[85px] lg:pt-[115px]">
        <div
          class="relative"
          style="background: url('./img/holderBg.jpg') center / cover no-repeat"
        >
          <div class="absolute opacity-60 inset-0 z-0 bg-[#022D52]"></div>
          <div class="container">
            <div
              class="text-white flex flex-col items-center justify-center relative h-[150px] sm:h-[180px] lg:h-[228px]"
            >
              <h1
                class="font-[700] text-[25px] md:text-[40px] text-white uppercase mb-[3px]"
              >
                Интерьерная и офисная мебель
              </h1>
              <div class="flex flex-wrap items-center">
                <a href="" class="font-[500] text-[16px] md:text-[18px]"
                  >Главная</a
                >
                <p class="mx-1 md:mx-5 font-[700]">-</p>
                <a href="" class="font-[500] text-[16px] md:text-[18px]"
                  >Продукция</a
                >
                <p class="mx-1 md:mx-5 font-[700]">-</p>
                <a href="" class="font-[500] text-[16px] md:text-[18px]"
                  >Интерьерная и офисная мебель</a
                >
              </div>
            </div>
          </div>
        </div>
      </section>

            <!-- 1-section -->
       <x-hero :title="'Интерьерная и офисная мебель'"  :breadcrumbs="['Главная' => url('/'), 'Продукция' => url('/news'), 'Интерьерная и офисная мебель' => url('/')]" />

      <!-- 2-section -->
      <section
        class="pt-[35px] md:pt-[84px] pb-[30px] sm:pb-[50px] lg:pb-[100px]"
      >
        <div class="container">
          <div>
            <h2
              class="uppercase text-[24px] sm:text-[30px] lg:text-[40px] font-[700] text-[#004B8B] mb-[4px] sm:mb-[8px] lg:mb-[14px] text-center md:text-start"
            >
              Интерьерная и офисная мебель
            </h2>
            <div
              class="hidden md:block w-[60px] h-1 lg:h-[8px] bg-[#004B8B] mb-[12px] sm:mb-[18px] lg:mb-[28px]"
            ></div>
            <p
              class="text-[#474747] text-[14px] lg:text-[16px] xl:text-[18px] font-[500] mt-[24px] md:mt-[48px] text-center md:text-start"
            >
              ООО «MEGA BEST STANDART» — это современное производственное
              предприятие, оснащённое передовыми технологиями в области
              переработки металла и производства металлических конструкций.
              <br /><br />
              Деятельность компании охватывает широкий спектр направлений — от
              продукции для учебных заведений до промышленных и строительных
              объектов, а также изделий для интерьера.
            </p>

            <div class="my-[25px] md:my-[48px]">
              <!-- Main Swiper -->
              <div class="swiper main-slider">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="./img/productIn1.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="./img/productIn2.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="./img/productIn3.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="./img/productIn4.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="./img/productIn5.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="./img/productIn6.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="./img/productIn1.jpg" />
                  </div>
                </div>

                <!-- Navigatsiya tugmalari -->
                <div class="swiper-button-next next1"></div>
                <div class="swiper-button-prev prev1"></div>
              </div>

              <!-- Thumb Swiper -->
              <div class="swiper thumb-slider thumbSlider">
                <div class="swiper-wrapper swiper-box">
                  <div class="swiper-slide">
                    <img src="./img/productIn1.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="./img/productIn2.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="./img/productIn3.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="./img/productIn4.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="./img/productIn5.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="./img/productIn6.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="./img/productIn1.jpg" />
                  </div>
                </div>
              </div>
            </div>

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
            </ul>

            <div class="text-center mt-[25px] md:mt-[51px]">
              <a
                href="#"
                class="group inline-flex self-start justify-center items-center text-[14px] px-[10px] sm:px-[20px] lg:px-[33px] py-[8px] sm:py-[12px] lg:py-[21px] bg-[#004B8B] hover:bg-[#003C6F] text-white font-[600] transition duration-300"
              >
                Оставить заявку
                <img
                  src="./img/qalam.svg"
                  class="ml-[10px] group-hover:translate-x-1 group-hover:transition-transform"
                />
              </a>
            </div>
          </div>
        </div>
      </section>

@endsection