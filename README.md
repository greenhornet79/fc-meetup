# FC Meetup

A WordPress plugin to help the FCWP meetup learn about collaborative programming using Github, the Meetup API, and WordPress programming standards.

This plugin is based on the WordPress Plugin Boilerplate, a standardized, organized, object-oriented foundation for building high-quality WordPress Plugins.

## Contributing

Anyone is welcome to contribute to this plugin. To do so, clone this repository to your local machine, make your changes in a branch, and submit a pull request. 

If you have a feature you would like to request, please create an Issue.


## Features of the WordPress Plugin Boilerplate

* The Boilerplate is based on the [Plugin API](http://codex.wordpress.org/Plugin_API), [Coding Standards](http://codex.wordpress.org/WordPress_Coding_Standards), and [Documentation Standards](http://make.wordpress.org/core/handbook/inline-documentation-standards/php-documentation-standards/).
* All classes, functions, and variables are documented so that you know what you need to be changed.
* The Boilerplate uses a strict file organization scheme that correspond both to the WordPress Plugin Repository structure, and that make it easy to organize the files that compose the plugin.
* The project includes a `.pot` file as a starting point for internationalization.

## Recommended Tools

### i18n Tools

The WordPress Plugin Boilerplate uses a variable to store the text domain used when internationalizing strings throughout the Boilerplate. To take advantage of this method, there are tools that are recommended for providing correct, translatable files:

* [Poedit](http://www.poedit.net/)
* [makepot](http://i18n.svn.wordpress.org/tools/trunk/)
* [i18n](https://github.com/grappler/i18n)

Any of the above tools should provide you with the proper tooling to internationalize the plugin.

## License

This plugin is licensed under the GPL v2 or later.

> This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License, version 2, as published by the Free Software Foundation.

> This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

> You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA

A copy of the license is included in the root of the plugin’s directory. The file is named `LICENSE`.

### Includes

Note that if you include your own classes, or third-party libraries, there are three locations in which said files may go:

* `fc-meetup/includes` is where functionality shared between the dashboard and the public-facing parts of the side reside
* `fc-meetup/admin` is for all dashboard-specific functionality
* `fc-meetup/public` is for all public-facing functionality

The example code provided shows how to register your hooks with the Loader class. More information will be provided in the upcoming documentation on the website.