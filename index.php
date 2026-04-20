<?php
$activePage = 'home';
$pageTitle  = 'Philippine Finance Association | PFA';
?>
<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "on-secondary": "#ffffff",
                        "surface-container-high": "#e2e8f8",
                        "surface-container-lowest": "#ffffff",
                        "on-primary-container": "#7490c3",
                        "on-tertiary-fixed": "#191c1f",
                        "on-error-container": "#93000a",
                        "outline-variant": "#c4c6d0",
                        "inverse-on-surface": "#ebf1ff",
                        "surface-container-low": "#f0f3ff",
                        "error": "#ba1a1a",
                        "secondary-container": "#fddab2",
                        "tertiary-fixed": "#e1e2e7",
                        "on-secondary-fixed-variant": "#594325",
                        "primary-container": "#002855",
                        "surface-container-highest": "#dce2f3",
                        "surface-tint": "#415f8f",
                        "secondary-fixed-dim": "#e2c19b",
                        "on-surface-variant": "#43474f",
                        "secondary-fixed": "#fddab2",
                        "surface-container": "#e7eefe",
                        "secondary": "#735a3a",
                        "on-tertiary": "#ffffff",
                        "surface-bright": "#f9f9ff",
                        "on-secondary-container": "#785e3e",
                        "surface": "#f9f9ff",
                        "on-primary-fixed-variant": "#284775",
                        "on-tertiary-fixed-variant": "#44474b",
                        "tertiary-container": "#26292d",
                        "on-error": "#ffffff",
                        "on-secondary-fixed": "#291801",
                        "surface-variant": "#dce2f3",
                        "tertiary": "#111518",
                        "on-primary": "#ffffff",
                        "surface-dim": "#d3daea",
                        "background": "#f9f9ff",
                        "primary": "#001430",
                        "on-primary-fixed": "#001b3d",
                        "on-surface": "#151c27",
                        "error-container": "#ffdad6",
                        "tertiary-fixed-dim": "#c4c6cb",
                        "on-background": "#151c27",
                        "primary-fixed-dim": "#aac7fd",
                        "outline": "#747780",
                        "inverse-surface": "#2a313d",
                        "inverse-primary": "#aac7fd",
                        "primary-fixed": "#d6e3ff",
                        "on-tertiary-container": "#8d9094",
                    },
                    borderRadius: {
                        DEFAULT: "0.125rem",
                        lg: "0.25rem",
                        xl: "0.5rem",
                        full: "0.75rem",
                    },
                    fontFamily: {
                        headline: ["Manrope"],
                        body: ["Inter"],
                        label: ["Inter"],
                    },
                },
            },
        };
    </script>
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body class="bg-background text-on-background selection:bg-secondary-fixed selection:text-on-secondary-fixed">

    <?php include 'includes/nav.php'; ?>

    <main class="pt-20">

        <!-- ── Hero Carousel ──────────────────────────────────── -->
        <section class="hero-carousel relative" aria-label="Hero carousel">

            <!-- Slide 1 -->
            <div class="hero-slide" style="background-image: linear-gradient(to right, rgba(0,20,48,0.85) 50%, rgba(0,20,48,0.3) 100%), url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=1600&q=80');">
                <div class="max-w-7xl mx-auto px-6 md:px-8 w-full grid grid-cols-1 md:grid-cols-12 gap-12 items-center py-24 md:py-0" style="min-height:795px;">
                    <div class="md:col-span-7 pt-12 md:pt-0">
                        <span class="inline-block py-1 px-3 rounded-full bg-secondary-fixed text-on-secondary-fixed text-xs font-bold tracking-widest uppercase mb-6">Leadership Announcement</span>
                        <h1 class="text-5xl md:text-7xl font-extrabold text-white font-headline leading-[1.1] tracking-tight mb-8">
                            Carlo Enrico B. Lazatin as the <span class="text-primary-fixed-dim">New President</span> of PFA
                        </h1>
                        <p class="text-lg md:text-xl text-slate-300 max-w-xl leading-relaxed mb-10">
                            Ushering in a new chapter of financial excellence and institutional integrity for the Philippine financial landscape.
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <a href="news.php?id=1" class="bg-white text-primary px-8 py-4 rounded-lg font-bold hover:scale-[1.02] active:scale-95 transition-all">Read the Announcement</a>
                            <a href="about.php#mission" class="bg-white/10 text-white px-8 py-4 rounded-lg font-bold border border-white/20 hover:bg-white/20 transition-all">Our Mission</a>
                        </div>
                    </div>
                    <div class="md:col-span-5 relative hidden md:block">
                        <div class="aspect-[4/5] rounded-2xl overflow-hidden shadow-2xl shadow-primary/20 bg-surface-container-high relative">
                            <img alt="President Carlo Enrico B. Lazatin" class="w-full h-full object-cover contrast-125" src="images/carlo3.jpg" />
                            <div class="absolute inset-0 bg-gradient-to-t from-primary/40 to-transparent"></div>
                        </div>
                        <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-secondary-container rounded-xl -z-10"></div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="hero-slide" style="background-image: linear-gradient(to right, rgba(0,20,48,0.88) 55%, rgba(0,20,48,0.4) 100%), url('https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?w=1600&q=80');">
                <div class="max-w-7xl mx-auto px-6 md:px-8 w-full py-24 md:py-0 flex items-center" style="min-height:795px;">
                    <div class="max-w-2xl">
                        <span class="inline-block py-1 px-3 rounded-full bg-amber-400 text-primary text-xs font-bold tracking-widest uppercase mb-6">Economic Outlook</span>
                        <h1 class="text-5xl md:text-7xl font-extrabold text-white font-headline leading-[1.1] tracking-tight mb-8">
                            6.2% GDP Growth <span class="text-amber-400">Projected</span> for 2024
                        </h1>
                        <p class="text-lg md:text-xl text-slate-300 max-w-xl leading-relaxed mb-10">
                            PFA economists forecast robust expansion driven by financial technology adoption and sustained consumer spending recovery.
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <a href="news.php?id=2" class="bg-amber-400 text-primary px-8 py-4 rounded-lg font-bold hover:scale-[1.02] active:scale-95 transition-all">Download Report</a>
                            <a href="news.php" class="bg-white/10 text-white px-8 py-4 rounded-lg font-bold border border-white/20 hover:bg-white/20 transition-all">View Analysis</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="hero-slide" style="background-image: linear-gradient(to right, rgba(0,20,48,0.88) 55%, rgba(0,20,48,0.4) 100%), url('https://images.unsplash.com/photo-1521737604893-d14cc237f11d?w=1600&q=80');">
                <div class="max-w-7xl mx-auto px-6 md:px-8 w-full py-24 md:py-0 flex items-center" style="min-height:795px;">
                    <div class="max-w-2xl">
                        <span class="inline-block py-1 px-3 rounded-full bg-secondary-fixed text-on-secondary-fixed text-xs font-bold tracking-widest uppercase mb-6">Strategic Framework</span>
                        <h1 class="text-5xl md:text-7xl font-extrabold text-white font-headline leading-[1.1] tracking-tight mb-8">
                            Shaping the Future of <span class="text-primary-fixed-dim">Philippine Finance</span>
                        </h1>
                        <p class="text-lg md:text-xl text-slate-300 max-w-xl leading-relaxed mb-10">
                            Three pillars driving our 2024–2026 agenda: Transparency, Digital Transformation, and Sustainable Investment.
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <a href="about.php#contributions" class="bg-white text-primary px-8 py-4 rounded-lg font-bold hover:scale-[1.02] active:scale-95 transition-all">Our Framework</a>
                            <a href="about.php#membership" class="bg-white/10 text-white px-8 py-4 rounded-lg font-bold border border-white/20 hover:bg-white/20 transition-all">Join PFA</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 4 -->
            <div class="hero-slide" style="background-image: linear-gradient(to right, rgba(0,20,48,0.88) 55%, rgba(0,20,48,0.4) 100%), url('https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=1600&q=80');">
                <div class="max-w-7xl mx-auto px-6 md:px-8 w-full py-24 md:py-0 flex items-center" style="min-height:795px;">
                    <div class="max-w-2xl">
                        <span class="inline-block py-1 px-3 rounded-full bg-amber-400 text-primary text-xs font-bold tracking-widest uppercase mb-6">Membership</span>
                        <h1 class="text-5xl md:text-7xl font-extrabold text-white font-headline leading-[1.1] tracking-tight mb-8">
                            Join an Elite Network of <span class="text-amber-400">Finance Leaders</span>
                        </h1>
                        <p class="text-lg md:text-xl text-slate-300 max-w-xl leading-relaxed mb-10">
                            Gain access to exclusive research, policy forums, and a community of top financial professionals across the Philippines.
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <a href="about.php#membership" class="bg-amber-400 text-primary px-8 py-4 rounded-lg font-bold hover:scale-[1.02] active:scale-95 transition-all">Request Membership</a>
                            <a href="about.php" class="bg-white/10 text-white px-8 py-4 rounded-lg font-bold border border-white/20 hover:bg-white/20 transition-all">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-arrow prev" aria-label="Previous slide"><span class="material-symbols-outlined">chevron_left</span></button>
            <button class="carousel-arrow next" aria-label="Next slide"><span class="material-symbols-outlined">chevron_right</span></button>
            <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex gap-2 z-20">
                <button class="carousel-dot" aria-label="Slide 1"></button>
                <button class="carousel-dot" aria-label="Slide 2"></button>
                <button class="carousel-dot" aria-label="Slide 3"></button>
                <button class="carousel-dot" aria-label="Slide 4"></button>
            </div>
        </section>

        <!-- ── Introduction ───────────────────────────────────── -->
        <section class="py-24 bg-surface-container-low">
            <div class="max-w-7xl mx-auto px-6 md:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-start">
                    <div class="reveal">
                        <h2 class="text-3xl md:text-4xl font-bold text-primary font-headline leading-tight mb-6">
                            The Oldest Professional Association for Financing, Leasing &amp; Lending
                        </h2>
                        <div class="w-20 h-1.5 bg-secondary-fixed mb-8"></div>
                        <div class="flex gap-8 mt-4">
                            <div>
                                <span class="text-4xl font-extrabold text-primary font-headline">1962</span>
                                <p class="text-xs uppercase tracking-widest text-on-surface-variant mt-1">Established</p>
                            </div>
                            <div>
                                <span class="text-4xl font-extrabold text-primary font-headline">4,000+</span>
                                <p class="text-xs uppercase tracking-widest text-on-surface-variant mt-1">Member Companies</p>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-6 reveal reveal-delay-1">
                        <p class="text-xl text-on-primary-fixed-variant leading-relaxed font-medium">
                            The Philippine Finance Association (PFA) is the oldest and only professional association for financing, leasing, and lending in the Philippines — established in 1962 by prominent industry pioneers John Gokongwei, Vincent Recto, Andrew Gotianun, Jose Orosa, and Quirino Camus Jr.
                        </p>
                        <p class="text-on-surface-variant leading-relaxed">
                            PFA was instrumental in passing landmark legislation including the Financing Company Act (RA 8556) of 1998, the Lease Revenue Regulations, and the original Financing Act (RA 5980) of 1969. Today, the industry comprises over 4,000 financing and lending companies.
                        </p>
                        <a href="about.php" class="inline-flex items-center gap-2 text-primary font-bold hover:gap-4 transition-all">
                            Learn more about PFA <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── Recent Developments ────────────────────────────── -->
        <!-- <section class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-6 md:px-8">
                <div class="flex justify-between items-end mb-12 reveal">
                    <div>
                        <h3 class="text-sm font-bold text-secondary uppercase tracking-[0.2em] mb-4">The Ledger</h3>
                        <h2 class="text-4xl font-bold text-primary font-headline">Recent Developments</h2>
                    </div>
                    <a class="hidden md:flex items-center gap-2 text-primary font-bold hover:gap-4 transition-all" href="news.php">
                        View all News <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <a href="news.php?id=1" class="md:col-span-2 bg-surface-container-low rounded-2xl p-8 flex flex-col justify-between group cursor-pointer transition-all hover:bg-surface-container-high reveal reveal-delay-1">
                        <div>
                            <span class="text-xs font-bold text-secondary-fixed-dim bg-primary px-3 py-1 rounded-full mb-6 inline-block">Breaking</span>
                            <h3 class="text-3xl font-bold text-primary font-headline mb-4 group-hover:text-on-primary-fixed-variant transition-colors">
                                Lazatin Outlines 2024 Vision during Induction Ceremony
                            </h3>
                            <p class="text-on-surface-variant leading-relaxed mb-8 max-w-xl">
                                At the Makati Diamond Residences, the new PFA President emphasized three pillars: Transparency, Digital Transformation, and Sustainable Investment.
                            </p>
                        </div>
                        <div class="flex items-center gap-4 text-sm font-semibold text-slate-500">
                            <span>June 12, 2024</span>
                            <span class="w-1 h-1 bg-slate-400 rounded-full"></span>
                            <span>Institutional News</span>
                        </div>
                    </a>
                    <a href="news.php?id=2" class="bg-primary rounded-2xl p-8 text-on-primary relative overflow-hidden flex flex-col justify-end min-h-[300px] reveal reveal-delay-2 hover:opacity-90 transition-opacity">
                        <div class="absolute top-0 right-0 p-8 opacity-20">
                            <span class="material-symbols-outlined text-8xl">trending_up</span>
                        </div>
                        <h3 class="text-xl font-bold font-headline mb-4">Quarterly Economic Outlook Released</h3>
                        <p class="text-on-primary-container text-sm leading-relaxed mb-6">
                            PFA economists project a 6.2% GDP growth fueled by financial technology adoption.
                        </p>
                        <span class="text-secondary-fixed font-bold text-sm flex items-center gap-2">
                            Read More <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </span>
                    </a>
                </div>
            </div>
        </section> -->

        <!-- ── Strategic Framework ────────────────────────────── -->
        <section id="contributions" class="py-24 bg-surface-container-lowest">
            <div class="max-w-7xl mx-auto px-6 md:px-8">
                <div class="text-center max-w-2xl mx-auto mb-16 reveal">
                    <h2 class="text-4xl font-bold text-primary font-headline mb-4">Our Contributions to the Industry</h2>
                    <p class="text-on-surface-variant">Since 1962, PFA has been a driving force behind the growth and regulation of financing, leasing, and lending in the Philippines.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-surface rounded-2xl p-10 border border-outline-variant/10 shadow-sm hover:shadow-xl transition-all duration-300 reveal reveal-delay-1">
                        <div class="w-16 h-16 bg-surface-container-high rounded-xl flex items-center justify-center mb-8">
                            <span class="material-symbols-outlined text-primary text-3xl">database</span>
                        </div>
                        <h4 class="text-xl font-bold text-primary font-headline mb-4"></h4>
                        <p class="text-on-surface-variant leading-relaxed mb-6"></p>
                        <div class="h-1 w-12 bg-secondary-container"></div>
                    </div>
                    <div class="bg-surface rounded-2xl p-10 border border-outline-variant/10 shadow-sm hover:shadow-xl transition-all duration-300 reveal reveal-delay-2">
                        <div class="w-16 h-16 bg-surface-container-high rounded-xl flex items-center justify-center mb-8">
                            <span class="material-symbols-outlined text-primary text-3xl">school</span>
                        </div>
                        <h4 class="text-xl font-bold text-primary font-headline mb-4"></h4>
                        <p class="text-on-surface-variant leading-relaxed mb-6"></p>
                        <div class="h-1 w-12 bg-secondary-container"></div>
                    </div>
                    <div class="bg-surface rounded-2xl p-10 border border-outline-variant/10 shadow-sm hover:shadow-xl transition-all duration-300 reveal reveal-delay-3">
                        <div class="w-16 h-16 bg-surface-container-high rounded-xl flex items-center justify-center mb-8">
                            <span class="material-symbols-outlined text-primary text-3xl">verified_user</span>
                        </div>
                        <h4 class="text-xl font-bold text-primary font-headline mb-4"></h4>
                        <p class="text-on-surface-variant leading-relaxed mb-6"></p>
                        <div class="h-1 w-12 bg-secondary-container"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── CTA ────────────────────────────────────────────── -->
        <section id="membership" class="py-24 overflow-hidden">
            <div class="max-w-7xl mx-auto px-6 md:px-8">
                <div class="bg-primary rounded-[2rem] p-8 md:p-20 relative overflow-hidden reveal">
                    <div class="relative z-10 max-w-2xl">
                        <h2 class="text-4xl md:text-5xl font-extrabold text-on-primary font-headline mb-6 leading-tight">
                            Shape the Future of <br />Philippine Finance
                        </h2>
                        <p class="text-on-primary-container text-lg mb-10 leading-relaxed">
                            Become a member of the Philippine Finance Association and gain access to exclusive research, policy forums, and a network of elite financial professionals.
                        </p>
                        <!-- <a href="about.php#membership" class="inline-block bg-secondary-fixed text-on-secondary-fixed px-10 py-5 rounded-lg font-bold text-lg hover:scale-[1.05] transition-transform shadow-lg">
                            Request Membership
                        </a> -->
                    </div>
                    <div class="absolute top-0 right-0 w-full md:w-1/2 h-full opacity-30 mix-blend-overlay pointer-events-none">
                        <img alt="Corporate architecture" class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=800&q=60" />
                    </div>
                    <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-secondary-container/20 blur-[100px] rounded-full"></div>
                </div>
            </div>
        </section>

    </main>

    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/main.js"></script>
</body>
</html>
