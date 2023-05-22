
# Nova-DateTime-Field

This package holds the solution to the problem of datetime when set locale Arabic within Nova 3!






## Installation

```
# Install the Package
composer require asalout/datetime-picker

```


## Usage

```php
use Asalout\DatetimePicker\DatetimePicker;

...

DatetimePicker::make('start_date', 'start_date'), //default date

DatetimePicker::make('start_date', 'start_date')->withMeta(['fieldType' => 'datetime']), //when allow datetime

// All Methods are optional.

```

## Screenshots


screenshots.

![Index View](https://novapackages.com/storage/screenshots/tJ3IAvpEjiHKAP7aFRbZ0Wp975PNYZCh8NOjr596.png)

![Form View](https://novapackages.com/storage/screenshots/DtWZdCcwfYfYyLFrbzQtzA28g6O57gZUe7FsSfxl.png)


## License

[MIT](https://choosealicense.com/licenses/mit/)

