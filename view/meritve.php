
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
                <div class="tabs is-toggle is-fullwidth is-medium">
                    <ul>
                        <li class="">
                        <a href="<?= BASE_URL . "pametnizabojnik" ?>">
                            <span class="icon"><i class="fas fa-book" aria-hidden="true"></i></span>
                            <span>Zgodba pametnega zabojnika</span>
                        </a>
                        </li>
                        <li class="is-active">
                        <a href="<?= BASE_URL . "pametnizabojnik-meritve" ?>">
                            <span class="icon"><i class="fas fa-chart-pie" aria-hidden="true"></i></span>
                            <span>Meritve</span>
                        </a>
                        </li>
                    </ul>
                    </div>
                    <!-- ______________________ -->
                    <div class="columns">
                        <div class="column is-4">
                            <div class="tabs is-toggle is-toggle-rounded is-centered">
                            <ul>
                                <li class="is-active"><a>Tabelarični prikaz</a></li>
                                <li><a>Tortni diagram</a></li>
                                <li><a>Polnost skozi čas</a></li>
                            </ul>
                            </div>
                            <div class="dropdown is-hoverable is-success">
                            <div class="dropdown-trigger">
                                <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
                                <span>Izberi zabojnik</span>
                                <span class="icon is-small">
                                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                                </span>
                                </button>
                            </div>
                            <div class="dropdown-menu">
                                <div class="dropdown-content">
                                    <?php foreach ($zabojniki as $zabojnik): ?>
                                        <a href="<?= BASE_URL . "pametnizabojnik-meritve?id=" .  $zabojnik["id"] . "&mer=" . 0 ?>" class="dropdown-item">
                                            <?= $zabojnik["id"] ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>    
                            </div>
                        </div>
                        <div class="column is-8">
                        <?php if (isset($_GET["id"])): ?>
                            <div class="is-grouped are-medium" style="margin: 20px;">
                                <a href="<?= BASE_URL . "pametnizabojnik-meritve?id=" .  $_GET["id"] . "&mer=" . 0 ?>" class="button is-success">Odčitki</a>
                                <a href="<?= BASE_URL . "pametnizabojnik-meritve?id=" .  $_GET["id"] . "&mer=" . 1 ?>" class="button is-success">Merjenje polnosti</a>
                            </div>
                        <table class="table is-fullwidth is-narrow">
                        <?php if ($_GET["mer"] == 0): ?>
                            <thead>
                                <th>Število odčitka</th>
                                <th>Datum odčitka</th>
                                <th>Razdalja do smeti(cm)</th>
                            </thead>
                            <tbody>
                            <?php foreach ($meritve as $meritev): ?>
                            <tr>
                                <th><?= $meritev["id"]?></th>
                                <th><?= $meritev["reading_time"]?></th>
                                <th><?= $meritev["value1"]?></th>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                            <?php else: ?>
                                <thead>
                                <th>Datum odčitka</th>
                                <th>Polnost v %</th>
                            </thead>
                            <tbody>
                            <?php foreach ($meritve as $meritev): ?>
                            <tr>
                                <th><?= $meritev["reading_time"]?></th>
                                <th><?= $meritev["value1"]?></th>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                        <?php endif; ?>    
                        </table> 
                        <?php else: ?>
                            <div class="notification is-success is-light">
                                Izberite pametni zabojnik na vaši levi.
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
    <?php include("view/footer.php"); ?>
    </body>
</html>