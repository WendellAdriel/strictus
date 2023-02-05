<?php

namespace Strictus\Interfaces;

use Strictus\Types\StrictusUndefined;

interface StrictusTypeInterface
{
    /**
     * @param  string  $value
     * @return mixed
     */
    public function __get(string $value): mixed;

    /**
     * @param  string  $name
     * @param  mixed  $value
     * @return void
     */
    public function __set(string $name, mixed $value): void;

    /**
     * @param  mixed  $value
     * @return mixed
     */
    public function __invoke(mixed $value = new StrictusUndefined()): mixed;
}
