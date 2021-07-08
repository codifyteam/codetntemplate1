<?php

class converter
{

    private $rateValue;

    //I have base these rates on USD :)
    private $rates = [
        'TND' => 1.0,
        'USD' => 0.36,
        'EUR' => 0.3,
    ];

    public function setConvert($amount, $currency_from)
    {
        $this->rateValue = $amount / $this->rates[$currency_from];
    }

    public function getConvert($currency_to)
    {
        return round($this->rates[$currency_to] * $this->rateValue, 2);
    }

    public function getRates()
    {
        return $this->rates;
    }
}

?>
