<?php

namespace Tests\traits;

/**
 *  在測試時能在Class創建前Seed Default Data.
 *
 *  會慢很多
 */
trait DataSeedable
{
    /**
     * 使用這個Trait之後，每項TestFunction都將重新Seed資料
     * @before
     */
    public function seedCustomData()
    {
        $this->afterApplicationCreated(function () {
            $this->seed('DatabaseSeeder');
        });
    }
}
