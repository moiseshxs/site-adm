<!doctype html>
<html lang="pt-br">

<head>
    <title>Juve de Madrid - Admin</title>
    <link rel="shortcut icon" href="assets/img/logo.png" />
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.3.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <div class="wrapper">
        <x-sidebar />

        <div class="main">
            <x-nav />

            <main class="content px-3 py-4">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h3 class="fw-bold fs-4 mb-3">Registrar produto</h3>
                        <div class="row">
                            <div class="col-12 col-md-12 fundo shadow-sm rounded-3">
                                <form method="POST" action="{{ route('registrar_cliente') }}" enctype="multipart/form-data" class="needs-validation" novalidate>
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 col-md-2 py-5">
                                            <div class="row">
                                                <div class="col-12 col-md-12 mb-3">
                                                    <img src="assets/img/fundo.jpg" class="rounded-2 border border-2 img-fluid shadow" style="height: 200px; object-fit:cover;" alt="">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12 col-md-12 d-flex justify-content-center align-items-center mt-3">
                                                    <div class="file btn btn-danger shadow" style="overflow: hidden; position: relavive;">
                                                        <i class="lni lni-upload me-1"></i>
                                                        <span>Upload</span>
                                                        <input type="file" name="file" class="arquivo" />
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-md-10 p-3">
                                            <div class="row">
                                                <div class="col-12 col-md-6 my-3">
                                                    <div class="mb-3">
                                                        <label for="nome" class="form-label">Nome</label>
                                                        <input type="text" class="form-control shadow bg-secondary bg-opacity-10" id="nome" name="nome" placeholder="nome">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-3 my-3">
                                                    <div class="mb-3">
                                                        <label for="nasc" class="form-label">Data de nascimento</label>
                                                        <input type="date" class="form-control shadow bg-secondary bg-opacity-10" id="nasc" name="nasc" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-3 my-3">
                                                    <div class="mb-3">
                                                        <label for="telefone" class="form-label">Celular</label>
                                                        <input type="text" class="form-control shadow bg-secondary bg-opacity-10" id="telefone" name="telefone" placeholder="11900000000">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-md-3 my-3">
                                                    <div class="mb-3">
                                                        <label for="username" class="form-label">Username</label>
                                                        <input type="text" class="form-control shadow bg-secondary bg-opacity-10" id="username" name="username" placeholder="@username">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-3 my-3">
                                                    <div class="mb-3">
                                                        <label for="senha" class="form-label">Senha</label>
                                                        <input type="password" class="form-control shadow bg-secondary bg-opacity-10" id="senha" name="senha" placeholder="senha">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 my-3">
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input type="email" class="form-control shadow bg-secondary bg-opacity-10 text-break" id="email" name="email" placeholder="exemplo@email.com">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-md-2 mt-5">
                                                    <input type="hidden" class="form-control shadow bg-secondary bg-opacity-10 text-break" name="id" id="id" placeholder="id" value="ID">
                                                </div>
                                                <div class="col-12 col-md-2 mt-5">
                                                    <input type="hidden" class="form-control shadow bg-secondary bg-opacity-10 text-break" name="nomeFoto" id="nomeFoto" placeholder="nome foto" value="FOTO">
                                                </div>
                                                <div class="col-12 col-md-2 mt-5">
                                                    <input type="hidden" class="form-control shadow bg-secondary bg-opacity-10 text-break" name="acao" value="ATUALIZAR ou SALVAR">
                                                </div>
                                                <div class="col-12 col-md-6 mt-5 text-end">
                                                    <a class="btn btn-primary px-3 me-3" role="button" aria-disabled="true" href="/cliente">Voltar</i></a>
                                                    <input type="submit" class=" btn btn-success" value="Salvar">
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>


</body>

</html>