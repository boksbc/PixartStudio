<header id="header" class="header sticky top-0 z-30 w-full">
    <nav class="flex items-center justify-between p-4 lg:px-8">
        <div class="flex lg:flex-1 z-10">
            <a href="/" class="-m-1.5 p-1.5">
                <img class="h-6 w-auto" src="/images/site/pix-big-logo.svg" alt="Logo" title="PixartStudio" width="100%" height="100%">
            </a>
        </div>
        <div class="font-mono hidden lg:flex lg:gap-x-12 mr-6">
            <a href="/service"
               class="relative navbar-link text-sm text-white hover:text-gray-300 transition-colors z-10">Leistungen
            </a>
            <a href="/about"
               class="relative navbar-link text-sm text-white hover:text-gray-300 transition-colors z-10">Über
                uns</a>
            <a href="/contact"
               class="relative navbar-link text-sm text-white hover:text-gray-300 transition-colors z-10">Kontakt</a>
        </div>
        <div id="mobile" class="flex overflow-hidden cursor-pointer z-10">
            <div id="hamburger-menu" class="relative w-6 h-6 m-1.5 mt-[10px]">
                <span class="bar bar-tp"></span>
                <span class="bar bar-bt"></span>
            </div>
        </div>
    </nav>

    <div id="nav-modal"
         class="nav-modal-container bg-gradient-to-t from-[#191b25] from-50% to-[#17171b] from-50% h-0 w-[100vw] fixed top-0
         left-0 overflow-hidden">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl">
            <div class="relative left-[calc(50%-5rem)] aspect-[1155/678] w-[76.125rem] -translate-x-1/2 rotate-[30deg]
            bg-gradient-to-tr from-[#5046e5] to-[#5046e5] opacity-30"
                 style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="relative nav-modal-wrapper overflow-scroll h-full p-10">
            <div class="relative nav-modal-menu w-full py-32 sm:py-40">
                <div class="nav-modal-links">
                    <a class="nav-modal-link relative block w-fit transition-colors duration-300 ease-in-out opacity-0
                    py-2 font-mono text-5xl text-white my-8 hover:text-gray-400 hover:before:border-slate-400
                    before:border-b-2 hover:after:border-slate-400 after:border-b-2"
                       href="/service">
                        Leistungen
                    </a>
                    <a class="nav-modal-link relative block w-fit transition-colors duration-300 ease-in-out opacity-0
                    py-2 font-mono text-5xl text-white my-8 hover:text-gray-400 hover:before:border-slate-400 before:border-b-2 hover:after:border-slate-400 after:border-b-2"
                       href="/about">
                        Über uns
                    </a>
                    <a class="nav-modal-link relative block w-fit transition-colors duration-300 ease-in-out opacity-0
                    py-2 font-mono text-5xl text-white my-8 hover:text-gray-400 hover:before:border-slate-400 before:border-b-2 hover:after:border-slate-400 after:border-b-2"
                       href="/contact">
                        Kontakt
                    </a>
                </div>
            </div>

            <div class="w-full">
                <div class="md:flex md:justify-between md:items-end">
                    <div>
                        <a href="tel:<?= $_ENV['APP_PHONE'] ?>" class="modal-phone flex items-center w-fit opacity-0 mb-2">
                            <span class="text-gray-400 font-mono text-sm"><?= $_ENV['APP_PHONE'] ?></span>
                        </a>
                        <a class="modal-email flex items-center cursor-pointer md:m-0 m-auto opacity-0"
                           data-href="email">
                            <span class="text-gray-400 font-mono text-sm">office[at]pixartstudio.at</span>
                        </a>
                    </div>
                    <div class="modal-social flex justify-right mt-4 text-base leading-none opacity-0">
                        <a href="#" class="w-5 mr-1">
                            <svg fill="#8f98a3" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 512 512">
                                <path d="M349.33 69.33a93.62 93.62 0 0193.34 93.34v186.66a93.62 93.62 0 01-93.34 93.34H162.67a93.62 93.62 0 01-93.34-93.34V162.67a93.62 93.62 0 0193.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32z"/>
                                <path d="M377.33 162.67a28 28 0 1128-28 27.94 27.94 0 01-28 28zM256 181.33A74.67 74.67 0 11181.33 256 74.75 74.75 0 01256 181.33m0-37.33a112 112 0 10112 112 112 112 0 00-112-112z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-5 mx-1">
                            <svg fill="#8f98a3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M444.17 32H70.28C49.85 32 32 46.7 32 66.89v374.72C32 461.91 49.85 480 70.28 480h373.78c20.54 0 35.94-18.21 35.94-38.39V66.89C480.12 46.7 464.6 32 444.17 32zm-273.3 373.43h-64.18V205.88h64.18zM141 175.54h-.46c-20.54 0-33.84-15.29-33.84-34.43 0-19.49 13.65-34.42 34.65-34.42s33.85 14.82 34.31 34.42c-.01 19.14-13.31 34.43-34.66 34.43zm264.43 229.89h-64.18V296.32c0-26.14-9.34-44-32.56-44-17.74 0-28.24 12-32.91 23.69-1.75 4.2-2.22 9.92-2.22 15.76v113.66h-64.18V205.88h64.18v27.77c9.34-13.3 23.93-32.44 57.88-32.44 42.13 0 74 27.77 74 87.64z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
