<?php

declare(strict_types=1);

namespace Nyx\Http\Factory;

use Nyholm\Psr7\Uri;
use Psr\Http\Message\UriFactoryInterface;
use Psr\Http\Message\UriInterface;

use function Nyx\Helper\Url\normalizeUri;

class UriFactory implements UriFactoryInterface
{
    public function createUri(string $uri = ''): UriInterface
    {
        return new Uri(normalizeUri($uri));
    }
}
