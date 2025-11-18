@extends('layouts.app')

  @section('content')
      <!-- 1-section -->
       <x-hero :title="'Ut enim ad minim veniam'"  :breadcrumbs="['Главная' => url('/'), 'Новости' => url('/news'), 'Ut enim ad minim veniam' => url('/')]" />

      <!-- 2-section -->
      <section class="pt-[35px] sm:pt-[60px] lg:pt-[100px] pb-[30px] sm:pb-[55px] lg:pb-[91px]">
        <div class="container">
          <div>
            <img src="./img/newsIn.jpg" alt="" class="mb-[20px] md:mb-[33px]" />
            <h2
              class="text-[18px] sm:text-[22px] lg:text-[30px] font-[700] text-[#004B8B] mb-[4px] sm:mb-[8px] lg:mb-[14px] text-center md:text-start"
            >
              Ut enim ad minim veniam
            </h2>
            <div
              class="hidden md:block w-[60px] h-1 lg:h-[6px] bg-[#004B8B] mb-[12px] lg:mb-[14px]"
            ></div>

            <p
              class="text-[#004B8B] text-[14px] md:text-[18px] font-[600] mb-[15px] md:mb-[32px] text-center md:text-start"
            >
              26.09.2025
            </p>
            <p class="font-[500] text-[#474747] text-[16px] md:text-[18px] text-center md:text-start">
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
          </div>
        </div>
      </section>

 @endsection