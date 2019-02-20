# Lab56 LP Template

### [To see the sample page click here](https://nagell.github.io/LP_Template/)

![Sample image](https://raw.githubusercontent.com/Nagell/LP_Template/master/docs/Sample.jpg)

## Getting Started

To start you just have to know that this template is build with:

1. [Bulma](https://bulma.io/)
2. [npm](https://www.npmjs.com/)
3. [Gulp](https://gulpjs.com/) which is based on [Node.js](https://nodejs.org/en/)

All of them are ease to install and this process is partially automatic.

## What for this whole bunch of tools?

They are making for you later whole job. Ok, they will not write code for you,
but they can compile heavy scss library and purify as well as minify it to only this
css that you really need.

### Prerequisites

To start you have to install those:

1. Microsoft Visual Studio Code (don't worry, it also works on Mac ;) ).
2. Next step is to install 'npm' from plugins tab (left pannel -> last icon).
3. Now download and install NodeJS [here](https://nodejs.org/en/download/).
4. Now open Terminal in Visual Studio Code
(you can open it by clicking on error/warning icon by bottom menu) and type

    npm install

If all was correct you should be able to use commands described in Deployment section.

## Editing

Whole edition should be made only in src directory.

In sass you can add new scss parts according to your needs. More infos about them you can
find [here](https://bulma.io/documentation/overview/modular/).

Eventually you can need some changes about images optimization. These are possible to make
in gulpfile.js in 'images' function. More about it you will find at [this page](https://github.com/sindresorhus/gulp-imagemin).

## Deployment

Here comes the most important thing. To deploy just open a Terminal in Visual Studio Code
(you can open it by clicking on error/warning icon by bottom menu)
and type:

    npm start

If you want only create/refresh css (in "src" directory) from scss type:

    npm run css

For minification of existing css files (from "src" directory) use:

    npm run minify

## Versioning

We use [SemVer](http://semver.org/) for versioning. Repository (git) is currently added
locally to project and can be used directly from Visual Studio Code (left pannel -> third icon)

## Authors

* **Dawid Nitka** - *Initial work* - [Nagel](mailto:dawidnitka@gmail.com)



