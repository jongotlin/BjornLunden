<?php

namespace JGI\BjornLunden\Provider;

use JGI\BjornLunden\Model\Customer;
use JGI\BjornLunden\Normalizer\CustomerNormalizer;

class CustomerProvider extends BaseProvider implements ProviderInterface
{
    /**
     * @return Customer[]
     */
    public function all()
    {
        $data = $this->get('customer/');

        $customers = [];
        foreach ($data as $row) {
            $customers[] = CustomerNormalizer::denormalize($row);
        }

        return $customers;
    }

    /**
     * @param Customer $customer
     *
     * @return Customer
     */
    public function create(Customer $customer)
    {
        $data = CustomerNormalizer::normalize($customer);

        $result = $this->post('customer/', $data);

        return CustomerNormalizer::denormalize($result);
    }

    public function find($id): Customer
    {
        $result = $this->get('customer/' . $id);

        return CustomerNormalizer::denormalize($result);
    }
}
