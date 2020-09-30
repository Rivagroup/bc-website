<div class="container">
    <div class="jumbotron jumbotron-fluid bg-dark text-light rounded">
        <div class="container">
            <h1 class="display-4">Speisekarte</h1>
            <p class="lead">
                Unsere aktuelle Speise- und Getränkekarte steht Ihnen hier zum download bereit.
                <a class="btn btn-block btn-primary" href="<?= base_url('assets/speisekarte.pdf'); ?>">
                    <i class="fas fa-file-download"></i> Speisekarte herunterladen
                </a>
            </p>
        </div>
    </div>
    <section>
        <article>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="fas fa-bowling-ball"></i> Open Bowling</h4>
                </div>
                <div class="card-body">
                    <div class="card-text">
                        <table class="table table-striped">
                            <thead class="thead">
                                <tr>
                                    <th>Wochentag</th>
                                    <th>Uhrzeit</th>
                                    <th>pro Bahn/Stunde</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">Dienstag - Donnerstag</td>
                                    <td>bis 19:00 Uhr</td>
                                    <td>€ 17,90</td>
                                </tr>
                                <tr>
                                    <td scope="row"></td>
                                    <td>ab 19:00 Uhr</td>
                                    <td>€ 22,90</td>
                                </tr>
                                <tr>
                                    <td scope="row">Freitag</td>
                                    <td>bis 16:00 Uhr</td>
                                    <td>€ 13,90</td>
                                </tr>
                                <tr>
                                    <td scope="row"></td>
                                    <td>ab 16:00 Uhr</td>
                                    <td>€ 17,90</td>
                                </tr>
                                <tr>
                                    <td scope="row"></td>
                                    <td>ab 19:00 Uhr</td>
                                    <td>€ 22,90</td>
                                </tr>
                                <tr>
                                    <td scope="row">Samstag</td>
                                    <td>bis 16:00 Uhr</td>
                                    <td>€ 13,90</td>
                                </tr>
                                <tr>
                                    <td scope="row"></td>
                                    <td>ab 16:00 Uhr</td>
                                    <td>€ 17,90</td>
                                </tr>
                                <tr>
                                    <td scope="row"></td>
                                    <td>ab 19:00 Uhr</td>
                                    <td>€ 22,90</td>
                                </tr>
                                <tr>
                                    <td scope="row">Sonntag</td>
                                    <td>bis 16:00 Uhr</td>
                                    <td>€ 17,90</td>
                                </tr>
                                <tr>
                                    <td scope="row"></td>
                                    <td>ab 16:00 Uhr</td>
                                    <td>€ 22,90</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <small class="text-muted">
                        Maximal 8 Personen pro Bahn. An Vorfeiertagen gelten die Preise vom Freitag. Wenn ein Feiertag auf
                        einen Vorfeiertag fällt, gelten automatisch die Preise von Freitag. An Feiertagen gelten die
                        regulären Preise des aktuellen Wochentags.
                    </small>
                </div>
            </div>
        </article>
    </section>
    <p>&nbsp;</p>
    <section>
        <article>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        <i class="fas fa-users"></i> Vereins- und Ligaspieler
                    </h4>
                </div>
                <div class="card-body">
                    <div class="card-text">
                            <table class="table table-striped">
                                <thead class="thead">
                                    <tr>
                                        <th>Wochentag</th>
                                        <th>Uhrzeit</th>
                                        <th>pro Spiel/Person</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">Dienstag - Sonntag</td>
                                        <td>bis 19:00 Uhr</td>
                                        <td>€ 2,40</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Sonntag - Donnerstag</td>
                                        <td>ab 19:00 Uhr</td>
                                        <td>€ 2,80</td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
                <div class="card-footer">
                    <small class="text-muted">
                        Freitag, Samstag, an Feiertagen und Vorfeiertagen ab 19 Uhr sowie bei Teilnahme an Sonderveranstaltungen ist der Tarif “Mitglieder” nicht buchbar.
                    </small>
                </div>
            </div>
        </article>
    </section>
    <p>&nbsp;</p>
    <section>
        <article>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        <i class="fas fa-socks"></i> Sonstiges
                    </h4>
                </div>
                <div class="card-body">
                    <div class="card-text">
                            <table class="table table-striped">
                                <thead class="thead">
                                    <tr>
                                        <th>Artikel</th>
                                        <th>Typ</th>
                                        <th>pro Paar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">Leihschuhe</td>
                                        <td></td>
                                        <td>€ 2,00</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">ProtectionSocks</td>
                                        <td></td>
                                        <td>€ 0,40</td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
                <div class="card-footer">
                    <p class="text-muted">
                    </p>
                </div>
            </div>
        </article>
    </section>
    <section>
        <article>
            <small class="text-muted">
                Jede erste Stunde und jedes begonnene Spiel werden komplett berechnet. Weitere Spielzeit wird
                MINUTEN-genau abgerechnet.<br /> Alle Preise verstehen sich inklusive der gesetzlichen MwSt.
            </small>
        </article>
    </section>
</div>