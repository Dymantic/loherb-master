<section class="banner relative px-8 flex flex-col justify-center items-center font-sans relative">
    <div class="stage absolute inset-0">
        <img src="/images/hero/main_slider_4_cropped.jpg" style="width: 100%; height: 100%; object-fit: cover;"
             alt="" class="absolute pin" data-alternates='["/images/hero/main_slider_2_cropped.jpg", "/images/hero/main_slider_3_cropped.jpg", "/images/hero/main_slider_1_cropped.jpg", "/images/hero/main_slider_5_cropped.jpg"]'>
    </div>


    <h1 class="type-h0 text-white text-center relative z-40">{{ trans('homepage.banner') }}</h1>
    <div class="banner-controls absolute bottom-0 left-0 w-full flex justify-center items-center text-white pb-4">
        <button class="type-a1 text-white mx-4 text-xl" onclick="superHero.showPrev()">&larr;</button>
        <p><span class="count"></span> / 5</p>
        <button class="type-a1 text-white mx-4 text-xl" onclick="superHero.showNext()">&rarr;</button>
    </div>
</section>
