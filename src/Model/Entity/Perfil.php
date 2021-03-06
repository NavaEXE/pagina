<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Perfil Entity
 *
 * @property int $id_usuario
 * @property string $nombre
 * @property string $apellido_paterno
 * @property string $apellido_materno
 * @property \Cake\I18n\FrozenDate $fecha_nacimiento
 * @property string|null $calle
 * @property string $colonia
 * @property string $numero_interno
 * @property string $numero_externo
 * @property string $codigo_postal
 * @property string $pais
 * @property string $estado
 * @property string $municipio
 * @property string $telefono
 * @property string $celular
 * @property string $url_imagen
 * @property string $tipo_persona
 * @property string $rfc
 * @property string $curp
 * @property string $sobre_mi
 * @property string $status
 */
class Perfil extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nombre' => true,
        'apellido_paterno' => true,
        'apellido_materno' => true,
        'fecha_nacimiento' => true,
        'calle' => true,
        'colonia' => true,
        'numero_interno' => true,
        'numero_externo' => true,
        'codigo_postal' => true,
        'pais' => true,
        'estado' => true,
        'municipio' => true,
        'telefono' => true,
        'celular' => true,
        'url_imagen' => true,
        'tipo_persona' => true,
        'rfc' => true,
        'curp' => true,
        'sobre_mi' => true,
        'status' => true,
    ];
}
