# FLoC Block plugin for Craft CMS 3.x

Sets the HTTP response header Permissions-Policy: interest-cohort=() on all requests

## Requirements

This plugin requires Craft CMS 3.0.0-beta.23 or later.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require Refined-Practice/flo-c-block

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for FLoC Block.

## FLoC Block Overview

Sets the HTTP response header Permissions-Policy: interest-cohort=() on all requests, that's it! Note that to avoid static files being FLoC'ed you should also add:

```
<IfModule mod_headers.c>
    Header add Permissions-Policy "interest-cohort=()"
</IfModule>
```
to the .htaccess file in your web root.

Brought to you by [Paul Ratcliffe](https://www.refinedpractice.com)
