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
                            <h1>Mecânica: Clientes</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Administrador</a></li>
                                <li class="breadcrumb-item active">clientes</li>
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
                        <h3 class="card-title">Administre os seus clientes aqui</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="clientes.php">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nome</label>
                                        <input type="text" class="form-control" id="nomeC" placeholder="digite o nome aqui.." name="nomeC">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Telefone</label>
                                        <input type="text" class="form-control" id="tel" placeholder="digite o telefone aqui.." name="tel">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Endereço</label>
                                        <input type="text" class="form-control" id="end" placeholder="digite o endereço aqui.." name="end">
                                    </div>
                                </div>
                            </div>
                            <center>
                                <button name="btnCadastrar" class="btn btn-success">Cadastrar</button>
                                <button name="btnCancelar" class="btn btn-warning">Cancelar</button>
                            </center>
                        </form>
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
        ?>
</body>

</html>