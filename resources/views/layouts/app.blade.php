<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />

        <!-- fancybox -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1/dist/fancybox/fancybox.css"
    />

    <!-- swiperjs -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <!-- tailwindcss -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- styles -->
    <!-- <link rel="stylesheet" href="./css/main.css" /> -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />

    <title>Mega Best Standard</title>
  </head>
  <body>
    <header id="mainHeader" class="py-[14px] fixed w-full z-50">
      <div class="container">
        <div class="flex items-center">
          <a href="/">
            <img src="{{ asset('storage/images/logo.svg')}}" class="w-[80px] lg:w-[125px]" alt="" />
          </a>
          <nav
            class="flex items-center ml-[25px] md:ml-[40px] lg:ml-[60px] xl:ml-[80px] 2xl:ml-[80px] flex-grow"
          >
            <ul class="hidden lg:flex justify-between navList w-full">
              <li><a href="{{ route('about.page') }}">О компании </a></li>
              <li><a href="{{route('service.page')}}">Услуги</a></li>
              <li><a href="{{ route('product.page')}}">Продукция </a></li>
              <li><a href="{{route('portfolio.page')}}">Портфолио</a></li>
              <li><a href="{{route('news.page')}}">Новости</a></li>
              <li><a href="{{route('contact.page')}}">Контакты</a></li>
            </ul>
            <div
              class="hidden lg:block lg:mx-[20px] xl:mx-[28px] 2xl:mx-[38px] px-1 sm:px-2 md:px-4 xl:px-6 2xl:px-10 border-x-[#004B8B] lg:border-x-1"
            >
              <a
                class="text-[#474747] font-[600] whitespace-nowrap"
                href="tel:+998935054505"
                >+998 93 505 45 05</a
              >
            </div>
            <div class="ml-auto lang-dropdown">
              <button class="lang-btn" id="langBtn">
                <div class="flex items-center text-[14px] lanBtnVal">
                  <div id="lanBtnVal">RU</div>
                  <img src="./img/arrowLang.svg" class="ml-[6px]" alt="" />
                </div>
              </button>
              <div class="lang-menu" id="langMenu">
                <a href="#">RU</a>
                <a href="#">EN</a>
                <a href="#">UZ</a>
              </div>
            </div>
          </nav>

          <!-- Burger Button -->
          <div class="burger" id="burger">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>

      <!-- Mobile Navigation -->
      <div class="mobile-nav" id="mobileNav">
        <div class="mobile-nav-content">
          <ul class="navList flex lg:hidden">
            <li><a href="{{ route('about.page') }}">О компании </a></li>
              <li><a href="{{route('service.page')}}">Услуги</a></li>
              <li><a href="{{ route('product.page')}}">Продукция </a></li>
              <li><a href="{{route('portfolio.page')}}">Портфолио</a></li>
              <li><a href="{{route('news.page')}}">Новости</a></li>
              <li><a href="{{route('contact.page')}}">Контакты</a></li>
          </ul>

          <a class="mobile-phone flex lg:hidden" href="tel:+998935054505">
            +998 93 505 45 05
          </a>
        </div>
      </div>

      <!-- Overlay -->
      <div class="overlay" id="overlay"></div>
    </header>
    <main>

