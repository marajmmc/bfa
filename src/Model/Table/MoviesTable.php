<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class MoviesTable extends Table
{
    public function initialize(array $config)
    {
        $this->table('movies');
        $this->displayField('full_name_bn');
        $this->primaryKey('id');
    }

    public function validationDefault(Validator $validator)
    {

    }

    public function buildRules(RulesChecker $rules)
    {

    }
}
