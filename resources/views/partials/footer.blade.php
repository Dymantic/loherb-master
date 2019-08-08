<footer class="flex flex-col py-12 items-center bg-black text-white">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 84.82 84.31" height="40px"><path fill="#ebedee" fill-rule="evenodd" d="M38.1,40a27.51,27.51,0,0,1,9.53-7.1c3.82-1.91,8.62-2.87,12.67-4.65,1.21-2.19,2.34-4.06,3.56-6.25l1.47.27c-2,3.56-3.71,6.74-6.62,9.68A57.68,57.68,0,0,1,40.42,44.05Zm23.77-9.28A47.22,47.22,0,0,1,40.5,44.17l1.67,2.9,8.4,3.69c7.81-4.52,11.77-7.39,11.53-17.48Z"/><path fill="#fff" fill-rule="evenodd" d="M58.89,44.69c-7,7.65-12.59.67-17.18-4.89C39,36.58,36.87,33.66,31.88,31c-4.62-2.5-9.92-4-11.84-4.18-1.43,5.33-.34,15.32,6.26,21.38,6.78,6.23,15.4,6.53,22.35,4-11.18-.74-19-8.19-24.33-18.21,4.9,7.12,15.2,18.31,27.21,16.94a20.2,20.2,0,0,0,7.36-6.18"/><path fill="#fff" d="M56.86,7.71C78.12,3.79,84.85,30.29,74,48.65c-9.17,17.68-31.81,31.2-31.81,31.2S24.1,70.06,12.12,51.66c-13.65-22.48-6-35.24,3.21-41.54C20.94,6.28,28,7.86,28,7.86s6.72,2.65,7.37-.75C36.09,3.2,31.28-.42,24.51,0A23.93,23.93,0,0,0,10.06,5.91c-2.56,2.4-19.11,16-3.31,45,10.18,17.6,35.52,33.4,35.52,33.4S91.93,56.62,84,20.2C77.93-1.32,58.57.09,56,.64c-2.89.61-6.47,2.26-6.47,5.12.9,5.72,5.27,2.1,7.37,2"/></svg>
    <a href="https://goo.gl/maps/hruVS5xHAXjfkwqy6" class="no-underline text-white text-center text-lg font-sans mt-12">{{ trans('homepage.footer.address') }}</a>
    <a href="mailto:{{ trans('homepage.footer.email') }}" class="no-underline text-white text-lg font-sans mt-2">{{ trans('homepage.footer.email') }}</a>
    <a href="tel:{{ trans('homepage.footer.phone') }}" class="no-underline text-white text-lg font-sans mt-2">{{ trans('homepage.footer.phone') }}</a>
    <div class="flex justify-center mt-8">
        {{--<a class="text-white hover:text-gold mx-4"--}}
        {{--href="">@include('svgs.social.twitter')</a>--}}
        {{--<a class="text-white hover:text-gold mx-4"--}}
        {{--href="">@include('svgs.social.linkedin')</a>--}}
        <a class="text-white hover:text-gold mx-4"
           href="https://www.facebook.com/LOHERB.TW/">@include('svgs.social.facebook')</a>
        <a class="text-white hover:text-gold mx-4"
           href="https://www.instagram.com/loherb0301/">@include('svgs.social.instagram')</a>
        <a class="text-white hover:text-gold mx-4"
           href="https://www.youtube.com/channel/UCACSw7tK8uMz8j-CFGa2NfQ">@include('svgs.social.youtube')</a>
        <a class="text-white hover:text-gold mx-4" target="_blank" rel="noopener"
           href="https://line.me/R/ti/p/%40xye4557v">@include('svgs.social.line')</a>
    </div>
    <div class="flex justify-center mt-8">
        <a class="font-sans text-white mx-6 uppercase no-underline hover:text-gold" href="https://villa.loherb.com.tw">{{ trans('homepage.nav.villa') }}</a>
        <a class="font-sans text-white mx-6 uppercase no-underline hover:text-gold" href="https://cuisine.loherb.com.tw">{{ trans('homepage.nav.cuisine') }}</a>
        <a class="font-sans text-white mx-6 uppercase no-underline hover:text-gold" href="https://estate.loherb.com.tw">{{ trans('homepage.nav.estate') }}</a>
        <a class="font-sans text-white mx-6 uppercase no-underline hover:text-gold" href="https://patisserie.loherb.com.tw">{{ trans('homepage.nav.patisserie') }}</a>
    </div>
</footer>