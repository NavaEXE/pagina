<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contacto[]|\Cake\Collection\CollectionInterface $contactos
 */
?>
<div class="contactos index content">
    <?= $this->Html->link(__('New Contacto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Contactos') ?></h3>
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
                <?php foreach ($contactos as $contacto): ?>
                <tr>
                    <td><?= $this->Number->format($contacto->id) ?></td>
                    <td><?= h($contacto->nombre_comercial) ?></td>
                    <td><?= h($contacto->razon_social) ?></td>
                    <td><?= h($contacto->nombre) ?></td>
                    <td><?= h($contacto->apellido_paterno) ?></td>
                    <td><?= h($contacto->apellido_materno) ?></td>
                    <td><?= h($contacto->calle) ?></td>
                    <td><?= h($contacto->colonia) ?></td>
                    <td><?= h($contacto->numero_interno) ?></td>
                    <td><?= h($contacto->numero_externo) ?></td>
                    <td><?= h($contacto->codigo_postal) ?></td>
                    <td><?= h($contacto->pais) ?></td>
                    <td><?= h($contacto->estado) ?></td>
                    <td><?= h($contacto->municipio) ?></td>
                    <td><?= h($contacto->telefono) ?></td>
                    <td><?= h($contacto->celular) ?></td>
                    <td><?= h($contacto->url_imagen) ?></td>
                    <td><?= h($contacto->tipo_persona) ?></td>
                    <td><?= h($contacto->rfc) ?></td>
                    <td><?= h($contacto->curp) ?></td>
                    <td><?= h($contacto->email) ?></td>
                    <td><?= h($contacto->pagina_web) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $contacto->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contacto->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contacto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contacto->id)]) ?>
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
