# Changelog

## Unreleased
_No unreleased changes._

## 6.0.2 - 2023-07-31
### Fixed
- Fixed a path error when hashing production asset names.


## 6.0.1 - 2023-07-12
### Fixed
- Renamed lingering `ENVIRONMENT` .env variable references to `CRAFT_ENVIRONMENT`
- The `composer.lock` file created during `composer create-project` is now deleted as part of the post-install script

## 6.0.0 - 2023-07-10
This boilerplate is now running Craft 4.x and is preconfigured for local development with DDEV!
### Added
- `/.ddev/config.yaml` configuration file for DDEV

### Changed
- With the upgrade to Craft 4, projects now require PHP ^8.0.2
- The `/craft` and `/webroot` folders are now top-level to the project (they were previously within a `/dist` folder)
- Removed `/craft/config/db.php` in favor of the `CRAFT_DB_*` settings in `/craft/.env`
- Removed the local script for backing up the project database. All backups should be handled through Craft/DDEV.
- The `@webroot` alias is now set for all environments by default
- `verificationCodeDuration` is now set to 7 days for all environments by default
- `defaultSearchTermOptions` now enables "fuzzy" search for all environments by default

### Updated
- Craft to v4.4.15
- Asset Rev to v7.0.0
- Redactor to v3.0.4


## 5.0.0 - 2023-07-06
### Added
- The `srcset` macro now adds `width` and `height` attributes to the image tag

### Changed
- The handle for the Homepage entry is now `home` (was `homepage`)
- Combined the `og:description` and normal meta description tags
- Reduced the specificity on many CSS reset selectors
- `optgroup` elements now have their margin and font family reset
- Reconfigured PostCSS and Browserslist for the current state of browser support
- CSS custom properties that are intended to be used like constants are now named in all uppercase
- Removed `touch-action: manipulation` declarations in the CSS reset
- Removed the CSS @viewport rules

### Fixed
- Prevent potential font size issue with monospace fonts

### Updated
- Craft to v3.8.15
- Redactor to v2.10.12
- caniuse-lite to v1.0.30001442
- cssnano to v5.1.14
- del-cli to v5.0.0
- eslint to v8.31.0
- eslint-plugin-jsdoc to v39.6.4
- postcss to v8.4.21
- postcss-cli to v10.1.0
- postcss-import to v15.1.0
- postcss-preset-env to v7.8.3
- stylelint to v14.16.1
- stylelint-order to v6.0.1
- svgo to v3.0.2
- terser to v5.16.1


## 4.0.1 - 2022-02-23
### Fixed
- Fixed a PHP headers error caused by an errant whitespace


