<?php

declare(strict_types=1);

namespace JGI\BjornLunden\Tests\Provider;

use JGI\BjornLunden\BjornLunden;
use JGI\BjornLunden\Credentials;
use JGI\BjornLunden\Exception\BjornLundenHttpException;
use JGI\BjornLunden\Model\Customer;
use JGI\BjornLunden\Model\Journal;
use JGI\BjornLunden\Model\User;
use JGI\BjornLunden\Provider\CustomerInvoiceProvider;
use JGI\BjornLunden\Provider\CustomerProvider;
use JGI\BjornLunden\Provider\JournalProvider;
use PHPUnit\Framework\TestCase;

class JournalProviderTest extends TestCase
{
    use ProviderTestTrait;

    /**
     * @test
     */
    public function it_creates_a_journal()
    {
        $json = file_get_contents(__DIR__ . '/json/journal.json');

        $journalProvider = new JournalProvider(
            $this->createHttpClientMock($json),
            $this->createCredentialsMock()
        );
        $journal = new Journal();
        $newJournal = $journalProvider->create($journal);

        $this->assertInstanceOf(Journal::class, $newJournal);
    }
}
