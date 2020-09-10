<?php

namespace JGI\BjornLunden\Model;

class Document
{
    /**
     * @var \SplFileInfo|null
     */
    private $file;

    /**
     * @var string|null
     */
    private $id;

    /**
     * @return \SplFileInfo|null
     */
    public function getFile(): ?\SplFileInfo
    {
        return $this->file;
    }

    /**
     * @param \SplFileInfo|null $file
     */
    public function setFile(?\SplFileInfo $file): void
    {
        $this->file = $file;
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }
}
