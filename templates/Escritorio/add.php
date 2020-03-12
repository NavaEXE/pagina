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
            <?= $this->Html->link(__('List Escritorio'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="escritorio form content">
            <?= $this->Form->create($escritorio) ?>
            <fieldset>
                <legend><?= __('Add Escritorio') ?></legend>
                <?php
                    echo $this->Form->control('titulo');
                    echo $this->Form->control('subtitulo');
                    echo $this->Form->control('texto');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
