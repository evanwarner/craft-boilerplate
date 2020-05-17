# Changelog

## [Unreleased]
### Added
- There is now a `manifest.json` file to configure

### Changed
- Established a better starting point for providing favicon and home screen icons
- Updated ESLint to v7.x

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
