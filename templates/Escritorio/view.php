<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Escritorio $escritorio
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Escritorio'), ['action' => 'edit', $escritorio->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Escritorio'), ['action' => 'delete', $escritorio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $escritorio->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Escritorio'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Escritorio'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="escritorio view content">
            <h3><?= h($escritorio->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Titulo') ?></th>
                    <td><?= h($escritorio->titulo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subtitulo') ?></th>
                    <td><?= h($escritorio->subtitulo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Texto') ?></th>
                    <td><?= h($escritorio->texto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($escritorio->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
