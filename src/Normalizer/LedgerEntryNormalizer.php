<?php


namespace JGI\BjornLunden\Normalizer;

use JGI\BjornLunden\Model\LedgerEntry;

class LedgerEntryNormalizer
{
    /**
     * @param LedgerEntry $ledgerEntry
     *
     * @return array
     */
    public static function normalize(LedgerEntry $ledgerEntry): array
    {
        return [
            'accountId' => $ledgerEntry->getAccountId(),
            'amount' => $ledgerEntry->getAmount() ? $ledgerEntry->getAmount() / 100 : null,
            'costBearerId' => $ledgerEntry->getCostBearerId(),
            'costCenterId' => $ledgerEntry->getCostCenterId(),
            'date' => $ledgerEntry->getDate() ? $ledgerEntry->getDate()->format('Y-m-d') : null,
            'projectId' => $ledgerEntry->getProjectId(),
            'quantity' => $ledgerEntry->getQuantity(),
            'text' => $ledgerEntry->getText(),
        ];
    }

    /**
     * @param array $data
     *
     * @return LedgerEntry
     */
    public static function denormalize(array $data): LedgerEntry
    {
        $ledgerEntry = new LedgerEntry();
        $ledgerEntry->setAccountId($data['accountId']);
        if ($data['amount']) {
            $ledgerEntry->setAmount($data['amount'] * 100);
        }
        $ledgerEntry->setCostBearerId($data['costBearerId']);
        $ledgerEntry->setCostCenterId($data['costCenterId']);
        $ledgerEntry->setDate(new \DateTimeImmutable($data['date']));
        $ledgerEntry->setProjectId($data['projectId']);
        $ledgerEntry->setQuantity($data['quantity']);
        $ledgerEntry->setText($data['text']);

        return $ledgerEntry;
    }
}
