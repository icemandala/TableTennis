<?php
declare (strict_types=1);

namespace app\decorator;

use app\common\Code;
use think\Response;

class JsonResponse
{
    /**
     * 返回数据
     * @var null
     */
    private $data = null;
    /**
     * 返回消息
     * @var string
     */
    private $message = '操作成功';
    /**
     * 返回状态码
     * @var int
     */
    private $code = Code::SUCCESS;
    /**
     * 返回头信息
     * @var array
     */
    private $header = [];
    /**
     * 返回参数
     * @var array
     */
    private $options = [
        'json_encode_param' => JSON_UNESCAPED_UNICODE,
    ];
    /**
     * 返回Http code
     * @var array
     */
    private $http_code = 200;

    /**
     * JsonResponse constructor.
     */
    public function __construct()
    {
        return $this;
    }

    /**
     * 设置返回数据
     * @param mixed $data 返回数据
     * @return JsonResponse
     */
    public function setData($data): JsonResponse
    {
        $this->data = $data;
        return $this;
    }

    /**
     * 获取返回数据
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * 获取返回消息
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * 设置返回消息
     * @param string $message 返回消息
     * @return JsonResponse
     */
    public function setMessage(string $message): JsonResponse
    {
        $this->message = $message;
        return $this;
    }

    /**
     * 追加返回消息
     * @param string $message 需要追加的返回消息
     * @return JsonResponse
     */
    public function appendMessage(string $message): JsonResponse
    {
        $this->message .= $message;
        return $this;
    }

    /**
     * 获取返回状态码
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * 设置返回状态码
     * @param int $code 返回状态码
     * @return JsonResponse
     */
    public function setCode(int $code): JsonResponse
    {
        $this->code = $code;
        return $this;
    }


    /**
     * 获取返回Http状态码
     * @return int
     */
    public function getHttpCode(): int
    {
        return $this->http_code;
    }

    /**
     * 设置返回Http状态码
     * @param int $http_code 返回Http状态码
     * @return JsonResponse
     */
    public function setHttpCode(int $http_code): JsonResponse
    {
        $this->http_code = $http_code;
        return $this;
    }

    /**
     * 获取返回头信息
     * @return array
     */
    public function getHeader(): array
    {
        return $this->header;
    }

    /**
     * 设置返回头信息
     * @param array $header
     * @return JsonResponse
     */
    public function setHeader(array $header): JsonResponse
    {
        $this->header = $header;
        return $this;
    }

    /**
     * 获取返回参数
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * 设置返回参数
     * @param array $options
     * @return JsonResponse
     */
    public function setOptions(array $options): JsonResponse
    {
        $this->options = $options;
        return $this;
    }

    /**
     * 生成响应信息
     * @return Response
     */
    public function create(): Response
    {
        ini_set('serialize_precision', '14');
        ini_set('precision', '14');
        return Response::create([
            'code' => $this->code,
            'data' => $this->data,
            'message' => $this->message,
        ], 'json', $this->http_code)->header($this->header)->options($this->options);
    }
}
