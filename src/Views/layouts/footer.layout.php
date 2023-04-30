<footer id="footer" class="bg-[#191b25] w-full md:mt-14 lg:pt-12">
    <div class="md:grid md:grid-cols-3">
        <div class="col-start-1 col-end-3 flex justify-center items-center text-4xl md:text-5xl py-12 lg:py-24
        font-bold text-white leading-none lg:text-[calc(5.5vw+0.4rem)]">
            <div>
                <h2 class="">Let's get in touch.</h2>
                <h3><a class="text-2xl block w-fit decoration-4 underline" href="/contact">Work with us!</a></h3>
            </div>
        </div>
        <div class="relative lg:flex lg:items-center h-full row-span-1 mt-4 h-fit w-full m-auto p-6 bg-[#1f2937]/75
        lg:pl-14 md:rounded-tl-3xl text-white font-mono text-sm">
            <div class="w-full">
                <div class="inline-block">
                    <a href="/" class="-m-1.5 p-1.5">
                        <img class="h-10 w-auto" src="/images/site/pix-sm-logo.svg" loading="lazy" alt="Logo"
                             title="PixartStudio" width="100%" height="100%">
                    </a>
                    <h4 class="font-sans font-semibold text-3xl">We are!</h4>
                    <div class="mb-5 mt-0 leading-none">
                        <span class="inline-block w-14 h-1 rounded-full bg-indigo-500"></span>
                        <span class="inline-block w-6 h-1 ml-1 rounded-full bg-indigo-500"></span>
                        <span class="inline-block w-2 h-1 ml-1 rounded-full bg-indigo-500"></span>
                    </div>
                    <p>PixartStudio e.U.</p>
                    <p>Dreherstraße 66/1/8</p>
                    <p>1110 Wien</p>
                    <p>Ausria</p>
                </div>
                <div class="my-5">
                    <a href="tel:<?= $_ENV['APP_PHONE'] ?>" class="flex items-center w-fit">
                        <span><?= $_ENV['APP_PHONE'] ?></span>
                    </a>
                    <a class="flex items-center cursor-pointer w-fit" data-href="email" data-subject="Kundenanfrage">
                        <span>office[at]pixartstudio.at</span>
                    </a>
                </div>
                <div class="mb-10">
                    <h4 class="font-sans font-semibold text-3xl">Follow us</h4>
                    <div class="mb-5 mt-0 leading-none">
                        <span class="inline-block w-20 h-1 rounded-full bg-indigo-500"></span>
                        <span class="inline-block w-6 h-1 ml-1 rounded-full bg-indigo-500"></span>
                        <span class="inline-block w-2 h-1 ml-1 rounded-full bg-indigo-500"></span>
                    </div>
                    <div class="md:flex-auto md:mt-2 mt-4 flex-row flex text-base leading-none">
                        <a href="#" class="w-5 mx-1">
                            <svg fill="#fff" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 512 512">
                                <path d="M349.33 69.33a93.62 93.62 0 0193.34 93.34v186.66a93.62 93.62 0 01-93.34 93.34H162.67a93.62 93.62 0 01-93.34-93.34V162.67a93.62 93.62 0 0193.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32z"/>
                                <path d="M377.33 162.67a28 28 0 1128-28 27.94 27.94 0 01-28 28zM256 181.33A74.67 74.67 0 11181.33 256 74.75 74.75 0 01256 181.33m0-37.33a112 112 0 10112 112 112 112 0 00-112-112z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-5 mx-1">
                            <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M444.17 32H70.28C49.85 32 32 46.7 32 66.89v374.72C32 461.91 49.85 480 70.28 480h373.78c20.54 0 35.94-18.21 35.94-38.39V66.89C480.12 46.7 464.6 32 444.17 32zm-273.3 373.43h-64.18V205.88h64.18zM141 175.54h-.46c-20.54 0-33.84-15.29-33.84-34.43 0-19.49 13.65-34.42 34.65-34.42s33.85 14.82 34.31 34.42c-.01 19.14-13.31 34.43-34.66 34.43zm264.43 229.89h-64.18V296.32c0-26.14-9.34-44-32.56-44-17.74 0-28.24 12-32.91 23.69-1.75 4.2-2.22 9.92-2.22 15.76v113.66h-64.18V205.88h64.18v27.77c9.34-13.3 23.93-32.44 57.88-32.44 42.13 0 74 27.77 74 87.64z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="md:flex-auto font-sans text-xs text-gray-400 md:justify-end text-sm justify-center md:mt-2 mt-4 flex-row flex text-base leading-none">
                    <a class="mr-5" href="/general/agb">AGB</a>
                    <a class="mr-5" href="/general/impressum">Impressum</a>
                    <a href="/general/privacy">Datenschutz</a>
                </div>
            </div>
        </div>

    </div>
</footer>