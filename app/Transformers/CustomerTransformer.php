<?php
/**
 * Created by PhpStorm.
 * User: Rex
 * Date: 2017/2/14
 * Time: 17:18
 */

namespace app\Transformers;

use App\Customer;
use League\Fractal\TransformerAbstract;

class CustomerTransformer extends TransformerAbstract
{
    public function transform(Customer $customer)
    {
        return [
            'id'                => $customer->id,
            'name'             => $customer->name,
            'address'          => $customer->address,
        ];
    }
}