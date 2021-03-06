<?php


function getArticles()
{

    return [
        [
            'name' => 'Frame Black',
            'id' => '1',
            'price' => 49.99,
            'description' => 'Carrée et Simple à monter <br> (dans les differants tailles)',
            'detailedDescription' => 'Ce cadre aux lignes épurées a été testé et peut s\'utiliser dans 
                                      une chambre d\'enfant. La protection de face en plastique 
                                      ne présente aucune danger.',
            'picture' => './photos/frameBlack'
        ],
        [
            'name' => 'Frame White',
            'id' => '2',
            'price' => 59.99,
            'description' => 'Carrée et Simple à monter <br> (dans les differants tailles)',
            'detailedDescription' => 'Un cadre alliant qualité et esthétique, idéal pour embellir 
                                      vos affiches (vos photos et les de dans un style vraiment moderne !',
            'picture' => './photos/frameWhite'
        ],
        [
            'name' => 'Frame Wood',
            'id' => '3',
            'price' => 69.99,
            'description' => 'Carrée et Simple à monter <br> (dans les differants tailles)',
            'detailedDescription' => 'Ce cadre peut donc rester naturel ou si vous preferez, vous pourrez le personnaliser 
                                      vous-même à la couleur de votre choix.!',
            'picture' => './photos/frameWood'
        ]
    ];
}


function showArticles()
{

    $articles = getArticles();

    foreach ($articles as $article) {

        echo "
        <div class=\"col-md-4\">
        <div class=\"card m-3 border-info border-5\">
        <img src=\""  . $article['picture'] . "\" class=\"card-img-top my-3 p-3\" alt=\"photo\">
        <div class=\"card-body\">
        <h5 class=\"card-title text-center fw-bolder fs-2\">" . $article['name'] . "</h5>
        <h5 class=\"card-title text-center text-decoration-underline\"> Le pris : " . $article['price'] . "</h5>
        <p class=\"card-text text-center fst-italic fs-5\">" . $article['description'] . "</p>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <form action=\"product.php\" method=\"post\"> 
                    <input type=\"hidden\" name=\"articleid\" value=\"" . $article['id'] . "\">
                    <button type=\"submit\" class=\"btn btn-outline-light\">
                    <a title=\"Details produit\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"darkColor\" class=\"bi bi-eye\" viewBox=\"0 0 16 16\">
                    <path d=\"M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z\"/>
                    <path d=\"M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z\"/>
                    </svg></a>
                    </button>
                </form>
            </div>
            <div class=\"col-md-6\">
                <form action=\"panier.php\" method=\"post\"> 
                    <input type=\"hidden\" name=\"articleid\" value=\"" . $article['id'] . "\">
                    <button type=\"submit\" class=\"btn btn-outline-light\"> 
                    <a title=\"Ajouter au panier\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"darkColor\" class=\"bi bi-cart-plus\" viewBox=\"0 0 16 16\">
                    <path d=\"M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z\"/>
                    <path d=\"M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
                  </svg></a>
                    </button>
                </form>
            </div>
        </div>
        </div>
        </div>
        </div>";
    }
}


function getArticleFromid($id)
{

    $articles = getArticles();

    foreach ($articles as $article) {
        if ($id == $article['id']) {
            return $article;
        }
    }
}


function showArticle($article)
{

    echo "<div class=\"card col-md-5 mx-auto m-3 border-info border-5\">
    <img src=\"" . $article['picture'] . "\" class=\"card-img-top my-3 \" alt=\"photo\">
    <div class=\"card-body\">
    <h5 class=\"card-title text-center fw-bolder fs-2\">" . $article['name'] . "</h5>
    <h5 class=\"card-title text-center text-decoration-underline\"> Le pris : " . $article['price'] . "</h5>
    <p class=\"card-text fst-italic fs-5\">" . $article['detailedDescription'] . "</p>
    <form action=\"panier.php\" method=\"post\"> 
        <input type=\"hidden\" name=\"articleid\" value=\"" . $article['id'] . "\">
        <button type=\"submit\" class=\"btn bg-info\" style=\"color: white;\" > Ajouter au panier 
        <a title=\"Ajouter au panier\" style=\"color: white;\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"currentColor\" class=\"bi bi-cart-plus\" viewBox=\"0 0 16 16\">
        <path d=\"M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z\"/>
        <path d=\"M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
        </svg></a>
        </button>
        </form>
    </div>
    </div>";
}


function addToCart($article)
{

    if (count($_SESSION['panier']) > 0) {
        foreach ($_SESSION['panier'] as $articlePanier) {
            if ($articlePanier['id'] == $article['id']) {
                echo "<script> alert(\"Article déjà présent dans le panier !\");</script>";
                return;
            }
        }
    }

    $article["quantity"] = 1;
    $_SESSION['panier'][] = $article;
}


function showArticesPanier($pageName)
{

    foreach ($_SESSION['panier'] as $articlePanier) {

        echo "<div class=\"card border-info border-5 my-5 p-3\"><div class=\"row \">

                <div class=\"col-md-3 my-auto\">
                    <img src=\"" . $articlePanier['picture'] . "\" class=\"img-fluid rounded-start\" alt=\"photoArticle\" >
                </div>

                <div class=\"card col-md-4 my-auto\">
                    <div class=\"card-body\">
                    <h5 class=\"card-title fw-bolder fs-2\"> " . $articlePanier['name'] . "</h5>
                    <p class=\"card-text fst-italic fs-5\">" . $articlePanier['description'] . "</p>
                    </div>
                </div>

                <div class=\"card col-md-1 my-auto text-decoration-underline text-center border-0\">
                    <h5> " . $articlePanier['price'] . "</h5>
                </div>

                <div class= \"card col-md-3 my-auto border-0\">
                    <form action=\"" . $pageName . "\" method=\"post\">
                    <div class=\"col my-auto\">
                    <input id=\"numberpanier\" type=\"number\" min=\"1\" max=\"10\" name=\"newQuantity\" value=\"" . $articlePanier['quantity'] . "\">
                    <input type=\"hidden\" class=\"btn \" name=\"articlePanierid\" value=\"" . $articlePanier['id'] . "\">
                    <button type=\"submit\" class=\"btn bg-info mx-4\" style=\"color: white;\"> Modifier Quantite </button>
                    </div>  
                    </form>
                </div>

                <div class=\"card col-md-1 my-auto border-0\">
                    
                    <form action=\"" . $pageName . "\" method=\"post\"> 
                    <input type=\"hidden\" name=\"articleToDeleteId\" value=\"" . $articlePanier['id'] . "\">
                    <button type=\"submit\" class=\"btn\">
                    <a title=\"Suprimer Article\" style=\"color: white;\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" fill=\"BlackColor\" class=\"bi bi-trash\" viewBox=\"0 0 16 16\">
                    <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z\"/>
                    <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\"/>
                    </svg></a>
                    </button>
                    </form>
                </div>
            </div>
        </div>";
    }
}


function changeQuantity($id, $quantity)
{

    for ($i = 0; $i < count($_SESSION['panier']); $i++) {

        if ($id == $_SESSION['panier'][$i]['id']) {

            $_SESSION['panier'][$i]['quantity'] = $quantity;
        }
    }
}


function deleteArticle($id)
{

    for ($i = 0; $i < count($_SESSION['panier']); $i++) {

        if ($id == $_SESSION['panier'][$i]['id']) {

            array_splice($_SESSION['panier'], $i, 1);
        }
    }
}


function totalPurchases()
{

    $totalPurchases = 0;

    if (count($_SESSION['panier']) > 0) {

        foreach ($_SESSION['panier'] as $articlePanier) {

            $totalPurchases += $articlePanier['quantity'] * $articlePanier['price'];
        }
    }

    return $totalPurchases;
}


function showtotal()
{

    $totalPurchases = totalPurchases();

    echo "<div class=\"col-md-6 card mx-auto border-info border-2\">
    
                <div class=\"card-body bg-light\">
                Total des achats :" . " " . number_format($totalPurchases, 2, ',', ' ') . " " . "€" . " 
                </div>
    
        </div>";
}


function emptypanier($showMessage = true)
{

    $_SESSION['panier'] = [];

    if ($showMessage){
        echo "<script> alert(\"Le panier a bien été vidé!\");</script>";
    }
}


function fraisPort()
{

    $frais = 0;

    if (count($_SESSION['panier']) > 0) {

        foreach ($_SESSION['panier'] as $articlePanier) {

            $frais += $articlePanier['quantity'] * 3;
        }
    }

    return $frais;
}


function showFrais()
{

    echo "<div class=\"col-md-6 card mx-auto border-info border-2\">
    
                <div class=\"card-body bg-light\">
                Frais de port (3 € par chaque frame) :" . " " . fraisPort() . " " . "€" . " 
                </div>
    
          </div>";
}


function FinalPayment()
{

    $FinalPayment = 0;

    return $FinalPayment = totalPurchases() + fraisPort();
}


function showFinalPayment()
{

    $FinalPayment = FinalPayment();

    echo "<div class=\"col-md-6 card mx-auto border-info border-2\">
    
                <div class=\"card-body bg-light\">
                TOTAL A PAYER :" . " " . number_format($FinalPayment, 2, ',', ' ') . " " . "€" . "  
                </div>
                
          </div>";
}

function showDate()
{
    setlocale(LC_TIME, 'fr_FR.utf8', 'fra');       // passage au fuseau horaire français

    $date = date("Y-m-d");                         // récupère date du jour (2021-12-23)

    echo utf8_encode(strftime("%A %d %B %Y", strtotime($date . " + 2 days")));

    // date du jour + 2 jours  / transformation en temps Unix avec strtotime / strftime => formatage => dimanche 25 décembre 2021

}

function showDateDelivery()
{

    $date = date("Y-m-d");
    echo utf8_encode(strftime("%A %d %B %Y", strtotime($date . " + 5 days")));
}
