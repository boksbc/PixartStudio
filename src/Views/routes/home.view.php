<?php
/** @var $this Pixel\core\Http\View */

$this->title = "Home";

?>

<section class="relative isolate px-6 pt-14 pb-10 lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#5046e5] to-[#5046e5] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
             style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto container pb-24 pt-12 sm:pt-24 sm:py-48 lg:py-32">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-white leading-none sm:text-[calc(4.5vw+0.4rem)]">PixartStudio sorgt für
                einen einzigartigen Online-Auftritt</h1>
            <p class="font-mono max-w-4xl m-auto mt-6 text-sm leading-5 text-gray-200">Vereinbaren Sie noch heute ein Erstgespräch, um
                mehr über Ihre zukünftigen Erfolgsaussichten zu erfahren. Lassen Sie uns gemeinsam, Ihre Ziele zu erreichen.
            </p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="/contact"
                   class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white transition-all shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Jetzt
                    Erstgespräch vereinbaren</a>
            </div>
        </div>
    </div>
    <div class="relative m-auto">
        <div class="grid-wrapper absolute w-full left-0 top-[-110px] h-[500px] sm:top-[-80px] sm:h-[400px] z-[-1] bg-contain bg-indigo-600"></div>
        <div class="w-full sm:max-w-xl mx-auto sm:w-3/4">
            <div class="w-full shadow-2xl subpixel-antialiased rounded h-64 bg-black border-black mx-auto">
                <div class="flex items-center h-6 rounded-t bg-gray-100 border-b border-gray-500 text-center text-black"
                     id="headerTerminal">
                    <div class="flex ml-2 items-center text-center border-red-900 bg-red-500 shadow-inner rounded-full w-3 h-3"
                         id="closebtn">
                    </div>
                    <div class="ml-2 border-yellow-900 bg-yellow-500 shadow-inner rounded-full w-3 h-3" id="minbtn">
                    </div>
                    <div class="ml-2 border-green-900 bg-green-500 shadow-inner rounded-full w-3 h-3" id="maxbtn">
                    </div>
                    <div class="mx-auto pr-16" id="terminaltitle">
                        <p class="text-center text-sm">Terminal</p>
                    </div>

                </div>
                <div class="pl-1 pt-1 h-auto text-indigo-400 font-mono text-xs bg-black" id="console">
                    <p class="pb-1">Last login: <?= date("D M d H:i:s") ?> on ttys007</p>
                    <p class="blink pb-1 relative">PixartStudio:/$</p>
                </div>
            </div>
        </div>
    </div>

</section>


<section class="py-24 sm:py-28 section more-space bg-tile-middle-lg">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-3xl lg:mx-0">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">PixartStudio mehr als nur eine
                Webagenutur</h2>
            <p class="font-mono mt-2 text-sm leading-2 text-gray-200">PixartStudio die Webagentur aus Wien. Wir sind vom
                ersten Gespräch bis zum Launch Ihrer neuen Webseite für Sie da und Unterstützen Sie dabei!</p>
        </div>
        <div class="mx-auto grid max-w-3xl grid-cols-1 gap-x-8 gap-y-10 border-gray-200 pt-10 sm:mt-2 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            <article class="flex max-w-full items-start justify-between">
                <div class="mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-10 h-10 p-2 stroke-indigo-400 rounded-lg bg-[#1f2937]">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                    </svg>
                </div>
                <div class="group relative">
                    <h3 class="mt-2 text-2xl font-semibold leading-6 text-white">Qualität</h3>
                    <p class="font-mono mt-5 text-sm leading-2 text-gray-200">Eine qualitativ hochwertige Webseite
                        sollte gut strukturiert, benutzerfreundlich, ansprechend gestaltet sein, für verschiedene Geräte
                        und Bildschirmauflösungen optimiert und schnell geladen sein.</p>
                </div>
            </article>

            <article class="flex max-w-full items-start justify-between">
                <div class="mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-10 h-10 p-2 stroke-indigo-400 rounded-lg bg-[#1f2937]">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                    </svg>
                </div>
                <div class="group relative">
                    <h3 class="mt-2 text-2xl font-semibold leading-6 text-white">Innovation</h3>
                    <p class="font-mono mt-5 text-sm leading-2 text-gray-200">Innovationen beziehen sich auf die
                        Verwendung neuer Technologien und Designansätze, um die Benutzererfahrung zu verbessern und die
                        Ziele der Webseite zu erreichen. Diese Innovationen tragen dazu bei, dass die Webseite
                        benutzerfreundlicher wird.</p>
                </div>
            </article>

            <article class="flex max-w-full items-start justify-between">
                <div class="mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-10 h-10 p-2 stroke-indigo-400 rounded-lg bg-[#1f2937]">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M21 7.5l-2.25-1.313M21 7.5v2.25m0-2.25l-2.25 1.313M3 7.5l2.25-1.313M3 7.5l2.25 1.313M3 7.5v2.25m9 3l2.25-1.313M12 12.75l-2.25-1.313M12 12.75V15m0 6.75l2.25-1.313M12 21.75V19.5m0 2.25l-2.25-1.313m0-16.875L12 2.25l2.25 1.313M21 14.25v2.25l-2.25 1.313m-13.5 0L3 16.5v-2.25"/>
                    </svg>
                </div>
                <div class="group relative">
                    <h3 class="mt-2 text-2xl font-semibold leading-6 text-white">Transparenz</h3>
                    <p class="font-mono mt-5 text-sm leading-2 text-gray-200">Transparenz bei PixartStudio bezieht sich
                        darauf, dass Prozesse, Technologien und Kosten offen kommuniziert werden. Dadurch können Kunden
                        ein besseres Verständnis für die Arbeit bekommen und Vertrauen in die Arbeit der Agentur
                        aufbauen.</p>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="relative flex items-center justify-center my-10">
    <div class="grid-wrapper absolute w-full h-[450px] z-[-1] bg-indigo-600/75"></div>
    <div class="relative max-w-3xl m-auto text-center py-12 px-6">
        <h3 class="text-4xl font-bold text-white leading-none sm:text-[calc(3.5vw+0.4rem)]">Haben wir Ihr <br> Interesse
            geweckt?</h3>
        <p class="font-mono mt-6 text-sm leading-5 text-gray-200">Vereinbaren Sie jetzt ein Erstgespräch und lassen Sie
            uns über Ihren zukünftigen Erfolg reden.</p>
        <div class="mt-10">
            <a href="/contact"
               class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white transition-all shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Jetzt
                Erstgespräch vereinbaren</a>
        </div>
    </div>
