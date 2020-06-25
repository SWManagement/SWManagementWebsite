<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/css/mystyles.css">
    <link rel="stylesheet" href="../static/css/style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <title>Pametni zabojnik</title>
</head>
    <body>
    <?php include("view/header.php"); ?>
    <div class="hero is-fullheight">
                <div class="tabs is-toggle is-fullwidth is-medium">
                    <ul>
                        <li class="is-active">
                        <a href="<?= BASE_URL . "pametnizabojnik" ?>">
                            <span class="icon"><i class="fas fa-book" aria-hidden="true"></i></span>
                            <span>Zgodba pametnega zabojnika</span>
                        </a>
                        </li>
                        <li>
                        <a href="<?= BASE_URL . "pametnizabojnik-meritve" ?>">
                            <span class="icon"><i class="fas fa-chart-pie" aria-hidden="true"></i></span>
                            <span>Meritve</span>
                        </a>
                        </li>
                    </ul>
                    </div>
                <div class="container">
                    
                </div>          
    <?php include("view/footer.php"); ?>
    </body>
</html>