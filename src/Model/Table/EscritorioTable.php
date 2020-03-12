<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Escritorio Model
 *
 * @method \App\Model\Entity\Escritorio get($primaryKey, $options = [])
 * @method \App\Model\Entity\Escritorio newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Escritorio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Escritorio|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Escritorio saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Escritorio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Escritorio[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Escritorio findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EscritorioTable extends Table
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

        $this->setTable('escritorio');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('id_usuario')
            ->maxLength('id_usuario', 11)
            ->allowEmptyString('id_usuario');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 25)
            ->allowEmptyString('nombre');

        $validator
            ->scalar('titulo')
            ->maxLength('titulo', 25)
            ->allowEmptyString('titulo');

        $validator
            ->scalar('descripcion')
            ->maxLength('descripcion', 75)
            ->allowEmptyString('descripcion');

        $validator
            ->scalar('texto')
            ->maxLength('texto', 4294967295)
            ->allowEmptyString('texto');

        return $validator;
    }
}
