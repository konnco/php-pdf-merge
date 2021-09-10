# PDF Merge for PHP

PDF Merge library for PHP.

_Forked from https://github.com/jurosh/php-pdf-merge_

Install with composer:

`composer require konnco/pdf-merge`

Should add dependency:

```json
"konnco/pdf-merge": "^1.0"
```

## Highlights

Pdf merging with modes portrait/landscape or automatic mode.

Tested in Laravel 7 & Laravel 8 framework.

## Usage

```php
// Autoload composer classses...

// and now we can use library
$pdf = new \Konnco\PDFMerge\PDFMerger;

// add as many pdfs as you want
$pdf->addPDF('path/to/source/file.pdf', 'all', 'vertical')
  ->addPDF('path/to/source/file1.pdf', 'all', 'automatic')
  ->addPDF('path/to/source/file1.pdf', 'all')
  ->addPDF('path/to/source/file2.pdf', 'all', 'horizontal');

// call merge, output format `file`
$pdf->merge('file', 'path/to/export/dir/file.pdf');
```

That's it!

Enjoy and leave star if you like it :)
