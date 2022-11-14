<?php
/* Template Name: Finansowanie */
get_header();
get_template_part('template-parts/components/component-breadcrumb', null, array('post_id'=>$post->ID));
?>
<div class="iz-container">
    <h1 class="title-subtitle__title fw-normal text-center mb-5 pb-5">Finansowanie</h1>
    <div class="text">
        <h2 class="mb-5">Jak finansować terapię?</h2>
        <p>
            Zależy nam na tym, aby zagwarantować Państwu łatwiejszy dostęp do jak największej gamy naszych usług. W tym
            celu
            nawiązaliśmy współpracę z firmami, która są wiodące na rynku kredytów ratalnych z przeznaczeniem na
            procedury
            medyczne, zabiegi medycyny estetycznej i sprzęt medyczny.
        </p>
        <div style="border: 2px solid #c4a57a; padding: 20px; text-align:center" class="mb-5">
            <strong class="text-center">
                Dysponujemy systemami finansowymi ubezpieczeń skutków leczenia oraz ratalnym systemem opłat za terapię
            </strong>
        </div>
        <div class="row">
            <div class="col-12 col-md-7">
                <h2 class="mb-4">
                    To propozycja dla tych z Państwa, którzy nie chcą lub nie mogą pokryć kosztów naszych usług z
                    własnych
                    środków.
                </h2>
                <p>
                    Mogą Państwo skorzystać z finansowania ratalnego udzielanego przez zaufaną i sprawdzoną instytucję z
                    branży finansowej, będącą przedstawicielem znanych banków. Z całej oferty Instytutu Zdrowia dr
                    Boczarska-Jedynak możecie korzystać bez angażowania własnych środków finansowych i opłacić niezbędne
                    terapie w dogodnym systemie ratalnym. MediRaty to pierwsze w Polsce, skuteczne i ogólnodostępne
                    systemy
                    finansowania usług medycznych.
                </p>

                <p>
                    Gdy koszty zabiegów przestaną być barierą, łatwiej jest zoptymalizować plan leczenia.
                    Sprawdź swoją zdolność kredytową, wybierz opcję rat i zamów finansowanie – wystarczy jedna rozmowa
                    telefoniczna z Konsultantem MediRat.Ustal z lekarzem plan leczenia i rozpocznij jego wdrażanie.
                    Gwarancja najbardziej optymalnej raty Prosta i szybka procedura finalizacji umowy ratalnej Kwota
                    finansowania nawet do 50 tys. zł
                </p>

                <h2 class="my-4">
                    Jak działa refinansowanie terapii - krok po kroku
                </h2>
                <p>
                    Specjalista ustali z Państwem harmonogram i koszt leczenia. System ratalny MediRaty skontaktuje się
                    z
                    Państwem telefonicznie, nastąpi weryfikacją zdolności kredytowej, po czym otrzymają Państwo
                    zindywidualizowaną ofertę finansowania ratalnego. W celu podpisania umowy zjawi się u Państwa kurier
                    wraz z niezbędnymi dokumentami. Środki finansowe zostaną przekazane bezpośrednio na konto Instytutu
                    Zdrowia dr Boczarska-Jedynak po wykonaniu zabiegu.
                </p>
            </div>
            <div class="col-12 mt-md-0 mt-5 col-md-5">
                <h2 class="mb-4">
                    Oblicz wysokość rat
                </h2>
                <p>

                    MediRaty to usługa znacznie bardziej opłacalna od standardowych kredytów w banku. Koszty leczenia
                    możesz
                    rozłożyć na 12, 24, 36, 48 lub 60 rat. W przypadku wcześniejszej wpłaty pożyczki – nie zostanie
                    pobrana
                    opłata oraz dodatkowo zwrócona zostanie niewykorzystana część ubezpieczenia!
                </p>
                <style>
                .kalkulator {
                    max-width: 100% !important;
                }
                </style>
                <iframe src="https://kalkulatory.mediraty.pl/kalk_m_nowy.php?klinikain=6350" width="100%" height="375"
                    frameborder="0" scrolling="no"></iframe>

            </div>
        </div>
    </div>
</div>

<?php
get_template_part('template-parts/contact/contact-form');
get_footer();