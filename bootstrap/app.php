<?php

// This file is part of package {{ cookiecutter.vendor_name }}/{{ cookiecutter.package_name }}.
//
// Package {{ cookiecutter.vendor_name }}/{{ cookiecutter.package_name }} is free software: you can redistribute it
// and/or modify it under the terms of the GNU General Public License as
// published by the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Package {{ cookiecutter.vendor_name }}/{{ cookiecutter.package_name }} is distributed in the hope that it will be
// useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General
// Public License for more details.
//
// You should have received a copy of the GNU General Public License along with
// package {{ cookiecutter.vendor_name }}/{{ cookiecutter.package_name }}. If not, see <https://www.gnu.org/licenses/>.

/**
 * Bootstrap the Laravel services to use during development of the package.
 *
 * @author     {{ cookiecutter.author_name }} <{{ cookiecutter.author_email }}>
 * @copyright  {% now 'utc', '%Y' %} {{ cookiecutter.author_name }} {@link {{ cookiecutter.author_website }}}
 * @license    {@link http://www.gnu.org/copyleft/gpl.html} GNU GPL v3 or later
 */

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        //
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
