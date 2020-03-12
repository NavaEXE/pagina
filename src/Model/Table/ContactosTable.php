<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contactos Model
 *
 * @method \App\Model\Entity\Contacto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Contacto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Contacto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Contacto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contacto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contacto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Contacto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Contacto findOrCreate($search, callable $callback = null, $options = [])
 */
class ContactosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('contactos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 30)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('apellido_paterno')
            ->maxLength('apellido_paterno', 30)
            ->requirePresence('apellido_paterno', 'create')
            ->notEmptyString('apellido_paterno');

        $validator
            ->scalar('apellido_materno')
            ->maxLength('apellido_materno', 30)
            ->requirePresence('apellido_materno', 'create')
            ->notEmptyString('apellido_materno');

        $validator
            ->scalar('titulo')
            ->maxLength('titulo', 30)
            ->allowEmptyString('titulo');

        $validator
            ->scalar('calle')
            ->maxLength('calle', 25)
            ->allowEmptyString('calle');

        $validator
            ->scalar('colonia')
            ->maxLength('colonia', 30)
            ->requirePresence('colonia', 'create')
            ->notEmptyString('colonia');

        $validator
            ->scalar('numero_interno')
            ->maxLength('numero_interno', 25)
            ->requirePresence('numero_interno', 'create')
            ->notEmptyString('numero_interno');

        $validator
            ->scalar('numero_externo')
            ->maxLength('numero_externo', 25)
            ->requirePresence('numero_externo', 'create')
            ->notEmptyString('numero_externo');

        $validator
            ->scalar('codigo_postal')
            ->maxLength('codigo_postal', 25)
            ->requirePresence('codigo_postal', 'create')
            ->notEmptyString('codigo_postal');

        $validator
            ->scalar('pais')
            ->maxLength('pais', 25)
            ->requirePresence('pais', 'create')
            ->notEmptyString('pais');

        $validator
            ->scalar('estado')
            ->maxLength('estado', 30)
            ->requirePresence('estado', 'create')
            ->notEmptyString('estado');

        $validator
            ->scalar('municipio')
            ->maxLength('municipio', 30)
            ->requirePresence('municipio', 'create')
            ->notEmptyString('municipio');

        $validator
            ->scalar('telefono')
            ->maxLength('telefono', 13)
            ->requirePresence('telefono', 'create')
            ->notEmptyString('telefono');

        $validator
            ->scalar('celular')
            ->maxLength('celular', 13)
            ->requirePresence('celular', 'create')
            ->notEmptyString('celular');

        $validator
            ->scalar('url_imagen')
            ->maxLength('url_imagen', 100)
            ->requirePresence('url_imagen', 'create')
            ->notEmptyFile('url_imagen');

        $validator
            ->scalar('rfc')
            ->maxLength('rfc', 13)
            ->requirePresence('rfc', 'create')
            ->notEmptyString('rfc');

        $validator
            ->scalar('curp')
            ->maxLength('curp', 18)
            ->requirePresence('curp', 'create')
            ->notEmptyString('curp');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->integer('status')
            ->allowEmptyString('status');

        return $validator;
    }
}
