<body>
    <?php
    $DEBUG = true;
    if ($DEBUG) :
    ?>
        <div class="container-fluid bg-warning text-black p-3" id="debugModeContainer">
            <div class="row">
                <h3 class="col-12 mt-3"><i class="fa fa-bug mr-3"></i> DEBUG MODE ON</h3>
                <?php if ((isset($animal) && $animal) || (isset($anfibio) && $anfibio) || (isset($ave) && $ave)  || (isset($mamifero) && $mamifero) || (isset($peixe) && $peixe) || (isset($reptil) && $reptil) || (isset($sapo) && $sapo) || (isset($arara) && $arara)  || (isset($cachorro) && $cachorro) || (isset($tilapia) && $tilapia) || (isset($tartaruga) && $tartaruga)) : ?>
                    <p class="col-12 mb-3" type="button" data-toggle="collapse" data-target="#debugDetails" aria-expanded="false" aria-controls="debugDetails"><b>Confira as classes instanciadas</b> <i class="fa fa-chevron-down ml-1" id="showClasses"></i></p>
                    <div class="collapse col-12 row" id="debugDetails">
                        <div class="col-12 d-flex justify-content-start align-items-start flex-row flex-nowrap">
                            <?php
                            if (isset($animal) && $animal) :
                                echo "<div class='col-12 col-md-4'><h5>Animal</h5><pre>";
                                var_dump($animal);
                                echo "</pre></div>";
                            endif;
                            if (isset($anfibio) && $anfibio) :
                                echo "<div class='col-12 col-md-4'><h5>Anfibio</h5><pre>";
                                var_dump($anfibio);
                                echo "</pre></div>";
                            endif;
                            if (isset($ave) && $ave) :
                                echo "<div class='col-12 col-md-4'><h5>Ave</h5><pre>";
                                var_dump($ave);
                                echo "</pre></div>";
                            endif;
                            if (isset($mamifero) && $mamifero) :
                                echo "<div class='col-12 col-md-4'><h5>Mamifero</h5><pre>";
                                var_dump($mamifero);
                                echo "</pre></div>";
                            endif;
                            if (isset($peixe) && $peixe) :
                                echo "<div class='col-12 col-md-4'><h5>Peixe</h5><pre>";
                                var_dump($peixe);
                                echo "</pre></div>";
                            endif;
                            if (isset($reptil) && $reptil) :
                                echo "<div class='col-12 col-md-4'><h5>Reptil</h5><pre>";
                                var_dump($reptil);
                                echo "</pre></div>";
                            endif;
                            if (isset($sapo) && $sapo) :
                                echo "<div class='col-12 col-md-4'><h5>Sapo</h5><pre>";
                                var_dump($sapo);
                                echo "</pre></div>";
                            endif;
                            if (isset($arara) && $arara) :
                                echo "<div class='col-12 col-md-4'><h5>Arara</h5><pre>";
                                var_dump($arara);
                                echo "</pre></div>";
                            endif;
                            if (isset($cachorro) && $cachorro) :
                                echo "<div class='col-12 col-md-4'><h5>Cachorro</h5><pre>";
                                var_dump($cachorro);
                                echo "</pre></div>";
                            endif;
                            if (isset($tilapia) && $tilapia) :
                                echo "<div class='col-12 col-md-4'><h5>Tilapia</h5><pre>";
                                var_dump($tilapia);
                                echo "</pre></div>";
                            endif;
                            if (isset($tartaruga) && $tartaruga) :
                                echo "<div class='col-12 col-md-4'><h5>Tartaruga</h5><pre>";
                                var_dump($tartaruga);
                                echo "</pre></div>";
                            endif;
                            ?>
                        </div>
                    </div>
                <?php else : ?>
                    <p class="col-12 mb-3"><b>Por enquanto não há instâncias de classes</b></p>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="./index.php">POO | AULA III</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuContent" aria-controls="menuContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menuContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./animal-vertebrado.php">Animais Vertebrados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./anfibio.php">Anfíbios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./ave.php">Aves</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./mamifero.php">Mamíferos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./peixe.php">Peixes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./reptil.php">Répteis</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>