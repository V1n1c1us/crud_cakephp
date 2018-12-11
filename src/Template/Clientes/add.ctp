<h3 class="text-center">Novo Cliente</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $this->Url->build('/', true);?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Novo Cliente</li>
        </ol>
    </nav>
<div class="col-md-6">
    <?= $this->Form->create($cliente) ?>
        <legend><?= __('Cadastrar Cliente') ?></legend>
        <?php
            echo $this->Form->control('nome',['class'=>'form-control']);
            echo $this->Form->control('sobrenome',['class'=>'form-control']);
        ?>
    <button type="submit" class="btn btn-primary">Cadastrar <i class="fas fa-save"></i></button>
    <?= $this->Form->end() ?>
    </div>
