<?php
/**
 * Shared Navigation
 */
$activePage ??= '';

function navLink(string $href, string $label, string $page, string $activePage): string
{
    $isActive = $page === $activePage;
    $activeClass   = 'text-primary font-bold border-b-2 border-amber-500';
    $inactiveClass = 'text-slate-500 font-medium hover:text-primary transition-colors';
    $class = $isActive ? $activeClass : $inactiveClass;
    return "<a class=\"{$class} transition-colors\" href=\"{$href}\">{$label}</a>";
}
?>
<header class="fixed top-0 w-full z-50 bg-white/80 backdrop-blur-xl shadow-sm glass-nav">
    <div class="max-w-7xl mx-auto px-6 md:px-8 flex justify-between items-center h-20">
        <a href="index.php" class="flex items-center">
            <img src="images/pfa.png" alt="PFA Logo" class="h-12 w-auto">
        </a>

        <nav class="hidden md:flex items-center gap-8">
            <?= navLink('index.php',  'Home',  'home',  $activePage) ?>
            <?= navLink('about.php',  'About', 'about', $activePage) ?>
            <?= navLink('news.php',   'News',  'news',  $activePage) ?>
        </nav>

        <!-- Mobile hamburger -->
        <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg hover:bg-surface-container transition-colors" aria-label="Open menu">
            <span class="material-symbols-outlined text-primary">menu</span>
        </button>

        <a href="about.php#membership" class="hidden md:block bg-primary px-6 py-2.5 rounded-lg text-on-primary font-bold text-sm hover:opacity-90 transition-all shadow-lg shadow-primary/10">
            Join PFA
        </a>
    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-outline-variant/20 px-6 py-4 space-y-3">
        <a href="index.php"  class="block py-2 text-primary font-medium">Home</a>
        <a href="about.php"  class="block py-2 text-primary font-medium">About</a>
        <a href="news.php"   class="block py-2 text-primary font-medium">News</a>
        <a href="about.php#membership" class="block py-2 text-amber-600 font-bold">Join PFA</a>
    </div>
</header>

<script>
document.getElementById('mobile-menu-btn')?.addEventListener('click', function () {
    document.getElementById('mobile-menu').classList.toggle('hidden');
});
</script>
