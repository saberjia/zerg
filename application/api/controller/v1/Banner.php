<?php
/**
 * Created by PhpStorm.
 * User: Helen
 * Date: 2017/7/10
 * Time: 13:23
 */

namespace app\api\controller\v1;

use app\api\Validate\IDMustBePostiveInt;
use app\api\model\Banner as BannerModel;
use app\lib\exception\BannerMissException;
use think\Exception;

class Banner
{
    /*
     * 获取指定id的banner信息
     * @Uurl /banner/:id
     * @http GET
     * @id bannerd id号
    */

    public function getBanner($id)
    {
        (new IDMustBePostiveInt())->goCheck();

        $banner = BannerModel::getBannerByID($id);
        if (!$banner){
            throw new Exception('内部错误');
        }
        return $banner;
    }
}