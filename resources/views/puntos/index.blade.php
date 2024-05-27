<x-app-layout>
    <section class="bg-gray-2 dark:bg-dark pt-20 pb-10 lg:pt-[120px] lg:pb-20">
        <div class="container mx-auto">
           <div class="flex flex-wrap -mx-4">

                @foreach ($puntos as $punto )
                <div class="w-full px-4 md:w-1/2 xl:w-1/3">
                    <div
                       class="mb-10 overflow-hidden duration-300 bg-white rounded-lg dark:bg-dark-2 shadow-1 hover:shadow-3 dark:shadow-card dark:hover:shadow-3"
                       >
                       @if ($punto->image)
                       <img
                          src="{{Storage::url($punto->image->url)}}"
                          alt="image"
                          class="w-full"
                          />

                       @endif
                       <div class="p-8 text-center sm:p-9 md:p-7 xl:p-9">
                          <h3>
                             <a
                                href="{{route('puntos.description',$punto)}}"
                                class="text-dark  hover:text-primary mb-4 block text-xl font-semibold sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px]"
                                >
                             {{$punto->name}}
                             </a>
                          </h3>
                          <p
                             class="text-base leading-relaxed text-body-color dark:text-dark-6 mb-7"
                             >
                             {{$punto->descripcion}}
                          </p>

                       </div>
                    </div>
                 </div>
                @endforeach

           </div>
        </div>
     </section>

</x-app-layout>
