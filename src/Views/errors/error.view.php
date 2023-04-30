<?php
/** @var $this Pixel\core\Http\View */
/** @var $exception Exception */

$this->title = $exception->getMessage();

?>

<section class="auto-h-full flex items-center justify-center h-full sm:h-[100vh] max-w-7xl m-auto">
    <div class="flex items-center flex-col justify-center lg:flex-row py-28 px-6 md:px-24 md:py-20 lg:py-32 gap-16 lg:gap-28">
        <div class="w-full lg:w-1/2">
            <div class="mb-4 tracking-tight font-extrabold text-[25vw] xl:text-[18rem] max-w-4xl leading-none text-white text-center"><?= $exception->getCode(); ?></div>
        </div>
        <div class="w-full lg:w-1/2">
            <h1 class="py-4 text-3xl lg:text-4xl font-extrabold text-white"><?= $exception->headline ?></h1>
            <p class="py-2 text-base text-gray-400 font-mono text-sm"><?= $exception->p_tag_1 ?></p>
            <p class="py-4 text-base text-gray-400 font-mono text-sm"><?= $exception->p_tag_2 ?></p>
            <div class="mt-10">
                <a href="/"
                   class="rounded-md w-full block lg:w-fit text-center bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white transition-all shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Zurück zur Homepage</a>
            </div>
        </div>
    </div>
</section>