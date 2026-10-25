# Head HTML for Paymenter

Adds HTML of your own to the end of the `<head>` of every page of the [Paymenter](https://paymenter.org) store, such as
the script of an analytics service (Umami, Plausible, Google Analytics), a verification meta tag, or a stylesheet. The
admin area is left as it is.

The HTML is added as it is, without escaping, so only administrators who can manage extensions can change it. It works
with any theme that calls `hook('head')` in its layout, as the default theme does.

Tested with Paymenter v1.5.9.

## Installation

Copy the files of this repository to `extensions/Others/HeadHtml` of Paymenter; the directory must have this name:

```bash
git clone https://github.com/tribufu/paymenter-head.git extensions/Others/HeadHtml
```

Enable **Head HTML** in `/admin`, under Extensions, and write the HTML in its setting, for example:

```html
<script defer src="https://analytics.example.com/script.js" data-website-id="..."></script>
```

## License

[MIT](LICENSE.txt)
