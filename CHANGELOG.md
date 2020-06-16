# Changelog

## Unreleased
_No unreleased changes._


## 1.2.1 - 2020-06-16
### Changed
- PHP editorconfig set to use 4 spaces instead of 2, for PSR-12 compliance
- DB configuration reverted to using individual ENV variables (see [Craft issue #6159](https://github.com/craftcms/cms/issues/6159))
- Robots `noindex` set for _any_ non-production environment instead of just staging


## 1.2.0 - 2020-05-17
### Added
- There is now a `manifest.json` file to configure
- Documented the use of PostCSS + plugins in the CSS authoring guide

### Changed
- Established a better starting point for providing favicon and home screen icons
- Updated ESLint and its configuration to v7.x
- Updated Node packages to their latest versions


## 1.1.0 - 2020-05-15
### Added
- The default referrer meta tag is now wrapped in a Twig block
- Added a robots Twig block with a default meta tag
- There is now a site template that handles _all_ HTTP errors. Specific error codes can be customized by adding an Error Page entry for that error.
- Added a few TODO comments where things should be tailored to each generated project

### Changed
- Updated Craft to v3.4.19.1
- The `robots.txt` file is now generated through a custom route and a template

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
