<?php
/** @var $this Pixel\core\Http\View */

$this->title = "Impressum";

?>

<section class="relative px-6 pt-14 pb-10 text-white container m-auto">
    <h1 class="mb-8 text-4xl font-bold text-white leading-none sm:text-[calc(4.5vw+0.4rem)]">Impressum</h1>
    <div class=" text-md">
        <div class="mb-5">
            <p><b>PixartStudio e.U.</b></p>
            <p>Dreherstraße 66/1/8</p>
            <p>1110 Wien | Österreich</p>
            <p class="w-fit hover:text-gray-300">
                <a href="tel:<?= $_ENV['APP_PHONE'] ?>" class="mb-5 w-fit">
                    <span class=""><?= $_ENV['APP_PHONE'] ?></span>
                </a>
            </p>
            <p class="w-fit hover:text-gray-300">
                <a class="cursor-pointer w-fit" data-href="email" data-subject="Impressum">
                    <span class="" data-subject="Impressum">office[at]pixartstudio.at</span>
                </a>
            </p>
        </div>

        <div class="mb-5">
            <p><b>Inhaber:</b> Boban Blaskovic</p>
            <p><b>Firmenbuchnummer: </b>FN602983s</p>
            <p><b>Firmenbuchgericht: </b>Handelsgericht Wien</p>
            <p><b>Rechtsform:</b> Eingetragenes Einzelunternehmen</p>
        </div>

        <div class="border-t-[1px] border-gray-500 my-5"></div>

        <div class="mb-5">
            <h2 class="text-3xl font-bold mb-2">Gewerbeordnung</h2>
            <p>https://www.ris.bka.gv.at</p>
        </div>

        <div class="mb-5">
            <h2 class="text-3xl font-bold mb-2">Online Streitbeilegung</h2>
            <p>Verbraucher haben die Möglichkeit, Beschwerden an die Onlinestreitbeilegungsplattform der EU zu richten:
                http://ec.europa.eu/odr.
                Du kannst allfällige Beschwerde auch an die oben angegebene E-Mail-Adresse richten.</p>
        </div>

        <div class="mb-5">
            <h2 class="text-3xl font-bold mb-2">Urheberrecht</h2>
            <p>Die Inhalte dieser Webseite unterliegen, soweit dies rechtlich möglich ist, diversen
                Schutzrechten (z.B dem Urheberrecht). Jegliche Verwendung/Verbreitung von bereitgestelltem Material,
                welche
                urheberrechtlich untersagt ist, bedarf schriftlicher Zustimmung des Webseitenbetreibers.</p>
        </div>

        <div class="mb-5">
            <h2 class="text-3xl font-bold mb-2">Haftungsausschluss</h2>
            <p>Trotz sorgfältiger inhaltlicher Kontrolle übernimmt der Webseitenbetreiber dieser
                Webseite keine Haftung für die Inhalte externer Links. Für den Inhalt der verlinkten Seiten sind
                ausschließlich
                deren Betreiber verantwortlich. Sollten Sie dennoch auf ausgehende Links aufmerksam werden, welche auf
                eine
                Webseite mit rechtswidriger Tätigkeit/Information verweisen, ersuchen wir um dementsprechenden Hinweis,
                um
                diese
                nach § 17 Abs. 2 ECG umgehend zu entfernen.<br>Die Urheberrechte Dritter werden vom Betreiber dieser
                Webseite
                mit größter Sorgfalt beachtet. Sollten Sie trotzdem auf eine Urheberrechtsverletzung aufmerksam werden,
                bitten
                wir um einen entsprechenden Hinweis. Bei Bekanntwerden derartiger Rechtsverletzungen werden wir den
                betroffenen
                Inhalt umgehend entfernen.
            </p>
        </div>

        <div class="mb-5">
            <h2 class="text-3xl font-bold mb-2">Quellen</h2>
            <div class="mb-5">
                <p><b>Bildnachweise</b></p>
                <a href="https://unsplash.com/de/">© Unsplash</a>
            </div>
        </div>

    </div>
</section>