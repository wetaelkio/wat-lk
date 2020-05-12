<!-- Schema -->
<script type="application/ld+json">
  {
    "@context" : "http://schema.org",
    "@type" : "Organization",
    "name" : "@yield('pageTitle', config('app.name'))",
    "alternateName" : "{{ config('app.name') }}",
    "email" : "info.wetaelk@gmail.com",
    "image" : "{{ config('app.url') }}/assets/images/brand/logo-wbg.jpg",
    "description" : "@yield('pageDescription', 'WeTælk is a social media that is passionate about your idea, ready to promoting love and equitable distribution of wealth')",
    "url" : "{{ url()->current() }}",
    "logo": {
      "@type": "ImageObject",
      "text": "{{ config('app.name') }}",
      "url": "{{ config('app.url') }}/assets/images/brand/logo-blue.png",
      "sameAs" : "{{ config('app.url') }}/assets/images/brand/logo-wbg.jpg",
      "about": "{{ config('app.name') }} logo"
    }
  }
</script>
