<?php

namespace Symfony\Component\Security\Http\Tests\Fixtures;

use Symfony\Component\Security\Core\Authentication\Token\TokenInterface as BaseTokenInterface;

interface TokenInterface extends BaseTokenInterface
{
    public function __serialize(): array;
    public function __unserialize(array $data): void;
}
