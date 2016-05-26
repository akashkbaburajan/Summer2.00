<?php

namespace app\models;

//use Yii;
use yii\base\Model;

class UserForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
    	return [
    			[['name','email','areaofinterest'],'required'],
    			['email','email']
    			];
    }
    public function attributeLabels()
    {
        return [
            'areaofinterest' => 'Area of Interest',
        ];
    }
}
  
