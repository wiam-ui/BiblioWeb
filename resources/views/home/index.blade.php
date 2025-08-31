<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <title> my site </title>
    </head>
    <body>
        <header>
            <div id="menu-bar" class="fas fa-bars"></div>
            <a href="#" class="logo"><span>
                <img src="{{ asset('img/l (1).jpg') }}" alt="" srcset="">B</span>iblio<span>W</span>eb</a>
            <nav class="navbar">
                <a href="#home">home</a>
                <a href="#About">About</a>
                <a href="#categorie">Categorie <i class="fa-solid fa-book"></i></a>
                <a href="#contact">Contact</a>
                @if (Route::has('login'))
                    @auth
                    <a
                    href="{{ url('/dashboard') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                >
                    Dashboard
                </a>
                    @else
                        <a href="{{ route('login') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        ><i class="fas fa-user"id="login-btn" ></i>Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            > Register </a>
                        @endif
                    @endauth

                @endif
            </nav>

            <div class="icons">
                <i class="fas fa-search" id="search-btn" ></i>
            </div>

            <form action="" class="search-bar-container">
                <input type="search" id="search-bar"  placeholder="Rechercher...">
                <label for="search-bar" class="fas fa-search" ></label>
            </form>

        </header>

        <section class="home" id="home">


            <div class="hero-section">

                <div class="image-container" >
                    <img src="{{ asset('img/B1.jpg') }}" alt="image">
                </div>

                <div class="content-section" >
                    <h2 id="typewriterText" style="font-family: 'Courier New', Courier;"></h2><br>

                    <p>Les services de prêt de livres à emporter sont désormais disponibles</p>
                    <a href="#About" class="button" id="myBox">Learn How</a>

                    </div>
                </div>


            </div>


        </section>

        <section class="book" id="About">
            <h1 class="heading">
                <span>A</span>
                <span>B</span>
                <span>O</span>
                <span>U</span>
                <span>T</span>
            </h1>
            <div class="library-container">

                <div class="overlay">
                    <h1>About Notre bibliothèque</h1>
                    <p>un espace dédié à la découverte, à l'apprentissage et à l'échange.
                        Avec une collection riche et variée de livres, de ressources numériques et
                        d'activités culturelles, notre mission est d'offrir un accès libre à la connaissance
                        et de favoriser le plaisir de lire
                    </p>
                    <a href="#categorie" id="bounceButton" class="button" id="myBox">Learn How</a>



                </div>

            </div>
        </section>

        <section class="categorie" id="categorie">
            <h1 class="heading">
                <span>C</span>
                <span>a</span>
                <span>t</span>
                <span>e</span>
                <span>g</span>
                <span>o</span>
                <span>r</span>
                <span>i</span>
                <span>e</span>
            </h1>

            <div class="box-container">
                @foreach($categories as $data)
                <div class="box">
                    <img src="{{ asset('img/' . $data->image) }}" alt="" srcset="">
                    <div class="content">
                        <h3><i class="fa-solid fa-book"></i>{{$data->name}}</h3>
                        <p>{{$data->description}}</p>
                        <a href="{{ route('livredynamique', $data->id)}}" class="button">voir des livres</a>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        <section class="contact" id="contact">
            <h1 class="heading">
                <span>C</span>
                <span>O</span>
                <span>N</span>
                <span>T</span>
                <span>A</span>
                <span>C</span>
                <span>T</span>
            </h1>
            <div class="row">
                <div class="image">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3319.716688506691!2d-7.3868858!3d33.6903994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7b6f307e309b3%3A0x892d01228b110aa1!2zTGlicmFpcmllIEZlZGFsYSDZhdmD2KrYqNipINmB2LbYp9mE2Kk!5e0!3m2!1sfr!2sma!4v1734009105029!5m2!1sfr!2sma" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <form action="{{ route('contact.store')}}" method="post">

                    @csrf

                    <div class="inputBox">
                        <input type="text" id="text" name="lastName" placeholder="Nom">
                        <input type="text" id="text" name="firstName" placeholder="Prenom">
                    </div>
                    <div class="inputBox">
                        <input type="text" id="phone" name="phone" placeholder="phone">
                        <input type="text" id="address" name="address" placeholder="Adresse">
                    </div>
                    <textarea placeholder="message" name="message" id="message" cols="30" rows="10"></textarea>
                    <button id="particleButton"  class="button" style="width: 100px;" >Envoyer</button>
                </form>
            </div>
        </section>











        <section class="footer">
            <h1 class="credit">&copy; 2025 created by<span> by mlle.wiam barka </span>.</h1>
        </section>

        <script src="{{ asset('js/script.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    </body>
</html>
