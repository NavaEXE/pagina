<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contacto Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellido_paterno
 * @property string $apellido_materno
 * @property string|null $titulo
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
 * @property string $rfc
 * @property string $curp
 * @property string|null $email
 * @property int|null $status
 */
class Contacto extends Entity
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
        'titulo' => true,
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
        'rfc' => true,
        'curp' => true,
        'email' => true,
        'status' => true,
    ];
}