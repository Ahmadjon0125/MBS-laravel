@props(['title', 'breadcrumbs'])

<section class="pt-[85px] lg:pt-[115px]">
    <div
      class="relative"
      style="background: url('{{ asset( 'storage/images/holderBg.jpg') }}') center / cover no-repeat"
    >

      <div class="absolute opacity-60 inset-0 z-0 bg-[#022D52]"></div>
      
      <div class="container mx-auto px-4">
        <div
          class="text-white flex flex-col items-center justify-center relative h-[150px] sm:h-[180px] lg:h-[228px]"
        >

          <h1
            class="font-[700] text-[25px] md:text-[40px] text-white uppercase mb-[3px] text-center"
          >
            {{ $title }}
          </h1>

          <div class="flex flex-wrap items-center justify-center">
            @foreach($breadcrumbs as $label => $url)
                
                @if($loop->last)
                    {{-- Oxirgi element (aktiv sahifa nomi) --}}
                    <p class="font-[500] text-[16px] md:text-[18px]">
                        {{ $label }}
                    </p>
                @else
                    <a href="{{ $url }}" class="font-[500] text-[16px] md:text-[18px]  transition">
                        {{ $label }}
                    </a>
                    <p class="mx-1 md:mx-3 font-[700] text-xl">-</p>
                @endif

            @endforeach
          </div>
        </div>
      </div>
    </div>
</section>