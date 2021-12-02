<?php

namespace Abbotton\Eleme\Request;

class Decorate extends BaseRequest
{
    /**
     * 创建编辑老板推荐橱窗.
     *
     * @param  array  $params
     * @return string
     */
    public function windowEdit(array $params)
    {
        return $this->post('decorate.window.edit', $params);
    }

    /**
     * 查询门店老板推荐列表.
     *
     * @param  array  $params
     * @return string
     */
    public function windowGetList(array $params)
    {
        return $this->post('decorate.window.getlist', $params);
    }

    /**
     * 创建编辑电子海报.
     *
     * @param  array  $params
     * @return string
     */
    public function posterEdit(array $params)
    {
        return $this->post('decorate.poster.edit', $params);
    }

    /**
     * 查询指定老板推荐内容.
     *
     * @param  array  $params
     * @return string
     */
    public function windowGetDetail(array $params)
    {
        return $this->post('decorate.window.getdetail', $params);
    }

    /**
     * 下线电子海报.
     *
     * @param  array  $params
     * @return string
     */
    public function posterOffline(array $params)
    {
        return $this->post('decorate.poster.offline', $params);
    }

    /**
     * 查询指定海报内容.
     *
     * @param  array  $params
     * @return string
     */
    public function posterGetDetail(array $params)
    {
        return $this->post('decorate.poster.getdetail', $params);
    }
}
