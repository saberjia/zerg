<?php
/**
 * Created by PhpStorm.
 * User: Helen
 * Date: 2017/8/7
 * Time: 13:34
 */

namespace app\lib\exception;
use think\Exception;

class BaseException extends Exception
{
    //HTTP 状态码 404,200
    public $code = 400;
    //错误具体信息
    public $msg = '参数错误';
    //自定义的错误码
    public $errorCode = 10000;
}