<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <?php
    
    require_once("./files/db.php");

    ?>

    <title>Document</title>
</head>
<body>

<div class="container">
    <form action="your_search_processing_script.php" method="post" class="my-3">
        <div class="row">
            <label for="productSearch" class="col-2 col-form-label">Cerca prodotto:</label>
            <div class="col-8">
                <input type="text" id="productSearch" name="productSearch" class="form-control">
            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-primary">Cerca</button>
            </div>
        </div>
    </form>
</div>

<div class="row p-5">
    <div class="d-flex mt-5 p-8 flex-wrap justify-content-center">
        <?php
    for ($i = 0; $i < 10; $i++) {
        echo "<div class='row col-6 p-3 align-items-center justify-content-center bg-info'>";
            echo "<div class='col-6 border bg-info-subtle rounded-4 p-4'>";
                echo "Nome prodotto: ";
                echo "<div class='fw-bold'>";
                    echo $productFood[$i] -> getName();
                echo "</div>";
                echo "<br>";
                    echo "Descrizione prodotto: ";
                echo "<div class='fw-bold'>";
                    echo $productFood[$i] -> getDescription();
                echo "</div>";
                echo "<br>";
                    echo "Prezzo del prodotto: ";
                echo "<div class='fw-bold'>";
                    echo $productFood[$i] -> getPrice() . "€";
                echo "</div>";
                echo "<br>";
                    echo "Questo prodotto è adatto al: ";
                echo "<div class='fw-bold'>";
                    echo $productFood[$i]->getCategory()->getName();
                echo "</div>";
                echo "<br>";
                echo "<div class='fw-bold'>";
                echo $productFood[$i]->getCategory()->getDescription();
                echo "</div>";
                echo "<br>";
                echo "<br>";
            echo "</div>";
        echo "</div>";
    };
        ?>
    </div>
</div>

    
</body>
</html>


