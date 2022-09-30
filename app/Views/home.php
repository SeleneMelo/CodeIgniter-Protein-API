<?= $this->extend('template') ?> <!-- reduced form to </?php echo $this->extend('tempalte');?> --> 
<?= $this->section('conteudo') ?>
<!-- o conteudo da página comeca aqui, carregado no template -->
<h2 class="mt-2">BLASTn</h2>
<p class="text-muted">Alinhamento par-a-par</p>
<form action="<?=base_url('/blast')?>" method="post">

    <div class="row mt-3">
        <div class="col">
            <textarea rows="5" class="form-control"name="seq1" placeholder="Insira a sequência 1"></textarea>
        </div>

        <div class="col">
            <textarea rows="5" class="form-control"name="seq2" placeholder="Insira a sequência 2"></textarea>
        </div>
    </div>  

    <div class="row">
        <input type="submit" value="BLASTn" class="btn btn-primary btn-sm my-2 mx-0"></input>
    </div>

</form>
<!-- o conteudo da página termina aqui -->
<?= $this->endSection() ?>