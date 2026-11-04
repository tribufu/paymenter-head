# Head HTML for Paymenter

Adds HTML of your own to the end of the `<head>` of every page of the [Paymenter](https://paymenter.org) store, such as
the script of an analytics service (Umami, Plausible, Google Analytics), a verification meta tag, or a stylesheet. The
admin area is left as it is.

[![MIT License][mit-badge]][mit-url]
[![Discord Chat][discord-badge]][discord-url]

[mit-badge]: https://img.shields.io/badge/license-MIT-blue.svg
[mit-url]: https://github.com/tribufu/paymenter-head/blob/main/LICENSE.txt
[discord-badge]: https://img.shields.io/discord/276504514616623104.svg?logo=discord&style=flat-square
[discord-url]: https://www.tribufu.com/discord

[Website](https://www.tribufu.com) |
[Discord](https://www.tribufu.com/discord)

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

This project is licensed under the [MIT License].

[MIT License]: https://github.com/tribufu/paymenter-head/blob/main/LICENSE.txt
