<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\TestStatus;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @psalm-immutable
 */
final readonly class Skipped extends Known
{
    /**
     * @psalm-assert-if-true Skipped $this
     */
    public function isSkipped(): bool
    {
        return true;
    }

    public function asInt(): int
    {
        return 1;
    }

    public function asString(): string
    {
        return 'skipped';
    }
}
