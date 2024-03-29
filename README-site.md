# Project Name

Project description


---


## Requirements
- PHP 8.0.2 or higher
    - Full Craft server requirements can be found [here](https://craftcms.com/docs/4.x/requirements.html)
- Node.js
- NPM
- [Composer v2](https://getcomposer.org)
- [Docker](https://www.docker.com)
- [DDEV](https://ddev.com)


---


## Getting Started
After installing the requirements and cloning this repository in its latest state, the following steps will get the site up and running.

1. Duplicate `/[craft]/example.env` as `/[craft]/.env` (leave the example unedited in Git)
1. Configure the `SITE_URL` in `/[craft]/.env` to match the local project domain under the `additional_fqdns` config in `/.ddev/config.yaml`
1. From the project root run `ddev start` to start the local web server
1. Sync information from the current master version of the website (this may be dev, staging, or production depending on the current state of the project)
    1. Obtain and set the `CRAFT_SECURITY_KEY` in `/[craft]/.env`
    1. Ensure `CRAFT_DB_TABLE_PREFIX` is set appropriately in `/[craft]/.env`
    1. Populate the database using an up to date DB dump
       - `ddev import-db --src=<path-to-db-dump>`
    1. Obtain `/[craft]/config/license.key`
    1. Obtain the `/[webroot]/media/` folder
1. From `/[craft]/` run `composer install` to install project dependencies
1. From the project root run `npm install` to install necessary components
1. From the project root run `npm run dev` to compile source files


---


## File Organization
The primary files for working on the site can be found in the following places:
- `/src/css/` - The source CSS files. These are compiled by the build scripts into `/[webroot]/css/`.
- `/src/js/` - The source JavaScript files. These are compiled by the build scripts into `/[webroot]/js/`.
- `/src/img/` - Image files connected to the _design_ of the site (not content). These are copied by the build scripts into `/[webroot]/img/`.
- `/[craft]/templates/` - The Twig layout templates for the front-end.
- `/[craft]/modules/` - The back-end business functionality.


---


## NPM Scripts
The project's build system utilizes NPM scripts. The following scripts are intended for regular use. Scripts not documented here are primarily subscripts triggered by these.

### Build Scripts
These scripts are used to generate builds of the project for different environments. All three build tasks clean the project of compiled files when run, to ensure a fully up-to-date build.

`npm run dev` creates a development build and watches for changes.

`npm run stage` creates a staging build. Staging builds use all the same settings as production, but set a different environment variable.

`npm run deploy` creates a production build.

`npm run clean` will delete any files generated by a build script. This is automatically run at the start of each build script.

### Versioning Scripts
These scripts are used when a build of the project is ready for release.

`npm run bump`, `npm run bump:minor`, and `npm run bump:major` should _only_ be run while on the `develop` branch. They will bump the project's version number (at a patch, minor, or major level, respectively), commit the `package*.json` files, and push the commit. **NOTE: If you have any unstaged changes to `package.json`, you should `git stash` them before running a bump script, and `git stash pop` them afterwards.**

`npm run mergeversion` should usually be run immediately after one of the `bump` scripts. It will merge the `develop` branch into `master`, tag a new version, then push the new tag and `master` branch. Lastly it will re-checkout `develop` to ensure subsequent work isn't accidentally done on `master`. **NOTE: If you have any unstaged changes on the `develop` branch, you may need to `git stash` them before running this comand and `git stash pop` them afterwards.**


---


## Preprocessing Files
Files can be processed to output different results based on the context variables set by the NPM script (`dev`, `staging` or `production`). Conditional code is wrapped in commented syntax (using the language's appropriate comment style).

### HTML
```html
<!-- @if NODE_ENV='dev' -->
<p>It's development!</p>
<!-- @endif -->
```

### CSS
```css
/* @if NODE_ENV='staging' */
.staging::after {
  content: "It's staging!";
}
/* @endif */
```

### JavaScript
```javascript
// @if NODE_ENV='production'
console.log("It's production!");
// @endif
```

Other file types (`.txt`, `.md`, `.htaccess` and more) support preprocess directives, but will usually use HTML comment syntax. See the [documentation](https://github.com/jsoverson/preprocess#optionstype) for details.

There are additional useful directives for preprocessing files. A reference of all directives can be found [here](https://github.com/jsoverson/preprocess#all-directives).


---


## Browser Support
### Full Support
- Chrome (Win & Mac): [latest version]
- Firefox (Win & Mac): [latest version]
- Safari (Mac): [latest version]
- iOS Safari: [latest version]
- Chrome for Android: [latest version]
- Edge: [latest version]


---


## Team
- Evan Warner (evan@evanwarner.com)

