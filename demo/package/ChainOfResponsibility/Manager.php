<?php

namespace package\ChainOfResponsibility;

/**
 * Class Manager 经理
 * @package package\ChainOfResponsibility
 */
class Manager extends Handler
{
    /**
     * @param Application $application
     * @return string
     * @throws \Exception
     */
    public function handleApplication(Application $application)
    {
        if ($application->type == '请假' && $application->number <= 3) {
            return "{$this->name}：$application->type $application->number 天批准了";
        } else {
            if ($this->superior != null) {
                // 转到上级处理
                return '【' . $this->name . '权利不够，向' . $this->superior->name . '请求】'
                    . $this->superior->handleApplication($application);
            } else {
                throw new \Exception('无法处理申请');
            }
        }
    }
}
