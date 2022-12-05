# Robots plugin

This plugin adds robots.txt file for your Winter CMS site.

---

A `robots.txt` file is used to manage crawler traffic to your site. It tells search engine crawlers which URLs the crawler can access on your site. This is used mainly to avoid overloading your site with requests.

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

## Instructions for robots.txt

For detailed instructions on filling out the robots.txt file, see [developers.google.com](https://developers.google.com/search/docs/crawling-indexing/robots/create-robots-txt)
