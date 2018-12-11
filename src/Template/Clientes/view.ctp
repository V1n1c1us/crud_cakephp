<h3 class="text-center">Dados do Cliente</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $this->Url->build('/', true);?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dados do Cliente</li>
        </ol>
    </nav>
<div class="col-md-12">
    <table class="table">
    <thead>
            <tr>
                <th>#</th></th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Criado em</th>
                <th>Modificado em</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $this->Number->format($cliente->id) ?></td>
                <td><?= h($cliente->nome) ?></td>
                <td><?= h($cliente->sobrenome) ?></td>
                <td><?= h($cliente->created) ?></td>
                <td><?= h($cliente->modified) ?></td>
            </tr>
        </tbody>
    </table>
</div>
