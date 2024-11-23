## Twig Gravatar Extension

A **Twig** extension for generating **Gravatar** URLs based on user email addresses. This makes it easy to display profile images in your Twig templates.

---

### Installation

Install the package via **Composer**:

```bash
composer require osiomagency/twig-gravatar
```

---

### Usage

1. Register the extension in your Twig environment:

```php
use Osiom\TwigGravatar\GravatarExtension;

$twig = new \Twig\Environment($loader);
$twig->addExtension(new GravatarExtension());
```

2. Use the `gravatar` filter in your Twig templates:

```twig
<img src="{{ user.email|gravatar(200, 'monsterid') }}" alt="User Avatar">
```

---

### Parameters

The `gravatar` filter accepts the following parameters:

| Parameter  | Type   | Default     | Description                          |
|------------|--------|-------------|--------------------------------------|
| `email`    | string | (required)  | User's email address.                |
| `size`     | int    | `80`        | Size of the Gravatar image in pixels.|
| `default`  | string | `'identicon'` | Default image type (if no Gravatar exists). |

**Example Values for `default`**:
- `identicon`
- `monsterid`
- `wavatar`
- `retro`
- `robohash`

For more details, see the [Gravatar Documentation](https://docs.gravatar.com/api/avatars/images/).

---

### Example

```twig
<img src="{{ user.email|gravatar(150, 'retro') }}" alt="User Avatar">
```

This will generate a URL like:

```plaintext
https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=150&d=retro
```

---

### License

This project is licensed under the [MIT License](LICENSE).

---

### Contributing

Contributions are welcome! Feel free to submit a pull request or open an issue.

---

### About

This package is developed and maintained by **OSIOM AGENCY**.  
For inquiries, contact [nicolas.baud@osiom.fr](mailto:nicolas.baud@osiom.fr).
