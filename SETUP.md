# Boilerplate Setup
Todo list that should be completed immediately after generating a new project. Once complete, this file can be deleted.

## GIT
1. `$ git init`
1. `$ git commit --allow-empty -m "Initial commit"`
1. Add local and cloud remotes
1. Add alias `all` remote
    1. `$ git remote add all [origin repo URL]`
    1. For all remotes (including origin): `$ git remote set-url --add --push all [remote repo URL]`
1. `$ git push -u origin master`
1. `$ git push all master`
1. `$ git checkout -b develop`

## Structure
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

## Project Configuration
1. Edit the `Project Name` and `Project Description` in `README.md`
1. Set the `name` and `description` in `package.json`
1. Configure project domains
    - Set the sitemap URL in `/src/robots.txt`
    - Set the `SITE_URL` in `/dist/[craft]/.env`
1. Set the `SYSTEM_EMAIL` in `/dist/[craft]/.env`
1. Set the `SYSTEM_SENDER_NAME` in `/dist/[craft]/.env`
1. Set the `SYSTEM_REPLY_TO_EMAIL` in `/dist/[craft]/.env`
1. Set the `TEST_EMAIL` in `/dist/[craft]/.env`
1. Comment out or delete www and https rewrite settings in `/src/.htaccess` as desired

## Environment Setup
1. Configure a new local host for development work
1. `$ npm install`
1. `$ npm run dev`

## Craft Setup
1. Create the database
    - db name: [project]_craft_dev
    - Set the database information in `/dist/[craft]/.env`
    - Set the database information in `/dbbackup.sh`
1. Create a `SECURITY_KEY` in `/dist/[craft]/.env`
    - `$ cd dist/[craft] && ./craft setup/security-key` (or generate one manually)
1. Run the Craft installation at `http://[domain]/manage`

## Configuration
                                                                                        1. Switch to Pro edition of Craft
                                                                                        1. Install the Asset Rev plugin
                                                                                        1. Install the Redactor plugin
1. Set the name of the site group and site

## GIT
1. Delete this file.
1. `$ git add -A`
1. `$ git commit -m "Add and configure site boilerplate"`
1. `$ git push -u origin develop`
1. `$ git push all develop`
