<?php

namespace JGI\BjornLunden\Provider;

use GuzzleHttp\Client;
use JGI\BjornLunden\Credentials;
use JGI\BjornLunden\Exception\BjornLundenHttpException;
use JGI\BjornLunden\Model\Customer;
use JGI\BjornLunden\Normalizer\CustomerNormalizer;

class CustomerProvider extends BaseProvider implements ProviderInterface
{
    /**
     * @return Customer[]
     */
    public function all(): array
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
    public function create(Customer $customer): Customer
    {
        $data = CustomerNormalizer::normalize($customer);

        $result = $this->post('customer/', $data);

        return CustomerNormalizer::denormalize($result);
    }

    /**
     * @param Customer $customer
     *
     * @return Customer
     */
    public function update(Customer $customer): Customer
    {
        $data = CustomerNormalizer::normalize($customer);

        return $this->updateFromArray($data);
    }

    /**
     * @param array $array
     *
     * @return Customer
     */
    public function updateFromArray(array $array): Customer
    {
        $result = $this->put('customer/', $array);

        return CustomerNormalizer::denormalize($result);
    }

    /**
     * @param string $id
     *
     * @return Customer|null
     */
    public function find(string $id): ?Customer
    {
        try {
            $result = $this->get('customer/' . $id);
        } catch (BjornLundenHttpException $exception) {
            if ($exception->getError()->isProbablyNotFound() || $exception->getCode() == 400) {
                return null;
            }

            throw $exception;
        }

        return CustomerNormalizer::denormalize($result);
    }
}
