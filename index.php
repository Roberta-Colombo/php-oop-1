<?php
include __DIR__ . '/Partials/header.php';
include_once __DIR__ . '/db.php';

?>
<html>

<body>
    <main>
        <div class="container">
            <div class="row">

                <?php foreach ($movies as $key => $value) { ?>
                <div class="card mt-5 col-md-4 col-sm-12">
                    <img class="card-img img-fluid" src="<?php echo $value->coverimg ?>">
                    <?php echo "<h2>$value->title</h2><br>";
                    echo "<h4>$value->director</h4><br>";
                    echo "<strong>$value->year</strong><br>";
                    echo
                        "<div class='age'><strong>Età consigliata: " . "$value->rating</strong>" . " / ";
                    echo $value->ageRestricted() . "</div><br>";
                    ?>
                    <div class='genre'>
                        <?php
                    foreach ($value->genres as $key => $value) {
                        echo "<strong>" . $value . "<br>" . "</strong>";
                    } ?>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>

    </main>

</body>

</html>