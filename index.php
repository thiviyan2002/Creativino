<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Creativino</title>
</head>

<body>
    <!-- Header -->
    <header class="display-f">
        <div class="display-f header-container">
            <div class="logo">
            <a href="index.html"><img src="image/logo.png" alt="creativino"></a>
            </div>
            <!-- Menu de navigation -->
            <nav class="options display-f">
                <ul class="option display-f">
                    <li><a href="#gallery_spe">Galerie</a></li>
                    <li><a href="#">Nous Contacter</a></li>
                </ul>
                <!-- Icônes des réseaux sociaux -->
                <ul class="social-medias display-f">
                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                </ul>
                <!-- Bouton hamburger pour mobile -->
                <!--div class="hamburger" id="hamburger">
                    <i class="fa-solid fa-bars"></i>
                </div-->
            </nav>
        </div>
        <!-- Menu mobile caché par défaut -->
        <!--div class="mobile-menu" id="mobile-menu">
            <ul>
                <li><a href="#">Galerie</a></li>
                <li><a href="#">Nous Contacter</a></li>
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
        </div-->
    </header>
    

    <!-- Section présentation image -->
    <!--section class="img-presentation">
        <h1>Bienvenue chez Creativino</h1>
        <img src="image/pizza-6478478_1920.jpg" alt="Pizza artisanale">
    </section-->
    <section class="img-presentation">
        <div class="overlay"></div> <!-- Superposition noire -->
        <h1>Bienvenue chez Creativino</h1>
        <img src="image/pizza-6478478_1920.jpg" alt="Pizza artisanale">
    </section>
    

    <!-- Section About -->
    <section class="about">
        <div class="container">
            <h2>À propos de Creativino</h2>
            <p>Chez Creativino, nous mettons à l'honneur l'authenticité de la cuisine italienne tout en y ajoutant une touche de modernité. Notre passion pour les ingrédients frais et locaux nous permet de vous offrir des plats savoureux, inspirés par les régions de l'Italie. Que vous veniez pour une pizza napolitaine ou un verre de vin soigneusement sélectionné, chaque visite est une véritable expérience gastronomique.</p>
            <div class="features">
                <div class="feature">
                    <i class="fa-solid fa-pizza-slice"></i>
                    <h3>Authenticité</h3>
                    <p>Nos recettes sont inspirées des traditions culinaires italiennes, avec des ingrédients de qualité.</p>
                </div>
                <div class="feature">
                    <i class="fa-solid fa-wine-glass"></i>
                    <h3>Vin Raffiné</h3>
                    <p>Découvrez une carte des vins sélectionnés parmi les meilleures productions italiennes.</p>
                </div>
                <div class="feature">
                    <i class="fa-solid fa-seedling"></i>
                    <h3>Produits Locaux</h3>
                    <p>Nous privilégions les produits frais, locaux et respectueux de l'environnement.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery_spe" id="gallery_spe">
        <h2>Notre Galerie</h2>
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="image/cocktail.png" alt="Cocktail">
            </div>
            <div class="gallery-item">
                <img src="image/Better-bolognese-4-of-4.jpg" alt="Plat 2">
            </div>
            <div class="gallery-item">
                <img src="image/tagliatelle.jpg" alt="Plat 3">
            </div>
            <div class="gallery-item">
                <img src="image/lasagne.png" alt="Plat 4">
            </div>
            <div class="gallery-item">
                <img src="image/food-7724008_1920.jpg" alt="Plat 5">
            </div>
        </div>
    
        <!-- Bouton pour voir le menu -->
        <div class="menu-button-container">
            <button class="btn-reserver" id="openMenuModal">Voir le Menu</button>
        </div>
    </section>
    
    <!-- Fenêtre modale pour afficher le menu -->
    <!-- Fenêtre modale pour afficher le menu avec des boutons -->
    <!-- Fenêtre modale pour afficher le menu avec des icônes -->
    <!-- Fenêtre modale pour afficher le menu avec des icônes -->
    <div id="menuModal" class="modal">
        <div class="modal-content modal-content1">
            <span class="close-menu">×</span>
            <h2>Notre Menu</h2>
            <p>Voici un aperçu de notre menu, découvrez nos spécialités.</p>
            
            <!-- Boutons avec des icônes pour sélectionner les types de nourriture -->
            <div class="menu-buttons">
                <button class="btn-category" id="btn-pizzas" title="Pizzas">
                    <i class="fa-solid fa-pizza-slice"></i>
                </button>
                <button class="btn-category" id="btn-pates" title="Pâtes">
                    <i class="fa-solid fa-bowl-food"></i>
                </button>
                <button class="btn-category" id="btn-lasagnes" title="Lasagnes">
                    <i class="fa-solid fa-layer-group"></i>
                </button>
                <button class="btn-category" id="btn-salades" title="Salades">
                    <i class="fa-solid fa-seedling"></i>
                </button>
                <button class="btn-category" id="btn-vins" title="Vins">
                    <i class="fa-solid fa-wine-glass-alt"></i>
                </button>
            </div>

            <!-- Sections pour chaque catégorie de nourriture -->
            <div id="menu-pizzas" class="menu-section">
                <ul class="menu-list">
                    <li>Pizza Margherita - 10€</li>
                    <li>Pizza Napolitaine - 12€</li>
                    <li>Pizza Quatre Fromages - 14€</li>
                </ul>
            </div>

            <div id="menu-pates" class="menu-section" style="display: none;">
                <ul class="menu-list">
                    <li>Tagliatelles Carbonara - 10€</li>
                    <li>Penne Arrabiata - 11€</li>
                    <li>Spaghetti Bolognaise - 12€</li>
                </ul>
            </div>

            <div id="menu-lasagnes" class="menu-section" style="display: none;">
                <ul class="menu-list">
                    <li>Lasagnes Traditionnelles - 14€</li>
                    <li>Lasagnes aux Légumes - 13€</li>
                </ul>
            </div>

            <div id="menu-salades" class="menu-section" style="display: none;">
                <ul class="menu-list">
                    <li>Salade Caprese - 9€</li>
                    <li>Salade César - 10€</li>
                </ul>
            </div>

            <div id="menu-vins" class="menu-section" style="display: none;">
                <ul class="menu-list">
                    <li>Vin Rouge Toscane - 15€</li>
                    <li>Vin Blanc Sicilien - 18€</li>
                    <li>Prosecco - 20€</li>
                </ul>
            </div>
        </div>
    </div>



    

    <section class="service">
        <h2>Nos Services</h2>
        <div class="service-grid">
            <div class="service-item">
                <i class="fa-solid fa-utensils"></i>
                <h3>Repas à Emporter</h3>
                <p>Profitez de nos délicieux plats italiens à emporter, préparés avec des ingrédients frais.</p>
            </div>
            <div class="service-item">
                <i class="fa-solid fa-bell"></i>
                <h3>Service de Livraison</h3>
                <p>Commandez en ligne et faites-vous livrer vos plats préférés directement chez vous.</p>
            </div>
            <div class="service-item">
                <i class="fa-solid fa-calendar-alt"></i>
                <h3>Réservations</h3>
                <p>Réservez votre table en ligne et assurez-vous de ne pas manquer une expérience culinaire incroyable.</p>
            </div>
            <div class="service-item">
                <i class="fa-solid fa-wheelchair"></i>
                <h3>Accessible aux personnes à mobilité réduite</h3>
                <p>Notre établissement est entièrement accessible aux personnes à mobilité réduite, pour une expérience confortable et agréable.</p>
            </div>
            <div class="service-item">
                <i class="fa-solid fa-sun"></i>
                <h3>Terrasse</h3>
                <p>Détendez-vous sur notre terrasse ensoleillée et profitez d’un repas à l’air libre.</p>
            </div>
            <div class="service-item">
                <i class="fa-solid fa-parking"></i>
                <h3>Parking en libre-service</h3>
                <p>Un parking gratuit est disponible à proximité pour tous nos clients.</p>
            </div>
            <div class="service-item">
                <i class="fa-solid fa-glass-cheers"></i>
                <h3>Événements privés</h3>
                <p>Organisez vos événements privés dans notre restaurant, que ce soit pour des anniversaires, réunions ou autres occasions spéciales.</p>
            </div>
            <div class="service-item">
                <i class="fa-solid fa-ring"></i>
                <h3>Réception de mariage</h3>
                <p>Faites de votre mariage un jour inoubliable en célébrant dans notre magnifique restaurant. Nous vous offrons une expérience unique pour cet événement spécial.</p>
            </div>
            <div class="service-item">
                <i class="fa-solid fa-wifi"></i>
                <h3>Wi-Fi Gratuit</h3>
                <p>Profitez de notre connexion Wi-Fi gratuite pour rester connecté pendant que vous dégustez nos plats.</p>
            </div>
        </div>
    </section>
    
    
    
    
    
    <section class="dispo">
        <h2>Disponibilité</h2>
        <p>Nous sommes ouverts tous les jours de 11h00 à 23h00.</p>
        <p>Pour les réservations, contactez-nous au <strong>012-345-6789</strong>.</p>
        
        <!-- Bouton Réserver -->
        <button class="btn-reserver" id="openModal">Réserver maintenant</button>
    </section>
    
    <!-- Fenêtre modale pour la réservation -->
    <div id="reservationModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Réserver une table</h2>
            <p>Veuillez remplir vos informations pour réserver une table.</p>
            <!-- Formulaire de réservation -->
            <form action="https://formspree.io/f/xwpegyqr" method="POST">
                <div class="display-f">
                    <!--label for="name"> :</label-->
                    <input type="text" id="surname" name="surname" placeholder="Nom" class="surname" required>    
                    <input type="text" id="name" name="name" placeholder="Prenom" required>                
                </div>
                
                <!--label for="phone">Téléphone :</label-->
                <input type="tel" id="phone" name="phone" placeholder="Téléphone" required>

                <!--label for="phone">Email :</label-->
                <input type="email" id="email" name="email" placeholder="Email" required>

                <!--label for="people">Nombre de personnes :</label-->
                <input type="number" id="people" name="people" placeholder="Nombre de personnes" min="1" max="20" required>
                
                <label for="date">Date Heure :</label>
                <input type="datetime-local" id="date" name="date" required>
                
                <!--label for="time">Heure :</label>
                <input type="time" id="time" name="time" required-->
                <!--input type="hidden" name="_captcha" value="false"-->
                <!--input type="hidden" name="_cc" value="another@email.com,yetanother@email.com"-->
                <!--input type="hidden" name="_next" value="thanks.html"-->
                <!--input type="hidden" name="_template" value="box"-->



                <button type="submit">Réserver</button>
            </form>
        </div>
    </div>

    <script>
        // Récupère les éléments HTML
