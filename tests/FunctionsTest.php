<?php

declare(strict_types=1);

namespace IW;

use PHPUnit\Framework\TestCase;

use const JSON_INVALID_UTF8_IGNORE;
use const JSON_PRETTY_PRINT;

// phpcs:disable SlevomatCodingStandard.Namespaces.ReferenceUsedNamesOnly.ReferenceViaFallbackGlobalName

final class FunctionsTest extends TestCase
{
    /**
     * Tests IW\json_encode
     *
     * @covers ::IW\json_encode
     */
    public function testJsonEncode(): void
    {
        $array[] = &$array; // recursion cannot be serialized => error

        $this->expectException('JsonException');
        $this->expectExceptionMessage('Recursion detected');

        json_encode($array, JSON_PRETTY_PRINT);
    }

    /**
     * Tests IW\json_encode
     *
     * @covers ::IW\json_decode
     */
    public function testJsonDecode(): void
    {
        $this->expectException('JsonException');
        $this->expectExceptionMessage('Syntax error');

        json_decode('{', true, 512, JSON_INVALID_UTF8_IGNORE);
    }
}
