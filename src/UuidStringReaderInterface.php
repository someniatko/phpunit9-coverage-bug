<?php

declare(strict_types=1);

namespace Someniatko\PhpunitCoverageBug;

interface UuidStringReaderInterface
{
    public function fromString(string $uuid): object;
}
