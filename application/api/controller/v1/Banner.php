<?php
/**
 * Created by PhpStorm.
 * User: Helen
 * Date: 2017/7/10
 * Time: 13:23
 */

namespace app\api\controller\v1;

use app\api\Validate\TestValidate;
use think\Validate;

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
        //独立验证
        $data =[
            'name' => 'vendor11111',
            'email' => 'vendorqq.com'
        ];
      /*  $validate = new Validate([
                'name' => 'require|max:10',
                'email' => 'email'
        ]);*/
      $validate = new TestValidate();
        $result = $validate->batch()->check($data);
       var_dump($validate->getError());

        //验证器
    }
}