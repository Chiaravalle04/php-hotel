<?php

    $hotels = [

        [
            'img' => './img/belvedere.jpg',
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel di montagna con camere in legno e vista panoramica sulla valle.',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'img' => './img/futuro.jpg',
            'name' => 'Hotel Futuro',
            'description' => 'Moderno hotel a pochi passi dalla spiaggia, con piscina e terrazza solarium.',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'img' => './img/rivamare.jpg',
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel storico nel cuore della città, con camere spaziose e arredi d\'epoca.',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'img' => './img/bellavista.jpg',
            'name' => 'Hotel Bellavista',
            'description' => 'Lussuoso hotel con vista mare e suite eleganti',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'img' => './img/milano.jpg',
            'name' => 'Hotel Milano',
            'description' => 'Hotel di design con spa e ristorante gourmet nel centro della città.',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],
        [
            'img' => './img/parigi.jpg',
            'name' => 'Hotel Parigi',
            'description' => 'Accogliente hotel a conduzione familiare con giardino interno e colazione a buffet.',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10
        ],

    ];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,700;1,300;1,400&family=Shantell+Sans:ital,wght@1,600&display=swap" rel="stylesheet">

        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <!-- Style -->
        <link rel="stylesheet" href="styles/style.css">
        
        <title>PHP Hotel</title>
    </head>
    <body>

        <header>

            <div class="header-container">

                <h1>PHP Hotel</h1>

                <button>Filtra</button>

            </div>

        </header>

        <main>

            <div class="cards">

                <?php foreach ($hotels as $hotel) { ?>

                    <div class="card">

                        <img src="<?php echo $hotel['img']; ?>" alt="">

                        <div class="text">

                            <h2> <?php echo $hotel['name'];?> </h2>
    
                            <p> <?php echo $hotel['description'];?> </p>
    
                            <p> <b> Parcheggio: </b>
    
                                <?php 
                                
                                    if ($hotel['parking']) {
                                        echo 'sì';
                                    } else {
                                        echo 'no';
                                    };
                                ?> 
                                    
                            </p>
    
                            <p> <b> Voto: </b> <?php echo $hotel['vote'];?> </p>
    
                            <p> <b> Distanza dal centro: </b> <?php echo $hotel['distance_to_center'];?> km </p>

                        </div>

                    </div>
                
                <?php } ?>

            </div>

        </main>
        
    </body>
</html>