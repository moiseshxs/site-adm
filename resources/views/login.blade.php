<!doctype html>
<html lang="pt-br">
    <head>
        <title>Login</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="assets/css/style.css" rel="stylesheet">
    </head>

    <body>
        <main>
            <section class="container-fluid vh-100 background">
            <div class="row h-100 align-items-center">
                <div class="col-7">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="border border-secondary shadow rounded-3 bg-light h-50 w-50 p-4">
                            <form>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                                <div class="mb-3">
                                    <label for="senha" class="form-label">Senha:</label>
                                    <input type="password" class="form-control" id="senha">
                                </div> 
                                <div class="d-flex align-items-center justify-content-center">
                                    <!--<button class="btn btn-primary" href="/dashboard">Entrar</button>-->
                                    <a class="btn botao" href="/dashboard">Entrar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-5 h-100 bg-danger">
                    <div class="d-flex h-100 align-items-center justify-content-center">
                       <h2>LOGO</h2> 
                    </div>
                </div>
            </div> 
            </section>
        </main>

        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
