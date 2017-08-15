<?php
/**
 * Created by PhpStorm.
 * User: Helen
 * Date: 2017/8/7
 * Time: 13:49
 */

namespace app\api\model;

use think\Db;
use think\Exception;

class Banner
{
    public static function getBannerByID($id)
    {
//        $result = Db::query(
//            'select * from banner_item where banner_id=?',[$id]);
//        return $result;
        $result =Db::table('banner_item')->where('banner_id','=',$id);
    }
}