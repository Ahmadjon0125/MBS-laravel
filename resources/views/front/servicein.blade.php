@extends('layouts.app')

  @section('content')

      <!-- 1-section -->
       <x-hero :title="'Гибка металла'"  :breadcrumbs="['Главная' => url('/'), 'Услуги' => url('/news'), 'Гибка металла' => url('/')]" />

      <!-- 2-section -->
      <section class="pt-[35px] md:pt-[84px] pb-[30px] sm:pb-[50px] lg:pb-[100px]">
        <div class="container">
          <div>
            <h2
              class="text-[24px] sm:text-[30px] lg:text-[40px] font-[700] text-[#004B8B] mb-[4px] sm:mb-[8px] lg:mb-[14px] text-center md:text-start"
            >
              О КОМПАНИИ
            </h2>
            <div
              class="hidden md:block w-[60px] h-1 lg:h-[8px] bg-[#004B8B] mb-[12px] sm:mb-[18px] lg:mb-[28px]"
            ></div>
            <p
              class="text-[#474747] text-[14px] lg:text-[16px] xl:text-[18px] font-[500] mt-[24px] md:mt-[48px] text-center md:text-start"
            >
              Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit
              aut fugit, sed quia consequuntur magni dolores eos, qui ratione
              voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem
              ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia
              non numquam eius modi tempora incidunt, ut labore et dolore
              magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis
              nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
              aliquid ex ea commodi consequatur.
            </p>

            <div class="my-[25px] md:my-[48px]">
              <!-- Main Swiper -->
              <div class="swiper main-slider">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="./img/thumb1.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="./img/thumb2.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="./img/thumb3.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="./img/thumb4.jpg" />
                  </div>
                  <div class="swiper-slide">
                   <img src="./img/thumb5.jpg" />
                  </div>
                  <div class="swiper-slide">
                  <img src="./img/thumb6.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="./img/thumb1.jpg" />
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
                    <img src="./img/thumb1.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="./img/thumb2.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="./img/thumb3.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="./img/thumb4.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="./img/thumb5.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="./img/thumb6.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="./img/thumb1.jpg" />
                  </div>
                </div>
              </div>
            </div>

            <p
              class="text-[#474747] text-[14px] lg:text-[16px] xl:text-[18px] font-[500] mt-[24px] md:mt-[48px] text-center md:text-start"
            >
              Sed ut perspiciatis, unde omnis iste natus error sit voluptatem
              accusantium doloremque laudantium, totam rem aperiam eaque ipsa,
              quae ab illo inventore veritatis et quasi architecto beatae vitae
              dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas
              sit, aspernatur aut odit aut fugit, sed quia consequuntur magni
              dolores eos, qui ratione voluptatem sequi nesciunt, neque porro
              quisquam est, qui dolorem ipsum, quia dolor sit, amet,
              consectetur, adipisci velit, sed quia non numquam eius
              modi tempora incidunt, ut labore et dolore magnam aliquam quaerat
              voluptatem.
              <br /><br />
              Ut enim ad minima veniam, quis nostrum exercitationem ullam
              corporis suscipit laboriosam, nisi ut aliquid ex ea
              commodi consequatur? Quis autem vel eum iure
              reprehenderit, qui in ea voluptate velit esse, quam nihil
              molestiae consequatur, vel illum, qui dolorem eum fugiat, quo
              voluptas nulla pariatur? At vero eos et accusamus et iusto odio
              dignissimos ducimus, qui blanditiis praesentium voluptatum
              deleniti atque corrupti, quos dolores et quas
              molestias excepturi sint, obcaecati cupiditate non provident,
              similique sunt in culpa, qui officia deserunt mollitia animi, id
              est laborum et dolorum fuga. Et harum quidem rerum facilis est et
              expedita distinctio. Nam libero tempore, cum soluta nobis est
              eligendi optio, cumque nihil impedit, quo minus id, quod maxime
              placeat, facere possimus, omnis voluptas assumenda est, omnis
              dolor repellendus. Temporibus autem quibusdam et aut officiis
              debitis aut rerum necessitatibus saepe eveniet, ut et voluptates
              repudiandae sint et molestiae non recusandae. Itaque earum rerum
              hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus
              maiores alias consequatur aut perferendis doloribus asperiores
              repellat.
            </p>
<div class="text-center mt-[25px] md:mt-[51px]">

  <a
  href="#"
  class="group inline-flex self-start justify-center  items-center text-[14px] px-[10px] sm:px-[20px] lg:px-[33px] py-[8px] sm:py-[12px] lg:py-[21px] bg-[#004B8B] hover:bg-[#003C6F] text-white font-[600] transition duration-300"
>
  ПОДРОБНЕЕ
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