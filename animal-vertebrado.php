<?php
require_once("./classes/AnimalVertebrado.php");
$animal = new AnimalVertebrado();
require_once("./inc/head.php");
require_once("./inc/header.php");
?>
<main class="container-fluid">
    <section class="row py-5">
        <article class="col-12 col-lg-10 mx-auto bg-light rounded p-3">
            <header class="col-12 my-3 row">
                <h2 class="col-12"><i class="fas fa-skull"></i> Animal Vertebrado</h2>
                <p class="col-12">Veja o que difere o Animal Vertebrado dos outros animais e as características em comum entre eles</p>
            </header>
            <div class="col-12">
                <table class="table text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col"><i class="fas fa-tag"></i><br />Caracteríscita<br /><small>Propriedade ou método</small></th>
                            <th scope="col"><i class="fas fa-skull"></i><br />AnimalVertebrado<br /><small>Filha da classe Abstrata Animal</small></th>
                            <th scope="col"><i class="fas fa-telescope"></i><br />Observações<br /><small>Detalhes sobre o acesso à propriedades ou métodos e sua visibilidade</small></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Reino</td>
                            <td><?= $animal->getReino() ?></td>
                            <td>Propriedade <b>protegida</b> herdada da classe Abstrata e acessada através do <b>método get()</b></td>
                        </tr>
                        <tr>
                            <td>Esqueleto</td>
                            <td><?= $animal->getEsqueleto() ?></td>
                            <td>Propriedade <b>protegida</b> herdada da classe Abstrata e acessada através do <b>método get()</b></td>
                        </tr>
                        <tr>
                            <td>Músculo</td>
                            <td><?= $animal->getMusculo() ?></td>
                            <td>Propriedade <b>protegida</b> herdada da classe Abstrata e acessada através do <b>método get()</b></td>
                        </tr>
                        <tr>
                            <td>Pele</td>
                            <td><?= $animal->getPele() ?></td>
                            <td>Propriedade <b>protegida</b> herdada da classe Abstrata e acessada através do <b>método get()</b></td>
                        </tr>
                        <tr>
                            <td>Ambiente</td>
                            <td><?= $animal->getAmbiente() ?></td>
                            <td>Propriedade <b>protegida</b> herdada da classe Abstrata e acessada através do <b>método get()</b></td>
                        </tr>
                        <tr class="bg-warning font-weight-bold">
                            <td>Especificidade</td>
                            <td>Não definido</td>
                            <td>Propriedade <b>privada declarada e defininda na classe da espécie</b></td>
                        </tr>
                        <tr>
                            <td>Respiração</td>
                            <td><?= $animal->respirar() ?></td>
                            <td>Método <b>abstrato</b> declarado na classe abstrata Animal e definido na classe AnimalVertebrado</td>
                        </tr>
                        <tr>
                            <td>Locomoção</td>
                            <td><?= $animal->locomover() ?></td>
                            <td>Método <b>abstrato</b> declarado na classe abstrata Animal e definido na classe AnimalVertebrado</td>
                        </tr>
                        <tr>
                            <td>Som Emitido</td>
                            <td><?= $animal->emitirSom() ?></td>
                            <td>Método <b>abstrato</b> declarado na classe abstrata Animal e definido na classe AnimalVertebrado</td>
                        </tr>
                    </tbody>
                </table>
                <a href="./index.php" class="btn btn-dark d-block w-25 ml-auto mt-4 mb-3" id="voltarBtn"><i class="fas fa-chevron-left"></i> <b class="ml-2">Voltar</b></a>
            </div>
        </article>
    </section>
</main>
<?php require_once("./inc/footer.php"); ?>