<?php
// 应用公共文件
use app\decorator\JsonResponse;

/**
 * JSON响应
 * @return JsonResponse
 */
function jsonResponse(): JsonResponse
{
    return new JsonResponse();
}