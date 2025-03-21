<?php

class Figure {
    protected bool $isBlack;

    public function __construct($isBlack) {
        $this->isBlack = $isBlack;
    }

    /** @noinspection PhpToStringReturnInspection */
    public function __toString() {
        throw new \Exception("Not implemented");
    }

    public function isBlack(): bool
    {
        return $this->isBlack;
    }
}