## 4.0.0 - 2022-02-22
### Added
- Added a default `img-src` value to the CSP header
- Set the `@webroot` alias for development environments ([#9](https://github.com/evanwarner/craft-boilerplate/issues/9))
- Added the `theme-color` HTML meta tag to the main layout
- Padding is now reset to 0 on table cells and headers

### Changed
- The default module is now just called "Site". The redundant "Module" suffix has been removed.
- Site names are now set via ENV variables
- The minimum PHP requirement is now 7.4.2
- Adopted a shared Craft bootstrap file (from official Craft starter project)
- Set the `disallowRobots` config setting to `true` for staging environments
- Removed the focus outline CSS reset
- Reduced some linter warning severites
- Brought the `js` class toggle script up to ES6 syntax
- Improved the site README

### Fixed
- The homepage entry type check that controls the format of the page title now correctly matches the type set for the entry

### Updated
- Craft to v3.7.34
- Redactor to v2.10.3
- Composer to v2+
- PHPDotEnv to v5.4.0 (from official Craft starter project)
- caniuse-lite to v1.0.30001312
- del-cli to v4.0.1
- eslint to v8.9.0
- eslint-plugin-jsdoc to v37.9.4
- stylelint to v14.5.2
- stylelint-order to v5.0.0
- svgo to v2.8.0
- terser to v5.11.0


## 3.0.0 - 2021-04-26
### Added
- Frequently used Twig macros added in `craft/templates/_macros/content.twig`
- Added a response header to opt out of Google FLoC
- Implemented custom HTTP error code handling

### Changed
- Removed the static `$instance` variable from the default module
- Removed the placeholder for the Safari pinned tab icon
- The custom module log file is now specific to an individual module

### Fixed
- The `src/css/components` folder was given a `5-` prefix to put it in line with the other folders

### Updated
- Craft to v3.6.12 ([#8](https://github.com/evanwarner/craft-boilerplate/issues/8))
- Redactor to v2.8.6
- caniuse-lite to v1.0.30001216
- cssnano to v4.1.11
- eslint to v7.25.0
- eslint-plugin-jsdoc to v32.3.2
- onchange to v7.1.0
- stylelint to v13.3.0
- svgo to v2.3.0
- terser to v5.7.0


## 2.1.0 - 2020-10-13
### Added
- Added a default Redactor config file
- Configure the application ID in `app.php` (from official Craft starter project)

### Changed
- The commit tasks no longer utilize an `all` git remote, and just utilize `origin`
- Deleted the legacy.css file, as I no longer support any browsers it was meant for
- Updated the format of the `humans.txt` file
- The `humans.txt` file is now generated through a custom route and a template
- Use `App::env()` in place of `getenv()` (from official Craft starter project)

### Updated
- Craft to v3.5.12.1
- Redactor to v2.8.1
- caniuse-lite to v1.0.30001142
- eslint to v7.10.0
- eslint-plugin-jsdoc to v30.6.2
- stylelint to v13.7.2
- terser to v5.3.3


## 2.0.0 - 2020-09-05
### Added
- Added a default canonical URL implementation that can be extended
- Added a global template variable to control rendering of social sharing metadata
- Registered a default site module that defines a site-specific log file ([#6](https://github.com/evanwarner/craft-boilerplate/issues/6))

### Changed
- Global template variables now live in a top level layout file that all pages will extend

### Updated
- Craft to v3.5.8
- Redactor to v2.7.4

### Fixed
- The meta robots setting is now correctly forced to `noindex, nofollow` on non-production environments
- Pages with no meta description won't throw an unknown variable error
- The database backup folder is now generated on project creation ([#4](https://github.com/evanwarner/craft-boilerplate/issues/4))


## 1.3.0 - 2020-08-01
### Added
- The useless root `vendor` folder generated during project creation is now immediately deleted ([#3](https://github.com/evanwarner/craft-boilerplate/issues/3))

### Changed
- The `main.js` file is now loaded in the HTML `<head>` with a `defer` attribute
- `<pre>` elements are now set to `overflow: auto` by default

### Updated
- Craft to v3.4.30
- Node packages to their latest versions


## 1.2.1 - 2020-06-16
### Changed
- PHP `.editorconfig` set to use 4 spaces instead of 2, for PSR-12 compliance
- DB configuration reverted to using individual ENV variables (see [Craft issue #6159](https://github.com/craftcms/cms/issues/6159))
- Robots `noindex` meta tag is active for _any_ non-production environment instead of just staging


## 1.2.0 - 2020-05-17
### Added
- There is now a `manifest.json` file to configure
- Documented the use of PostCSS + plugins in the CSS authoring guide

### Changed
- Established a better starting point for providing favicon and home screen icons

### Updated
- ESLint and its configuration to v7.x
- Node packages to their latest versions


## 1.1.0 - 2020-05-15
### Added
- The default referrer meta tag is now wrapped in a Twig block
- Added a robots Twig block with a default meta tag
- There is now a site template that handles _all_ HTTP errors. Specific error codes can be customized by adding an Error Page entry for that error. ([#1](https://github.com/evanwarner/craft-boilerplate/issues/1), [#2](https://github.com/evanwarner/craft-boilerplate/issues/2))
- Added a few TODO comments where things should be tailored to each generated project

### Changed
- The `robots.txt` file is now generated through a custom route and a template

### Updated
- Craft to v3.4.19.1

### Fixed
- Prevent build script from cleaning the media folder
- Fixed a capitalization error in the output of body classes
- Prevent the output of duplicate body classes
- Fixed a potential `null` entry error


## 1.0.3 - 2020-05-13
### Changed
- Switched to Unlicense


## 1.0.2 - 2020-05-13
### Added
- Added an MIT license


## 1.0.1 - 2020-05-12
### Fixed
- Removed a failing post-create-project script


## 1.0.0 - 2020-05-12
### Added
- Initial release of boilerplate