@yield('content')


      <!-- 6-section -->
      <section
        class="h-[390px] flex items-center"
        style="background: url('{{asset('storage/images/svyazBg.jpg')}}') no-repeat center / cover"
      >
        <div class="container">
          <div class="flex flex-col items-center justify-center">
            <h2
              class="text-[24px] sm:text-[30px] lg:text-[40px] font-[700] text-[#004B8B] mb-[4px] sm:mb-[8px] lg:mb-[14px] text-center uppercase"
            >
              Свяжитесь с нами в Telegram
            </h2>
            <div
              class="w-[60px] h-1 lg:h-[8px] bg-[#004B8B] mb-[12px] sm:mb-[18px] lg:mb-[28px] mx-auto"
            ></div>


            <div
              class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6 max-w-[840px] w-full mx-auto"
            >
              <!-- Button 1 -->
              <a
                href="/"
                class="group flex whitespace-nowrap items-center justify-center px-6 md:px-[56px] py-4 md:py-[16px] bg-[#004B8B] text-white font-[600] text-[12px] md:text-[14px] uppercase hover:bg-[#003461] transition-colors"
              >
                <span class="flex items-center">
                  ПЕРЕЙТИ В ГРУППУ
                  <svg
                    class="w-5 h-5 ml-1 transform group-hover:translate-x-1 transition-transform"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 1.5 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2.5"
                      d="M9 5l7 7-7 7"
                    />
                  </svg>
                </span>
              </a>

              <!-- Button 2 -->
              <a
                href="/"
                class="group flex whitespace-nowrap items-center justify-center px-6 md:px-[56px] py-4 md:py-[16px] bg-[#004B8B] text-white font-[600] text-[12px] md:text-[14px] uppercase hover:bg-[#003461] transition-colors"
              >
                <span class="flex items-center">
                  СВЯЗАТЬСЯ С АДМИНИСТРАТОРОМ
                  <svg
                    class="w-5 h-5 ml-1 transform group-hover:translate-x-1 transition-transform"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 1.5 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2.5"
                      d="M9 5l7 7-7 7"
                    />
                  </svg>
                </span>
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- footer  -->
      <footer
        class="bg-[#003D5C] text-white pb-[26px] pt-[30px] md:pt-[63px] relative">
        <div class="container">
          <div>
            <div
              class="flex flex-col sm:flex-row text-center sm:text-start items-center sm:justify-between gap-[15px] lg:gap-[30px] mb-8"
            >
              <!-- Left - Navigation -->
              <nav class="space-y-2 sm:space-y-3">
                <a
                  href="{{ route('about.page') }}"
                  class="block text-white opacity-60 hover:opacity-100 font-[500] text-[16px]"
                  >О компании</a
                >
                <a
                  href="{{route('service.page')}}"
                  class="block text-white opacity-60 hover:opacity-100 font-[500] text-[16px]"
                  >Услуги</a
                >
                <a
                  href="{{ route('product.page')}}"
                  class="block text-white opacity-60 hover:opacity-100 font-[500] text-[16px]"
                  >Продукция</a
                >
                <a
                  href="{{route('portfolio.page')}}"
                  class="block text-white opacity-60 hover:opacity-100 font-[500] text-[16px]"
                  >Портфолио</a
                >
                <a
                  href="{{route('news.page')}}"
                  class="block text-white opacity-60 hover:opacity-100 font-[500] text-[16px]"
                  >Новости</a
                >
                <a
                  href="{{route('contact.page')}}"
                  class="block text-white opacity-60 hover:opacity-100 font-[500] text-[16px]"
                  >Контакты</a
                >
              </nav>

              <!-- Center - Logo & Social -->
              <div
                class="flex flex-col items-center justify-center space-y-[30px]"
              >
                <a href="/" class="hover:opacity-80">
                  <img
                    src="{{asset('storage/images/logoFooter.svg')}}"
                    alt="Logo"
                    class="w-[200px]"
                  />
                </a>
                <div class="flex gap-[20px] md:gap-[30px]">
                  <a
                    href="#"
                    class="flex items-center justify-center icon-wrapper"
                  >
                   <svg
                      width="34"
                      height="34"
                      viewBox="0 0 34 34"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        opacity="0.2"
                        d="M17 0L31.7224 8.5V25.5L17 34L2.27757 25.5V8.5L17 0Z"
                        class="bg-shape"
                        fill="white"
                      />
                      <path
                        d="M16.9633 9.34961C17.9811 9.38596 19.0353 9.38596 20.0531 9.42231C20.9619 9.45866 21.798 9.60407 22.5978 10.0766C23.6156 10.6946 24.2336 11.6034 24.4517 12.7667C24.5608 13.4573 24.5971 14.1844 24.6335 14.8751C24.6698 16.4018 24.6335 17.9286 24.6335 19.4554C24.6335 20.2551 24.5971 21.0548 24.3426 21.8182C23.8337 23.3086 22.7795 24.2174 21.2528 24.5082C20.5621 24.6537 19.835 24.6537 19.1444 24.69C17.6176 24.7264 16.1272 24.69 14.6004 24.69C13.8007 24.69 13.0009 24.6537 12.2375 24.3992C10.7471 23.8903 9.83834 22.8361 9.54752 21.3093C9.40212 20.6186 9.40212 19.8916 9.36577 19.2009C9.32941 17.6741 9.36577 16.1474 9.36577 14.6206C9.36577 13.8209 9.40212 13.0211 9.65658 12.2577C10.1655 10.7673 11.2197 9.85853 12.7465 9.56772C13.4371 9.42231 14.1642 9.42231 14.8549 9.38596C15.5092 9.34961 16.2362 9.34961 16.9633 9.34961ZM23.2521 16.8744C23.2157 16.8744 23.2521 16.8744 23.2521 16.8744C23.2157 16.2564 23.2157 15.6748 23.2157 15.0568C23.2157 14.4752 23.1794 13.8936 23.1067 13.3119C22.9613 12.0033 22.1979 11.1308 20.9256 10.8764C20.2713 10.731 19.5442 10.731 18.8899 10.731C17.5812 10.6946 16.3089 10.6946 15.0003 10.731C14.3459 10.731 13.6916 10.7673 13.0736 10.8764C11.9831 11.0581 11.2197 11.6761 10.8925 12.7667C10.7835 13.1302 10.7471 13.4937 10.7108 13.8572C10.6744 15.2386 10.6744 16.6199 10.6744 18.0013C10.6744 18.8737 10.7108 19.7825 10.7835 20.655C10.8925 21.9636 11.6923 22.8724 13.0009 23.0905C13.6553 23.1996 14.3459 23.2359 15.0366 23.2359C16.3089 23.2723 17.5812 23.2359 18.8899 23.2359C19.4715 23.2359 20.0531 23.1996 20.6348 23.1269C21.18 23.0905 21.689 22.9088 22.1252 22.5453C22.8522 21.9636 23.1067 21.2002 23.143 20.3278C23.2157 19.2373 23.2157 18.0377 23.2521 16.8744Z"
                        fill="white"
                        class="main-path"
                      />
                      <path
                        d="M20.8891 17.0202C20.8891 19.2013 19.1442 20.9462 16.9631 20.9462C14.782 20.9462 13.0371 19.2013 13.0371 16.9839C13.0371 14.8391 14.8183 13.0942 16.9994 13.0942C19.1442 13.0942 20.8891 14.8391 20.8891 17.0202ZM16.9267 19.5648C18.3081 19.5648 19.4713 18.4016 19.4713 17.0202C19.4713 15.6389 18.3081 14.4756 16.9267 14.4756C15.509 14.4756 14.3821 15.6389 14.3821 17.0202C14.3821 18.4016 15.5454 19.5648 16.9267 19.5648Z"
                        fill="white"
                        class="main-path"
                      />
                      <path
                        d="M21.9437 12.9117C21.9437 13.4206 21.5439 13.8569 21.0349 13.8569C20.526 13.8569 20.0898 13.4206 20.1261 12.9117C20.1261 12.4028 20.526 12.0029 21.0349 12.0029C21.5439 12.0029 21.9437 12.4028 21.9437 12.9117Z"
                        fill="white"
                        class="main-path"
                      />
                    </svg>
                  </a>
                  <a
                    href="#"
                    class="flex items-center justify-center icon-wrapper"
                  >
                    <svg
                      width="34"
                      height="34"
                      viewBox="0 0 34 34"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M17 0L31.7224 8.5V25.5L17 34L2.27757 25.5V8.5L17 0Z"
                        fill="white"
                        class="bg-shape"
                      />
                      <path
                        d="M20.6774 17.0002H18.4607V24.9336H15.1552V17.0002H13.5996V14.2002H15.1552V12.3724C15.1552 11.0891 15.7774 9.06689 18.4607 9.06689H20.9107V11.7891H19.1607C18.8885 11.7891 18.4607 11.9447 18.4607 12.5669V14.2002H20.9496L20.6774 17.0002Z"
                        fill="#00325C"
                         class="main-path"
                      />
                    </svg>
                  </a>
                  <a
                    href="#"
                    class="flex items-center justify-center icon-wrapper"
                  >
                     <svg
                      width="34"
                      height="34"
                      viewBox="0 0 34 34"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        opacity="0.2"
                        d="M17 0L31.7224 8.5V25.5L17 34L2.27757 25.5V8.5L17 0Z"
                        fill="white"
                        class="bg-shape"
                      />
                      <path
                        d="M24.3 11.8128C24.2585 12.1862 24.1755 12.6011 24.0926 12.9745C23.3873 16.2936 22.6819 19.6126 21.9766 22.9317C21.9352 23.1392 21.8937 23.3051 21.8107 23.4711C21.6447 23.7615 21.3958 23.8445 21.0639 23.7615C20.8565 23.72 20.6905 23.637 20.5245 23.5126C19.4458 22.7243 18.4086 21.936 17.3299 21.1477C17.2055 21.0647 17.1225 21.0647 16.998 21.1892C16.4587 21.6871 15.9608 22.2264 15.4215 22.7243C15.214 22.9317 15.0066 23.0562 14.7162 23.0147C14.5087 23.0147 14.3842 22.9317 14.3428 22.7243C14.0108 21.6871 13.6789 20.6913 13.347 19.6541C13.2226 19.3222 13.0981 18.9488 13.0151 18.6169C12.9736 18.4924 12.9321 18.4095 12.7662 18.368C11.729 18.0361 10.6918 17.7042 9.65455 17.4137C9.53009 17.3723 9.36413 17.3308 9.23967 17.2478C8.94925 17.0818 8.90776 16.8329 9.19818 16.584C9.36413 16.418 9.57157 16.335 9.82051 16.2521C11.2311 15.7127 12.6417 15.1734 14.0523 14.634C17.1225 13.4723 20.1511 12.2692 23.2213 11.1075C23.2628 11.1075 23.2628 11.1075 23.3043 11.066C23.8851 10.8586 24.3 11.149 24.3 11.8128ZM14.7576 22.0605C14.7991 22.019 14.7991 21.9775 14.7991 21.9775C14.8821 21.2307 14.9236 20.4839 15.0066 19.7371C15.0066 19.5711 15.0895 19.4052 15.214 19.2807C17.2055 17.4967 19.1969 15.7127 21.1884 13.9287C21.3128 13.8042 21.4373 13.7213 21.5618 13.5968C21.6032 13.5553 21.6862 13.5138 21.6447 13.4308C21.6032 13.3479 21.5203 13.3479 21.4373 13.3479C21.2713 13.3479 21.1469 13.4308 21.0224 13.5138C18.5746 15.0489 16.1268 16.584 13.6789 18.1605C13.5545 18.2435 13.513 18.3265 13.5545 18.4924C13.8449 19.4052 14.1353 20.3179 14.4672 21.2307C14.5502 21.4381 14.6332 21.7285 14.7576 22.0605Z"
                        fill="white"
                         class="main-path"
                      />
                    </svg>
                  </a>
                </div>
              </div>

              <!-- Right - Contact -->
              <div class="space-y-4">
                <div>
                  <p class="text-white opacity-60 text-[12px] font-[500]">
                    ТЕЛЕФОН
                  </p>
                  <a
                    href="tel:+998935054505"
                    class="text-white text-[16px] font-[500]"
                    >+99 893 505 45 05</a
                  >
                </div>
                <div>
                  <p class="text-white opacity-60 text-[12px] font-[500]">
                    ЭЛЕКТРОННАЯ ПОЧТА
                  </p>
                  <a
                    href="mailto:megabest@info.com"
                    class="text-white text-[16px] font-[500]"
                    >megabest@info.com</a
                  >
                </div>
                <div>
                  <p class="text-white opacity-60 text-[12px] font-[500]">
                    АДРЕС
                  </p>
                  <p class="text-white text-[16px] font-[500]">
                    Узбекистан, г. Ташкент<br />
                    Ул. Темур Малик, дом 17а
                  </p>
                </div>
              </div>
            </div>
            <!-- Bottom -->
            <div
              class="pt-6 flex flex-col sm:flex-row justify-between items-center gap-4 text-sm text-gray-400 relative"
            >
              <p class="opacity-100">«Mega Best Standart» Все права защищены</p>
              <p>© Copyright 2025 - Web developed by SOS Group</p>
            </div>
          </div>
        </div>
        <div
          class="absolute w-full h-[1px] bg-white opacity-20 bottom-[100px] sm:bottom-[68px]"
        ></div>
      </footer>
    </main>
    <!-- fancybox -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1/dist/fancybox/fancybox.umd.js"></script>
    <!-- swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- javascript -->
    <!-- <script src="./js/main.js"></script> -->
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>