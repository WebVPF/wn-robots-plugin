# Robots plugin

Adds robots.txt for your site.

## Getting started

Use composer to install the plugin:

```bash
composer require webvpf/wn-robots-plugin
```

## Editing robots.txt

In the backend of your application, go to settings and select `Robots.txt`. When filling out the rules, you can use Twig.

An example of filling robots.txt:

```twig
User-agent: *
Allow: /
Sitemap: {{ 'sitemap.xml' | app }}
```

or

```twig
Sitemap: {{ url('sitemap.xml') }}
```

As a result, robots.txt will look like this:

```yaml
User-agent: *
Allow: /
Sitemap: https://example.com/sitemap.xml
```
