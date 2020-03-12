<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cliente'), ['action' => 'edit', $cliente->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cliente'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Clientes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cliente'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clientes view content">
            <h3><?= h($cliente->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre Comercial') ?></th>
                    <td><?= h($cliente->nombre_comercial) ?></td>
                </tr>
                <tr>
                    <th><?= __('Razon Social') ?></th>
                    <td><?= h($cliente->razon_social) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($cliente->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Apellido Paterno') ?></th>
                    <td><?= h($cliente->apellido_paterno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Apellido Materno') ?></th>
                    <td><?= h($cliente->apellido_materno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Titulo') ?></th>
                    <td><?= h($cliente->titulo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Calle') ?></th>
                    <td><?= h($cliente->calle) ?></td>
                </tr>
                <tr>
                    <th><?= __('Colonia') ?></th>
                    <td><?= h($cliente->colonia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero Interno') ?></th>
                    <td><?= h($cliente->numero_interno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero Externo') ?></th>
                    <td><?= h($cliente->numero_externo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Codigo Postal') ?></th>
                    <td><?= h($cliente->codigo_postal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pais') ?></th>
                    <td><?= h($cliente->pais) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= h($cliente->estado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Municipio') ?></th>
                    <td><?= h($cliente->municipio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefono') ?></th>
                    <td><?= h($cliente->telefono) ?></td>
                </tr>
                <tr>
                    <th><?= __('Celular') ?></th>
                    <td><?= h($cliente->celular) ?></td>
                </tr>
                <tr>
                    <th><?= __('Url Imagen') ?></th>
                    <td><?= h($cliente->url_imagen) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Persona') ?></th>
                    <td><?= h($cliente->tipo_persona) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rfc') ?></th>
                    <td><?= h($cliente->rfc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Curp') ?></th>
                    <td><?= h($cliente->curp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($cliente->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pagina Web') ?></th>
                    <td><?= h($cliente->pagina_web) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($cliente->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
