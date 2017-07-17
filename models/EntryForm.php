<?php
/**
 * Created by PhpStorm.
 * User: abhishek@SYON.COM
 * Date: 10/7/17
 * Time: 3:09 PM
 */

namespace app\models;


use yii;
use yii\base\Model;

class EntryForm extends Model{
    public $name;
    public $email;

    /**
     * @return array
     */
    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }

}