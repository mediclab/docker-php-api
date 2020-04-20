<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class ContainersIdArchiveHeadResponse400
{
    /**
     * The error message. Either "must specify path parameter" (path cannot be empty) or "not a directory" (path was asserted to be a directory but exists as a file).
     *
     * @var string
     */
    protected $message;

    /**
     * The error message. Either "must specify path parameter" (path cannot be empty) or "not a directory" (path was asserted to be a directory but exists as a file).
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * The error message. Either "must specify path parameter" (path cannot be empty) or "not a directory" (path was asserted to be a directory but exists as a file).
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }
}
