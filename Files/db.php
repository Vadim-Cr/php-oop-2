<?php

require_once("PetCategory.php");
require_once("Products.php");

// * PET ITEMS PRODUCERS

$foodProducers = ["Purina", "Blue Buffalo", "Hill's Science Diet", "Nutro", "Royal Canin", "Iams", "Pedigree", "Wellness", "Merrick", "Canidae"];
$toysProducers = ["KONG", "Benebone", "Outward Hound", "Nylabone", "ZippyPaws", "Chuckit!", "GoDog", "Ethical Pet", "Hartz", "Petstages"];
$bedsProducers = ["Furhaven", "Bedsure", "Best Friends by Sheri", "Coolaroo", "MidWest Homes", "K&H Pet Products", "Barkbox", "Paws & Pals", "Bedsure", "Majestic Pet"];



// *PET ITMES PRODUCT DESCRIPTIONS

$foodDescriptions = [
    "Alimento nutriente, migliora la salute e il benessere.",
    "Ricco di proteine e vitamine per una dieta equilibrata.",
    "Senza cereali, ideale per una dieta a basso indice glicemico.",
    "Promuove la digestione sana e una pelliccia lucente.",
    "Alimento completo e bilanciato per tutti i giorni.",
    "Ricco di antiossidanti naturali per sostenere il sistema immunitario.",
    "Prodotto con ingredienti di alta qualità e naturali.",
    "Alimento ipoallergenico, perfetto per animali con sensibilità alimentare.",
    "Rafforza le ossa e i denti con il calcio e il fosforo.",
    "Promuove un peso corporeo sano e magro con proteine magre."
];

$toyDescriptions = [
    "Giocattolo interattivo, stimola il gioco e l'esercizio fisico.",
    "Materiale resistente, progettato per masticatori aggressivi.",
    "Aiuta a pulire i denti e promuovere la salute orale.",
    "Giocattolo stimolante, ideale per giochi di recupero.",
    "Progettato per il comfort e la sicurezza del tuo animale domestico.",
    "Offre ore di intrattenimento e riduce l'ansia.",
    "Stimola l'istinto naturale di caccia del tuo animale.",
    "Giocattolo per animali domestici multifunzione, per giochi da interno e da esterno.",
    "Progettato per durare, anche con un uso frequente.",
    "Giocattolo per animali domestici sicuro e non tossico, sicuro per la masticazione."
];

$bedDescriptions = [
    "Letto per animali domestici ultra confortevole e lussuoso.",
    "Design ergonomico, supporta le articolazioni e allevia i punti di pressione.",
    "Materiali di alta qualità, duraturi e facili da pulire.",
    "Progettato per il massimo comfort e un sonno riposante.",
    "Isolamento termico, mantiene il tuo animale caldo nelle notti fredde.",
    "Facile da trasportare, perfetto per viaggi o campeggio.",
    "Resistente all'acqua e ai graffi, progettato per durare.",
    "Morbido e accogliente, il tuo animale si sentirà al sicuro e protetto.",
    "Dimensioni generose, adatto per animali di tutte le taglie.",
    "Estetica moderna, si adatta perfettamente al tuo arredamento."
];


// * WHICH PET IT IS- DOG OR CAT
$categoryDog = new PetCategory ("Dog", "Only K9s, AKA man's best friend");
$categoryCat = new PetCategory ("Cat", "Only worshiped beings, AKA woman's best companion");

// * FOR LOOP FOR FOOD
$productFood = [];
for ($i = 0; $i < 10; $i++) {
    $randomPet = (rand(0, 1) == 0) ? $categoryDog : $categoryCat;
    
    $productFood[] = new Product($foodProducers[array_rand($foodProducers)], rand(0.5, 100), $foodDescriptions[array_rand($foodDescriptions)], $randomPet);
};

// * FOR LOOP FOR TOYS
$productToy = [];
for ($i = 0; $i < 10; $i++) {
    $randomPet = (rand(0, 1) == 0) ? $categoryDog : $categoryCat;
    
    $productToy[] = new Product($toysProducers[array_rand($toysProducers)], rand(0.5, 100), $toyDescriptions[array_rand($toyDescriptions)], $randomPet);
};

// * FOR LOOP FOR BEDS
$productBed = [];
for ($i = 0; $i < 10; $i++) {
$randomPet = (rand(0, 1) == 0) ? $categoryDog : $categoryCat;

$productBed[] = new Product($bedsProducers[array_rand($bedsProducers)], rand(0.5, 100), $bedDescriptions[array_rand($bedDescriptions)], $randomPet);
};




// var_dump($productFood);

// echo "<br>------------------------<br>";

// var_dump($productToy);

// echo "<br>------------------------<br>";

// var_dump($productBed);
?>