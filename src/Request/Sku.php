<?php

namespace Abbotton\Eleme\Request;

class Sku extends BaseRequest
{
    /**
     * 新增店铺内分类.
     *
     * @param  array  $params
     * @return string
     */
    public function shopCategoryCreate(array $params)
    {
        return $this->post('sku.shop.category.create', $params);
    }

    /**
     * 删除店铺内分类.
     *
     * @param  array  $params
     * @return string
     */
    public function shopCategoryDelete(array $params)
    {
        return $this->post('sku.shop.category.delete', $params);
    }

    /**
     * 获取店铺内分类.
     *
     * @param  array  $params
     * @return string
     */
    public function shopCategoryGet(array $params)
    {
        return $this->post('sku.shop.category.get', $params);
    }

    /**
     * 根据店铺内分类获取商品
     *
     * @param  array  $params
     * @return string
     */
    public function getItemsByCategoryId(array $params)
    {
        return $this->post('sku.getItemsByCategoryId', $params);
    }

    /**
     * 仓货品共享库存.
     *
     * @param  array  $params
     * @return string
     */
    public function warehouseStockUpdate(array $params)
    {
        return $this->post('sku.warehouse.stock.update', $params);
    }

    /**
     * 获取商品类目列表.
     *
     * @param  array  $params
     * @return string
     */
    public function categoryList(array $params)
    {
        return $this->post('sku.category.list', $params);
    }

    /**
     * 单个创建商品
     *
     * @param  array  $params
     * @return string
     */
    public function create(array $params)
    {
        return $this->post('sku.create', $params);
    }

    /**
     * 绑定商品与店铺内分类.
     *
     * @param  array  $params
     * @return string
     */
    public function shopCategoryMap(array $params)
    {
        return $this->post('sku.shop.category.map', $params);
    }

    /**
     * 修改店铺内分类.
     *
     * @param  array  $params
     * @return string
     */
    public function shopCategoryUpdate(array $params)
    {
        return $this->post('sku.shop.category.update', $params);
    }

    /**
     * 获取店铺内分类下商品
     *
     * @param  array  $params
     * @return string
     */
    public function shopCustomSkuList(array $params)
    {
        return $this->post('sku.shop.customsku.list', $params);
    }

    /**
     * 批量删除商品
     *
     * @param  array  $params
     * @return string
     */
    public function delete(array $params)
    {
        return $this->post('sku.delete', $params);
    }

    /**
     * 单个商品修改.
     *
     * @param  array  $params
     * @return string
     */
    public function update(array $params)
    {
        return $this->post('sku.update', $params);
    }

    /**
     * 获取品牌列表.
     *
     * @param  array  $params
     * @return string
     */
    public function brandList(array $params)
    {
        return $this->post('sku.brand.list', $params);
    }

    /**
     * 根据条形码查询是否平台药品SPU.
     *
     * @param  array  $params
     * @return string
     */
    public function stdupcExist(array $params)
    {
        return $this->post('sku.stdupc.exist', $params);
    }

    /**
     * 商品列表.
     *
     * @param  array  $params
     * @return string
     */
    public function list(array $params)
    {
        return $this->post('sku.list', $params);
    }

    /**
     * 批量商品下架.
     *
     * @param  array  $params
     * @return string
     */
    public function offline(array $params)
    {
        return $this->post('sku.offline', $params);
    }

    /**
     * 单个商品下架.
     *
     * @param  array  $params
     * @return string
     */
    public function offlineOne(array $params)
    {
        return $this->post('sku.offline.one', $params);
    }

    /**
     * 批量商品上架.
     *
     * @param  array  $params
     * @return string
     */
    public function online(array $params)
    {
        return $this->post('sku.online', $params);
    }

    /**
     * 单个商品上架.
     *
     * @param  array  $params
     * @return string
     */
    public function onlineOne(array $params)
    {
        return $this->post('sku.online.one', $params);
    }

    /**
     * 批量修改商品价格
     *
     * @param  array  $params
     * @return string
     */
    public function priceUpdateBatch(array $params)
    {
        return $this->post('sku.price.update.batch', $params);
    }

    /**
     * 单个修改商品价格
     *
     * @param  array  $params
     * @return string
     */
    public function priceUpdateOne(array $params)
    {
        return $this->post('sku.price.update.one', $params);
    }

    /**
     * 绑定商品与商品自定义ID.
     *
     * @param  array  $params
     * @return string
     */
    public function shopCustomSkuMap(array $params)
    {
        return $this->post('sku.shop.customsku.map', $params);
    }

    /**
     * 批量修改商品库存.
     *
     * @param  array  $params
     * @return string
     */
    public function stockUpdateBatch(array $params)
    {
        return $this->post('sku.stock.update.batch', $params);
    }

    /**
     * 单个修改商品库存.
     *
     * @param  array  $params
     * @return string
     */
    public function stockUpdateOne(array $params)
    {
        return $this->post('sku.stock.update.one', $params);
    }

    /**
     * 商品图文详情上传.
     *
     * @param  array  $params
     * @return string
     */
    public function uploadRtf(array $params)
    {
        return $this->post('sku.uploadrtf', $params);
    }

    /**
     * 查询平台商品条码
     *
     * @param  array  $params
     * @return string
     */
    public function stdUpcBarcode(array $params)
    {
        return $this->post('sku.stdupc.barcode', $params);
    }

    /**
     * 查询渠道商品的类目属性值
     *
     * @param  array  $params
     * @return string
     */
    public function categoryPropertyQuery(array $params)
    {
        return $this->post('sku.category.property.query', $params);
    }

    /**
     * 查询类目属性值列表.
     *
     * @param  array  $params
     * @return string
     */
    public function categoryPropertyList(array $params)
    {
        return $this->post('sku.category.property.list', $params);
    }

    /**
     * 商品多规格修改库存.
     *
     * @param  array  $params
     * @return string
     */
    public function specStockUpdate(array $params)
    {
        return $this->post('sku.spec.stock.update', $params);
    }

    /**
     * 增量更新单个商品库存.
     *
     * @param  array  $params
     * @return string
     */
    public function stockIncreaseOne(array $params)
    {
        return $this->post('sku.stock.increase.one', $params);
    }

    /**
     * 更新渠道商品多规格价格
     *
     * @param  array  $params
     * @return string
     */
    public function specUpdatePrice(array $params)
    {
        return $this->post('sku.spec.update.price', $params);
    }

    /**
     * 渠道商品追加多规格sku.
     *
     * @param  array  $params
     * @return string
     */
    public function specUpdateAppend(array $params)
    {
        return $this->post('sku.spec.update.append', $params);
    }
}
