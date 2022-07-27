# [Bloggy](https://github.com/dbtedman/kata-bloggy)

> **⚠️ WARNING:** Not production ready code, instead a [Code Kata](https://github.com/dbtedman#code-kata) intended to
> hone my programming skills through practice and repetition.

[![CI GitHub Pipeline](https://img.shields.io/github/workflow/status/dbtedman/kata-bloggy/ci?style=for-the-badge&logo=github&label=ci)](https://github.com/dbtedman/kata-bloggy/actions/workflows/ci.yml)
[![sast workflow status](https://img.shields.io/github/workflow/status/dbtedman/kata-bloggy/sast?style=for-the-badge&logo=github&label=sast)](https://github.com/dbtedman/kata-bloggy/actions/workflows/sast.yml)

Demonstration codebase for hosting a WordPress site.

-   [Getting Started](#getting-started)
-   [Verification](#verification)
-   [Design](#design)
-   [Security](#security)
-   [References](#references)
-   [License](#license)

## Getting Started

```shell
nvm use && make
```

When developing with WordPress, you might need to help your IDE by downloading a copy of WordPress.

```shell
make help_ide
```

## Verification

### Linting

-   [Prettier](https://prettier.io)
-   [PHP Code Sniffer](https://github.com/squizlabs/PHP_CodeSniffer)

```shell
make lint
```

### Unit Testing

-   [PHPUnit](https://phpunit.de)

```shell
make test
```

Executes unit tests contained within the `test/unit/php` directory.

### Integration Testing

> ⚠️ Currently only for manual testing.

```shell
make local
```

You can then access a live instance of wordpress with bloggy plugin
installed [http://localhost:8080](http://localhost:8080).

## Design

### Tech Stack

-   [Docker Desktop](https://www.docker.com/products/docker-desktopm)
-   [PHP (v7.4)](https://www.php.net) - This version will match
    the [minimum requirements for WordPress](https://en-au.wordpress.org/about/requirements/).
-   [WordPress (v6.0)](https://wordpress.org/)

### Coding Standards

-   [PSR-12: Extended Coding Style](https://www.php-fig.org/psr/psr-12/)

### WP-CLI Automation

WordPress usually requires significant manual interaction after initial install. WP-CLI is used to automate this process
in a repeatable manner.

### WordPress Plugins and Themes as Composer Dependencies

By leveraging the [WordPress Packagist](https://wpackagist.org) system, any WordPress Plugins or Themes are installed as
composer dependencies that allows for them to be updated easily alongside any other php dependencies use by this website
itself.

## Security

See the [Security Policy](./SECURITY.md).

## References

-   [WordPress Packagist](https://wpackagist.org)

## License

The [MIT License](./LICENSE.md) is used by this project.
