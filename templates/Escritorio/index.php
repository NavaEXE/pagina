<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Escritorio[]|\Cake\Collection\CollectionInterface $escritorio
 */
?>
<div class="escritorio index content">
    <?= $this->Html->link(__('New Escritorio'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Escritorio') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('titulo') ?></th>
                    <th><?= $this->Paginator->sort('subtitulo') ?></th>
                    <th><?= $this->Paginator->sort('texto') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($escritorio as $escritorio): ?>
                <tr>
                    <td><?= $this->Number->format($escritorio->id) ?></td>
                    <td><?= h($escritorio->titulo) ?></td>
                    <td><?= h($escritorio->subtitulo) ?></td>
                    <td><?= h($escritorio->texto) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $escritorio->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $escritorio->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $escritorio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $escritorio->id)]) ?>
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
