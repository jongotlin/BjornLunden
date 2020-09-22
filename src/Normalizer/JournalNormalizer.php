<?php


namespace JGI\BjornLunden\Normalizer;

use JGI\BjornLunden\Model\Journal;

class JournalNormalizer
{
    /**
     * @param Journal $journal
     *
     * @return array
     */
    public static function normalize(Journal $journal): array
    {
        $ledgerEntries = [];
        foreach ($journal->getLedgerEntries() as $ledgerEntry) {
            $ledgerEntries[] = LedgerEntryNormalizer::normalize($ledgerEntry);
        }

        return [
            'documentIds' => $journal->getDocumentIds(),
            'ledgerEntries' => $ledgerEntries,
            'entryInfoBy' => $journal->getEntryInfoBy(),
            'entryInfoDate' => $journal->getEntryInfoDate() ? $journal->getEntryInfoDate()->format('Y-m-d') : null,
            'financialYearId' => $journal->getFinancialYearId(),
            'journalEntryDate' => $journal->getJournalEntryDate() ? $journal->getJournalEntryDate()->format('Y-m-d') : null,
            'journalEntryId' => $journal->getJournalEntryId(),
            'journalEntryText' => $journal->getJournalEntryText(),
            'journalId' => $journal->getJournalId(),
            'journalName' => $journal->getJournalName(),
            'lockingInfoBy' => $journal->getLockingInfoBy(),
            'lockingInfoDate' => $journal->getLockingInfoDate() ? $journal->getLockingInfoDate()->format('Y-m-d') : null,
            'reportDate' => $journal->getReportDate() ? $journal->getReportDate()->format('Y-m-d') : null,
        ];
    }

    /**
     * @param array $data
     *
     * @return Journal
     */
    public static function denormalize(array $data): Journal
    {
        $journal = new Journal();
        $journal->setDocumentIds($data['documentIds']);
        foreach ($data['ledgerEntries'] as $ledgerEntryData) {
            $journal->addLedgerEntry(LedgerEntryNormalizer::denormalize($ledgerEntryData));
        }
        $journal->setEntryInfoBy($data['entryInfoBy']);
        $journal->setEntryInfoDate(new \DateTimeImmutable($data['entryInfoDate']));
        $journal->setFinancialYearId($data['financialYearId']);
        $journal->setJournalEntryDate(new \DateTimeImmutable($data['journalEntryDate']));
        $journal->setJournalEntryId($data['journalEntryId']);
        $journal->setJournalEntryText($data['journalEntryText']);
        $journal->setJournalId($data['journalId']);
        $journal->setJournalName($data['journalName']);
        $journal->setLockingInfoBy($data['lockingInfoBy']);
        $journal->setLockingInfoDate(new \DateTimeImmutable($data['lockingInfoDate']));
        $journal->setReportDate(new \DateTimeImmutable($data['reportDate']));

        return $journal;
    }
}
