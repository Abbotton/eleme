<?php

namespace Abbotton\Eleme\Request;

class Order extends BaseRequest
{
    /**
     * 订单物流状态推送
     *
     * @param  array  $params
     * @return string
     * @deprecated
     */
    public function deliveryStatusPush(array $params)
    {
        return $this->post('order.deliveryStatus.push', $params);
    }

    /**
     * 部分退款订单信息推送
     *
     * @param  array  $params
     * @return string
     * @deprecated
     */
    public function partRefundPush(array $params)
    {
        return $this->post('order.partrefund.push', $params);
    }

    /**
     * 订单催单通知.
     *
     * @param  array  $params
     * @return string
     * @deprecated
     */
    public function remindPush(array $params)
    {
        return $this->post('order.remind.push', $params);
    }

    /**
     * 订单状态推送
     *
     * @param  array  $params
     * @return string
     * @deprecated
     */
    public function statusPush(array $params)
    {
        return $this->post('order.status.push', $params);
    }

    /**
     * 退款.
     *
     * @param  array  $params
     * @return string
     * @deprecated
     */
    public function userCancel(array $params)
    {
        return $this->post('order.user.cancel', $params);
    }

    /**
     * 创建订单.
     *
     * @param  array  $params
     * @return string
     * @deprecated
     */
    public function create(array $params)
    {
        return $this->post('order.create', $params);
    }

    /**
     * 退单.
     *
     * @param  array  $params
     * @return string
     */
    public function agreeRefund(array $params)
    {
        return $this->post('order.agreerefund', $params);
    }

    /**
     * 商户发起部分退款申请.
     *
     * @param  array  $params
     * @return string
     */
    public function partRefund(array $params)
    {
        return $this->post('order.partrefund', $params);
    }

    /**
     * 查看部分退款订单详情.
     *
     * @param  array  $params
     * @return string
     */
    public function partRefundGet(array $params)
    {
        return $this->post('order.partrefund.get', $params);
    }

    /**
     * 获取未处理部分退单.
     *
     * @param  array  $params
     * @return string
     */
    public function partRefundUntrelist(array $params)
    {
        return $this->post('order.partrefund.untrelist', $params);
    }

    /**
     * 订单拣货完成.
     *
     * @param  array  $params
     * @return string
     */
    public function pickComplete(array $params)
    {
        return $this->post('order.pickcomplete', $params);
    }

    /**
     * 获取订单隐私信息.
     *
     * @param  array  $params
     * @return string
     */
    public function privateInfo(array $params)
    {
        return $this->post('order.privateinfo', $params);
    }

    /**
     * 获取商户未处理催单.
     *
     * @param  array  $params
     * @return string
     */
    public function remindGet(array $params)
    {
        return $this->post('order.remind.get', $params);
    }

    /**
     * 商户回复催单.
     *
     * @param  array  $params
     * @return string
     */
    public function remindReply(array $params)
    {
        return $this->post('order.remind.reply', $params);
    }

    /**
     * 订单送出.
     *
     * @param  array  $params
     * @return string
     */
    public function sendOut(array $params)
    {
        return $this->post('order.sendout', $params);
    }

    /**
     * 查看订单状态
     *
     * @param  array  $params
     * @return string
     */
    public function statusGet(array $params)
    {
        return $this->post('order.status.get', $params);
    }

    /**
     * 配送异常不再配送
     *
     * @param  array  $params
     * @return string
     */
    public function stopDelivery(array $params)
    {
        return $this->post('order.stopdelivery', $params);
    }

    /**
     * 配送异常切自配送
     *
     * @param  array  $params
     * @return string
     */
    public function switchSelfDelivery(array $params)
    {
        return $this->post('order.switchselfdelivery', $params);
    }

    /**
     * 订单核销
     *
     * @param  array  $params
     * @return string
     */
    public function checkout(array $params)
    {
        return $this->post('order.checkout', $params);
    }

    /**
     * 根据二维码订单核销
     *
     * @param  array  $params
     * @return string
     */
    public function qrcodeCheckout(array $params)
    {
        return $this->post('order.qrcode.checkout', $params);
    }

