<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/53a0d66a90.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="fontawesome-free-6.1 2.1-web/css/all.css"> 
    <title>BlocProduits</title>
        
    </head>
    <body>

        <div class="grandContenaire">

        <?php 
            require 'connexion.php';
                 //Nous allons afficher tous les produits ajouté :
                   //connexion à la base de données
                   $req3 = $bd->query("SELECT * FROM produit");
                    if($req3->rowCount() == 0) {
                      //si la base de donnée ne contient aucun produit , alors affichons :
                      echo " Aucun produit trouvé";
                   }else {//si oui
                    while ($row = $req3->fetch(PDO::FETCH_ASSOC)) {
                           //affichons les informations
                           echo ' 
                           <div class="petitBloc">
                           <img src="images-produits/'.$row['image'].'" alt="image du produit" class="ImgProduit">
                           <h2 class="Nproduit">'.$row['nom'].'</h2>
                           <h2>'.$row['prix'].'<span> F CFA</span></h2>
                           <div class="bttn">
                               <button class="Appelle"><i class="fa-solid fa-phone"></i></button>
                               <button class="WhatsApp"><i class="fa-brands fa-whatsapp"></i></button>
                           </div>
                       </div>';
                       }
                   } 
            ?>
        
        


    </div>
</body>
</html>