# [Bloggy](https://github.com/dbtedman/kata-bloggy)

> **⚠️ WARNING:** Not production ready code, instead a [Code Kata](https://github.com/dbtedman#code-kata) intended to
> hone my programming skills through practice and repetition.

[![CI GitHub Pipeline](https://img.shields.io/github/workflow/status/dbtedman/kata-bloggy/ci?style=for-the-badge&logo=github&label=ci)](https://github.com/dbtedman/kata-bloggy/actions/workflows/ci.yml)
[![sast workflow status](https://img.shields.io/github/workflow/status/dbtedman/kata-bloggy/sast?style=for-the-badge&logo=github&label=sast)](https://github.com/dbtedman/kata-bloggy/actions/workflows/sast.yml)
![language: php](https://img.shields.io/badge/language-php-blue.svg?style=for-the-badge)
![platform: wordpress](https://img.shields.io/badge/platform-wordpress-blue.svg?style=for-the-badge)
[![MIT License](https://img.shields.io/github/license/dbtedman/kata-bloggy?color=orange&style=for-the-badge)](https://github.com/dbtedman/kata-bloggy/blob/main/LICENSE.md)

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

> 💡 Organised around categories from the [OWASP Top 10 - 2021](https://owasp.org/www-project-top-ten/)
> and [OWASP API Security Top 10 2019](https://owasp.org/www-project-api-security/) projects.

### [A01:2021-Broken Access Control](https://owasp.org/Top10/A01_2021-Broken_Access_Control/)

-   [GitHub Secret scanning](https://github.com/features/security) detects secrets incorrectly committed into the
    repository.

### [A02:2021-Cryptographic Failures](https://owasp.org/Top10/A02_2021-Cryptographic_Failures/)

_No relevant mitigations are in place._

### [A03:2021-Injection](https://owasp.org/Top10/A03_2021-Injection/) + [API8:2019 Injection](https://github.com/OWASP/API-Security/blob/master/2019/en/src/0xa8-injection.md)

_No relevant mitigations are in place._

### [A04:2021-Insecure Design](https://owasp.org/Top10/A04_2021-Insecure_Design/)

_No relevant mitigations are in place._

### [A05:2021-Security Misconfiguration](https://owasp.org/Top10/A05_2021-Security_Misconfiguration/) + [API7:2019 Security Misconfiguration](https://github.com/OWASP/API-Security/blob/master/2019/en/src/0xa7-security-misconfiguration.md)

_No relevant mitigations are in place._

### [A06:2021-Vulnerable and Outdated Components](https://owasp.org/Top10/A06_2021-Vulnerable_and_Outdated_Components/)

-   [Snyk](https://snyk.io) or [GitHub Dependabot](https://github.com/features/security) scans Composer and NPM dependencies for know vulnerabilities and creates pull requests to
    resolve the vulnerabilities when available.
-   `roave/security-advisories` package blocks the installation of vulnerable Composer packages.

### [A07:2021-Identification and Authentication Failures](https://owasp.org/Top10/A07_2021-Identification_and_Authentication_Failures/) + [API2:2019 Broken User Authentication](https://github.com/OWASP/API-Security/blob/master/2019/en/src/0xa2-broken-user-authentication.md)

_No relevant mitigations are in place._

### [A08:2021-Software and Data Integrity Failures](https://owasp.org/Top10/A08_2021-Software_and_Data_Integrity_Failures/)

-   Third party dependencies are carefully selected and described with explicit version numbers in `composer.json`
    and `package.json`.
-   [Snyk](https://snyk.io) or [GitHub Dependabot](https://github.com/features/security) will raise an alert if a
    suspicious package, or version of a package is being depended upon.
-   Dependencies required during development are segregated from those required during operation of this plugin.

### [A09:2021-Security Logging and Monitoring Failures](https://owasp.org/Top10/A09_2021-Security_Logging_and_Monitoring_Failures/) + [API10:2019 Insufficient Logging & Monitoring](https://github.com/OWASP/API-Security/blob/master/2019/en/src/0xaa-insufficient-logging-monitoring.md)

_No relevant mitigations are in place._

### [A10:2021-Server-Side Request Forgery](https://owasp.org/Top10/A10_2021-Server-Side_Request_Forgery_%28SSRF%29/)

_No relevant mitigations are in place._

### [API1:2019 Broken Object Level Authorization](https://github.com/OWASP/API-Security/blob/master/2019/en/src/0xa1-broken-object-level-authorization.md)

_No relevant mitigations are in place._

### [API3:2019 Excessive Data Exposure](https://github.com/OWASP/API-Security/blob/master/2019/en/src/0xa3-excessive-data-exposure.md)

_No relevant mitigations are in place._

### [API4:2019 Lack of Resources & Rate Limiting](https://github.com/OWASP/API-Security/blob/master/2019/en/src/0xa4-lack-of-resources-and-rate-limiting.md)

_No relevant mitigations are in place._

### [API5:2019 Broken Function Level Authorization](https://github.com/OWASP/API-Security/blob/master/2019/en/src/0xa5-broken-function-level-authorization.md)

_No relevant mitigations are in place._

### [API6:2019 Mass Assignment](https://github.com/OWASP/API-Security/blob/master/2019/en/src/0xa6-mass-assignment.md)

_No relevant mitigations are in place._

### [API9:2019 Improper Assets Management](https://github.com/OWASP/API-Security/blob/master/2019/en/src/0xa9-improper-assets-management.md)

_No relevant mitigations are in place._

## References

-   [WordPress Packagist](https://wpackagist.org)

## License

The [MIT License](./LICENSE.md) is used by this project.
