<?php
/**
 * Created by PhpStorm.
 * User: Helen
 * Date: 2017/8/7
 * Time: 13:42
 */

namespace app\lib\exception;


class BannerMissException extends BaseException
{
    public $code = 404;
    public $msg = '请求的Banner不存在';
    public  $errorCode = 40000;
}