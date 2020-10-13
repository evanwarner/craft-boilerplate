# Changelog

## Unreleased
_No unreleased changes._


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
