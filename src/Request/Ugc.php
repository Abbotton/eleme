<?php

namespace Abbotton\Eleme\Request;

class Ugc extends BaseRequest
{
    /**
     * 回复评论
     *
     * @param  array  $params
     * @return string
     */
    public function reply(array $params)
    {
        return $this->post('ugc.reply', $params);
    }

    /**
     * 获取商户订单评论
     *
     * @param  array  $params
     * @return string
     */
    public function orderCommentGet(array $params)
    {
        return $this->post('ugc.ordercomment.get', $params);
    }
}
