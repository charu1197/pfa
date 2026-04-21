<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Presidents of the PFA | Philippine Finance Association</title>
    <link rel="icon" type="image/png" href="images/pfa-logo.png">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode:"class",
            theme:{extend:{colors:{
                "surface-tint":"#415f8f","surface-container-high":"#e2e8f8","on-secondary-fixed-variant":"#594325",
                "on-primary-fixed-variant":"#f1ba40","on-secondary":"#ffffff","tertiary":"#111518",
                "surface-container-highest":"#dce2f3","on-primary":"#ffffff","inverse-surface":"#2a313d",
                "secondary-fixed":"#ffddb6","outline-variant":"#c4c6d0","on-primary-fixed":"#001b3d",
                "on-tertiary-fixed-variant":"#44474b","surface-container":"#e7eefe","on-surface":"#151c27",
                "on-secondary-fixed":"#291801","surface":"#f9f9ff","inverse-primary":"#aac7fd",
                "primary-container":"#002855","on-surface-variant":"#43474f","tertiary-fixed":"#e1e2e7",
                "tertiary-fixed-dim":"#c4c6cb","surface-variant":"#dce2f3","on-error-container":"#93000a",
                "error":"#ba1a1a","primary":"#002ecc","surface-container-lowest":"#ffffff",
                "on-background":"#151c27","surface-container-low":"#f0f3ff","primary-fixed":"#d6e3ff",
                "on-error":"#ffffff","background":"#f9f9ff","surface-bright":"#f9f9ff","outline":"#747780",
                "on-tertiary":"#ffffff","primary-fixed-dim":"#aac7fd","on-secondary-container":"#785e3e",
                "error-container":"#ffdad6","secondary":"#735a3a","on-primary-container":"#7490c3",
                "secondary-container":"#fddab2","surface-dim":"#d3daea","secondary-fixed-dim":"#e2c19b",
                "on-tertiary-fixed":"#191c1f","inverse-on-surface":"#ebf1ff","tertiary-container":"#26292d",
                "on-tertiary-container":"#8d9094",
            },borderRadius:{DEFAULT:"0.125rem",lg:"0.25rem",xl:"0.5rem",full:"0.75rem"},
            fontFamily:{headline:["Manrope"],body:["Inter"],label:["Inter"]}}},
        };
    </script>
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body class="bg-background text-on-background">

    <!-- NAV with About dropdown -->
    <header class="fixed top-0 w-full z-50 bg-white/80 backdrop-blur-xl shadow-sm glass-nav">
        <div class="max-w-7xl mx-auto px-6 md:px-8 flex justify-between items-center h-20">
            <a href="index.html" class="flex items-center"><img src="images/pfa.png" alt="PFA Logo" class="h-12 w-auto"></a>
            <nav class="hidden md:flex items-center gap-8">
                <a class="text-slate-500 font-medium hover:text-primary transition-colors" href="index.html">Home</a>
                <div class="relative group">
                    <button class="text-primary font-bold border-b-2 border-amber-500 flex items-center gap-1 transition-colors">About <span class="material-symbols-outlined text-sm">expand_more</span></button>
                    <div class="absolute top-full left-0 mt-2 w-56 bg-white rounded-xl shadow-xl border border-outline-variant/20 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                        <a href="about.html" class="flex items-center gap-3 px-4 py-3 text-sm text-on-surface hover:bg-surface-container-low hover:text-primary transition-colors rounded-t-xl">
                            <span class="material-symbols-outlined text-base text-primary">info</span> About PFA
                        </a>
                        <a href="presidents.html" class="flex items-center gap-3 px-4 py-3 text-sm text-primary font-semibold bg-surface-container-low transition-colors">
                            <span class="material-symbols-outlined text-base text-primary">history_edu</span> Presidents
                        </a>
                        <a href="trustees.html" class="flex items-center gap-3 px-4 py-3 text-sm text-on-surface hover:bg-surface-container-low hover:text-primary transition-colors">
                            <span class="material-symbols-outlined text-base text-primary">groups</span> Board of Trustees
                        </a>
                        <a href="officers.html" class="flex items-center gap-3 px-4 py-3 text-sm text-on-surface hover:bg-surface-container-low hover:text-primary transition-colors">
                            <span class="material-symbols-outlined text-base text-primary">badge</span> Officers &amp; Directors
                        </a>
                        <a href="members.html" class="flex items-center gap-3 px-4 py-3 text-sm text-on-surface hover:bg-surface-container-low hover:text-primary transition-colors rounded-b-xl">
                            <span class="material-symbols-outlined text-base text-primary">corporate_fare</span> Member Companies
                        </a>
                    </div>
                </div>
                <a class="text-slate-500 font-medium hover:text-primary transition-colors" href="news.html">News</a>
                <a class="text-slate-500 font-medium hover:text-primary transition-colors" href="gallery.html">Gallery</a>
            </nav>
            <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg hover:bg-surface-container transition-colors" aria-label="Open menu"><span class="material-symbols-outlined text-primary">menu</span></button>
            <a href="about.html#membership" class="hidden md:block bg-primary px-6 py-2.5 rounded-lg text-on-primary font-bold text-sm hover:opacity-90 transition-all shadow-lg shadow-primary/10">Join PFA</a>
        </div>
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-outline-variant/20 px-6 py-4 space-y-1">
            <a href="index.html" class="block py-2 text-on-surface font-medium">Home</a>
            <a href="about.html" class="block py-2 text-on-surface font-medium">About PFA</a>
            <a href="presidents.html" class="block py-2 pl-4 text-primary font-semibold text-sm">— Presidents</a>
            <a href="trustees.html" class="block py-2 pl-4 text-on-surface-variant text-sm">— Board of Trustees</a>
            <a href="officers.html" class="block py-2 pl-4 text-on-surface-variant text-sm">— Officers &amp; Directors</a>
            <a href="members.html" class="block py-2 pl-4 text-on-surface-variant text-sm">— Member Companies</a>
            <a href="news.html" class="block py-2 text-on-surface font-medium">News</a>
            <a href="gallery.html" class="block py-2 text-on-surface font-medium">Gallery</a>
            <a href="about.html#membership" class="block py-2 text-amber-600 font-bold">Join PFA</a>
        </div>
    </header>
    <script>document.getElementById('mobile-menu-btn')?.addEventListener('click',function(){document.getElementById('mobile-menu').classList.toggle('hidden');});</script>

    <main class="pt-20">

        <!-- Page Hero -->
        <section class="relative bg-primary overflow-hidden">
            <div class="absolute inset-0 opacity-20"><img src="images/pfa-img1.jpg" alt="" class="w-full h-full object-cover" /></div>
            <div class="absolute inset-0 bg-gradient-to-r from-primary via-primary/90 to-primary/60"></div>
            <div class="relative max-w-7xl mx-auto px-6 md:px-8 py-20 md:py-28">
                <div class="flex items-center gap-2 text-secondary-fixed text-xs font-bold uppercase tracking-widest mb-4">
                    <a href="about.html" class="hover:text-amber-300 transition-colors">About</a>
                    <span class="material-symbols-outlined text-sm">chevron_right</span>
                    <span>Leadership</span>
                </div>
                <h1 class="text-4xl md:text-6xl font-extrabold text-white font-headline mb-4">Presidents of the PFA</h1>
                <p class="text-on-primary-container text-lg max-w-xl">A legacy of visionary leadership spanning over six decades of shaping Philippine finance.</p>
            </div>
        </section>

        <!-- Current President Feature -->
        <section class="bg-surface-container-low py-20">
            <div class="max-w-7xl mx-auto px-6 md:px-8">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-center">
                    <div class="md:col-span-4 relative reveal">
                        <div class="aspect-[4/5] rounded-2xl overflow-hidden shadow-2xl shadow-primary/20">
                            <img src="images/carlo3.jpg" alt="Carlo Enrico B. Lazatin" class="w-full h-full object-cover" />
                            <div class="absolute inset-0 bg-gradient-to-t from-primary/50 to-transparent"></div>
                        </div>
                        <div class="absolute -bottom-4 -right-4 w-24 h-24 bg-amber-400/20 rounded-xl -z-10"></div>
                    </div>
                    <div class="md:col-span-8 reveal reveal-delay-1">
                        <span class="inline-block px-3 py-1 rounded-full bg-amber-400 text-primary text-xs font-bold tracking-widest uppercase mb-6">Current President &middot; 2022&ndash;Present</span>
                        <h2 class="text-4xl md:text-5xl font-extrabold text-primary font-headline mb-4">Carlo Enrico B. Lazatin</h2>
                        <p class="text-on-surface-variant text-lg leading-relaxed mb-4">A finance leader with extensive experience in lending and financial services. As President of PFA and DES Financing Corporation, he drives financial inclusion, industry standards, and sustainable growth across the Philippine financing ecosystem.</p>
                        <p class="text-on-surface-variant leading-relaxed">Committed to building a more inclusive and resilient financial sector, his leadership emphasizes expanding access to fair and transparent financing, strengthening trust between financial institutions and communities, and encouraging innovation while maintaining regulatory discipline.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Timeline -->
        <section class="bg-surface-container-low py-20">
            <div class="max-w-5xl mx-auto px-6 md:px-8">
                <div class="text-center mb-16 reveal">
                    <span class="text-secondary font-headline uppercase tracking-widest text-sm mb-4 block">Leadership Legacy</span>
                    <h2 class="text-4xl font-headline font-bold text-primary mb-4">Former Presidents</h2>
                    <p class="text-on-surface-variant max-w-xl mx-auto">A legacy of visionary leadership spanning over six decades of shaping Philippine finance.</p>
                </div>
                <div class="relative">
                    <div class="absolute left-1/2 -translate-x-1/2 top-0 bottom-0 w-0.5 bg-outline-variant/40 hidden md:block"></div>
                    <div class="absolute left-6 top-0 bottom-0 w-0.5 bg-outline-variant/40 md:hidden"></div>
