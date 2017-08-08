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

        $result = $this->batch()->check($params);
        if(!$result){
            $e = new ParameterException([
                'msg' => $this->error,
              /*  'code' => 400,
                'errorCode' => 10002*/
            ]);
          /*  $e->msg =$this->error;
            $e->errorCode = 10002;*/
            throw $e;
           /* $error = $this->error;
            throw new Exception($error);*/
        }
        else{
            return true;
        }
    }
}