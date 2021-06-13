@extends('base')

@section('title')
    {{ trans('homepage.meta.title') }}
@endsection

@section('head')
    @include('ogmeta', [
        'ogImage' => url('/images/main_facebook.jpg'),
        'ogTitle' => trans('homepage.meta.title'),
        'ogDescription' => trans('homepage.meta.description')
    ])
@endsection

@section('content')
@include('partials.banner')
    <section class="py-20 px-8 flex flex-col items-center">
        @include('svgs.logos.leaf')
        <p class="mt-20 type-b1 text-lg text-center max-w-xl my-8 mx-auto">{{ trans('homepage.intro.part_one') }}</p>
        <p class="type-b1 text-lg text-center max-w-xl my-8 mx-auto">{{ trans('homepage.intro.part_two') }}</p>
    </section>
    <section>
        <div class="flex flex-col md:flex-row sites">
            <a title="{{ trans("homepage.nav.villa") }}" href="https://villa.loherb.com.tw" class="flex justify-center items-center flex-1 m-2 md:mx-1 villa no-underline">
                <div class="flex flex-col items-center">
                    @if(app()->getLocale() === 'en')
                        @include('svgs.logos.Eng_Villa', ['classes' => 'text-cream-light h-16 mb-6'])
                    @else
                        @include('svgs.logos.Ch_Villa', ['classes' => 'text-cream-light h-16 mb-6'])
                    @endif
                </div>
            </a>
            <a title="{{ trans("homepage.nav.cuisine") }}" href="https://cuisine.loherb.com.tw" class="flex justify-center items-center flex-1 m-2 md:mx-1 cuisine no-underline">
                <div class="flex flex-col items-center">
                    @if(app()->getLocale() === 'en')
                        @include('svgs.logos.Eng_Cuisine', ['classes' => 'text-cream-light h-16 mb-6'])
                    @else
                        @include('svgs.logos.Ch_Cuisine', ['classes' => 'text-cream-light h-16 mb-6'])
                    @endif
                </div>
            </a>
            <a title="{{ trans("homepage.nav.estate") }}" href="https://estate.loherb.com.tw" class="flex justify-center items-center flex-1 m-2 md:mx-1 mb-2 estate no-underline">
                <div class="flex flex-col items-center">
                    @if(app()->getLocale() === 'en')
                        @include('svgs.logos.Eng_Estate', ['classes' => 'text-cream-light h-16 mb-6'])
                    @else
                        @include('svgs.logos.Ch_Estate', ['classes' => 'text-cream-light h-16 mb-6'])
                    @endif
                </div>
            </a>
            <a title="{{ trans("homepage.nav.patisserie") }}" href="https://patisserie.loherb.com.tw" class="flex justify-center items-center flex-1 m-2 md:mx-1 mb-2 patisserie no-underline">
                <div class="flex flex-col items-center">
                    @if(app()->getLocale() === 'en')
                        @include('svgs.logos.Eng_Patissier', ['classes' => 'text-cream-light h-16 mb-6'])
                    @else
                        @include('svgs.logos.Ch_Patissier', ['classes' => 'text-cream-light h-16 mb-6'])
                    @endif
                </div>
            </a>
        </div>

    </section>
    @include('partials.footer')
@include('partials.nav')
<div class="fb-customerchat"
         page_id="{{ config('facebook.page_id') }}" theme_color="#e49e2a">
    </div>
<script type='application/ld+json'>
{
  "@context": "http://www.schema.org",
  "@type": "Corporation",
  "name": "Loherb Group",
  "url": "https://loherb.com.tw/",
  "logo": "https://loherb.com.tw/images/logos/logo_main.svg",
  "description": "The Loherb Group is a premium lifestyle brand. Our group includes Loherb Villa, luxury hotel accommodation in Yilan, and Loherb Cuisine, which offers a fine dining experience.",
  "address": {
		"@type": "PostalAddress",
		"addressCountry": "Taiwan",
		"addressLocality": "Yilan",
		"addressRegion": "Dongshan",
		"postalCode": "269",
		"streetAddress": "372 Baofu road",
		"email": "service@loherb.com.tw",
		"telephone": "+886-3-959-5685",
		"name": "Villa Loherb"
	},
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+886-3-959-5685",
    "contactType": "customer service"
  }
}
</script>
@include('front.partials.facebook-sdk')
@endsection
