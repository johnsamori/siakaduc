<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\Tool;

/**
 * Interface for a provider for an IP address for extensions supporting IP references.
 */
interface IpAddressProviderInterface
{
    public function getAddress(): ?string;
}
