<?php
///////////////////////////////////////////////////////////////////////////////
// Here file all variables will be prepared set that to be used in the template
///////////////////////////////////////////////////////////////////////////////

// example data
// ---------------
$mainTitleTop = 'I am the Main title';
$mainText = 'This is the main Text';
$someExampleBlocks = [
    [
        'text' => 'i am the first element and i am linked',
        'href' => 'http://google.com'
    ],
    [
        'text' => 'i am the second element and i am not linked',
        'href' => ''
    ],
];
$navigation = renderNavigation([
    [ 'Zahnarzt / Zahntechniker', [
        ['Metallkeramik'],
        ['Implantatgetragener Zahnersatz'],
    ]],
    ['Patienteninformationen', [
        ['Kosmetische Verbesserung im Frontzahnbereich'],
        ['Keramikfüllung'],
    ]],
    ['Kontakt', []]
]);