<?php

declare(strict_types=1);

namespace JGI\BjornLunden\Tests\Normalizer;

use JGI\BjornLunden\Model\Document;
use JGI\BjornLunden\Model\Journal;
use JGI\BjornLunden\Normalizer\DocumentNormalizer;
use JGI\BjornLunden\Normalizer\JournalNormalizer;
use PHPUnit\Framework\TestCase;

class JournalNormalizerTest extends TestCase
{
    /**
     * @test
     */
    public function it_normalize_a_journal()
    {
        $journal = new Journal();
        $journal->setDocumentIds([1, 2]);
        $journal->setEntryInfoBy('PEM');
        $journal->setEntryInfoDate(new \DateTimeImmutable('2006-04-06'));
        $journal->setFinancialYearId('200507');
        $journal->setJournalEntryDate(new \DateTimeImmutable('2006-03-01'));
        $journal->setJournalEntryId(14);
        $journal->setJournalEntryText('Journaltext');
        $journal->setJournalId('A');
        $journal->setJournalName('Huvudserie');
        $journal->setLedgerEntries([]);
        $journal->setLockingInfoBy('null');
        $journal->setLockingInfoDate(new \DateTimeImmutable('2006-09-15'));
        $journal->setReportDate(new \DateTimeImmutable('2003-09-10'));

        $expected = [
            'documentIds' => [1, 2],
            'entryInfoBy' => 'PEM',
            'entryInfoDate' => '2006-04-06',
            'financialYearId' => '200507',
            'journalEntryDate' => '2006-03-01',
            'journalEntryId' => 14,
            'journalEntryText' => 'Journaltext',
            'journalId' => 'A',
            'journalName' => 'Huvudserie',
            'ledgerEntries' => [],
            'lockingInfoBy' => 'null',
            'lockingInfoDate' => '2006-09-15',
            'reportDate' => '2003-09-10',
        ];

        $this->assertEquals($expected, JournalNormalizer::normalize($journal));
    }

    /**
     * @test
     */
    public function it_denormalize_a_journal()
    {
        $data = [
            'documentIds' => [1, 2],
            'entryInfoBy' => 'PEM',
            'entryInfoDate' => '2006-04-06',
            'financialYearId' => '200507',
            'journalEntryDate' => '2006-03-01',
            'journalEntryId' => 14,
            'journalEntryText' => 'Journaltext',
            'journalId' => 'A',
            'journalName' => 'Huvudserie',
            'ledgerEntries' => [],
            'lockingInfoBy' => 'null',
            'lockingInfoDate' => '2006-09-15',
            'reportDate' => '2003-09-10',
        ];

        $journal = JournalNormalizer::denormalize($data);
        $this->assertEquals([1, 2], $journal->getDocumentIds());
        $this->assertEquals('PEM', $journal->getEntryInfoBy());
        $this->assertEquals('2006-04-06', $journal->getEntryInfoDate()->format('Y-m-d'));
        $this->assertEquals('200507', $journal->getFinancialYearId());
        $this->assertEquals('2006-03-01', $journal->getJournalEntryDate()->format('Y-m-d'));
        $this->assertEquals(14, $journal->getJournalEntryId());
        $this->assertEquals('Journaltext', $journal->getJournalEntryText());
        $this->assertEquals('A', $journal->getJournalId());
        $this->assertEquals('Huvudserie', $journal->getJournalName());
        $this->assertEquals([], $journal->getLedgerEntries());
        $this->assertEquals('null', $journal->getLockingInfoBy());
        $this->assertEquals('2006-09-15', $journal->getLockingInfoDate()->format('Y-m-d'));
        $this->assertEquals('2003-09-10', $journal->getReportDate()->format('Y-m-d'));
    }
}
