<?php

/** Template to display 'Baner' - hero */
$hero_text = $args['hero_text'];
?>

<div class="absolute inset-0 z-0 bg-gradient-to-b from-primary/60 to-secondary/80">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 10 1366 579" fill="none" preserveAspectRatio="none slice">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 -8H1366C1366 -8 1366 412.536 1366 487.199C900.5 440.228 568.242 779.522 0 387.76C0 293.296 0 -8 0 -8Z" style="stroke: #f5f2f8; stroke-width:20px;" fill="url(#paint0_linear)" />
        <defs>
            <linearGradient id="paint0_linear" x1="27.0492" y1="15.2472" x2="27.0492" y2="579" gradientUnits="userSpaceOnUse">
                <stop stop-color="#3E319A" />
                <stop offset="1" stop-color="#63279C" />
            </linearGradient>
        </defs>
    </svg>
</div>

<div class="relative w-full h-[300px] md:h-[600px] flex flex-col items-center justify-center z-10">
    <div class="relative z-0 flex flex-col items-center justify-center container">
        <?php if ($hero_text) : ?>
            <h1 class="text-3xl md:text-5xl text-bold text-white"><?php echo $hero_text; ?></h1>
        <?php endif; ?>
    </div>

</div>