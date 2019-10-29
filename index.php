<?php require('inc/header.php') ?>

    <main>
        <div class="container-fluid img-slide" id="bg-1">
            <div class="container img-text">
                <h2>Vil du have</h2>
                <h1>flotte gulve?</h1>
                <button class="btn btn-opacity"><h4>Få et tilbud</h4></button>
            </div>
        </div>
        <div class="container">
            <div class="text-box text-box-1 row">
                <h3>Velkommen til Vedsted Gulvservice<br>- din professionelle gulvpartner</h3>
                <p>Har du brug for at få flottere gulve?<br>Så kan vi hjælpe dig. Vi kan det hele: Rive gulve op, lægge nye, isolere, slibe og selfølgelig behandle dem med de bedste produkter.<br>Bare spørg - så finder vi løsningen.</p>
            </div>
            <div class="img-grid row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <img src="images/behandling.png" alt="...">
                    <h5 class="img-grid-text">Gulvslibning & Behandling<h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <img src="images/vaadrum.png" alt="...">
                    <h5 class="img-grid-text">Gulvvådrum<h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <img src="images/linoleum.png" alt="...">
                    <h5 class="img-grid-text">Linoleum, vinyl & tæpper<h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <img src="images/traegulve.png" alt="...">
                    <h5 class="img-grid-text">Trægulv<h5>
                </div>
            </div>
        </div>
        <div class="container-fluid img-slide" id="bg-2">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h4>Vi rådgiver gerne</h4>
                        <p>Er du i tvivl om, hvad den rigtige løsning er for dig? Så hjælper vi gerne med at finde svaret. Lad os aftale et møde og se på det sammen - så kan vi hurtigt fortælle, om du har brug for et helt nyt gulv - eller om det kan klares med en omgang slibning og behandling.</p>
                        <p>Ring eller skriv - så skal vi nok hjælpe dig godt videre</p>
                    </div>
                    <div class="col">
                        <h4>Vi har erfaringen</h4>
                        <p>Hos Vedsted Gulvservice har vi i generationer laveret flotte gulvløsninger til sjællandske familier, organsationer og virksomheder.</p>
                        <p>Så har du et behov, så tøv ikke - tag fat i os, så finder vi den løsning, der er den helt rigtige for dig.</p>
                    </div>
                </div>
                <div class="row virksomheder">
                    <div class="col">
                        <img src="images/junckers.png" alt="...">
                    </div>
                    <div class="col">
                        <img src="images/byg-garanti.png" alt="...">
                    </div>
                    <div class="col">
                        <img src="images/gulvbranchen.png" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row text-box text-box-2">
                <div class="col">
                    <h5>Kontakt os</h5>
                    <p>Kontakt os i dag på telefon: <b>44 91 48 91</b> eller på e-mail: <b>info@vedsted-gulve.dk</b> og lad os høre hvad du drømmer om.<br>Så skal vi nok gøre vores for, at drømmen går i opfyldelse.</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                <form class="needs-validation" novalidate>
                    <div class="form-row">
                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="Navn" pattern="[\w\W ][^0-9]{2,}" required>
                            <div class="invalid-feedback">
                            Indtast dit fulde navn
                            </div>
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="Telefon" pattern="[0-9]{8}" required>
                            <div class="invalid-feedback">
                                Indtast et gyldigt tlf. nummer
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="email" class="form-control" placeholder="Mailadresse" required>
                            <div class="invalid-feedback">
                                Indtast en gyldig mailadresse
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Besked" required>
                            <div class="invalid-feedback">
                                Skriv din besked til os
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit form</button>
                    </form>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </main>

<?php require('inc/footer.php') ?>