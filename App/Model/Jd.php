<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-10-10
 * Time: 下午3:18
 */

namespace App\Model;


use EasySwoole\Spl\SplBean;

class Jd extends Base
{
    private $table = 'jd';

    function insert(JdBean $jd) {
        $this->getDb()->insert($this->table, $jd->toArray(null, SplBean::FILTER_NOT_NULL));
    }

    function update(JdBean $jd, $price) {
        $this->getDb()->where('sku', $jd->getSku())->update($this->table, ['price' => $price]);
    }
}