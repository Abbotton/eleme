<?php

namespace Abbotton\Eleme\Request;

class Cpc extends BaseRequest
{


    /**
     * 根据出价查询预估信息.
     *
     * @param  array  $params
     * @return mixed
     */
    public function getWagerEstimate(array $params)
    {
        return $this->post('cpc.getWagerEstimate', $params);
    }

    /**
     * 设置推广出价.
     *
     * @param  array  $params
     * @return mixed
     */
    public function setWagerGrade(array $params)
    {
        return $this->post('cpc.setWagerGrade', $params);
    }

    /**
     * 查询推广点击分布信息.
     *
     * @param  array  $params
     * @return mixed
     */
    public function getRankAndCostInfo(array $params)
    {
        return $this->post('cpc.getRankAndCostInfo', $params);
    }

    /**
     * 获取推广活跃顾客的点击结构.
     *
     * @param  array  $params
     * @return mixed
     */
    public function getUserDistribution(array $params)
    {
        return $this->post('cpc.getUserDistribution', $params);
    }

    /**
     * 更新自动投放状态.
     *
     * @param  array  $params
     * @return mixed
     */
    public function updateAutoStatus(array $params)
    {
        return $this->post('cpc.updateAutoStatus', $params);
    }


    /**
     * 查询推荐价格、预估信息.
     *
     * @param  array  $params
     * @return mixed
     */
    public function getSuggestWagerInfo(array $params)
    {
        return $this->post('cpc.getSuggestWagerInfo', $params);
    }

    /**
     * 设置推广速率.
     *
     * @param  array  $params
     * @return mixed
     */
    public function setWagerSpeed(array $params)
    {
        return $this->post('cpc.setWagerSpeed', $params);
    }

    /**
     * 设置推广状态.
     *
     * @param  array  $params
     * @return mixed
     */
    public function updateWagerStatus(array $params)
    {
        return $this->post('cpc.updateWagerStatus', $params);
    }

    /**
     * 查询推广信息.
     *
     * @param  array  $params
     * @return mixed
     */
    public function getWagerInformation(array $params)
    {
        return $this->post('cpc.getWagerInformation', $params);
    }

    /**
     * 查询推广效果数据.
     *
     * @param  array  $params
     * @return mixed
     */
    public function getUVSummary(array $params)
    {
        return $this->post('cpc.getUVSummary', $params);
    }

    /**
     * 查询推广修改剩余次数.
     *
     * @param  array  $params
     * @return mixed
     */
    public function getResidueDegree(array $params)
    {
        return $this->post('cpc.getResidueDegree', $params);
    }

    /**
     * 设置预算.
     *
     * @param  array  $params
     * @return mixed
     */
    public function setWagerBudget(array $params)
    {
        return $this->post('cpc.setWagerBudget', $params);
    }

    /**
     * 获取竞价推广实时排名.
     *
     * @param  array  $params
     * @return mixed
     */
    public function getActualRanking(array $params)
    {
        return $this->post('cpc.getActualRanking', $params);
    }
}
