<?php
$landen = array(
    'Japan' => 'Tokyo',
    'Mexico' => 'Mexico City',
    'USA' => 'Washington D.C.',
    'India' => 'New Delhi',
    'Zuid-Korea' => 'Seoul',
    'China' => 'Peking',
    'Nigeria' => 'Abuja',
    'Argentina' => 'Buenos Aires',
    'Egypt' => 'Ciaro',
    'UK' => 'London',
);
$aantalgoed = 0;
foreach ($landen as $land => $stad) {
    echo "Welke hoofdstad heeft $land?\n";
    $ant = readline();
    if ($ant == $stad) {
        echo "Correct!\n";
        $aantalgoed += 1;
    } else {
        echo "Helaas, $ant is niet de hoofdstad van $land\n";
        echo "Het correcte antwoord is: $stad\n";
    }
}
$aantal = count($landen);
echo "Je hebt $aantalgoed van de $aantal goed geraden!\n";
?>