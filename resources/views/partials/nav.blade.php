<nav class="absolute pin-t w-full h-12 flex justify-center items-center z-40 main-nav font-sans bg-black-opq">
    <a class="no-underline hover:text-gold text-base md:text-lg tracking-wide text-white uppercase ml-4 md:ml-6 pr-4 md:pr-6 border-r" href="https://villa.loherb.com.tw">{{ trans('homepage.nav.villa') }}</a>
    <a class="no-underline hover:text-gold text-base md:text-lg tracking-wide text-white uppercase ml-4 md:ml-6 pr-4 md:pr-6 border-r" href="https://cuisine.loherb.com.tw">{{ trans('homepage.nav.cuisine') }}</a>
    <a class="no-underline hover:text-gold text-base md:text-lg tracking-wide text-white uppercase ml-4 md:ml-6 pr-4 md:pr-6 border-r" href="https://estate.loherb.com.tw">{{ trans('homepage.nav.estate') }}</a>
    <a class="no-underline hover:text-gold text-base md:text-lg tracking-wide text-white uppercase ml-4 md:ml-6 pr-4 md:pr-6 border-r md:border-0" href="https://patisserie.loherb.com.tw">{{ trans('homepage.nav.patisserie') }}</a>
    <a href="{{ transUrl(request()->path()) }}" class="hover:text-gold text-sm md:text-lg text-white uppercase no-underline pin-r static md:absolute mr-4 ml-4 md:ml-0 md:mr-8">{{ trans('homepage.nav.language') }}</a>
</nav>