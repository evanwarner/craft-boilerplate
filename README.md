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
1. `cd` into the project root
1. `git init`
1. `git commit --allow-empty -m "Initial commit"`
1. Add desired git remote (assuming named `origin`)
1. `git push -u origin master`
1. `git checkout -b develop`

#### Structure
1. Rename `/webroot` to an appropriate name for this project (to match the production server)
    - Update the `docroot` config in `/.ddev/config.yaml` to match
    - Update the `config.webroot` variable in `package.json` to match
    - Update the paths in `.gitignore` to match
    - Update the paths in the _Getting Started_ section in `README.md` to match
1. **(Optional)** You may rename `/craft` to a preferred name for this project
    - Update the `composer_root` config in `/.ddev/config.yaml` to match
    - Update the `web_environment > CRAFT_CMD_ROOT` config in `/.ddev/config.yaml` to match
    - Update the `config.craft` variable in `package.json` to match
    - Update the shared bootstrap `require` path in `/[webroot]/index.php` to match:
        - `require dirname(__DIR__) . '/[craft]/bootstrap.php';`
    - Update the paths in `.gitignore` to match
    - Update the paths in the _Getting Started_ section in `README.md` to match
    - Update the paths in the _File Organization_ section in `README.md` to match
    - Be aware of this change as you follow the remaining steps in this setup
1. Ensure permissions of these directories
    - `chmod 774 /[craft]/storage`
    - `chmod 774 /[craft]/vendor`
1. Ensure permissions on the craft cli executable
    - `chmod 755 /[craft]/craft`

#### Project Configuration
1. Edit the _Project Name_ and _Project Description_ in `README.md`
1. Edit the `name` config in `/.ddev/config.yaml`
1. Set the `name` and `description` in `package.json`
1. Set the `name` and `description` in `/[craft]/composer.json`
1. Set the `SYSTEM_NAME` in `/[craft]/.env`
1. Set the `SITE_NAME` in `/[craft]/.env`
1. Configure the project domains
    - Edit the project domain under the `additional_fqdns` config in `/.ddev/config.yaml`
    - Set the `SITE_URL` in `/[craft]/.env`
    - Set the `start_url` in `/src/manifest.json` to the production domain
1. Set the `SYSTEM_EMAIL` in `/[craft]/.env`
1. Set the `SYSTEM_SENDER_NAME` in `/[craft]/.env`
1. Set the `SYSTEM_REPLY_TO_EMAIL` in `/[craft]/.env`
1. Set the `TEST_EMAIL` in `/[craft]/.env`
1. Comment out or delete the www and https rewrite settings in `/src/.htaccess` as desired

#### Environment Setup
1. From `/[craft]/` run `composer install` to install project dependencies
1. From the project root run `npm install` to install necessary components
1. From the project root run `npm run dev` to compile source files

#### DDEV
1. Adjust the additional environment configs in `/.ddev/config.yaml` as desired
2. From the project root run `ddev start`

#### Craft Setup
1. Create a `SECURITY_KEY` in `/[craft]/.env`
    - `cd [craft] && ./craft setup/security-key` (or generate one manually)
1. Run the Craft installation at `http://[local hostname]/manage`
1. In **Settings > General** set the system **Time Zone** appropriately
1. In **Settings > Sites** set the name of the site group as desired
1. In **Settings > Sites** set the name of the primary site to `$SITE_NAME`
1. In **Settings > Sites** set the name of the primary site to `$SITE_URL`

#### GIT Development Branch
1. Delete this file.
1. `git add -A`
1. `git commit -m "Add and configure site boilerplate"`
1. `git push -u origin develop`
