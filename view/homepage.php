
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/css/mystyles.css">
    <link rel="stylesheet" href="../static/css/style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <title>Pametno z odpadki</title>
</head>
    <body>
    <?php include("view/header.php"); ?>
    <section class="hero is-fullheight">
        <div class="hero-body">
            <div class="container">
            <div class="columns is-variable is-10 is-gapless">
                <div class="column is-8">
                    <div class="content is-large">
                        <p class="title is-bold is-spaced is-2">Smo ekipa študentov, <br> ki se trudimo biti <span style="color: #8BC540;">okolju prijazni</span> <br>in k temu <span style="color: #8BC540;">spodbujamo</span> tudi ostale.</p>
                        <p class="subtitle">Delujemo v sklopu projekta ŠIPK.<br> Izvedi več s klikom na povezave:</p>
                    </div>
                    <div class="columns">
                    <div class="column is-5">
                        <br>
                        <div class="buttons are-medium">
                            <a href="<?=BASE_URL . "project-info" ?>" class="button is-success is-fullwidth is-rounded">Vsebina projekta</a>
                            <a href="<?=BASE_URL . "team-info" ?>" class="button is-success is-fullwidth is-rounded">Ekipa</a>
                            <a class="button is-success is-fullwidth is-rounded is-static">Senzor</a>
                        </div>
                    </div>
                </div>  
                </div>
                <div class="column">
                <figure class="image is-squere is-right">
                    <img src="../static/img/logo.png">
                </figure>
                </div>
            </div>
            </div>
        </div>
    </section>

    <?php include("view/footer.php"); ?>
    </body>
</html>