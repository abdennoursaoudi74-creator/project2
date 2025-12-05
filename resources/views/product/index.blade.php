<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>


    <style>
        /*---------------------*/
        /* THEME VARIABLES */
        /*---------------------*/

        :root {
            --primary: #e30020;
            --text: #1a1a1a;
            --bg: #ffffff;
            --card: #f0f0f0;
        }

        [data-theme="dark"] {
            --primary: #e30020;
            --text: #ffffff;
            --bg: #0b0b0b;
            --card: #151515;
        }

        /*---------------------*/
        /* BASE */
        /*---------------------*/

        body {
            background: var(--bg);
            color: var(--text);
            font-family: Poppins, sans-serif;
            transition: 0.4s;
            margin: 0;
        }

        /*---------------------*/
        /* NAVBAR */
        /*---------------------*/

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 50px;
            background: var(--card);
            border-bottom: 2px solid var(--primary);
        }

        .navbar .logo {
            font-size: 26px;
            font-weight: 900;
        }

        .navbar .logo span {
            color: var(--primary);
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 35px;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--text);
            font-weight: 500;
        }

        .nav-links a:hover,
        .nav-links .active {
            color: var(--primary);
        }

        /* DARK MODE SWITCH */

        .theme-toggle i {
            font-size: 22px;
            cursor: pointer;
            color: var(--primary);
        }

        /*---------------------*/
        /* HERO */
        /*---------------------*/

        .hero {
            display: flex;
            align-items: center;
            padding: 50px 80px;
            gap: 40px;
        }

        .hero-content {
            max-width: 500px;
        }

        .hero h1 {
            font-size: 44px;
            margin: 0;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
            padding: 12px 25px;
            border: none;
            margin-top: 20px;
            border-radius: 6px;
            cursor: pointer;
        }

        .hero-img {
            width: 450px;
            border-radius: 15px;
        }

        /*---------------------*/
        /* PRODUITS */
        /*---------------------*/

        .products-section {
            padding: 40px 80px;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
            margin-top: 25px;
        }

        .product-card {
            background: var(--card);
            padding: 18px;
            border-radius: 12px;
            transition: 0.3s;
            cursor: pointer;
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 20px rgba(227, 0, 32, 0.3);
        }

        .product-card img {
            width: 100%;
            height: 230px;
            object-fit: cover;
            border-radius: 10px;
        }

        .price {
            color: var(--primary);
            font-weight: bold;
        }

        .btn-secondary {
            background: transparent;
            border: 1px solid var(--primary);
            padding: 8px 15px;
            margin-top: 10px;
            border-radius: 6px;
            color: var(--primary);
            cursor: pointer;
        }

        /*---------------------*/
        /* FOOTER */
        /*---------------------*/

        .footer {
            background: var(--card);
            padding: 40px 80px;
            display: flex;
            justify-content: space-between;
        }

        .footer a {
            display: block;
            text-decoration: none;
            color: var(--text);
            margin-top: 8px;
        }
    </style>

</head>

<body class="">
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AUTO PRO – Boutique de pièces automobiles</title>
        <link rel="stylesheet" href="styles.css">

        <!-- Icônes pour la maquette -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css">
    </head>

    <body data-theme="dark">

        <!-- ▬▬▬ NAVBAR ▬▬▬ -->
        <header class="navbar container">
            <div class="logo">AUTO<span>PRO</span></div>

            <ul class="nav-links">
                <li><a href="#" class="active">Accueil</a></li>
                <li><a href="#">Pièces Auto</a></li>
                <li><a href="#">Catégories</a></li>
                <li><a href="#">Service & Réparation</a></li>
                <li><a href="#">Contact</a></li>
            </ul>

        </header>

        <!-- ▬▬▬ HERO ▬▬▬ -->
        <section class="hero container">
            <div class="hero-content">
                <h1>Pièces Auto Premium</h1>
                <p>Qualité d'origine, prix imbattables. Trouvez la pièce idéale pour votre véhicule.</p>
                <button class="btn-primary">Voir les pièces</button>
            </div>

            <img src="https://i.pinimg.com/736x/86/84/45/868445000fa7dc2df5cea484cf1afa94.jpg" class="hero-img" alt="Pièces Auto" height="400">
        </section>


        <section class="products-section container">
            <!-- ▬▬▬logo -->

            <!-- ▬▬▬ SECTION PRODUITS ▬▬▬ -->

            <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="products-grid db-flex">
                @foreach($produits as $p)
                <div class="product-card">
                    <img src="{{$p->image}}" alt="Turbo">
                    <h3>Turbo Garrett GT1752</h3>
                    <p class="price">{{$p->prix}}MAD</p>

                    <div class="rating">
                        ★★★★☆ <span>(120 avis)</span>
                    </div>
                    <button class="btn-secondary">{{$p->description}}</button>

                </div>
                @endforeach
            </div>
        </section>



        <footer class="footer">
            <div class="col">
                <h3>AUTOPRO</h3>
                <p>Votre partenaire N°1 en pièces automobile.</p>
            </div>

            <div class="col">
                <h4>Liens</h4>
                <a href="#">Accueil</a>
                <a href="#">Pièces Auto</a>
                <a href="#">Contact</a>
            </div>

            <div class="col">
                <h4>Contact</h4>
                <p><i class="ri-phone-fill"></i> +212 6 12 34 56 78</p>
                <p><i class="ri-map-pin-2-fill"></i> Casablanca, Maroc</p>
            </div>
        </footer>

        <script src="script.js"></script>

    </body>

    </html>

</body>

</html>