<?php

namespace Mokhosh\FilamentRating\Concerns;

use Closure;

trait HasColor
{
    protected string|Closure $color = 'primary';

    public function color(string|Closure $color): static
    {
        $this->color = $color;

        return $this;
    }

    public function getColor(mixed $state = null): string
    {
        if ($this->color instanceof Closure) {
            return (string) ($this->color)($state);
        }

        return $this->color;
    }
}
