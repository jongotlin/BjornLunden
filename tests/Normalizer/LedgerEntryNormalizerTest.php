<?php

declare(strict_types=1);

namespace JGI\BjornLunden\Tests\Normalizer;

use JGI\BjornLunden\Model\Document;
use JGI\BjornLunden\Model\Journal;
use JGI\BjornLunden\Model\LedgerEntry;
use JGI\BjornLunden\Normalizer\DocumentNormalizer;
use JGI\BjornLunden\Normalizer\JournalNormalizer;
use JGI\BjornLunden\Normalizer\LedgerEntryNormalizer;
use PHPUnit\Framework\TestCase;

class LedgerEntryNormalizerTest extends TestCase
{
    /**
     * @test
     */
    public function it_normalize_a_ledger_entry()
    {
        $ledgerEntry = new LedgerEntry();
        $ledgerEntry->setAccountId('2440');
        $ledgerEntry->setAmount(234);
        $ledgerEntry->setCostBearerId('CB1');
        $ledgerEntry->setCostCenterId('CC1');
        $ledgerEntry->setDate(new \DateTimeImmutable('2010-01-08'));
        $ledgerEntry->setProjectId('P1');
        $ledgerEntry->setQuantity(1);
        $ledgerEntry->setText('[775] ACADEMUS');

        $expected = [
            'accountId' => '2440',
            'amount' => 2.34,
            'costBearerId' => 'CB1',
            'costCenterId' => 'CC1',
            'date' => '2010-01-08',
            'projectId' => 'P1',
            'quantity' => 1,
            'text' => '[775] ACADEMUS',
        ];

        $this->assertEquals($expected, LedgerEntryNormalizer::normalize($ledgerEntry));
    }

    /**
     * @test
     */
    public function it_denormalize_a_ledger_entry()
    {
        $data = [
            'accountId' => '2440',
            'amount' => 2.34,
            'costBearerId' => 'CB1',
            'costCenterId' => 'CC1',
            'date' => '2010-01-08',
            'projectId' => 'P1',
            'quantity' => 1,
            'text' => '[775] ACADEMUS',
        ];

        $ledgerEntry = LedgerEntryNormalizer::denormalize($data);
        $this->assertEquals('2440', $ledgerEntry->getAccountId());
        $this->assertEquals(234, $ledgerEntry->getAmount());
        $this->assertEquals('CB1', $ledgerEntry->getCostBearerId());
        $this->assertEquals('CC1', $ledgerEntry->getCostCenterId());
        $this->assertEquals('2010-01-08', $ledgerEntry->getDate()->format('Y-m-d'));
        $this->assertEquals('P1', $ledgerEntry->getProjectId());
        $this->assertEquals(1, $ledgerEntry->getQuantity());
        $this->assertEquals('[775] ACADEMUS', $ledgerEntry->getText());


    }
}
