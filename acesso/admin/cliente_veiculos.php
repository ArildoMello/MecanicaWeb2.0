<?php
require_once '../../controller/ModeloCTRL.php';
require_once '../../vo/ModeloVO.php';
require_once '../../controller/VeiculoCTRL.php';
require_once '../../vo/VeiculoVO.php';

$ctrlModelo = new ModeloCTRL();
$ctrl = new VeiculoCTRL();

$cod = '';
$cod_veiculo = '';
$modelo = '';
$nome = '';
$placa = '';
$cor = '';

if (isset($_GET['cod']) && isset($_GET['nome'])) {
    $cod = $_GET['cod'];
    $nome = $_GET['nome'];
}
if (isset($_POST['btnCadastrar'])) {
    $cod = $_POST['cod'];
    $cod_veiculo = $_POST['cod_veiculo'];
    $nome = $_POST['nome'];
    $modelo = $_POST['modelo'];
    $placa = $_POST['placa'];
    $cor = $_POST['cor'];

    $vo = new VeiculoVO();
    $vo->setPlaca($placa);
    $vo->setCor($cor);
    $vo->setIdCliente($cod);
    $vo->setidModelo($modelo);
    $ret = $ctrl->CadastrarVeiculo($vo);
  }


$modelos = $ctrlModelo->ConsultarModelo();
?>

<!DOCTYPE html>
<html>

<head>
    <?php
    include_once '../../template/_head.php';
    ?>
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php
        include_once '../../template/_topo.php';
        ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php
        include_once '../../template/_menu.php';
        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Mecânica: Veículos do cliente.</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Administrador</a></li>
                                <li class="breadcrumb-item active">Veículos do cliente</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Gerenciar veículos do cliente.</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="cliente_veiculos.php">
                            <input type="hidden" name="cod" value="<?= $cod ?>" />
                            <input type="hidden" name="cod_veiculo" value="<?= $cod_veiculo ?>" />
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nome</label>
                                        <input type="text" readonly class="form-control" id="nome" name="nome"value="<?= $nome ?>"/>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Marca/Modelo</label>
                                        <select class="form-control" name="modelo" id="modelo">
                                            <option value="">Selecione</option>
                                            <?php for ($i = 0; $i < count($modelos); $i++) { ?>
                                                <option value="<?= $modelos[$i]['id_modelo'] ?>" <?= $modelos == $modelos[$i]['id_modelo'] ? 'selected' : '' ?>><?= $modelos[$i]['nome_marca'] . ' / ' . $modelos[$i]['nome_modelo'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Placa</label>
                                        <input type="text" class="form-control" id="placa" placeholder="digite aqui.." name="placa"value="<?= $placa ?>"/>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Cor</label>
                                        <input type="text" class="form-control" id="cor" placeholder="digite aqui.." name="cor"value="<?= $cor ?>"/>
                                    </div>
                                </div>
                            </div>
                            <center>
                                <button name="btnCadastrar" class="btn btn-outline-success">Cadastrar</button>
                                <button name="btnCancelar" class="btn btn-outline-warning">Cancelar</button>
                            </center>
                        </form>
                    </div>

                    <hr>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Veículos cadastrados do cliente</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Marca/Modelo</th>
                                                <th>Placa</th>
                                                <th>Cor</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>(marca/modelo)</td>
                                                <td>(placa)</td>
                                                <td>(cor)</td>
                                                <td>
                                                    <a href="#" class="btn btn-warning btn-xs">Alterar</a>
                                                    <a href="#" class="btn btn-danger btn-xs">Excluir</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php
        include_once '../../template/_footer.php';
        ?>

        <!-- jQuery -->
        <?php
        include_once '../../template/_scripts.php';
        include_once '../../template/_msg.php';
        ?>
</body>

</html>