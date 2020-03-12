<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contacto $contacto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contacto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contacto->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Contactos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contactos form content">
            <?= $this->Form->create($contacto) ?>
            <fieldset>
                <legend><?= __('Edit Contacto') ?></legend>
                <?php
                    echo $this->Form->control('nombre_comercial');
                    echo $this->Form->control('razon_social');
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('apellido_paterno');
                    echo $this->Form->control('apellido_materno');
                    echo $this->Form->control('calle');
                    echo $this->Form->control('colonia');
                    echo $this->Form->control('numero_interno');
                    echo $this->Form->control('numero_externo');
                    echo $this->Form->control('codigo_postal');
                    echo $this->Form->control('pais');
                    echo $this->Form->control('estado');
                    echo $this->Form->control('municipio');
                    echo $this->Form->control('telefono');
                    echo $this->Form->control('celular');
                    echo $this->Form->control('url_imagen');
                    echo $this->Form->control('tipo_persona');
                    echo $this->Form->control('rfc');
                    echo $this->Form->control('curp');
                    echo $this->Form->control('email');
                    echo $this->Form->control('pagina_web');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>