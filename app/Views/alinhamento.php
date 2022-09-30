<?= $this->extend('template') ?> <!-- reduced form to </?php echo $this->extend('tempalte');?> --> 
<?= $this->section('conteudo') ?>
<!-- o conteudo da página comeca aqui, carregado no template -->
<h2 class="mt-4">Alinhamento par-a-par</h2>

<div class="row my-4">
    <h3 class="my-3">Resultado</h3>
    <div class="alert alert-primary" role="alert">
        <pre>
            <?=$resultado?>
        </pre>
    </div>
</div>

<div class="row">
    <h3 class="my-3">Entrada</h3>
    <div class="col-6">
        <h4>Sequência 1</h4>
        <div class="alert alert-secondary" role="alert">
        <pre>
            <?=$seq1?>
        </pre>
        </div>
    <div class="col-6">
        <h4>Sequência 2</h4>
        <div class="alert alert-secondary" role="alert">
        <pre>
            <?=$seq2?>
        </pre>
        </div> 
    </div>
</div>
<!-- o conteudo da página termina aqui -->
<?= $this->endSection() ?>