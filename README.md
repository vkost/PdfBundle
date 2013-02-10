# PDFBundle
The Siphoc PDF Bundle provides an easy way to create PDF's from your views.

[![Build Status](https://travis-ci.org/siphoc/PdfBundle.png?branch=master)](https://travis-ci.org/siphoc/PdfBundle)

## Documentation
The main Documentation can be found in Resources/doc/index.html. It is
auto-generated by PHPDocumentor2. The directory itself is excluded trough git
because we use the [PHPDoc Markdown](https://github.com/evert/phpdoc-md) plugin to create proper MD files to
include in Git.

If you want to contribute, be sure to update the documentation and run both [PHPDocumentor2]() and PHPDoc Markdown.
This way the documentation keeps up to date properly.

## Tests
For tests I've used PHPUnit. Contributions need to be supported with tests.

## License
This bundle is under the MIT License.

## Dependencies

### CSS To Inline
In this bundle there's also a CSS To Inline utility class included. It is based
upon the [CssToInlineStyles](https://github.com/tijsverkoyen/CssToInlineStyles) class from [@tijsverkoyen](https://github.com/tijsverkoyen).

### Buzz
For external calls, I've included the [Buzz](https://github.com/kriswallsmith/Buzz) Bundle from [@kriswallsmith](https://github.com/kriswallsmith).

### Snappy
To create the actual PDF. We're using [Snappy](https://github.com/knplabs/snappy). This has the [wkhtmltopdf](http://code.google.com/p/wkhtmltopdf/) dependency.
