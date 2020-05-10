<?php

namespace app\lib;


class ClassArr {

    /**
     * 支付相关
     * @return array
     */
    public static function payClassStat() {
        return [
            "alipay" => "app\lib\pay\Apipay",
            "weixin" => "app\lib\pay\Weixin",
            // ......
        ];
    }

    public static function initClass($type, $classs, $params = [], $needInstance = false) {

        if(!array_key_exists($type, $classs)) {
            throw new \Exception("类型：{$type} 的类库找不到");
        }
        $className = $classs[$type];

        // 通过反射机制获取对象实例
         return $needInstance == true ? (new \ReflectionClass($className))->newInstanceArgs($params) : $className;

    }
}