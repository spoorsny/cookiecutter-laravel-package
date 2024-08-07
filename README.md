![Repository Banner](https://banners.beyondco.de/Cookiecutter%20for%20Laravel%20Package.png?theme=light&packageManager=&packageName=cookiecutter+gh%3Aspoorsny%2Fcookiecutter-laravel-package&pattern=circuitBoard&style=style_1&description=All+you+need+to+start+applying+your+craft%21&md=1&showWatermark=1&fontSize=125px&images=star) <!-- markdownlint-disable-line first-line-h1 -->

# Cookiecutter for Laravel Package

A [cookiecutter](https://cookiecutter.readthedocs.io/en/stable/) for
[Laravel](https://laravel.com) packages with:

- Laravel services bootstrapped for development so that you can use everything
  that is available to a full Laravel application, e.g. using `artisan`
  commands, facades, etc.
- a Continuous Integration workflow for GitHub Actions that lints and tests
  your code and also measures code coverage. By default, the code coverage job
  fails if the code coverage is not <u>100%</u>. This can be adjusted in the
  scripts section of `composer.json` file.
- a **README.md** file with a beautiful banner from
  [Beyond Code](https://banners.beyondco.de), buttons indicating the version of
  the package currently on [Packagist](https://packagist.org), the number of
  downloads from Packagist, whether tests are passing and the code coverage.
  The README already describes how to install the package, and has a place for
  you to fill in how to use the package.
- a **LICENSE** file containing the copyright license for the package; and
- a license notice at the top of each relevant file.
- a directory structure that follows the
  [Standard PHP Skeleton](https://github.com/php-pds/skeleton) specification
  and Composer script names that follow the
  [Composer Script Names](https://github.com/php-pds/composer-script-names/tree/1.0.0)
  specification.

## Usage

Install the `pip` package manager for Python, and `pipx` that is used to
install stand-alone Python applications.

```shell
sudo apt install --yes python3-pip
pip install pipx
```

Install the Cookiecutter package.

```shell
pipx install cookiecutter
```

Create a project skeleton for a new Laravel package.

```shell
cookiecutter gh:spoorsny/cookiecutter-laravel-package
```

The command above will prompt for the vendor name, package name and PHP namespace, among
other things, then it will create a directory within the current working
directory, named after the package.

Change into the new directory, then install the required
[Composer](https://getcomposer.org) dependencies.

```shell
cd <new-package-directory>
composer install
```

You can then start generating new classes and other files using `php artisan`
and add your own code. Read the generated package's CONTRIBUTING.md file for
information on how to use its features.

## Contributing

To contribute to this repository, please use the
[Conventional Commits](https://conventionalcommits.org) convention. It makes it
easier to create change logs for new releases.

The commits are linted using [Commit Lint](https://commitlint.js.org/#/)
whenever a pull request is made.

To have the Commit Lint check your commits locally as a commit-msg hook, run
`npm install` after cloning this repository. If you are using Visual Studio
Code, you can also install the Commit Lint extension recommended by this
repository, to lint your commits as you write them in the Source Control panel
of VS Code.

## License

Copyright &copy; 2024 Geoffrey Bernardo van Wyk (<https://geoffreyvanwyk.dev>)

This file is part of Cookiecutter for Laravel package.

Cookiecutter for Laravel package is free software: you can redistribute it
and/or modify it under the terms of the GNU General Public License as published
by the Free Software Foundation, either version 3 of the License, or (at your
option) any later version.

Cookiecutter for Laravel package is distributed in the hope that it will be
useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public
License for more details.

You should have received a copy of the GNU General Public License along with
Cookiecutter for Laravel package. If not, see <https://www.gnu.org/licenses/>.

For a copy of the license, see the [COPYING](COPYING) file in this repository.
