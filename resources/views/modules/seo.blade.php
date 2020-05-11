<meta name="google-site-verification" content="S1grpKPeKypxgBhyU5Xa0B66kZptkd21mZwcPiA08zU" />
<meta name="author" content="Emmanuel Joseph(JET)"/>
<meta name="title" content="@yield('pageTitle', config('app.name'))">
<meta name="keywords" content="aekiti, {{ config('app.name') }}, ækiti, technology, nigeria, emmanueljet, emmanuel joseph(jet) #devstudyjaem"/>
<meta name="description" content="@yield('pageDescription', 'WeTælk is a social media that is passionate about your idea, ready to promoting love and equitable distribution of wealth')">
<link rel="canonical" href="{{ config('app.url') }}" />

@include('modules.schema')

<!-- Facebook -->
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:title" content="@yield('pageTitle', config('app.name'))" />
<meta property="og:description" content="@yield('pageDescription', 'WeTælk is a social media that is passionate about your idea, ready to promoting love and equitable distribution of wealth')" />
<meta property="og:image" content="{{ config('app.url') }}/assets/images/brand/logo-wbg.png" />
<meta property="og:image:type" content="image/png" />
<meta property="og:image:alt" content="{{ config('app.nick') }}" />
<meta property="og:image:width" content="512">
<meta property="og:image:height" content="512">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ url()->current() }}">
<meta name="twitter:site" content="@wetaelkio">
<meta name="twitter:creator" content="@emmanuelJet_">
<meta name="twitter:title" content="@yield('pageTitle', config('app.name'))">
<meta name="twitter:description" content="@yield('pageDescription', 'WeTælk is a social media that is passionate about your idea, ready to promoting love and equitable distribution of wealth')">
<meta name="twitter:image:src" content="{{ config('app.url') }}/assets/images/brand/logo-wbg.png">
<meta name="twitter:image:alt" content="{{ config('app.nick') }}">
<meta property="twitter:image:width" content="512">
<meta property="twitter:image:height" content="512">
