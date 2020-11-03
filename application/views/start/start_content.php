<div class="container">
    <div class="jumbotron jumbotron-fluid bg-light rounded mb-3">
        <div class="container text-center">
            <h1 class="d-none">Bowling Center Chemnitz</h1>
            <img src="<?= base_url('assets/bowling logo_final.svg'); ?>" class="img-fluid" alt="Bowling Chemnitz" />
            <p class="lead">Mit 22 Bahnen die größte Anlage weit und breit.</p>
        </div>
    </div>
    <p>Das Bowling Center für Chemnitz in Sachsen ✓ Günstig bowlen auf der größten Bowlingbahn in Chemnitz ☆, Bereits über 20000 zufriedene Bowling - Gäste!</p>
    <a href ="https://spielcenter-chemnitz.de/silvester/" target="_blank"><img src="<?=base_url("assets/header/slider_silvester2020.png")?>" alt="Silvester 2020/21" class="img-fluid"></a>

    <h3 class="d-none">Neuigkeiten</h3>
    <div class="card shadow-sm text-white bg-danger my-3" style="width: auto;">
        <img src="<?= base_url('assets/header/Corona.jpg'); ?>" class="card-img-top" alt="China-Virus">
        <div class="card-body">
        <h4 class="card-title text-uppercase"><i class="fas fa-viruses"></i> COVID-19 INFORMATIONEN</h4>
            <div class="card-text text-justify text-white">           
            <?php
                $url = 'https://spielcenter-chemnitz.de/corona.html';
                $content = file_get_contents($url);

                $doc = new DOMDocument();
                $doc->loadHtml($content);

                echo $content;
            ?>
            </div>
        </div>
        <div class="card-footer d-flex flex-column">
            <a href="<?=base_url("hygienekonzept")?>" class="btn btn-danger mt-auto"><i class="fas fa-shield-virus"></i> aktuelles Hygiene-Konzept</a>
        </div>
    </div>

    <section class="mt-3">
        <article>
            <header>
                <h2 class="display-4">Unsere Vorteile auf einen Blick</h2>
            </header>
            <p>Auf unseren 22 vollautomatischen AMF-Bahnen können bis zu 176 Personen gleichzeitig bowlen.</p>
            <ul>
                <li>alle Räume voll klimatisiert, keine Wartezeiten, sichere Reservierungen,</li>
                <li>abgetrennter Event-Bereich für ihre Feiern und Veranstaltungen.</li>
                <li>Zulassung & Abnahme für Bundesliga-Spiele</li>
                <li>kostenfreie Parkplätze im direkt anliegenden Parkhaus</li>
                <li>barrierefreier Zugang, behindertengerechte Ausstattung</li>
            </ul>
            <p>
                Bowling Chemnitz steht für Bowlingspaß pur - egal ob mit Freunden, Familie oder Kolleg(inn)en.
                Spiel,
                Sport und Vergnügen für Groß und Klein, Jung und Alt, für Freizeit- und Profispieler gleichermaßen.
            </p>
        </article>
    </section>
</div>