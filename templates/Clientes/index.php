<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente[]|\Cake\Collection\CollectionInterface $clientes
 */
?>
<div class="clientes index content">
    <?= $this->Html->link(__('New Cliente'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Clientes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre_comercial') ?></th>
                    <th><?= $this->Paginator->sort('razon_social') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('apellido_paterno') ?></th>
                    <th><?= $this->Paginator->sort('apellido_materno') ?></th>
                    <th><?= $this->Paginator->sort('titulo') ?></th>
                    <th><?= $this->Paginator->sort('calle') ?></th>
                    <th><?= $this->Paginator->sort('colonia') ?></th>
                    <th><?= $this->Paginator->sort('numero_interno') ?></th>
                    <th><?= $this->Paginator->sort('numero_externo') ?></th>
                    <th><?= $this->Paginator->sort('codigo_postal') ?></th>
                    <th><?= $this->Paginator->sort('pais') ?></th>
                    <th><?= $this->Paginator->sort('estado') ?></th>
                    <th><?= $this->Paginator->sort('municipio') ?></th>
                    <th><?= $this->Paginator->sort('telefono') ?></th>
                    <th><?= $this->Paginator->sort('celular') ?></th>
                    <th><?= $this->Paginator->sort('url_imagen') ?></th>
                    <th><?= $this->Paginator->sort('tipo_persona') ?></th>
                    <th><?= $this->Paginator->sort('rfc') ?></th>
                    <th><?= $this->Paginator->sort('curp') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('pagina_web') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente): ?>
                <tr>
                    <td><?= $this->Number->format($cliente->id) ?></td>
                    <td><?= h($cliente->nombre_comercial) ?></td>
                    <td><?= h($cliente->razon_social) ?></td>
                    <td><?= h($cliente->nombre) ?></td>
                    <td><?= h($cliente->apellido_paterno) ?></td>
                    <td><?= h($cliente->apellido_materno) ?></td>
                    <td><?= h($cliente->titulo) ?></td>
                    <td><?= h($cliente->calle) ?></td>
                    <td><?= h($cliente->colonia) ?></td>
                    <td><?= h($cliente->numero_interno) ?></td>
                    <td><?= h($cliente->numero_externo) ?></td>
                    <td><?= h($cliente->codigo_postal) ?></td>
                    <td><?= h($cliente->pais) ?></td>
                    <td><?= h($cliente->estado) ?></td>
                    <td><?= h($cliente->municipio) ?></td>
                    <td><?= h($cliente->telefono) ?></td>
                    <td><?= h($cliente->celular) ?></td>
                    <td><?= h($cliente->url_imagen) ?></td>
                    <td><?= h($cliente->tipo_persona) ?></td>
                    <td><?= h($cliente->rfc) ?></td>
                    <td><?= h($cliente->curp) ?></td>
                    <td><?= h($cliente->email) ?></td>
                    <td><?= h($cliente->pagina_web) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $cliente->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cliente->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
