<?php

namespace JGI\BjornLunden\Provider;

use JGI\BjornLunden\Model\CustomerInvoice;
use JGI\BjornLunden\Normalizer\CustomerInvoiceNormalizer;

class CustomerInvoiceProvider extends BaseProvider implements ProviderInterface
{
    /**
     * @return CustomerInvoice[]
     */
    public function all()
    {
        $data = $this->get('customerinvoice/date/1970-01-01/2050-01-01');

        $customerInvoices = [];
        foreach ($data as $row) {
            $customerInvoices[] = CustomerInvoiceNormalizer::denormalize($row);
        }

        return $customerInvoices;
    }

    /**
     * @param CustomerInvoice $customerInvoice
     *
     * @return CustomerInvoice
     */
    public function create(CustomerInvoice $customerInvoice): CustomerInvoice
    {
        $data = CustomerInvoiceNormalizer::normalize($customerInvoice);

        $result = $this->post('customerinvoice/', $data);

        return CustomerInvoiceNormalizer::denormalize($result);
    }

    /**
     * @param $invoiceNumber
     *
     * @return CustomerInvoice
     */
    public function find($invoiceNumber): CustomerInvoice
    {
        $result = $this->get('customer/' . $invoiceNumber);

        return CustomerInvoiceNormalizer::denormalize($result);
    }
}
