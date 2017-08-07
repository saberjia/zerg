<?php
/**
 * Created by PhpStorm.
 * User: Helen
 * Date: 2017/8/7
 * Time: 17:42
 */

namespace app\lib\exception;


class ParameterException extends BaseException
{
    public $code =400;
    public $msg ='参数错误';
    public $errorCode = 10000;
}