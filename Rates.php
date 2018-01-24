<?php

namespace wallsblack\blockchain;

use yii\base\Widget;
use Blockchain\Blockchain;

/**
 * This is just an example.
 */
class Rates extends Widget
{
    public $cur;
    public $api_code = null;

    public function init()
    {
        parent::init();


        if ($this->cur === null) {
            $this->cur = 'USD';
        }
    }

    public function run()
    {
        $blockchain = new Blockchain($this->api_code);
        $rates = $blockchain->Rates->get();

        return $rates;
    }
}
