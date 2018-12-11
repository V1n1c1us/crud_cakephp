<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<div class="clientes form large-9 medium-8 columns content">
    <?= $this->Form->create($cliente) ?>
        <legend><?= __('Cadastrar Cliente') ?></legend>
        <?php
            echo $this->Form->control('nome',['class'=>'form-control']);
            echo $this->Form->control('sobrenome');
        ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
