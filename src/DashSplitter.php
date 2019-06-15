<?php declare(strict_types=1);

namespace Jawira\CaseConverter;

class DashSplitter extends Splitter
{
    const PATTERN = DashGluer::DELIMITER . '+';

    public function split(): array
    {
        return $this->splitUsingPattern($this->inputString, self::PATTERN);
    }
}