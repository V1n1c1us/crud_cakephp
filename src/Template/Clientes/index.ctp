<div class="float-right">
    <?= $this->Flash->render() ?>
</div>
<h3 class="text-center">Clientes Cadastrados</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $this->Url->build('/', true);?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Clientes</li>
        </ol>
    </nav>
        <div class="col-md-4">
            <?= $this->Form->create('cliente', ['type' => 'get']); ?>
                <div class="input-group mb-2 mr-sm-2">
                    <?= $this->Form->control('data_inicial', ['class' => 'form-control mb-2 mr-sm-2 datepicker','value' => $this->request->query('data_inicial')]);?>
                </div>
                <div class="input-group mb-2 mr-sm-2">
                    <?= $this->Form->control('data_final', ['class' => 'form-control mb-2 mr-sm-2 datepicker', 'value' => $this->request->query('data_final')]);?>
                </div>
                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
            <?= $this->Form->end();?>
        </div>
    <div class="col-md-12">
    <table class="table table-top">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sobrenome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Criado em') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Modificado em') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?= $this->Number->format($cliente->id) ?></td>
                <td><?= h($cliente->nome) ?></td>
                <td><?= h($cliente->sobrenome) ?></td>
                <td><?= h($cliente->created) ?></td>
                <td><?= h($cliente->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Vizualizar'), ['action' => 'view', $cliente->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $cliente->id]) ?>
                    <?= $this->Form->postLink(__('Remover'), ['action' => 'delete', $cliente->id], ['confirm' => __('Você irá deletar o registro # {0}?', $cliente->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator text-center">
        <ul class="pagination">
            <?= $this->Paginator->first(__('Início')) ?>
            <?= $this->Paginator->prev( __('<')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('>'))?>
            <?= $this->Paginator->last(__('Final'))?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, exibindo {{current}} registro(s) de um total de {{count}} clientes cadastrados')]) ?></p>
    </div>
</div>
<script>
$(function(){
    $(".datepicker").datepicker({
        'dateFormat': 'yy-mm-dd',
        'changeMonth': true,
        'changeYear': true
    });
});
</script>
