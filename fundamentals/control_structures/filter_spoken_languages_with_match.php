<?php

function filterSpokenLanguages(array &$spoken_languages, $region): void {
    match ($region) {
        'Amhara' => $spoken_languages['Amharic'] = true,
        'Oromo' => $spoken_languages['Afaan Oromo'] = true,
        "Tigray" => $spoken_languages['Tigrigna'] = true,
        "Addis Ababa" => [
            $spoken_languages['Amharic'] = true,
            $spoken_languages['Tigrigna'] = true,
            $spoken_languages['Afaan Oromo'] = true,
        ],
        default => null
    };
}

$regions = [
    "Amhara",
    "Oromo",
    "Tigray",
    "Addis Ababa"
];

$spoken_languages = [
    "Amharic" => false,
    "Tigrigna" => false,
    "Afaan Oromo" => false,
];

foreach ($regions as $region):
    if ($region == "Addis Ababa"):
        filterSpokenLanguages($spoken_languages, $region);
        var_export($spoken_languages);
    endif;
endforeach;


// If we would like to return a value from the function, we can do the following:
function filterSpokenLanguagesWithReturn(array $spoken_languages, $region): array {
    return match ($region) {
        'Amhara' => array_merge($spoken_languages, ['Amharic' => true]),
        'Oromo' => array_merge($spoken_languages, ['Afaan Oromo' => true]),
        "Tigray" => array_merge($spoken_languages, ['Tigrigna' => true]),
        "Addis Ababa" => array_merge($spoken_languages, [
            'Amharic' => true,
            'Tigrigna' => true,
            'Afaan Oromo' => true,
        ]),
        default => $spoken_languages,
    };
}

foreach ($regions as $region)
    $spoken_languages = filterSpokenLanguagesWithReturn($spoken_languages, $region);

$spoken_languages = filterSpokenLanguagesWithReturn($spoken_languages, "Amhara");

var_export($spoken_languages);
