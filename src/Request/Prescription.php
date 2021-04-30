<?php

namespace Abbotton\Eleme\Request;

class Prescription extends BaseRequest
{
    /**
     * 获取订单相关处方单.
     *
     * @param  array  $params
     * @return string
     */
    public function files(array $params)
    {
        return $this->post('drug.prescription.files', $params);
    }

    /**
     * 处方药推方.
     *
     * @param  array  $params
     * @return string
     * @deprecated
     */
    public function push(array $params)
    {
        return $this->post('prescription.push', $params);
    }

    /**
     * 三方医疗-搜索药品
     *
     * @param array $params
     * @return string
     */
    public function search(array $params)
    {
        return $this->post('prescription.drug.search', $params);
    }

    /**
     * ERP店铺确认订单状态
     *
     * @param array $params
     * @return string
     */
    public function confirmOrderStatus(array $params)
    {
        return $this->post('erp.confirm.order.status', $params);
    }

    /**
     * 三方医疗-回传处方.
     *
     * @param array $params
     * @return string
     */
    public function save(array $params)
    {
        return $this->post('prescription.save', $params);
    }

    /**
     * 药师审方结果回传.
     *
     * @param array $params
     * @return mixed
     */
    public function orderAuditResult(array $params)
    {
        return $this->post('drug.prescription.order.audit.result', $params);
    }
}
