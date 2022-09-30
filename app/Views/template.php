<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLAST!</title>
    <!-- BootStreap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- fim BootStreap CSS -->

</head>
<body>
    <!-- cabeçalho -->
    <header class="bg-primary p-4">
        <div class="container">   
            <div class="row">
                <div class="col">
                    <a href="<?=base_url()?>" class="text-warning"><i class="bi bi-house-fill"></i>Página Inicial</a></div>
                <div class="col">
                    <h1 class="text-light">BLAST!</h>
                </div>

            </div>    
        </div>
    </header>
    <!-- fim cabeçalho -->

    <!-- conteúdo -->
    <main style="min-height: 200px" class="p-4">
        <div class="container">
            <?= $this->renderSection('conteudo') ?> <!--conteudo carregado dinamicamente --> 
        </div>
    </main>
    <!-- fim conteúdo -->

    <!-- rodapé -->
    <footer class="bg-dark text-center text-white text-center p-4">
        <p class="small text-muted container">Reference: Stephen F. Altschul, Thomas L. Madden, Alejandro A.
Schaffer, Jinghui Zhang, Zheng Zhang, Webb Miller, and David J.
Lipman (1997), "Gapped BLAST and PSI-BLAST: a new generation of
protein database search programs", Nucleic Acids Res. 25:3389-3402.</p>
        </div>
    </footer>
    <!-- fim rodapé -->

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <!-- fim SCRIPTS -->
</body>
</html>