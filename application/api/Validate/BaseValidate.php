<?php
/**
 * Created by PhpStorm.
 * User: Helen
 * Date: 2017/8/7
 * Time: 14:52
 */

namespace app\api\Validate;


use app\lib\exception\ParameterException;
use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck()
    {
        // 获取http传入的参数
        // 对这些参数做检验
        $request = Request::instance();
        $params = $request->param();

        $result = $this->check($params);
        if(!$result){
            $e = new ParameterException();

            throw $e;
           /* $error = $this->error;
            throw new Exception($error);*/
        }
        else{
            return true;
        }
    }
}