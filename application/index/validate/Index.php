<?php 
namespace app\index\validate;
use think\Validate;
/**
*   Index验证器
*/
class Index extends Validate
{
	protected $rule = [
		'name'    =>  'require|max:20',
		'phonenumber'=>'require',		
	];

	protected $message  =   [
        'name.require'      => '请填写你的姓名',
        'phonenumber.require' => '请填写手机号码',        
    ];


}