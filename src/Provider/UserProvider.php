<?php

namespace JGI\BjornLunden\Provider;

use JGI\BjornLunden\Model\User;

class UserProvider extends BaseProvider implements ProviderInterface
{
    /**
     * @return User[]
     */
    public function all()
    {
        $data = $this->get('user/');

        $users = [];
        foreach ($data as $row) {
            $users[] = new User(
                $row['id'],
                $row['entityId'],
                $row['uuid'],
                $row['name'],
                $row['email'],
                $row['socialSecurityNumber'],
                $row['type'],
                $row['admin'],
                $row['accounting'],
                $row['accountingView'],
                $row['invoicing'],
                $row['invoicingView'],
                $row['cashRegister'],
                $row['supplier'],
                $row['supplierView'],
                $row['supplierAttest'],
                $row['salary'],
                $row['time'],
                $row['system'],
                $row['agi'],
                $row['integration']
            );
        }

        return $users;
    }
}
