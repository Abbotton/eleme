<?php

namespace Abbotton\Eleme\Request;

class Activity extends BaseRequest
{
    /**
     * 下线商品营销活动
     *
     * @param  array  $params
     * @return string
     */
    public function disable(array $params)
    {
        return $this->post('activity.disable', $params);
    }

    /**
     * 创建商品营销活动
     *
     * @param  array  $params
     * @return string
     */
    public function create(array $params)
    {
        return $this->post('activity.create', $params);
    }

    /**
     * 查看活动信息
     *
     * @param  array  $params
     * @return string
     */
    public function get(array $params)
    {
        return $this->post('activity.get', $params);
    }

    /**
     * N选1添加活动商品
     *
     * @param  array  $params
     * @return string
     */
    public function ns1SkuAdd(array $params)
    {
        return $this->post('activity.ns1.sku.add', $params);
    }

    /**
     * N选1批量添加活动商品
     *
     * @param  array  $params
     * @return string
     */
    public function ns1SkuAddBatch(array $params)
    {
        return $this->post('activity.ns1.sku.add.batch', $params);
    }

    /**
     * N选1删除活动商品
     *
     * @param  array  $params
     * @return string
     */
    public function ns1SkuDelete(array $params)
    {
        return $this->post('activity.ns1.sku.delete', $params);
    }

    /**
     * N选1批量删除活动商品
     *
     * @param  array  $params
     * @return string
     */
    public function ns1SkuDeleteBatch(array $params)
    {
        return $this->post('activity.ns1.sku.delete.batch', $params);
    }

    /**
     * 添加活动商品
     *
     * @param  array  $params
     * @return string
     */
    public function skuAdd(array $params)
    {
        return $this->post('activity.sku.add', $params);
    }

    /**
     * 批量添加活动商品
     *
     * @param  array  $params
     * @return string
     */
    public function skuAddBatch(array $params)
    {
        return $this->post('activity.sku.add.batch', $params);
    }

    /**
     * 删除活动商品
     *
     * @param  array  $params
     * @return string
     */
    public function skuDelete(array $params)
    {
        return $this->post('activity.sku.delete', $params);
    }

    /**
     * 批量删除活动商品
     *
     * @param  array  $params
     * @return string
     */
    public function skuDeleteBatch(array $params)
    {
        return $this->post('activity.sku.delete.batch', $params);
    }

    /**
     * 查看活动商品信息
     *
     * @param  array  $params
     * @return string
     */
    public function skuList(array $params)
    {
        return $this->post('activity.sku.list', $params);
    }

    /**
     * 更新活动商品
     *
     * @param  array  $params
     * @return string
     */
    public function skuUpdate(array $params)
    {
        return $this->post('activity.sku.update', $params);
    }

    /**
     * 批量更新活动商品
     *
     * @param  array  $params
     * @return string
     */
    public function skuUpdateBatch(array $params)
    {
        return $this->post('activity.sku.update.batch', $params);
    }

    /**
     * 更新活动信息
     *
     * @param  array  $params
     * @return string
     */
    public function update(array $params)
    {
        return $this->post('activity.update', $params);
    }
}
