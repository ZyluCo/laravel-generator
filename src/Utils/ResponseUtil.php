<?php

namespace InfyOm\Generator\Utils;

class ResponseUtil
{
    /**
     * @param string $message
     * @param mixed  $data
     *
     * @param array  $meta
     * @return array
     */
    public static function makeResponse($message, $data = null, $meta = [])
    {
        $res = [
            'success' => true,
            'data'    => $data,
            'message' => $message,
        ];

        $res['data'] = $data ?? [];

        if (!empty($meta)) {
            $res['meta'] = $meta;
        }

        return $res;
    }

    /**
     * @param string $message
     * @param mixed  $errorCode
     * @param mixed  $detail
     * @param array  $data
     *
     * @return array
     */
    public static function makeError($message, $errorCode = 'error', $detail = null, array $data = [])
    {
        $res = [
            'success' => false,
            'message' => $message,
            'error' => [
                'code' => $errorCode,
                'message' => $message,
            ],
        ];

        if (!empty($detail)) {
            $res['error']['detail'] = $detail;
        }

        if (!empty($data)) {
            $res['data'] = $data;
        }

        return $res;
    }
}
