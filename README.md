<img src="pix/logo.png" align="right" />

Editor CKEditor for Moodle
====================================
![PHP](https://img.shields.io/badge/PHP-v5.6%20%2F%20v7.0%20%2F%20v7.1%20%2F%207.2-blue.svg)
![Moodle](https://img.shields.io/badge/Moodle-v3.8.x-orange.svg)
[![GitHub Issues](https://img.shields.io/github/issues/michael-milette/moodle-editor_ckeditor.svg)](https://github.com/michael-milette/moodle-editor_ckeditor/issues)
[![Contributions welcome](https://img.shields.io/badge/contributions-welcome-green.svg)](#contributing)
[![License](https://img.shields.io/badge/License-GPL%20v3-blue.svg)](#license)

# Table of Contents

- [Basic Overview](#basic-overview)
- [Requirements](#requirements)
- [Download CKEditor for Moodle](#download-ckeditor-for-moodle)
- [Installation](#installation)
- [Uninstallation](#uninstallation)
- [Contributing](#contributing)
- [License](#license)

# Basic Overview

This is the CKEditor 3.5.2 for Moodle.

# Requirements

This plugin requires Moodle 3.8+ from https://moodle.org .

It may work with previous versions of Moodle all the way back to Moodle 2.7 but it has not been tested yet. If it works for you, let us know. Tip: You might need to modify the version.php in order for Moodle to let you install it on earlier versions.

[(Back to top)](#table-of-contents)

# Download CKEditor for Moodle

The most recent ALPHA release of CKEditor for Moodle is available from:
https://github.com/michael-milette/moodle-editor_ckeditor

[(Back to top)](#table-of-contents)

# Installation

IMPORTANT: This plugin and its documentation are ALPHA. Do not use on a production server.

Install the plugin, like any other plugin, to the following folder:

    /lib/editor/ckeditor

See https://docs.moodle.org/en/Installing_plugins for details on installing Moodle plugins.

Alternative install instructions

At the command prompt of the webroot for your Moodle site:

1. git clone https://github.com/michael-milette/moodle-ckeditor lib/editor/ckeditor
2. Log into Moodle as an Administrator
3. If Moodle does not detect the new plugin, go to Site Administration > Notifications and complete the plugin detection process.
4. Go to Site Administration > Plugins > Editors > Manage editors
5. Enabled CKEditor HTML Editor
6. Go into your user preferences and select CKEditor HTML Editor in Editor Preferences.

Note: Once installed, it will need to be activated and then selected as your preferred editor in user preferences > editor preferences.

[(Back to top)](#table-of-contents)

# Updating

There are no special considerations required for updating the plugin.

This version is considered ALPHA as there are some significant limitations to its functionality.

The previous version was released in 2011 by didier Belot <electrolinux AT gmail DOT com>

For more information on releases, see
[CHANGELOG.md](https://github.com/michael-milette/moodle-editor_ckeditor/blob/master/CHANGELOG.md).

[(Back to top)](#table-of-contents)

# Uninstallation

Uninstalling the plugin by going into the following:

Home > Administration > Site Administration > Plugins > Manage plugins > CKEditor HTML Editor

...and click Uninstall. You may also need to manually delete the following folder:

    /lib/editor/ckeditor

[(Back to top)](#table-of-contents)

# Contributing

If you are interested in helping, please take a look at our [contributing](https://github.com/michael-milette/moodle-editor_ckeditor/blob/master/CONTRIBUTING.md) guidelines for details on our code of conduct and the process for submitting pull requests to us.

Note: We are looking for someone to contribute by upgrading CKEditor to version 4 or 5. Until then, we may not be making further changes to this plugin.

## Contributors

Michael Milette - Maintainer/Developer of Moodle 3.8+ compatible version.

Based on initial release for Moodle 2.7 by Didier Belot <electrolinux AT gmail DOT com>
https://github.com/electrolinux/moodle-ckeditor

## Pending Features and Fixes

Some of the features we are considering for future releases include:

* Fix display issues.
* Fix inserting images.
* Add plugin settings
* Make use of theme's CSS to render content.
* Update to a newer version of CKEditor.
* Add multi-language support for editor toolbar.
* Lots of testing !!

[(Back to top)](#table-of-contents)

# Further information

For further information regarding the editor_ckeditor plugin, support or to
report a bug, please visit the project page at:

https://github.com/michael-milette/moodle-editor_ckeditor

[(Back to top)](#table-of-contents)

# License

Copyright © 2020, TNG Consulting Inc. - https://www.tngconsulting.ca/

This file is part of the CKEditor HTML Editor for Moodle.

CKEditor HTML Editor is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

CKEditor HTML Editor is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with CKEditor HTML Editor.  If not, see <https://www.gnu.org/licenses/>.

[(Back to top)](#table-of-contents)
