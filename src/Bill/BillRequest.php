<?php namespace Nticaric\Fiskalizacija\Bill;

use Nticaric\Fiskalizacija\Request;
use XMLWriter;

class BillRequest extends Request
{ 
    public function __construct(Bill $bill)
    {
        $this->request     = $bill;
        $this->requestName = 'RacunZahtjev';
    }
}