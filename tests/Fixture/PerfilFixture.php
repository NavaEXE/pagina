<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PerfilFixture
 */
class PerfilFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'perfil';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_usuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'nombre' => ['type' => 'string', 'length' => 25, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'apellido_paterno' => ['type' => 'string', 'length' => 25, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'apellido_materno' => ['type' => 'string', 'length' => 25, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'fecha_nacimiento' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'calle' => ['type' => 'string', 'length' => 25, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'colonia' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'numero_interno' => ['type' => 'char', 'length' => 25, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'numero_externo' => ['type' => 'char', 'length' => 25, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'codigo_postal' => ['type' => 'char', 'length' => 25, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'pais' => ['type' => 'string', 'length' => 25, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'estado' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'municipio' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'telefono' => ['type' => 'string', 'length' => 13, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'celular' => ['type' => 'string', 'length' => 13, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'url_imagen' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'tipo_persona' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'rfc' => ['type' => 'string', 'length' => 13, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'curp' => ['type' => 'string', 'length' => 18, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'sobre_mi' => ['type' => 'char', 'length' => 250, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'status' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_usuario'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_spanish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_usuario' => 1,
                'nombre' => 'Lorem ipsum dolor sit a',
                'apellido_paterno' => 'Lorem ipsum dolor sit a',
                'apellido_materno' => 'Lorem ipsum dolor sit a',
                'fecha_nacimiento' => '2020-03-02',
                'calle' => 'Lorem ipsum dolor sit a',
                'colonia' => 'Lorem ipsum dolor sit amet',
                'numero_interno' => '',
                'numero_externo' => '',
                'codigo_postal' => '',
                'pais' => 'Lorem ipsum dolor sit a',
                'estado' => 'Lorem ipsum dolor sit amet',
                'municipio' => 'Lorem ipsum dolor sit amet',
                'telefono' => 'Lorem ipsum',
                'celular' => 'Lorem ipsum',
                'url_imagen' => 'Lorem ipsum dolor sit amet',
                'tipo_persona' => 'L',
                'rfc' => 'Lorem ipsum',
                'curp' => 'Lorem ipsum dolo',
                'sobre_mi' => '',
                'status' => 'L',
            ],
        ];
        parent::init();
    }
}
