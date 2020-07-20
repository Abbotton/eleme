<?php

namespace Abbotton\Eleme\Request;

class Shop extends BaseRequest
{
    /**
     * 获取商户公告
     *
     * @param  array  $params
     * @return string
     */
    public function announcementGet(array $params)
    {
        return $this->post('shop.announcement.get', $params);
    }

    /**
     * 设置商户公告
     *
     * @param  array  $params
     * @return string
     */
    public function announcementSet(array $params)
    {
        return $this->post('shop.announcement.set', $params);
    }

    /**
     * 获取商户资质
     *
     * @param  array  $params
     * @return string
     */
    public function aptitudeGet(array $params)
    {
        return $this->post('shop.aptitude.get', $params);
    }

    /**
     * 获取全部资质类型
     *
     * @param  array  $params
     * @return string
     */
    public function aptitudeGetTypes(array $params)
    {
        return $this->post('shop.aptitude.gettypes', $params);
    }

    /**
     * 上传资质
     *
     * @param  array  $params
     * @return string
     */
    public function aptitudeUpload(array $params)
    {
        return $this->post('shop.aptitude.upload', $params);
    }

    /**
     * 门店绑定消息推送
     *
     * @param  array  $params
     * @return string
     */
    public function bindMsg(array $params)
    {
        return $this->post('shop.bind.msg', $params);
    }

    /**
     * 查看商户的营业状态
     *
     * @param  array  $params
     * @return string
     */
    public function busStatusGet(array $params)
    {
        return $this->post('shop.busstatus.get', $params);
    }

    /**
     * 商户歇业
     *
     * @param  array  $params
     * @return string
     */
    public function close(array $params)
    {
        return $this->post('shop.close', $params);
    }

    /**
     * 创建商户
     *
     * @param  array  $params
     * @return string
     */
    public function create(array $params)
    {
        return $this->post('shop.create', $params);
    }

    /**
     * 查看商户
     *
     * @param  array  $params
     * @return string
     */
    public function get(array $params)
    {
        return $this->post('shop.get', $params);
    }

    /**
     * 商户三方门店ID映射
     *
     * @param  array  $params
     * @return string
     */
    public function idBatchUpdate(array $params)
    {
        return $this->post('shop.id.batchupdate', $params);
    }

    /**
     * 商户列表
     *
     * @param  array  $params
     * @return string
     */
    public function list(array $params)
    {
        return $this->post('shop.list', $params);
    }

    /**
     * 门店状态变更消息通知
     *
     * @param  array  $params
     * @return string
     */
    public function msgPush(array $params)
    {
        return $this->post('shop.msg.push', $params);
    }

    /**
     * 商户暂停营业
     *
     * @param  array  $params
     * @return string
     */
    public function offline(array $params)
    {
        return $this->post('shop.offline', $params);
    }

    /**
     * 商户开业
     *
     * @param  array  $params
     * @return string
     */
    public function open(array $params)
    {
        return $this->post('shop.open', $params);
    }

    /**
     * 查看商户状态
     *
     * @param  array  $params
     * @return string
     */
    public function statusGet(array $params)
    {
        return $this->post('shop.status.get', $params);
    }

    /**
     * 门店解绑消息推送
     *
     * @param  array  $params
     * @return string
     */
    public function unbindMsg(array $params)
    {
        return $this->post('shop.unbind.msg', $params);
    }

    /**
     * 修改商户
     *
     * @param  array  $params
     * @return string
     */
    public function update(array $params)
    {
        return $this->post('shop.update', $params);
    }

    /**
     * 查询自配送物流信息
     *
     * @param  array  $params
     * @return string
     */
    public function deliveryInfoGet(array $params)
    {
        return $this->post('shop.deliveryinfo.get', $params);
    }

    /**
     * 同步自配送物流信息
     *
     * @param  array  $params
     * @return string
     */
    public function deliveryInfoSync(array $params)
    {
        return $this->post('shop.deliveryinfo.sync', $params);
    }
}