    /**
     * 呼叫配送
     *
     * @param  array  $params
     * @return string
     */
    public function callDelivery(array $params)
    {
        return $this->post('order.callDelivery', $params);
    }

    /**
     * 取消订单.
     *
     * @param  array  $params
     * @return string
     */
    public function cancel(array $params)
    {
        return $this->post('order.cancel', $params);
    }

    /**
     * 取消呼叫配送
     *
     * @param  array  $params
     * @return string
     */
    public function cancelDelivery(array $params)
    {
        return $this->post('order.cancelDelivery', $params);
    }

    /**
     * 退单.
     *
     * @param  array  $params
     * @return string
     */
    public function cancelList(array $params)
    {
        return $this->post('order.cancellist', $params);
    }

    /**
     * 订单送达.
     *
     * @param  array  $params
     * @return string
     */
    public function complete(array $params)
    {
        return $this->post('order.complete', $params);
    }

    /**
     * 确认订单.
     *
     * @param  array  $params
     * @return string
     */
    public function confirm(array $params)
    {
        return $this->post('order.confirm', $params);
    }

    /**
     * 获取订单配送信息.
     *
     * @param  array  $params
     * @return string
     */
    public function deliveryGet(array $params)
    {
        return $this->post('order.delivery.get', $params);
    }

    /**
     * 退单.
     *
     * @param  array  $params
     * @return string
     */
    public function disagreeRefund(array $params)
    {
        return $this->post('order.disagreerefund', $params);
    }

    /**
     * 查看订单详情.
     *
     * @param  array  $params
     * @return string
     */
    public function get(array $params)
    {
        return $this->post('order.get', $params);
    }

    /**
     * 获取众包订单配送费.
     *
     * @param  array  $params
     * @return string
     */
    public function getDeliveryFeeForCrowd(array $params)
    {
        return $this->post('order.getDeliveryFeeForCrowd', $params);
    }

    /**
     * 订单号转换.
     *
     * @param  array  $params
     * @return string
     */
    public function idConvert(array $params)
    {
        return $this->post('order.id.convert', $params);
    }

    /**
     * 设置门店限单值
     *
     * @param  array  $params
     * @return string
     */
    public function limitedTaking(array $params)
    {
        return $this->post('order.limited.taking', $params);
    }

    /**
     * 查看订单列表.
     *
     * @param  array  $params
     * @return string
     */
    public function list(array $params)
    {
        return $this->post('order.list', $params);
    }

    /**
     * 获取账单.
     *
     * @param array $params
     * @return string
     */
    public function billGet(array $params)
    {
        return $this->post('bill.get', $params);
    }

    /**
     * 获取账单订单明细信息.
     *
     * @param array $params
     * @return string
     */
    public function billOrderDetail(array $params)
    {
        return $this->post('bill.orderdetail', $params);
    }

    /**
     * 自配送接入骑手轨迹.
     *
     * @param array $params
     * @return string
     */
    public function selfDeliveryLocationSync(array $params)
    {
        return $this->post('order.selfDeliveryLocationSync', $params);
    }

    /**
     * 商家主动发起多次部分退
     *
     * @param array $params
     * @return string
     */
    public function manyTimesPartrefund(array $params)
    {
        return $this->post('order.manyTimesPartrefund', $params);
    }

    /**
     * 自配送接入骑手状态
     *
     * @param array $params
     * @return string
     */
    public function selfDeliveryStateSync(array $params)
    {
        return $this->post('order.selfDeliveryStateSync', $params);
    }

    /**
     * 用户多次退商家同意.
     *
     * @param array $params
     * @return string
     */
    public function agreePartRefund(array $params)
    {
        return $this->post('order.agreepartrefund', $params);
    }

    /**
     * 代客发起.
     *
     * @param array $params
     * @return string
     */
    public function userPartRefund(array $params)
    {
        return $this->post('order.user.partrefund', $params);
    }

    /**
     * 代客发起.
     *
     * @param array $params
     * @return string
     */
    public function acceptAnceCode(array $params)
    {
        return $this->post('order.query.acceptancecode', $params);
    }
}
