# Boilerplate for Craft CMS projects

This project serves as a boilerplate to generate a new Craft CMS project through `composer create-project`. It is an opinionated configuration made specifically for how I like to build sites with Craft.


---


## How to use the boilerplate
To generate a new Craft CMS project with this package, run the following, where `<path>` is the system path you want to be the project root:
```
composer create-project evanwarner/craft-boilerplate <path>
```

**Note:** As part of the project creation process this file will be renamed to `SETUP.md`, while the file `README-site.md` will become `README.md`, as it is intended to be the README file that lives on with the generated project.


### Project Setup
The following should be completed immediately after generating a new project. Once complete, this file can be deleted.

#### GIT
1. `$ git init`
1. `$ git commit --allow-empty -m "Initial commit"`
1. Add desired remotes
1. `$ git push -u origin master`
1. `$ git checkout -b develop`

#### Structure
1. Rename `/dist/webroot` to an appropriate name for this project
    - Update `webroot` config variable in `package.json` to match
    - Update the paths in `.gitignore` to match
    - Update the paths in the _Getting Started_ section in `README.md`
1. Rename `/dist/craft` to an appropriate name for this project
    - Update `craft` config variable in `package.json` to match
    - Update `CRAFT_BASE_PATH` definition in `/dist/[webroot]/index.php` to match:
        - `define('CRAFT_BASE_PATH', dirname(__DIR__).'/[craft]');`
    - Update the paths in `.gitignore` to match
    - Update the paths in the _Getting Started_ section in `README.md`
1. Ensure permissions of these directories in `/dist/[craft]`
    - `$ chmod 774 storage`
    - `$ chmod 774 vendor`
1. Ensure craft console cli (`/dist/[craft]/craft`) is executable
    - `$ chmod 755 craft`
1. Ensure database backup script is executable
    - `$ chmod 755 dbbackup.sh`

#### Project Configuration
1. Edit the _Project Name_ and _Project Description_ in `README.md`
1. Set the `name` and `description` in `package.json`
1. Configure project domains
    - Set the `SITE_URL` in `/dist/[craft]/.env`
    - Set the `start_url` in `/src/manifest.json`
1. Set the `SYSTEM_EMAIL` in `/dist/[craft]/.env`
1. Set the `SYSTEM_SENDER_NAME` in `/dist/[craft]/.env`
1. Set the `SYSTEM_REPLY_TO_EMAIL` in `/dist/[craft]/.env`
1. Set the `TEST_EMAIL` in `/dist/[craft]/.env`
1. Comment out or delete the www and https rewrite settings in `/src/.htaccess` as desired

#### Environment Setup
1. Configure a new local host for development work
1. From `/dist/[craft]` run `$ composer install`
1. From the project root run `$ npm install`
1. From the project root run `$ npm run dev`

#### Craft Setup
1. Create the database
    - Suggested db name: [project]_craft_dev
    - Set the database information in `/dist/[craft]/.env`
    - Set the database information in `/dbbackup.sh`
1. Create a `SECURITY_KEY` in `/dist/[craft]/.env`
    - `$ cd dist/[craft] && ./craft setup/security-key` (or generate one manually)
1. Run the Craft installation at `http://[local hostname]/manage`
1. In **Settings > General** set the system **Time Zone** appropriately
1. In **Settings > Sites** set the name of the site group and site as desired

#### GIT Development Branch
1. Delete this file.
1. `$ git add -A`
1. `$ git commit -m "Add and configure site boilerplate"`
1. `$ git push -u origin develop`
