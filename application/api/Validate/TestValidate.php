<?php
/**
 * Created by PhpStorm.
 * User: Helen
 * Date: 2017/7/10
 * Time: 14:30
 */

namespace app\api\Validate;


use think\Validate;

class TestValidate extends Validate
{
    protected $rule = [
        'name' => 'require|max:10',
        'email' => 'email'
    ];
}