<?php
//策略模式 聚合关系
class Context{
    private $strategy;
    public function __construct(IStrategy $strategy) {
        ;
    }
}