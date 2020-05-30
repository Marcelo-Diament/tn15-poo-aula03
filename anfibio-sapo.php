<?php
require_once("./classes/Sapo.php");
$animal = new AnimalVertebrado();
$anfibio = new Anfibio();
$sapo = new Sapo();
require_once("./inc/head.php");
require_once("./inc/header.php");
?>
<main class="container-fluid">
    <section class="row py-5">
        <article class="col-12 col-lg-10 mx-auto bg-light rounded p-3">
            <header class="col-12 my-3 row">
                <h2 class="col-12"><i class="fas fa-<?= $anfibio->icon ?>"></i> Sapo</h2>
                <p class="col-12">Veja o que difere o Sapo dos outros anfíbios e as características em comum entre eles</p>
            </header>
            <div class="col-12">
                <table class="table text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col"><i class="fas fa-tag"></i><br />Caracteríscita<br /><small>Propriedade ou método</small></th>
                            <th scope="col"><i class="fas fa-<?= $anfibio->icon ?>"></i><br />Anfibio<br /><small>Filha da classe AnimalVertebrado</small></th>
                            <th scope="col"><i class="fad fa-<?= $anfibio->icon ?>"></i><br />Sapo<br /><small>Filha da classe Anfibio</small></th>
                            <th scope="col"><i class="fas fa-telescope"></i><br />Observações<br /><small>Detalhes sobre o acesso à propriedades ou métodos e sua visibilidade</small></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Reino</td>
                            <td><?= $anfibio->getReino() ?></td>
                            <td><?= $sapo->getReino() ?></td>
                            <td>Propriedade <b>protegida</b> herdada da classe Abstrata e acessada através do <b>método get()</b></td>
                        </tr>
                        <tr>
                            <td>Esqueleto</td>
                            <td><?= $anfibio->getEsqueleto() ?></td>
                            <td><?= $sapo->getEsqueleto() ?></td>
                            <td>Propriedade <b>protegida</b> herdada da classe Abstrata e acessada através do <b>método get()</b></td>
                        </tr>
                        <tr>
                            <td>Músculo</td>
                            <td><?= $anfibio->getMusculo() ?></td>
                            <td><?= $sapo->getMusculo() ?></td>
                            <td>Propriedade <b>protegida</b> herdada da classe Abstrata e acessada através do <b>método get()</b></td>
                        </tr>
                        <tr>
                            <td>Pele</td>
                            <td><?= $anfibio->getPele() ?></td>
                            <td><?= $sapo->getPele() ?></td>
                            <td>Propriedade <b>protegida</b> herdada da classe Abstrata e acessada através do <b>método get()</b> declarado na classe AnimalVertebrado</td>
                        </tr>
                        <tr>
                            <td>Ambiente</td>
                            <td><?= $anfibio->getAmbiente() ?></td>
                            <td><?= $sapo->getAmbiente() ?></td>
                            <td>Propriedade <b>protegida</b> herdada da classe Abstrata e acessada através do <b>método get()</b> declarado na classe AnimalVertebrado</td>
                        </tr>
                        <tr class="bg-warning font-weight-bold">
                            <td>Especificidade</td>
                            <td><?= $anfibio->getEspecificidade() ?></td>
                            <?php $sapo->setEspecificidade("De girino virei sapo"); ?>
                            <td><?= $sapo->getEspecificidade() ?></td>
                            <td>Propriedade <b>privada declarada e defininda na classe Anfibio e sobrescrita em Sapo</b></td>
                        </tr>
                        <tr>
                            <td>Respiração</td>
                            <td><?= $anfibio->respirar() ?></td>
                            <td><?= $sapo->respirar() ?></td>
                            <td>Método <b>abstrato</b> de Animal, definido em AnimalVertebrado e <b>sobreposto em Anfibio</b></td>
                        </tr>
                        <tr>
                            <td>Locomoção</td>
                            <td><?= $anfibio->locomover() ?></td>
                            <td><?= $sapo->locomover() ?></td>
                            <td>Método <b>abstrato</b> de Animal, definido em AnimalVertebrado e <b>sobreposto em Sapo</b></td>
                        </tr>
                        <tr>
                            <td>Som Emitido</td>
                            <td><?= $anfibio->emitirSom() ?></td>
                            <td><?= $sapo->emitirSom() ?></td>
                            <td>Método <b>abstrato</b> de Animal, definido em AnimalVertebrado e <b>sobreposto em Anfibio</b></td>
                        </tr>
                    </tbody>
                </table>
                <a href="./anfibio-sapo.php" class="btn btn-dark d-block w-25 ml-auto mt-4 mb-3">Conheça o Anfíbio Sapo</a>
            </div>
        </article>
    </section>
</main>
<?php require_once("./inc/footer.php"); ?>