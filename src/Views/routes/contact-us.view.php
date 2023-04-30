<?php
/** @var $this Pixel\core\Http\View */

use Pixel\core\Helper\Secure;

$this->title = "Kontakt";
$_SESSION['key'] = "contact";
?>


<section class="container m-auto overflow-hidden">
    <div class="md:grid md:grid-cols-2 md:gap-8 px-6 py-12 sm:py-16 lg:px-8">
        <div class="relative mx-auto sm:pt-28">
            <div class="lc-wrapper absolute w-full left-0 top-0 h-[600px] z-[-1] bg-no-repeat bg-cover bg-center rotate-[-30deg]"></div>
            <h1 class="text-4xl font-bold text-white leading-none sm:text-[calc(4.5vw+0.4rem)]">Kontaktieren <br> Sie
                uns!</h1>
            <p class="mt-6 text-sm font-mono leading-6 text-gray-200">Sie möchten mehr über unsere Angebote erfahren
                oder haben Fragen
                zu unseren Services? Schicken Sie uns einfach eine Anfrage und wir werden uns bald bei Ihnen melden.</p>
            <div class="my-10">
                <a href="tel:<?= $_ENV['APP_PHONE'] ?>" class="flex items-center mb-5 w-fit">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-10 h-10 p-2 stroke-indigo-400 rounded-lg bg-[#1f2937]">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3"/>
                    </svg>
                    <span class="text-gray-200 font-mono text-sm ml-5"><?= $_ENV['APP_PHONE'] ?></span>
                </a>
                <a class="flex items-center cursor-pointer w-fit" data-href="email" data-subject="Kundenanfrage">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-10 h-10 p-2 stroke-indigo-400 rounded-lg bg-[#1f2937]">
                        <path stroke-linecap="round"
                              d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25"/>
                    </svg>
                    <span class="text-gray-200 font-mono text-sm ml-5">office[at]pixartstudio.at</span>
                </a>
            </div>
        </div>

        <form method="POST" id="form" class="mx-auto mt-16 max-w-xl relative">
            <input id="csrf" type="hidden" value="<?= Secure::CSRF() ?>">
            <div class="grid grid-cols-1 gap-x-8 gap-y-4 sm:grid-cols-2">
                <div class="relative">
                    <label for="firstname" class="block text-sm font-mono leading-6 text-gray-300">Vorname</label>
                    <div class="mt-2.5">
                        <input type="text" name="firstname" id="firstname"
                               class="block w-full bg-[#1f2937] font-mono rounded-md px-3.5 py-2 text-gray-400 border-transparent focus:border-transparent focus:ring-0 placeholder:text-gray-400 border-0 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="relative">
                    <label for="lastname" class="block text-sm font-mono leading-6 text-gray-300">Nachname</label>
                    <div class="mt-2.5">
                        <input type="text" name="lastname" id="lastname"
                               class="block w-full bg-[#1f2937] font-mono rounded-md px-3.5 py-2 text-gray-400 border-transparent focus:border-transparent focus:ring-0 placeholder:text-gray-400 border-0 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="relative sm:col-span-2">
                    <label for="company" class="block text-sm font-mono leading-6 text-gray-300">Unternehmen</label>
                    <div class="mt-2.5">
                        <input type="text" name="company" id="company"
                               class="block w-full bg-[#1f2937] font-mono rounded-md px-3.5 py-2 text-gray-400 border-transparent focus:border-transparent focus:ring-0 placeholder:text-gray-400 border-0 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="relative sm:col-span-2">
                    <label for="email" class="block text-sm font-mono leading-6 text-gray-300">Email</label>
                    <div class="mt-2.5">
                        <input type="email" name="email" id="email"
                               class="block w-full bg-[#1f2937] font-mono rounded-md px-3.5 py-2 text-gray-400 border-transparent focus:border-transparent focus:ring-0 placeholder:text-gray-400 border-0 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="relative sm:col-span-2">
                    <label for="textarea" class="block text-sm font-mono leading-6 text-gray-300">Nachricht</label>
                    <div class="mt-2.5">
                    <textarea name="textarea" id="textarea" rows="4"
                              class="block resize-none w-full bg-[#1f2937] font-mono rounded-md px-3.5 py-2 text-gray-400 border-transparent focus:border-transparent focus:ring-0 placeholder:text-gray-400 border-0 sm:text-sm sm:leading-6"></textarea>
                    </div>
                </div>
                <div class="flex gap-x-4 sm:col-span-2 mt-4">
                    <label class="switch relative inline-block min-w-[30px] h-[17px]">
                        <input type="checkbox" id="privacy" class="appearance-none opacity-0 w-0 h-0">
                        <span class="slider round bg-gray-600 absolute top-0 right-0 bottom-0 left-0 duration-300 cursor-pointer rounded-[34px]
                        before:absolute before:h-[15px] before:w-[15px] before:left-[1px] before:bottom-[1px] before:bg-gray-300 before:duration-300 before:rounded-full"></span>
                    </label>
                    <label for="privacy" id="checkbox-label"
                           class="text-xs leading-0 font-mono text-gray-300 cursor-pointer">
                        Indem Sie dies auswählen, stimmen Sie unserer
                        <a href="/general/privacy" class="font-normal text-indigo-600">Datenschutzerklärung</a>
                        zu.
                    </label>
                </div>
            </div>
            <div class="mt-10 relative">
                <button type="submit" id="contact-submit" data-type="submit"
                        class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-mono text-white">
                    <span>Anfrage senden</span>
                </button>
            </div>
        </form>
        <div class="absolute inset-x-0 top-[calc(100%-5rem)] -z-10 transform-gpu overflow-hidden blur-3xl md:top-[calc(100%-50rem)]"
             aria-hidden="true">-->
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#5046e5] to-[#5046e5] opacity-30 md:left-[calc(50%+36rem)] md:w-[72.1875rem]"
                 style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>

</section>