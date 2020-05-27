<?php
require 'liqpay.php';

class joomlaliqpay extends LiqPay
{
    public function __construct($public_key, $private_key, $api_url = null)
{
    parent::__construct($public_key, $private_key,$api_url);

}

    public function getForm($param)
    {



        return $this->cnb_form($param);
    }
}