<?php

namespace Abbotton\Eleme\Request;

class Im extends BaseRequest
{
    /**
     * 查询店铺IM状态.
     *
     * @param  array  $params
     * @return string
     */
    public function getIMStatus(array $params)
    {
        return $this->post('im.getIMStatus', $params);
    }

    /**
     * 设置im线上状态.
     *
     * @param  array  $params
     * @return string
     */
    public function updateIMOnlineStatus(array $params)
    {
        return $this->post('im.updateIMOnlineStatus', $params);
    }

    /**
     * 获取门店IM线上状态.
     *
     * @param  array  $params
     * @return string
     */
    public function getIMOnlineStatus(array $params)
    {
        return $this->post('im.getIMOnlineStatus', $params);
    }

    /**
     * 商家IM消息发送.
     *
     * @param  array  $params
     * @return string
     */
    public function messageSend(array $params)
    {
        return $this->post('im.message.send', $params);
    }

    /**
     * 更新店铺IM开关状态.
     *
     * @param  array  $params
     * @return string
     */
    public function updateIMStatus(array $params)
    {
        return $this->post('im.updateIMStatus', $params);
    }

    /**
     * 消息已读.
     *
     * @param  array  $params
     * @return string
     */
    public function messageRead(array $params)
    {
        return $this->post('im.message.read', $params);
    }
}
