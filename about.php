<?php
$activePage = 'about';
$pageTitle  = 'About Us | Philippine Finance Association';
?>
<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;700;800&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode:"class",
            theme:{extend:{colors:{
                "surface-tint":"#415f8f","surface-container-high":"#e2e8f8","on-secondary-fixed-variant":"#594325",
                "on-primary-fixed-variant":"#284775","on-secondary":"#ffffff","tertiary":"#111518",
                "surface-container-highest":"#dce2f3","on-primary":"#ffffff","inverse-surface":"#2a313d",
                "secondary-fixed":"#ffddb6","outline-variant":"#c4c6d0","on-primary-fixed":"#001b3d",
                "on-tertiary-fixed-variant":"#44474b","surface-container":"#e7eefe","on-surface":"#151c27",
                "on-secondary-fixed":"#291801","surface":"#f9f9ff","inverse-primary":"#aac7fd",
                "primary-container":"#002855","on-surface-variant":"#43474f","tertiary-fixed":"#e1e2e7",
                "tertiary-fixed-dim":"#c4c6cb","surface-variant":"#dce2f3","on-error-container":"#93000a",
                "error":"#ba1a1a","primary":"#001430","surface-container-lowest":"#ffffff",
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
<body class="bg-surface font-body text-on-surface antialiased">

    <?php include 'includes/nav.php'; ?>

    <main class="pt-20">

        <!-- ── Hero ───────────────────────────────────────────── -->
        <section class="bg-background py-24 md:py-32 overflow-hidden">
            <div class="max-w-7xl mx-auto px-8">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-center">
                    <div class="md:col-span-7 reveal">
                        <span class="text-secondary font-headline uppercase tracking-widest text-sm mb-4 block">Our Story</span>
                        <h1 class="text-5xl md:text-7xl font-headline font-extrabold tracking-tighter text-primary mb-8 leading-none">
                            Since 1962.<br /><span class="text-editorial-gradient">Built to Last.</span>
                        </h1>
                        <p class="text-on-surface-variant max-w-xl leading-relaxed mb-8">
                            The Philippine Finance Association (PFA), formerly known as the Philippine Association of Finance Companies (PAFCI), is a major advocate of change and development in the financing and leasing industry since its establishment in 1962.
                        </p>
                        <div class="flex gap-4">
                            <a href="#timeline" class="px-8 py-4 bg-primary text-on-primary rounded-md font-medium hover:opacity-90 transition-opacity">
                                Explore Our Timeline
                            </a>
                            <a href="#mission" class="px-8 py-4 border border-primary text-primary rounded-md font-medium hover:bg-surface-container transition-colors">
                                Our Mission
                            </a>
                        </div>
                    </div>
                    <div class="md:col-span-5 relative reveal reveal-delay-1">
                        <div class="aspect-[4/5] bg-surface-container-low rounded-xl overflow-hidden shadow-2xl shadow-blue-900/10">
                            <img class="w-full h-full object-cover grayscale brightness-90 hover:scale-105 transition-transform duration-700"
                                alt="Makati skyline" src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=800&q=80" />
                        </div>
                        <div class="absolute -bottom-6 -left-6 bg-secondary-container p-8 rounded-lg hidden md:block">
                            <span class="text-4xl font-headline font-bold text-on-secondary-container">1962</span>
                            <p class="text-xs uppercase tracking-widest text-on-secondary-container mt-1">Est. Year</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── Mission & Vision ───────────────────────────────── -->
        <section id="mission" class="bg-surface-container-low py-24">
            <div class="max-w-7xl mx-auto px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="md:col-span-2 bg-surface-container-lowest p-12 rounded-xl flex flex-col justify-center reveal">
                        <span class="material-symbols-outlined text-secondary text-4xl mb-6">visibility</span>
                        <h2 class="text-3xl font-headline font-bold text-primary mb-6">Our Vision</h2>
                        <p class="text-xl text-on-surface-variant leading-relaxed">
                            
                        </p>
                    </div>
                    <div class="bg-primary text-on-primary p-12 rounded-xl flex flex-col justify-end reveal reveal-delay-1">
                        <span class="material-symbols-outlined text-secondary-fixed text-4xl mb-6">flag</span>
                        <h2 class="text-2xl font-headline font-bold mb-4">The Mission</h2>
                        <p class="text-sm text-on-primary-container leading-relaxed">
                            
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── Key Contributions ──────────────────────────────── -->
        <section id="contributions" class="bg-background py-24">
            <div class="max-w-7xl mx-auto px-8">
                <div class="flex flex-col md:flex-row justify-between items-end mb-16 border-b border-outline-variant/15 pb-8 reveal">
                    <h2 class="text-4xl font-headline font-bold text-primary">Key Contributions</h2>
                    <p class="text-on-surface-variant max-w-sm text-right hidden md:block italic">"Shaping the industry since 1962."</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                    <?php
                    $values = [
                        ['01','',''],
                        ['02','',''],
                        ['03','','.'],
                        ['04','',''],
                    ];
                    foreach ($values as $i => $v):
                        $delay = $i > 0 ? " reveal-delay-{$i}" : '';
                    ?>
                    <div class="group reveal<?= $delay ?>">
                        <div class="text-5xl font-headline font-light text-secondary mb-4 opacity-50 group-hover:opacity-100 transition-opacity"><?= $v[0] ?></div>
                        <h3 class="text-xl font-bold mb-2"><?= $v[1] ?></h3>
                        <p class="text-sm text-on-surface-variant leading-relaxed"><?= $v[2] ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- ── Presidents Timeline ────────────────────────────── -->
        <section id="timeline" class="bg-surface-container-low py-24">
            <div class="max-w-5xl mx-auto px-8">
                <div class="text-center mb-16 reveal">
                    <span class="text-secondary font-headline uppercase tracking-widest text-sm mb-4 block">Leadership Legacy</span>
                    <h2 class="text-4xl font-headline font-bold text-primary mb-4">Presidents of the PFA</h2>
                    <p class="text-on-surface-variant max-w-xl mx-auto">A legacy of visionary leadership spanning over six decades of shaping Philippine finance.</p>
                </div>

                <!-- Vertical Timeline -->
                <div class="relative">
                    <!-- Center line -->
                    <div class="absolute left-1/2 -translate-x-1/2 top-0 bottom-0 w-0.5 bg-outline-variant/40 hidden md:block"></div>
                    <!-- Mobile left line -->
                    <div class="absolute left-6 top-0 bottom-0 w-0.5 bg-outline-variant/40 md:hidden"></div>

                    <?php
                    $presidents = [
                        ['term'=>'1984–1986','name'=>'Atty. Rodolfo N. Publico','role'=>'Former President','desc'=>'','side'=>'left','current'=>false],
                        ['term'=>'1986–1988','name'=>'Jose Vito Borromeo','role'=>'Former President','desc'=>'','side'=>'right','current'=>false],
                        ['term'=>'1988–1990','name'=>'Estelito C. Casal','role'=>'Former President','desc'=>'','side'=>'left','current'=>false],
                        ['term'=>'1990–1992','name'=>'Eduardo R. Alvarez','role'=>'Former President','desc'=>'','side'=>'right','current'=>false],
                        ['term'=>'1992–1994','name'=>'Antonio P. Tecson','role'=>'Former President','desc'=>'','side'=>'left','current'=>false],
                        ['term'=>'1994–1996','name'=>'Ricardo M. Lazatin','role'=>'Former President','desc'=>'','side'=>'right','current'=>false],
                        ['term'=>'1996–1998','name'=>'Roberto C. Galang','role'=>'Former President','desc'=>'','side'=>'left','current'=>false],
                        ['term'=>'1998–2000','name'=>'Ricardo M. Dela Torre','role'=>'Former President','desc'=>'','side'=>'right','current'=>false],
                        ['term'=>'2000–2002','name'=>'Evangeline C. Escobillo','role'=>'Former President','desc'=>'','side'=>'left','current'=>false],
                        ['term'=>'2002–2004','name'=>'Vicente L. Ramirez','role'=>'Former President','desc'=>'','side'=>'right','current'=>false],
                        ['term'=>'2004–2006','name'=>'Manuel P. Tiaogui','role'=>'Former President','desc'=>'','side'=>'left','current'=>false],
                        ['term'=>'2006–2008','name'=>'Cesar A. Tejada','role'=>'Former President','desc'=>'','side'=>'right','current'=>false],
                        ['term'=>'2008–2010','name'=>'Elizabeth L. Garcia','role'=>'Former President','desc'=>'','side'=>'left','current'=>false],
                        ['term'=>'2010–2012','name'=>'Manuel P. Tiaoqui','role'=>'Former President','desc'=>'','side'=>'right','current'=>false],
                        ['term'=>'2012–2014','name'=>'Protacio C. Bantayan Jr.','role'=>'Former President','desc'=>'','side'=>'left','current'=>false],
                        ['term'=>'2014–2016','name'=>'Manuel H. Lopez','role'=>'Former President','desc'=>'','side'=>'right','current'=>false],
                        ['term'=>'2016–2017','name'=>'Rosario B. Villangca','role'=>'Former President','desc'=>'','side'=>'left','current'=>false],
                        ['term'=>'2017–2018','name'=>'Carmen V.F. Serina','role'=>'Former President','desc'=>'','side'=>'right','current'=>false],
                        ['term'=>'2018–2019','name'=>'Henry S. Valdez','role'=>'Former President','desc'=>'','side'=>'left','current'=>false],
                        ['term'=>'2019–2020','name'=>'Danilo T. Reyes','role'=>'Former President','desc'=>'','side'=>'right','current'=>false],
                        ['term'=>'2020–2021','name'=>'Conrad G. Marty','role'=>'Former President','desc'=>'','side'=>'left','current'=>false],
                        ['term'=>'2021–2021','name'=>'Leonardo G. Serrano Jr.','role'=>'Former President','desc'=>'','side'=>'right','current'=>false],
                        ['term'=>'2021–2022','name'=>'Alfonso C. Tanseco','role'=>'Former President','desc'=>'','side'=>'left','current'=>false],
                        ['term'=>'2022–2022','name'=>'Agerico S. Verzola','role'=>'Former President','desc'=>'','side'=>'right','current'=>false],
                        ['term'=>'2022–2022','name'=>'Arnaldo S. Bacabac Jr.','role'=>'Former President','desc'=>'','side'=>'left','current'=>false],
                        ['term'=>'2022–2022','name'=>'Atty. Jude R. Romano','role'=>'Former President','desc'=>'','side'=>'right','current'=>false],
                        ['term'=>'2022–Present','name'=>'Carlo Enrico B. Lazatin','role'=>'President — Current','desc'=>'The current president of PFA, Lazatin has set an ambitious agenda anchored on three pillars: Transparency, Digital Transformation, and Sustainable Investment.','side'=>'left','current'=>true],
                    ];

                    foreach (array_reverse($presidents) as $i => $p):
                        $isLeft  = $p['side'] === 'left';
                        $delay   = ($i % 3) + 1;
                    ?>
                    <div class="relative flex items-start mb-12 md:mb-0 reveal reveal-delay-<?= $delay ?>">

                        <!-- Mobile layout -->
                        <div class="md:hidden flex items-start w-full pl-14">
                            <!-- Dot on mobile line -->
                            <div class="absolute left-[18px] top-3 w-4 h-4 rounded-full border-2 <?= $p['current'] ? 'bg-amber-400 border-amber-400' : 'bg-white border-primary' ?> z-10 shadow"></div>
                            <div class="<?= $p['current'] ? 'bg-primary text-on-primary' : 'bg-surface-container-lowest' ?> rounded-xl p-6 shadow-sm w-full mb-8">
                                <span class="text-xs font-bold <?= $p['current'] ? 'text-secondary-fixed' : 'text-secondary' ?> uppercase tracking-widest"><?= $p['term'] ?></span>
                                <h3 class="text-xl font-bold <?= $p['current'] ? 'text-white' : 'text-primary' ?> mt-1 mb-1 font-headline"><?= $p['name'] ?></h3>
                                <p class="text-xs <?= $p['current'] ? 'text-on-primary-container' : 'text-secondary' ?> uppercase tracking-widest font-semibold mb-3"><?= $p['role'] ?></p>
                                <p class="text-sm <?= $p['current'] ? 'text-on-primary-container' : 'text-on-surface-variant' ?> leading-relaxed"><?= $p['desc'] ?></p>
                            </div>
                        </div>

                        <!-- Desktop layout -->
                        <div class="hidden md:grid grid-cols-2 w-full gap-0 py-8">
                            <?php if ($isLeft): ?>
                            <!-- Card on left -->
                            <div class="pr-12 flex justify-end">
                                <div class="<?= $p['current'] ? 'bg-primary text-on-primary' : 'bg-surface-container-lowest' ?> rounded-xl p-8 shadow-sm max-w-sm w-full hover:shadow-md transition-shadow">
                                    <span class="text-xs font-bold <?= $p['current'] ? 'text-secondary-fixed' : 'text-secondary' ?> uppercase tracking-widest"><?= $p['term'] ?></span>
                                    <h3 class="text-xl font-bold <?= $p['current'] ? 'text-white' : 'text-primary' ?> mt-1 mb-1 font-headline"><?= $p['name'] ?></h3>
                                    <p class="text-xs <?= $p['current'] ? 'text-on-primary-container' : 'text-secondary' ?> uppercase tracking-widest font-semibold mb-3"><?= $p['role'] ?></p>
                                    <p class="text-sm <?= $p['current'] ? 'text-on-primary-container' : 'text-on-surface-variant' ?> leading-relaxed"><?= $p['desc'] ?></p>
                                </div>
                            </div>
                            <!-- Dot + empty right -->
                            <div class="pl-12 flex items-start pt-10">
                                <div class="absolute left-1/2 -translate-x-1/2 top-auto mt-10 w-5 h-5 rounded-full border-2 <?= $p['current'] ? 'bg-amber-400 border-amber-400 shadow-lg shadow-amber-400/40' : 'bg-white border-primary' ?> z-10 shadow" style="margin-top:2.5rem"></div>
                            </div>
                            <?php else: ?>
                            <!-- Empty left + dot -->
                            <div class="pr-12 flex justify-end items-start pt-10">
                                <div class="absolute left-1/2 -translate-x-1/2 w-5 h-5 rounded-full border-2 <?= $p['current'] ? 'bg-amber-400 border-amber-400 shadow-lg shadow-amber-400/40' : 'bg-white border-primary' ?> z-10 shadow" style="margin-top:2.5rem"></div>
                            </div>
                            <!-- Card on right -->
                            <div class="pl-12">
                                <div class="<?= $p['current'] ? 'bg-primary text-on-primary' : 'bg-surface-container-lowest' ?> rounded-xl p-8 shadow-sm max-w-sm w-full hover:shadow-md transition-shadow">
                                    <span class="text-xs font-bold <?= $p['current'] ? 'text-secondary-fixed' : 'text-secondary' ?> uppercase tracking-widest"><?= $p['term'] ?></span>
                                    <h3 class="text-xl font-bold <?= $p['current'] ? 'text-white' : 'text-primary' ?> mt-1 mb-1 font-headline"><?= $p['name'] ?></h3>
                                    <p class="text-xs <?= $p['current'] ? 'text-on-primary-container' : 'text-secondary' ?> uppercase tracking-widest font-semibold mb-3"><?= $p['role'] ?></p>
                                    <p class="text-sm <?= $p['current'] ? 'text-on-primary-container' : 'text-on-surface-variant' ?> leading-relaxed"><?= $p['desc'] ?></p>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- ── Current Leadership ─────────────────────────────── -->
        <section class="bg-surface-container-low py-32">
            <div class="max-w-7xl mx-auto px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                    <div class="relative group reveal">
                        <div class="aspect-square bg-surface-container-highest rounded-xl overflow-hidden relative z-10">
                            <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-1000"
                                alt="President Carlo Enrico B. Lazatin" src="images/carlo3.jpg" />
                        </div>
                        <div class="absolute -top-10 -right-10 w-full h-full border border-secondary/20 rounded-xl -z-0"></div>
                    </div>
                    <div class="reveal reveal-delay-1">
                        <span class="text-secondary font-headline uppercase tracking-widest text-sm mb-4 block">Current Leadership</span>
                        <h2 class="text-4xl md:text-5xl font-headline font-bold text-primary mb-2">Carlo Enrico B. Lazatin</h2>
                        <p class="text-on-secondary-container font-headline uppercase tracking-widest text-xs mb-8">President, Philippine Finance Association · 2022–Present</p>
                        <div class="space-y-4 text-on-surface-variant leading-relaxed">
                            <p>The youngest president in PFA history, Mr. Lazatin brings a fresh perspective rooted in digital innovation and sustainable finance. A graduate of the Ateneo de Manila University and Harvard Business School, he has spent over two decades in the Philippine financial sector.</p>
                            <p>Under his stewardship, PFA has embarked on a journey of technological modernization while reinforcing its historical roots in stability. His "Sovereign Ledger" initiative reimagines the association as a digital-first curator of financial intelligence.</p>
                            <p>His 2024 induction speech at the Makati Diamond Residences outlined three pillars for his term: Transparency in regulatory reporting, Digital Transformation of member services, and Sustainable Investment frameworks aligned with global ESG standards.</p>
                        </div>
                        <!-- <div class="mt-10 grid grid-cols-3 gap-6">
                            <div class="text-center p-4 bg-surface-container-lowest rounded-xl">
                                <span class="text-2xl font-extrabold text-primary font-headline">2022</span>
                                <p class="text-xs text-on-surface-variant mt-1 uppercase tracking-widest">Took Office</p>
                            </div>
                            <div class="text-center p-4 bg-surface-container-lowest rounded-xl">
                                <span class="text-2xl font-extrabold text-primary font-headline">3</span>
                                <p class="text-xs text-on-surface-variant mt-1 uppercase tracking-widest">Key Pillars</p>
                            </div>
                            <div class="text-center p-4 bg-surface-container-lowest rounded-xl">
                                <span class="text-2xl font-extrabold text-primary font-headline">11th</span>
                                <p class="text-xs text-on-surface-variant mt-1 uppercase tracking-widest">President</p>
                            </div>
                        </div> -->
                    </div>
                </div>

                <!-- Board of Trustees -->
                <div class="mt-24 reveal">
                    <h3 class="text-2xl font-headline font-bold text-primary mb-10">Current Board of Trustees</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <?php
                        $trustees = [
                            ['name'=>'Carlo Enrico B. Lazatin','role'=>'President'],
                            ['name'=>'Atty. Jude R. Romano','role'=>'Executive Vice President (External Affairs)'],
                            ['name'=>'Rosario "Nini" Crisostomo','role'=>'Secretary'],
                            ['name'=>'Abigail Marie Casanova','role'=>'Treasurer'],
                            ['name'=>'Rowell Agustin','role'=>'Trustee'],
                            ['name'=>'Arnaldo Bacabac Jr.','role'=>'Trustee'],
                            ['name'=>'Maria Celia Eleazar','role'=>'Trustee'],
                            ['name'=>'Jose Jesus Custodio','role'=>'Trustee'],
                            ['name'=>'Arthem Edward Flor','role'=>'Trustee'],
                            ['name'=>'Anna Christina Vicente','role'=>'Trustee'],
                        ];
                        foreach ($trustees as $i => $t):
                            $delay = ($i % 3) + 1;
                        ?>
                        <div class="bg-surface-container-lowest p-8 rounded-xl shadow-sm hover:shadow-md transition-shadow reveal reveal-delay-<?= $delay ?>">
                            <div class="w-12 h-12 bg-surface-container-high rounded-full flex items-center justify-center mb-6">
                                <span class="material-symbols-outlined text-primary">person</span>
                            </div>
                            <h3 class="text-xl font-bold text-primary"><?= htmlspecialchars($t['name']) ?></h3>
                            <p class="text-secondary text-xs uppercase tracking-widest font-semibold mt-1"><?= htmlspecialchars($t['role']) ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Board of Directors (2024) -->
                <div class="mt-24 reveal">
                    <h3 class="text-2xl font-headline font-bold text-primary mb-2">PFA Officers &amp; Directors</h3>
                    <p class="text-on-surface-variant text-sm mb-10">From the 2024 PDF</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <?php
                        $directors = [
                            ['name'=>'Carlo Enrico B. Lazatin','role'=>'President','company'=>'DES Financing Corporation','title'=>'President & CEO'],
                            ['name'=>'Eillen B. Mangubat','role'=>'Executive Vice President','company'=>'Asialink Finance Corporation','title'=>'President & COO'],
                            ['name'=>'Atty. Maribel Dimayuga','role'=>'Corporate Secretary','company'=>'Toyota Financial Services Philippines','title'=>'Head for Compliance'],
                            ['name'=>'Ronald Roque L. Arambulo','role'=>'Treasurer','company'=>'BPI Century Tokyo Lease & Finance Corporation','title'=>'SVP & CFO'],
                            ['name'=>'Arnaldo S. Bacabac Jr.','role'=>'Director','company'=>'ORIX Metro Leasing & Finance Corporation','title'=>'EVP, Credit Group Head'],
                            ['name'=>'Benedict Carandang','role'=>'Director','company'=>'First Circle Growth Finance Corporation','title'=>'VP for External Relations'],
                            ['name'=>'Charito Cole-Alfaro','role'=>'Director','company'=>'First Industrial Finance Co. Inc.','title'=>'President & CEO'],
                            ['name'=>'Louie F. Nonesa','role'=>'Director','company'=>'CVM Finance & Credit Corporation','title'=>'President & COO'],
                            ['name'=>'Francisco M. Padilla III','role'=>'Director','company'=>'SB Finance Inc.','title'=>'Head for Compliance'],
                            ['name'=>'Peter Paul I. Rigor','role'=>'Director','company'=>'LBP Leasing & Finance Corporation','title'=>'VP, Account Management Group Head'],
                            ['name'=>'Atty. Jude R. Romano','role'=>'Director','company'=>'HC Consumer Finance Philippines Inc.','title'=>'Head for External Affairs'],
                        ];
                        foreach ($directors as $i => $d):
                            $delay = ($i % 3) + 1;
                        ?>
                        <div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow reveal reveal-delay-<?= $delay ?> flex gap-4 items-start">
                            <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="material-symbols-outlined text-on-primary text-base">person</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-primary"><?= htmlspecialchars($d['name']) ?></h4>
                                <p class="text-secondary text-xs uppercase tracking-widest font-semibold mt-0.5"><?= htmlspecialchars($d['role']) ?></p>
                                <p class="text-on-surface-variant text-sm mt-1"><?= htmlspecialchars($d['company']) ?></p>
                                <p class="text-on-surface-variant text-xs"><?= htmlspecialchars($d['title']) ?></p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- New Member Inducted 2024 -->
                    <div class="mt-12 bg-surface-container p-8 rounded-xl reveal">
                        <h4 class="text-lg font-bold text-primary mb-6">New Member Inducted (2024)</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="flex gap-4 items-start">
                                <div class="w-10 h-10 bg-secondary-container rounded-full flex items-center justify-center flex-shrink-0">
                                    <span class="material-symbols-outlined text-on-secondary-container text-base">person</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-primary">Lo Ping Hsieh</h4>
                                    <p class="text-secondary text-xs uppercase tracking-widest font-semibold mt-0.5">Chairman</p>
                                    <p class="text-on-surface-variant text-sm mt-1">Loan Star Lending Group Corporation</p>
                                </div>
                            </div>
                            <div class="flex gap-4 items-start">
                                <div class="w-10 h-10 bg-secondary-container rounded-full flex items-center justify-center flex-shrink-0">
                                    <span class="material-symbols-outlined text-on-secondary-container text-base">person</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-primary">Kristoffer John C. Dela Cruz</h4>
                                    <p class="text-secondary text-xs uppercase tracking-widest font-semibold mt-0.5">President / COO</p>
                                    <p class="text-on-surface-variant text-sm mt-1">Loan Star Lending Group Corporation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── Member Companies ───────────────────────────────── -->
        <section id="members" class="bg-background py-24">
            <div class="max-w-7xl mx-auto px-8">
                <div class="text-center mb-16 reveal">
                    <span class="text-secondary font-headline uppercase tracking-widest text-sm mb-4 block">Our Network</span>
                    <h2 class="text-4xl font-headline font-bold text-primary mb-4">Member Finance &amp; Leasing Companies</h2>
                    <p class="text-on-surface-variant max-w-xl mx-auto">A growing network of financing, leasing, and lending companies across the Philippines.</p>
                </div>
                <?php
                $members = [
                    '88 Asia Finance Corp.','ACOM Consumer Finance Corp.','AEON Credit Service (Philippines) Inc.',
                    'Algo Finance & Leasing Inc.','AND Financing Corporation','Argosy Finance Corp.',
                    'Asia Group Finance Corp.','Asia United Leasing & Finance Corp.','Asialink Finance Corp.',
                    'BDO Finance Corp.','Best Loan Credit Corp.','BOT Lease & Finance Phils. Inc.',
                    'BPI Century Tokyo Lease & Finance Corp.','Bukas Finance Corp.','Card Leasing & Finance Inc.',
                    'Caterpillar Financial Services Phils. Inc.','Cebu International Finance Corp.',
                    'Chailease Berjaya Finance Corp.','Cocolife Asset Management Co. Inc.',
                    'Comtrust Finance & Investment Corp.','Country Funders Finance Corp.','CV Finance Corp.',
                    'CVM Finance & Credit Corp.','DBP Leasing Corp.','DES Financing Corp.',
                    'Digido Finance Corporation','Encore Leasing & Finance Corp.','Esquire Financing Inc.',
                    'Fama Global Finance & Leasing Corp.','Filipino Financial Corp.','Finacore Technology Finance Inc.',
                    'First Circle Growth Finance Corp.','First Industrial Credit Co. Inc.','First Standard Finance Corp.',
                    'First United Finance & Leasing Corp.','Global Dominion Financing Inc.','Golden R&L Finance Corp.',
                    'Good Morning Finance Corp.','Good Provider Financing & Leasing Corp.','Home Credit Philippines',
                    'JACCS Finance Phils. Corp.','JK Capital Finance Inc.','LBP Leasing & Finance Corp.',
                    'League One Finance & Leasing Corp.','LOLC Finance Inc.','Macondray Finance Corp.',
                    'Makati Finance Corp.','Mapfrecrest Finance Corp.','MCC Money Shops Finance Co. Inc.',
                    'Novel Finance Co. Inc.','ORIX Metro Leasing & Finance Corp.','Paloo Financing Inc. (Cashalo)',
                    'PCCI Finance Corp.','Penta Capital Finance Corp.','Philippine Savings Bank',
                    'Prime Global Finance Corp.','Puregold Finance Corp.','Radiowealth Finance Corp.',
                    'RCBC Leasing & Finance Corp.','Rykom Financing Corporation','SB Finance Company Inc.',
                    'SBM Leasing Inc.','Snapworks Credit & Finance Corp.','South Asialink Finance Corp.',
                    'Streetcorner Finance Co. Inc.','Summit Leasing & Finance Corp.',
                    'Toyota Financial Services Phils. Corp.','UCPB Leasing & Finance Corp.',
                    'Unicapital Finance & Investments Inc.','Unistar Credit & Finance Corp.',
                    'Universal LMS Finance & Leasing Corp.','USSC Finance Corp.','Ventures Credit Inc.',
                    'Welcome Finance Inc.','Y Finance Inc.','Yulon Finance Philippines Corp.',
                    'Accutrust Lending Inc.','Destiny Lendfund Inc.','Easyfund Lending Investor Corp.',
                    'Fuse Lending Inc.','Phil Lending 101 Corp.','Streetcorner Lending Corp.',
                ];
                ?>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-3 reveal">
                    <?php foreach ($members as $m): ?>
                    <div class="bg-surface-container-lowest border border-outline-variant/20 rounded-lg px-4 py-3 text-sm text-on-surface hover:bg-surface-container transition-colors">
                        <?= htmlspecialchars($m) ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- ── Membership CTA ─────────────────────────────────── -->
        <section id="membership" class="py-24 bg-primary text-on-primary text-center reveal">
            <div class="max-w-4xl mx-auto px-8">
                <h2 class="text-3xl md:text-5xl font-headline font-bold mb-8">Shape the Future of Finance.</h2>
                <p class="text-on-primary-container text-lg mb-12">
                    Join an elite collective of professionals dedicated to the advancement of the Philippine economy.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-6">
                    <!-- <a href="mailto:secretariat@pfa.org.ph" class="bg-secondary-container text-on-secondary-container px-10 py-4 rounded-md font-bold hover:brightness-110 transition-all">
                        Apply for Membership
                    </a> -->
                    <a href="mailto:secretariat@pfa.org.ph" class="border border-on-primary-container text-on-primary-container px-10 py-4 rounded-md font-bold hover:bg-white/10 transition-all">
                        Contact Secretariat
                    </a>
                </div>
            </div>
        </section>

    </main>

    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/main.js"></script>
</body>
</html>
