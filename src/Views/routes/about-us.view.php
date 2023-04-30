<?php
/** @var $this Pixel\core\Http\View */

$this->title = "Über uns";

?>

<section class="relative px-6 pt-14 pb-10 lg:px-8">
    <div class="container mx-auto py-12 sm:py-20">
        <div class="relative lg:grid lg:gap-10 lg:grid-cols-2 lg:grid-rows-1">
            <div class="lc-wrapper absolute w-full h-full bg-no-repeat z-[-1]"></div>
            <div class="flex items-center justify-center">
                <div>
                    <h1 class="mb-8 text-4xl font-bold text-white leading-none sm:text-[calc(3.5vw+0.4rem)]">
                        Revolutionäre Kommunikation dank innovativer Ansätze.</h1>
                    <p class="font-mono text-sm text-gray-200 mb-10">Revolutionäre Technologie verändert die Art, wie
                        Menschen kommunizieren - schneller, einfacher und effizienter. Von traditionellen Kanälen bis zu
                        innovativen Methoden.
                    </p>
                </div>
            </div>
            <div class="relative pt-20">
                <div class="grid gap-4 grid-cols-3 grid-rows-2">
                    <div class="max-w-sm overflow-hidden rounded-xl duration-200 hover:scale-105">
                        <img src="/images/background/vicky.jpg" alt="plant" loading="lazy"
                             class="h-full w-full aspect-[3/4] object-cover"/>
                    </div>
                    <div class="max-w-sm overflow-hidden rounded-xl duration-200 hover:scale-105 -translate-y-[85px]">
                        <img src="/images/background/amir.jpg" alt="plant" loading="lazy"
                             class="h-full w-full aspect-[3/4] object-cover"/>
                    </div>
                    <div class="max-w-sm overflow-hidden rounded-xl duration-200 hover:scale-105">
                        <img src="/images/background/joel.jpg" alt="plant" loading="lazy"
                             class="h-full w-full aspect-[3/4] object-cover"/>
                    </div>
                    <div class="max-w-sm overflow-hidden rounded-xl duration-200 hover:scale-105 -translate-y-[85px] col-start-2">
                        <img src="/images/background/emmanuel.jpg" alt="plant" loading="lazy"
                             class="h-full w-full aspect-[3/4] object-cover"/>
                    </div>
                    <div class="max-w-sm overflow-hidden rounded-xl duration-200 hover:scale-105">
                        <img src="/images/background/petra.jpg" alt="plant" loading="lazy"
                             class="h-full w-full aspect-[3/4] object-cover"/>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<section
        class="relative flex justify-center items-center my-5 py-5 sm:my-16 sm:py-16 section more-space bg-tile-middle-lg">
    <div class="grid-wrapper absolute w-full h-[450px] z-[-1] bg-indigo-600/75"></div>
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-3xl lg:mx-0">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Unser Mission</h2>
            <div class="mb-5 mt-0 leading-none">
                <span class="inline-block w-24 h-1 rounded-full bg-indigo-500"></span>
                <span class="inline-block w-6 h-1 ml-1 rounded-full bg-indigo-500"></span>
                <span class="inline-block w-2 h-1 ml-1 rounded-full bg-indigo-500"></span>
            </div>
            <p class="font-mono mt-2 text-sm leading-2 text-gray-200">Wir sind entschlossen, unseren Kunden den besten
                Kundenauftritt zu ermöglichen. Mit maßgeschneiderten Lösungen, ansprechendem
                Design und innovativer Technologie arbeiten wir daran, ihre Online-Präsenz zu optimieren und
                langfristigen Erfolg zu sichern. Wir
                unterstützen unsere Kunden dabei, ihre Ziele zu erreichen und im digitalen Raum erfolgreich zu sein.</p>
        </div>
    </div>
</section>

<section class="m-auto max-w-7xl sm:py-14">
    <div class="relative pt-20 pb-10 px-10 overflow-hidden">
        <div class="rg-wrapper absolute w-full h-full bg-no-repeat z-[-1]"></div>
        <div class="md:grid md:gap-10 md:grid-cols-3 md:grid-rows-1 transition-none">
            <div class="max-w-sm inline-flex items-center justify-center">
                <h3 class="font-semibold text-white text-8xl mb-10 md:mb-0 md:rotate-90 lg:text-9xl">Team</h3>
            </div>
            <div class="relative max-w-sm m-auto duration-200 hover:scale-95 mb-10 md:mb-0">
                <img src="/images/background/amir.jpg" alt="plant" loading="lazy"
                     class="team-img h-full w-full rounded-xl aspect-[3/4] object-cover hover:grayscale hover:brightness-[0.4] transition-all"/>
                <div class="team p-2 rounded-xl absolute bottom-5 left-5 pointer-events-none opacity-0 duration-500">
                    <h4 class="text-2xl font-semibold text-white">Boban Blaskovic</h4>
                    <p class="mt-2 text-gray-400 font-mono text-xs">CEO | Web Entwickler</p>
                </div>
            </div>
            <div class="relative max-w-sm m-auto duration-200 hover:scale-95 mb-10 md:mb-0">
                <img src="/images/background/joel.jpg" alt="plant" loading="lazy"
                     class="team-img h-full w-full rounded-xl aspect-[3/4] object-cover hover:grayscale hover:brightness-[0.4] transition-all"/>
                <div class="team p-2 rounded-xl absolute bottom-5 left-5 pointer-events-none opacity-0 duration-500">
                    <h4 class="text-2xl font-semibold text-white">Katarina Blaskovic</h4>
                    <p class="mt-2 text-gray-400 font-mono text-xs">Buchhaltung</p>
                </div>
            </div>

        </div>
    </div>
</section>