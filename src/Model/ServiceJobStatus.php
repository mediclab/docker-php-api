<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class ServiceJobStatus
{
    /**
     * The version number of the object such as node, service, etc. This is needed to avoid conflicting writes.
     *
     * @var ObjectVersion
     */
    protected $jobIteration;
    /**
     * The last time, as observed by the server, that this job was started.
     *
     * @var string
     */
    protected $lastExecution;

    /**
     * The version number of the object such as node, service, etc. This is needed to avoid conflicting writes.
     */
    public function getJobIteration(): ?ObjectVersion
    {
        return $this->jobIteration;
    }

    /**
     * The version number of the object such as node, service, etc. This is needed to avoid conflicting writes.
     */
    public function setJobIteration(?ObjectVersion $jobIteration): self
    {
        $this->jobIteration = $jobIteration;

        return $this;
    }

    /**
     * The last time, as observed by the server, that this job was started.
     */
    public function getLastExecution(): ?string
    {
        return $this->lastExecution;
    }

    /**
     * The last time, as observed by the server, that this job was started.
     */
    public function setLastExecution(?string $lastExecution): self
    {
        $this->lastExecution = $lastExecution;

        return $this;
    }
}