</section>

<section class="relative mt-36 max-w-7xl m-auto px-6 py-12">
    <div class="lc-wrapper absolute w-full left-0 top-0 h-full z-[-1] bg-no-repeat bg-cover bg-center"></div>
    <div class="md:grid gap-4 md:gap-2 md:grid-cols-2 md:grid-rows-3">
        <div class="max-w-md h-fit py-6 md:pr-6 -mt-24">
            <h3 class="text-5xl font-bold text-white leading-tight sm:text-[calc(3.5vw+0.4rem)]">Der Projektablauf im
                Überblick</h3>
            <p class="font-mono mt-6 text-sm leading-5 text-gray-200">Für jedes unserer Projekte werden diese Schritte
                sorgfältig durchlaufen, um sicherzustellen, dass wir das bestmögliche Ergebnis für Sie erzielen.</p>
        </div>
        <div class="relative md:max-w-sm mt-4 h-fit m-auto p-6 bg-[#1f2937]/75 rounded-lg">
            <div class="absolute -top-4 -left-4 w-10 h-10 p-2 stroke-indigo-400 bg-[#1f2937] border leading-none border-gray-700 text-indigo-400 text-center text-xl rounded-lg">
                1
            </div>
            <h4 class="mb-2 text-2xl font-semibold tracking-tight text-white">Erstgespräch</h4>
            <p class="mb-3 font-mono text-sm text-gray-400">In einem persönlichen Erstgespräch teilen
                Sie
                uns Ihre Wünsche, Vorstellungen und Ziele mit. Sie erhalten hier eine professionelle Beratung und ein
                kurzes Briefing.</p>
        </div>
        <div class="relative md:max-w-sm m-auto mt-10 md:mt-1 ml-0 p-6 bg-[#1f2937]/60 rounded-lg">
            <div class="absolute -top-4 -left-4 w-10 h-10 p-2 stroke-indigo-400 bg-[#1f2937] border leading-none border-gray-700 text-indigo-400 text-center text-xl rounded-lg">
                2
            </div>
            <h4 class="mb-2 text-2xl font-semibold tracking-tight text-white">Planung</h4>
            <p class="mb-3 font-mono text-sm text-gray-400">Entspricht es Ihren Vorstellungen,
                starten wir
                mit der Umsetzung und Visualisierung Ihrer Webseite.</p>
        </div>
        <div class="relative md:max-w-sm m-auto mt-10 md:mt-20 mr-0 p-6 bg-[#1f2937]/60 rounded-lg">
            <div class="absolute -top-4 -left-4 w-10 h-10 p-2 stroke-indigo-400 bg-[#1f2937] border leading-none border-gray-700 text-indigo-400 text-center text-xl rounded-lg">
                3
            </div>
            <h4 class="mb-2 text-2xl font-semibold tracking-tight text-white">Pre Launch</h4>
            <p class="mb-3 font-mono text-sm text-gray-400">Die erste Live-Version Ihrer Webseite
                wird
                Ihnen vorgestellt. Hier können noch weitere gewünschte Änderungen bzw. Korrekturen besprochen und
                korrigiert werden.</p>
        </div>
        <div class="relative md:max-w-sm col-span-2 m-auto mt-10 md:mt-5 p-6 bg-[#1f2937]/60 rounded-lg">
            <div class="absolute -top-4 -left-4 w-10 h-10 p-2 stroke-indigo-400 bg-[#1f2937] border leading-none border-gray-700 text-indigo-400 text-center text-xl rounded-lg">
                4
            </div>
            <h4 class="mb-2 text-2xl font-semibold tracking-tight text-white">Launch</h4>
            <p class="mb-3 font-mono text-sm text-gray-400">Nachdem wir Ihrer Webseite den letzten
                Feinschliff gegeben und Ihre Zustimmung bekommen haben, wird diese gelauncht. Ihre Webseite ist somit
                öffentlich und für Ihre zukünftige Kundschaft online geschalten.
            </p>
        </div>
    </div>
</section>