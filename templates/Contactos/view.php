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
            <?= $this->Html->link(__('Edit Contacto'), ['action' => 'edit', $contacto->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Contacto'), ['action' => 'delete', $contacto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contacto->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Contactos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Contacto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contactos view content">
            <h3><?= h($contacto->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre Comercial') ?></th>
                    <td><?= h($contacto->nombre_comercial) ?></td>
                </tr>
                <tr>
                    <th><?= __('Razon Social') ?></th>
                    <td><?= h($contacto->razon_social) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($contacto->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Apellido Paterno') ?></th>
                    <td><?= h($contacto->apellido_paterno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Apellido Materno') ?></th>
                    <td><?= h($contacto->apellido_materno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Calle') ?></th>
                    <td><?= h($contacto->calle) ?></td>
                </tr>
                <tr>
                    <th><?= __('Colonia') ?></th>
                    <td><?= h($contacto->colonia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero Interno') ?></th>
                    <td><?= h($contacto->numero_interno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero Externo') ?></th>
                    <td><?= h($contacto->numero_externo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Codigo Postal') ?></th>
                    <td><?= h($contacto->codigo_postal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pais') ?></th>
                    <td><?= h($contacto->pais) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= h($contacto->estado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Municipio') ?></th>
                    <td><?= h($contacto->municipio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefono') ?></th>
                    <td><?= h($contacto->telefono) ?></td>
                </tr>
                <tr>
                    <th><?= __('Celular') ?></th>
                    <td><?= h($contacto->celular) ?></td>
                </tr>
                <tr>
                    <th><?= __('Url Imagen') ?></th>
                    <td><?= h($contacto->url_imagen) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Persona') ?></th>
                    <td><?= h($contacto->tipo_persona) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rfc') ?></th>
                    <td><?= h($contacto->rfc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Curp') ?></th>
                    <td><?= h($contacto->curp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($contacto->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pagina Web') ?></th>
                    <td><?= h($contacto->pagina_web) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($contacto->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
