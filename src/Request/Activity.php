<?php

namespace Abbotton\Eleme\Request;

class Activity extends BaseRequest
{
    /**
     * 下线商品营销活动.
     *
     * @param  array  $params
     * @return string
     */
    public function disable(array $params)
    {
        return $this->post('activity.disable', $params);
    }

    /**
     * 创建商品营销活动.
     *
     * @param  array  $params
     * @return string
     */
    public function create(array $params)
    {
        return $this->post('activity.create', $params);
    }

    /**
     * 查看活动信息.
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
     * 查看活动商品信息.
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
     * 更新活动信息.
     *
     * @param  array  $params
     * @return string
     */
    public function update(array $params)
    {
        return $this->post('activity.update', $params);
    }

    /**
     * 创建第N件特价活动.
     *
     * @param array $params
     * @return string
     */
    public function nItemSpecialCreate(array $params)
    {
        return $this->post('activity.nitemspecial.create', $params);
    }

    /**
     * 店铺类活动添加单个店铺.
     *
     * @param array $params
     * @return string
     */
    public function shopActDetailAddSingle(array $params)
    {
        return $this->post('act.shopact.detail.add.single', $params);
    }

    /**
     * 查看买N赠M查询活动商品信息列表.
     *
     * @param array $params
     * @return string
     */
    public function nGiftmSkuList(array $params)
    {
        return $this->post('activity.ngiftm.sku.list', $params);
    }

    /**
     * 更新第N件特价活动商品库存、日库存.
     *
     * @param array $params
     * @return string
     */
    public function nItemSpecialSkuUpdate(array $params)
    {
        return $this->post('activity.nitemspecial.sku.update', $params);
    }

    /**
     * 多渠道查询活动详情.
     *
     * @param array $params
     * @return string
     */
    public function multiChannelQueryInfos(array $params)
    {
        return $this->post('act.multi.channel.queryinfos', $params);
    }

    /**
     * 更新N选1活动信息.
     *
     * @param array $params
     * @return string
     */
    public function ns1Update(array $params)
    {
        return $this->post('activity.ns1.update', $params);
    }

    /**
     * 多渠道查询获取参与的活动IdList.
     *
     * @param array $params
     * @return string
     */
    public function multiChannelQueryIds(array $params)
    {
        return $this->post('act.multi.channel.queryids', $params);
    }

    /**
     * 添加第N件特价活动商品
     *
     * @param array $params
     * @return string
     */
    public function nItemSpecialSkuAdd(array $params)
    {
        return $this->post('activity.nitemspecial.sku.add', $params);
    }

    /**
     * 店铺类活动查询活动明细信息.
     *
     * @param array $params
     * @return string
     */
    public function shopActDetailQuery(array $params)
    {
        return $this->post('act.shopact.detail.query', $params);
    }

    /**
     * 查看买N赠M活动信息.
     *
     * @param array $params
     * @return string
     */
    public function nGiftmGet(array $params)
    {
        return $this->post('activity.ngiftm.get', $params);
    }

    /**
     * 店铺类活动信息修改.
     *
     * @param array $params
     * @return string
     */
    public function shopActModify(array $params)
    {
        return $this->post('act.shopact.modify', $params);
    }

    /**
     * 批量添加买N赠M活动商品
     *
     * @param array $params
     * @return string
     */
    public function nGiftmSkuAddBatch(array $params)
    {
        return $this->post('activity.ngiftm.sku.add.batch', $params);
    }

    /**
     * 批量更新买N赠M活动商品库存、日库存信息.
     *
     * @param array $params
     * @return string
     */
    public function nGiftmSkuUpdateBatch(array $params)
    {
        return $this->post('activity.ngiftm.sku.update.batch', $params);
    }

    /**
     * 更新第N件特价活动信息.
     *
     * @param array $params
     * @return string
     */
    public function nItemSpecialUpdate(array $params)
    {
        return $this->post('activity.nitemspecial.update', $params);
    }

    /**
     * 店铺类活动删除店铺.
     *
     * @param array $params
     * @return string
     */
    public function shopActDetailDel(array $params)
    {
        return $this->post('act.shopact.detail.del', $params);
    }

    /**
     * 查看第N件特价活动信息.
     *
     * @param array $params
     * @return string
     */
    public function nItemSpecialGet(array $params)
    {
        return $this->post('activity.nitemspecial.get', $params);
    }

    /**
     * 店铺类活动删除单个店铺.
     *
     * @param array $params
     * @return string
     */
    public function shopActDetailDelSingle(array $params)
    {
        return $this->post('act.shopact.detail.del.single', $params);
    }

    /**
     * 更新买N赠M活动信息.
     *
     * @param array $params
     * @return string
     */
    public function nGiftmUpdate(array $params)
    {
        return $this->post('activity.ngiftm.update', $params);
    }

    /**
     * 创建店铺类活动.
     *
     * @param array $params
     * @return string
     */
    public function shopActCreate(array $params)
    {
        return $this->post('act.shopact.create', $params);
    }

    /**
     * 店铺类活动查询活动信息.
     *
     * @param array $params
     * @return string
     */
    public function shopActQuery(array $params)
    {
        return $this->post('act.shopact.query', $params);
    }

    /**
     * 更新买N赠M活动商品库存、日库存等.
     *
     * @param array $params
     * @return string
     */
    public function nGiftmSkuUpdate(array $params)
    {
        return $this->post('activity.ngiftm.sku.update', $params);
    }

    /**
     * 店铺类活动添加店铺.
     *
     * @param array $params
     * @return string
     */
    public function shopActDetailAdd(array $params)
    {
        return $this->post('act.shopact.detail.add', $params);
    }

    /**
     * 创建买N赠M营销活动.
     *
     * @param array $params
     * @return string
     */
    public function nGiftmCreate(array $params)
    {
        return $this->post('activity.ngiftm.create', $params);
    }

    /**
     * 批量添加第N件特价活动商品
     *
     * @param array $params
     * @return string
     */
    public function nItemSpecialSkuAddBatch(array $params)
    {
        return $this->post('activity.nitemspecial.sku.add.batch', $params);
    }

    /**
     * 添加买N赠M活动商品和相应赠品
     *
     * @param array $params
     * @return string
     */
    public function nGiftmSkuAdd(array $params)
    {
        return $this->post('activity.ngiftm.sku.add', $params);
    }

    /**
     * 批量更新第N件特价活动商品库存、日库存.
     *
     * @param array $params
     * @return string
     */
    public function nItemSpecialSkuUpdateBatch(array $params)
    {
        return $this->post('activity.nitemspecial.sku.update.batch', $params);
    }
}
