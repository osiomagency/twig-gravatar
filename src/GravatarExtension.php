<?php

namespace Osiom\TwigGravatar;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class GravatarExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('gravatar', [$this, 'getGravatarUrl']),
        ];
    }

    /**
     * Generates the Gravatar URL for a given email.
     *
     * @param string $email User's email address.
     * @param int $size Gravatar image size (in pixels).
     * @param string $default Default image type (identicon, monsterid, etc.).
     * @return string Gravatar avatar URL.
     */
    public function getGravatarUrl(string $email, int $size = 80, string $default = 'identicon'): string
    {
        $hash = md5(strtolower(trim($email)));
        return "https://www.gravatar.com/avatar/{$hash}?s={$size}&d={$default}";
    }
}
