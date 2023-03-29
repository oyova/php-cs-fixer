<?php

namespace Oyova\PhpCsFixer\Fixers;

trait FixerName
{
    public function getName(): string
    {
        return 'Oyova/'.parent::getName();
    }
}
