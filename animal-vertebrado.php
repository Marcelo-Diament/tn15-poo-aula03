<?php
require_once("./inc/head.php");
require_once("./inc/header.php");
?>
<main class="container-fluid">
    <section class="row py-5">
        <article class="col-12 col-lg-10 mx-auto bg-light rounded p-3">
            <header class="col-12 my-3 row">
                <h2 class="col-12"><i class="fas fa-question-circle"></i> CLASSE</h2>
                <p class="col-12">Veja o que difere o CLASSE dos outros animais vertebrados e as características em comum entre eles</p>
            </header>
            <div class="col-12">
                <table class="table text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col"><i class="fas fa-tag"></i><br />Caracteríscita<br /><small>Propriedade ou método</small></th>
                            <th scope="col"><i class="fas fa-question-circle"></i><br />CLASSE PAI<br /><small>Filha da classe CLASSE ABSTRATA</small></th>
                            <th scope="col"><i class="fas fa-question-circle"></i><br />CLASSE FILHA<br /><small>Filha da classe CLASSE PAI</small></th>
                            <th scope="col"><i class="fas fa-telescope"></i><br />Observações<br /><small>Detalhes sobre o acesso à propriedades ou métodos e sua visibilidade</small></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Reino</td>
                            <td>CARACTERÍSTICA CLASSE PAI</td>
                            <td>CARACTERÍSTICA CLASSE FILHA</td>
                            <td>OBSERVAÇÃO</td>
                        </tr>
                        <tr>
                            <td>Esqueleto</td>
                            <td>CARACTERÍSTICA CLASSE PAI</td>
                            <td>CARACTERÍSTICA CLASSE FILHA</td>
                            <td>OBSERVAÇÃO</td>
                        </tr>
                        <tr>
                            <td>Músculo</td>
                            <td>CARACTERÍSTICA CLASSE PAI</td>
                            <td>CARACTERÍSTICA CLASSE FILHA</td>
                            <td>OBSERVAÇÃO</td>
                        </tr>
                        <tr>
                            <td>Pele</td>
                            <td>CARACTERÍSTICA CLASSE PAI</td>
                            <td>CARACTERÍSTICA CLASSE FILHA</td>
                            <td>OBSERVAÇÃO</td>
                        </tr>
                        <tr>
                            <td>Ambiente</td>
                            <td>CARACTERÍSTICA CLASSE PAI</td>
                            <td>CARACTERÍSTICA CLASSE FILHA</td>
                            <td>OBSERVAÇÃO</td>
                        </tr>
                        <tr class="bg-warning font-weight-bold">
                            <td>Especificidade</td>
                            <td>Não definido</td>
                            <td>ESPECIFICIDADE DA CLASSE FILHA</td>
                            <td>OBSERVAÇÃO</td>
                        </tr>
                        <tr>
                            <td>Respiração</td>
                            <td>CARACTERÍSTICA CLASSE PAI</td>
                            <td>CARACTERÍSTICA CLASSE FILHA</td>
                            <td>OBSERVAÇÃO</td>
                        </tr>
                        <tr>
                            <td>Locomoção</td>
                            <td>CARACTERÍSTICA CLASSE PAI</td>
                            <td>CARACTERÍSTICA CLASSE FILHA</td>
                            <td>OBSERVAÇÃO</td>
                        </tr>
                        <tr>
                            <td>Som Emitido</td>
                            <td>CARACTERÍSTICA CLASSE PAI</td>
                            <td>CARACTERÍSTICA CLASSE FILHA</td>
                            <td>OBSERVAÇÃO</td>
                        </tr>
                    </tbody>
                </table>
                <a href="#" class="btn btn-dark d-block w-25 ml-auto mt-4 mb-3">Conheça CLASSE FILHA</a>
            </div>
        </article>
    </section>
</main>
<?php require_once("./inc/footer.php"); ?>