@extends('layouts.app')

  @section('content')

   <!-- 1-section -->
       <x-hero :title="'Продукция'"  :breadcrumbs="['Главная' => url('/'), 'Продукция' => url('/portfolio')]" />

      <!-- 2-section -->
      <section class="py-6 sm:py-10 lg:pt-[95px] lg:pb-[100px]">
        <div class="container">
          <div class="flex gap-[30px] flex-wrap justify-center">
            <!-- almashadigan rasm -->

            <a
              href="productIn.html"
              style="
                background: url('./img/product1.jpg') no-repeat center / cover;
              "
              class="max-w-[330px] lg:max-w-[420px] text-center text-white px-[10px] sm:px-[25px] lg:px-[40px] py-[34px] relative h-[330px] md:h-[420px] flex flex-col items-start justify-end hover:justify-center linkHover"
            >
              <div
                class="absolute inset-0 z-0 bg-[#004B8B] opacity-50 hover:opacity-80 linkHoverOpacity"
              ></div>
              <div class="z-1">
                <h3 class="md:text-[22px] font-bold  uppercase mb-[16px]">
                  Продукция для учебных заведений
                </h3>
                <div
                  class="w-[60px] h-[3px] md:h-[6px] bg-white mx-auto mb-[10px]"
                ></div>
                <p
                  class="text-[16px] font-[500] leading-relaxed mb-[15px] md:mb-[24px]"
                >
                  Слесарные верстаки для колледжей и школьных мастерских,
                  металлические шкафы, столы и стулья, оборудование и стенды для
                  хранения инструмента...
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

            <a
              href="productIn.html"
              style="
                background: url('./img/product2.jpg') no-repeat center / cover;
              "
              class="max-w-[330px] lg:max-w-[420px] text-center text-white px-[10px] sm:px-[25px] lg:px-[40px] py-[34px] relative h-[330px] md:h-[420px] flex flex-col items-start justify-end hover:justify-center linkHover"
            >
              <div
                class="absolute inset-0 z-0 bg-[#004B8B] opacity-50 hover:opacity-80 linkHoverOpacity"
              ></div>
              <div class="z-1">
                <h3 class="md:text-[22px] font-bold  uppercase mb-[16px]">
                  Интерьерная и офисная мебель
                </h3>
                <div
                  class="w-[60px] h-[3px] md:h-[6px] bg-white mx-auto mb-[10px]"
                ></div>
                <p
                  class="text-[16px] font-[500] leading-relaxed mb-[15px] md:mb-[24px]"
                >
                  Столы, стулья и шкафы в стиле «лофт», офисная мебель на
                  металлическом каркасе, ресепшн-стойки, настенные панели и
                  декоративные конструкции...
                </p>
                <div
                  class="w-[30px] md:w-[50px] h-0 overflow-hidden bg-white mx-auto linkHoverInfo"
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
              href="productIn.html"
              style="
                background: url('./img/product3.jpg') no-repeat center / cover;
              "
              class="max-w-[330px] lg:max-w-[420px] text-center text-white px-[10px] sm:px-[25px] lg:px-[40px] py-[34px] relative h-[330px] md:h-[420px] flex flex-col items-start justify-end hover:justify-center linkHover"
            >
              <div
                class="absolute inset-0 z-0 bg-[#004B8B] opacity-50 hover:opacity-80 linkHoverOpacity"
              ></div>
              <div class="z-1">
                <h3 class="md:text-[22px] font-bold uppercase mb-[16px]">
                  Металлоконструкции для строительных объектов
                </h3>
                <div
                  class="w-[60px] h-[3px] md:h-[6px] bg-white mx-auto mb-[10px]"
                ></div>
                <p
                  class="text-[16px] font-[500] leading-relaxed mb-[15px] md:mb-[24px]"
                >
                  Металлические кронштейны, перила, решётки, фасадные и
                  балконные металлические жалюзи и облицовочные элементы...
                </p>
                <div
                  class="w-[30px] md:w-[50px] h-0 overflow-hidden bg-white mx-auto linkHoverInfo"
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
              href="productIn.html"
              style="
                background: url('./img/product4.jpg') no-repeat center / cover;
              "
              class="max-w-[330px] lg:max-w-[420px] text-center text-white px-[10px] sm:px-[25px] lg:px-[40px] py-[34px] relative h-[330px] md:h-[420px] flex flex-col items-start justify-end hover:justify-center linkHover"
            >
              <div
                class="absolute inset-0 z-0 bg-[#004B8B] opacity-50 hover:opacity-80 linkHoverOpacity"
              ></div>
              <div class="z-1">
                <h3 class="md:text-[22px] font-bold  uppercase mb-[16px]">
                  Оборудование для питания и медицины
                </h3>
                <div
                  class="w-[60px] h-[3px] md:h-[6px] bg-white mx-auto mb-[10px]"
                ></div>
                <p
                  class="text-[16px] font-[500] leading-relaxed mb-[15px] md:mb-[24px]"
                >
                  Столы, стеллажи и мойки из нержавеющей стали для кухонь,
                  медицинские кушетки, шкафы и санитарная мебель...
                </p>
                <div
                  class="w-[30px] md:w-[50px] h-0 overflow-hidden bg-white mx-auto linkHoverInfo"
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
              href="productIn.html"
              style="
                background: url('./img/product5.jpg') no-repeat center / cover;
              "
              class="max-w-[330px] lg:max-w-[420px] text-center text-white px-[10px] sm:px-[25px] lg:px-[40px] py-[34px] relative h-[330px] md:h-[420px] flex flex-col items-start justify-end hover:justify-center linkHover"
            >
              <div
                class="absolute inset-0 z-0 bg-[#004B8B] opacity-50 hover:opacity-80 linkHoverOpacity"
              ></div>
              <div class="z-1">
                <h3 class="md:text-[22px] font-bold  uppercase mb-[16px]">
                  Дополнительные услуги
                </h3>
                <div
                  class="w-[60px] h-[3px] md:h-[6px] bg-white mx-auto mb-[10px]"
                ></div>
                <p
                  class="text-[16px] font-[500] leading-relaxed mb-[15px] md:mb-[24px]"
                >
                  Резка, гибка, сверление и сборка металлоконструкций,
                  порошковая окраска, разработка дизайна, чертежей и
                  производство...
                </p>
                <div
                  class="w-[30px] md:w-[50px] h-0 overflow-hidden bg-white mx-auto linkHoverInfo"
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
        </div>
      </section>

     @endsection