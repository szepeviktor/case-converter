<?php declare(strict_types=1);

namespace Jawira\CaseConverter;

class UnderscoreSplitter extends Splitter
{
    const PATTERN = UnderscoreGluer::DELIMITER . '+';

    public function split(): array
    {
        return $this->splitUsingPattern($this->inputString, self::PATTERN);
    }
}