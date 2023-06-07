# IJDynamic 

### Introduction
IJDynamic is a class library for generating dynamic questions and calculating total scores based on user input. It provides a convenient way to generate HTML markup for a set of questions with options and retrieve the total score based on the selected answers.

### Installation
You can install the IJDynamic library via Composer. Run the following command in your project directory:

`composer require iamjohndev/ijdynamic
`
### Usage
To use the IJDynamic class, follow these steps:

Include the Composer autoloader in your PHP file:
`require 'vendor/autoload.php';
`

Instantiate the **IJDynamic** class by passing an array of questions to the constructor:
```php
use iamjohndev\IJDynamic;

$questions = [
    // Define your questions and options here
];

$ijDynamic = new IJDynamic($questions);
```

Generate the HTML markup for the questions using the **generateQuestions() ** method:
```php
$html = $ijDynamic->generateQuestions();
```

The **generateQuestions() ** method returns an HTML string representing the questions and options.

Display the generated HTML markup in your web page.

To calculate the total score based on user input, use the **calculateTotalScore()** method:
```php
$totalScore = $ijDynamic->calculateTotalScore();
```
The **calculateTotalScore()** method returns the total score calculated from the selected answers.

# Example
Here's an example of how to use the IJDynamic library:

```php
require 'vendor/autoload.php';

use iamjohndev\IJDynamic;

$questions = [
    [
        'question' => 'Question 1',
        'name' => 'q1',
        'options' => [
            ['label' => 'Option 1', 'value' => 1],
            ['label' => 'Option 2', 'value' => 2],
            ['label' => 'Option 3', 'value' => 3],
        ],
    ],
    // Add more questions here
];

$ijDynamic = new IJDynamic($questions);

$html = $ijDynamic->generateQuestions();
$totalScore = $ijDynamic->calculateTotalScore();

// Display the HTML markup and total score
echo $html;
echo 'Total Score: ' . $totalScore;
```

## Contributing
Contributions are welcome! If you have any bug reports, feature requests, or suggestions, please open an issue on the GitHub repository.
