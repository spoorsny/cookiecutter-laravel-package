# This file is part of Cookiecutter for Laravel package.
#
# Cookiecutter for Laravel package is free software: you can redistribute it
# and/or modify it under the terms of the GNU General Public License as
# published by the Free Software Foundation, either version 3 of the License,
# or (at your option) any later version.
#
# Cookiecutter for Laravel package is distributed in the hope that it will be
# useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General
# Public License for more details.
#
# You should have received a copy of the GNU General Public License along with
# Cookiecutter for Laravel package. If not, see <https://www.gnu.org/licenses/>.

##
# GitHub Actions workflow that lints and tests new code before its integration
# into the master branch of the source code repository.
#
# @author      Geoffrey Bernardo van Wyk <geoffrey@vanwyk.biz>
# @copyright  2024 Geoffrey Bernardo van Wyk {@link https://geoffreyvanwyk.dev}
# @license    {@link http://www.gnu.org/copyleft/gpl.html} GNU GPL v3 or later
##
import os

for path, subdirs, files in os.walk("."):
    for name in files:
        if name.endswith(".j2"):
            os.rename(os.path.join(path, name), os.path.join(path, name.rstrip(".j2")))