var modal = document.getElementById("reservationModal");
var btn = document.getElementById("openModal");
var span = document.getElementsByClassName("close")[0];

// Quand on clique sur le bouton, on ouvre la fenêtre modale
btn.onclick = function() {
    modal.style.display = "flex"; // Affiche la fenêtre en mode flex
}

// Quand on clique sur le X, on ferme la fenêtre modale
span.onclick = function() {
    modal.style.display = "none";
}

// Si on clique en dehors de la fenêtre modale, elle se ferme
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var menuModal = document.getElementById("menuModal");
    var menuBtn = document.getElementById("openMenuModal");
    var closeMenu = document.getElementsByClassName("close-menu")[0];

    // Afficher la fenêtre modale quand on clique sur le bouton "Voir le Menu"
    menuBtn.onclick = function() {
        menuModal.style.display = "flex";
    }

    // Fermer la fenêtre modale quand on clique sur le "X"
    closeMenu.onclick = function() {
        menuModal.style.display = "none";
    }

    // Fermer la fenêtre modale quand on clique en dehors de la modale
    window.onclick = function(event) {
        if (event.target == menuModal) {
            menuModal.style.display = "none";
        }
    }


    
    // Récupérer les éléments des boutons et des sections de menu
    var pizzasBtn = document.getElementById("btn-pizzas");
    var patesBtn = document.getElementById("btn-pates");
    var lasagnesBtn = document.getElementById("btn-lasagnes");
    var saladesBtn = document.getElementById("btn-salades");
    var vinsBtn = document.getElementById("btn-vins");

    var pizzasSection = document.getElementById("menu-pizzas");
    var patesSection = document.getElementById("menu-pates");
    var lasagnesSection = document.getElementById("menu-lasagnes");
    var saladesSection = document.getElementById("menu-salades");
    var vinsSection = document.getElementById("menu-vins");

    // Fonction pour masquer toutes les sections
    function hideAllSections() {
        pizzasSection.style.display = "none";
        patesSection.style.display = "none";
        lasagnesSection.style.display = "none";
        saladesSection.style.display = "none";
        vinsSection.style.display = "none";
    }

    // Ajouter des événements de clic pour chaque bouton
    pizzasBtn.onclick = function() {
        hideAllSections();
        pizzasSection.style.display = "block"; // Afficher la section Pizzas
    };

    patesBtn.onclick = function() {
        hideAllSections();
        patesSection.style.display = "block"; // Afficher la section Pâtes
    };

    lasagnesBtn.onclick = function() {
        hideAllSections();
        lasagnesSection.style.display = "block"; // Afficher la section Lasagnes
    };

    saladesBtn.onclick = function() {
        hideAllSections();
        saladesSection.style.display = "block"; // Afficher la section Salades
    };

    vinsBtn.onclick = function() {
        hideAllSections();
        vinsSection.style.display = "block"; // Afficher la section Vins
    };


    </script>
    

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>© 2024 Creativino - Tous droits réservés</p>
        </div>
    </footer>
</body>

</html>
