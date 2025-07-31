<meta name="description" content="@yield('meta-desc', 'João Henrique — Desenvolvedor Web e Criador de Soluções Digitais')" />
<meta name="company" content="João Henrique" />
<meta name="author" content="João Henrique" />
<meta name="copyright" content="© João Henrique. Todos os direitos reservados." />
<meta name="application-name" content="Portfólio de João Henrique" />
<meta name="distribution" content="Global" />
<meta name="rating" content="General" />
<meta name="keywords" content="@yield('keywords', 'João Henrique, Portfólio, Desenvolvedor Web, Programador, Portfolio dev, Frontend, Backend, Laravel, Vue.js, HTML, CSS, JavaScript, PHP, Tailwind CSS, React, Next.js')" />

<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
@hasSection('title')
    <meta property="og:title" content="@yield('title') | João Henrique">
@else
    <meta property="og:title" content="João Henrique - Portfólio">
@endif
<meta property="og:site_name" content="João Henrique">
<meta property="og:description" content="@yield('meta-desc', 'Conheça o portfólio de João Henrique e descubra projetos de desenvolvimento web modernos e eficientes.')">
<meta property="og:image" content="@yield('meta-image', asset('images/meta-image.png'))">

<!-- Twitter -->
<meta name="twitter:card" content="summary" />
@hasSection('title')
    <meta name="twitter:title" content="@yield('title') | João Henrique" />
@else
    <meta name="twitter:title" content="João Henrique - Portfólio" />
@endif
<meta name="twitter:image" content="@yield('meta-image', asset('images/meta-image.png'))">
