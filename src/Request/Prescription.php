<?php

namespace Abbotton\Eleme\Request;

class Prescription extends BaseRequest
{
    /**
     * 获取订单相关处方单
     *
     * @param  array  $params
     * @return string
     */
    public function files(array $params)
    {
        return $this->post('drug.prescription.files', $params);
    }

    /**
     * 处方药推方
     *
     * @param  array  $params
     * @return string
     */
    public function push(array $params)
    {
        return $this->post('prescription.push', $params);
    }
}
