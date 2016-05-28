<?php

<?php
namespace app\models;
use Yii;
use yii\base\Model;
class UserForm extends Model
{
    public $name;
    public $email;
    public $areaofinterest;
    public $phone;
    public function rules()
    {
    	return [
    			[['name','email','areaofinterest','phone'],'required'],
    			['email','email'],
//    			[['phone'], 'compare','compareValue'=>10000,'operator'=>'>='],
  				['phone','double'],
 //   			['phone','each','rule'=>['integer']]
   				['phone','string','length'=>[10]]
    			];
    }
    public function attributeLabels()
    {
        return [
            'areaofinterest' => 'Area of Interest',
        ];
    }
   
}
  
