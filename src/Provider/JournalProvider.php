<?php

namespace JGI\BjornLunden\Provider;

use JGI\BjornLunden\Model\Journal;
use JGI\BjornLunden\Normalizer\JournalNormalizer;

class JournalProvider extends BaseProvider implements ProviderInterface
{
    /**
     * @param Journal $journal
     *
     * @return Journal
     */
    public function create(Journal $journal): Journal
    {
        $data = JournalNormalizer::normalize($journal);

        $result = $this->post('journal', $data);

        return JournalNormalizer::denormalize($result);
    }
}
