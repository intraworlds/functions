<?php

declare(strict_types=1);

namespace IW;

use JsonException;

use const JSON_THROW_ON_ERROR;

// phpcs:disable Squiz.Functions.GlobalFunction.Found

/**
 * Returns the JSON representation of a value
 *
 * @param mixed $value   The value being encoded. Can be any type except a resource.
 * @param int   $options https://www.php.net/manual/en/json.constants.php
 * @param int   $depth   Set the maximum depth. Must be greater than zero.
 *
 * @throws JsonException
 */
function json_encode($value, int $options = 0, int $depth = 512): string
{
    return \json_encode($value, JSON_THROW_ON_ERROR | $options, $depth);
}

/**
 * Decodes a JSON string
 *
 * @param string $json    The json string being decoded.
 * @param bool   $assoc   When TRUE, returned objects will be converted into associative arrays.
 * @param int    $depth   User specified recursion depth.
 * @param int    $options https://www.php.net/manual/en/json.constants.php
 *
 * @return mixed
 *
 * @throws JsonException
 */
function json_decode(string $json, bool $assoc = false, int $depth = 512, int $options = 0)
{
    return \json_decode($json, $assoc, $depth, JSON_THROW_ON_ERROR | $options);
}
