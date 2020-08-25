<?php

namespace app\common;

class Code
{
    /**
     * 没有权限
     * @var int
     */
    const TOKEN_ERROR = 41000;

    /**
     * 版本过低需更新
     * @var int
     */
    const VERSION_LOW = 42005;

    /**
     * 操作成功
     * @var int
     */
    const SUCCESS = 20000;

    /**
     * 声明无数据状态码
     * @var int
     */
    const NO_DATA = 20004;

    /**
     * 声明失败状态码
     * @var int
     */
    const FAILURE = 40004;

    /**
     * 声明无效状态码
     * @var int
     */
    const INVALID = 40001;

    /**
     * 声明过期状态码
     * @var int
     */
    const EXPIRED = 40002;

    /**
     * 声明禁止状态码
     * @var int
     */
    const FORBIDDEN = 40003;

    /**
     * 路由不存在
     * @var int
     */
    const NOT_FOUND_ROUTE = 40004;

    /**
     * 登录成功
     * @var int
     */
    const AUTH = 20001;

    /**
     * 请求方式错误
     * @var int
     */
    const REQUEST_TYPE_ERROR = 51001;

    /**
     * 来源错误
     * @var int
     */
    const SOURCE_ERROR = 51002;

    /**
     * 唯一id错误
     * @var int
     */
    const UNIQUE_ID_ERROR = 51003;

    /**
     * 版本错误
     * @var int
     */
    const VERSION_ERROR = 51004;

    /**
     * 数据验证错误
     * @var int
     */
    const VALIDATE_ERROR = 51005;
}
