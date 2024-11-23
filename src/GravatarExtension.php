<?php

namespace YourVendor\TwigGravatarExtension;

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
     * Génère l'URL Gravatar pour un email donné.
     *
     * @param string $email Adresse email de l'utilisateur.
     * @param int $size Taille de l'image Gravatar (en pixels).
     * @param string $default Type d'image par défaut (identicon, monsterid, etc.).
     * @return string URL de l'avatar Gravatar.
     */
    public function getGravatarUrl(string $email, int $size = 80, string $default = 'identicon'): string
    {
        $hash = md5(strtolower(trim($email)));
        return "https://www.gravatar.com/avatar/{$hash}?s={$size}&d={$default}";
    }
}
