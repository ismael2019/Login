<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 */
class UsersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('users');
        $this->displayField('Id');
        $this->primaryKey('Id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('Id')
            ->allowEmpty('Id', 'create');

        $validator
            ->requirePresence('Nombre', 'create')
            ->notEmpty('Nombre');

        $validator
            ->requirePresence('Apellido', 'create')
            ->notEmpty('Apellido');

        $validator
            ->requirePresence('Email', 'create')
            ->notEmpty('Email');

        $validator
            ->requirePresence('Password', 'create')
            ->notEmpty('Password');

        $validator
            ->dateTime('Created')
            ->requirePresence('Created', 'create')
            ->notEmpty('Created');

        $validator
            ->dateTime('Modified')
            ->requirePresence('Modified', 'create')
            ->notEmpty('Modified');

        return $validator;
    }
}
