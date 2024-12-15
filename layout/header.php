<nav>
    <div class="nav-logo">
        <a href="#">
            <img src="../picture/logoMBH.png">
        </a>

    </div>
    <h5>
        <marquee behavior="SCROLL" direction="right" width="35%">Mahasiswa BSI Hebat</marquee>
    </h5>
    <!-- <div id="burger-menu" class="burger-menu">
            <i class="fa-solid fa-bars"></i>
        </div> -->
    <ul class="nav-links">
        <li class="link"><a href="#">Home</a></li>
        <li id="link1" class="link"><a href="#">FoodsTrends</a></li>
        <li id="link2" class="link"><a href="#">Contact</a></li>
        
    </ul>
</nav>

<header class="container">
    <div class="content">
        <h1>Makanan Hits Dan Bikin Lapar di Jakarta 2024</h1>
        <button id="link3" class="link"><a href="#"></a>SCROLL</button>
    </div>
</header>


<!-- STYLING -->
<style>
@import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lilita+One&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    font-family: "Montserrat";
    font-style: normal;
    font-weight: 500;
}

body {
    background-image: url(..//picture/wallpaper.webp);
    width: 100%;
    height: 100vh;
    background-size: cover;
}

nav {
    padding: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 3rem;
    background: #FFBB00;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
}

img {
    width: 75%;
    display: flex;
}

h5 {
    font-size: 20px;
    width: 75%;
    display: flex;
    justify-content: left;
    color: rgb(0, 0, 0);
    font-weight: normal;

}

.nav-logo {
    display: flex;
    align-items: center;
    max-width: 110px;
    margin-left: 6em;
}

.nav-links {
    list-style: none;
    display: flex;
    align-items: center;
    margin-right: 6em;
    gap: 3rem;
}

.nav-links .burger-menu {
    /* background-color: #fff; */
    font-size: 28px;
    display: none;
}


.link a {
    position: relative;
    color: black;
    font-size: 20px;
}

.link a::after {
    content: " ";
    position: absolute;
    height: 3px;
    width: 0;
    bottom: 28px;
    left: 0;
    background-color: #101820;
    transition: all 0.4s ease;
    -webkit-transition: all 0.4s ease;
    -moz-transition: all 0.4s ease;
    -ms-transition: all 0.4s ease;
    -o-transition: all 0.4s ease;
}

.link a:hover::after {
    width: 100%;
}

header {
    display: flex;
}

header .content h1 {
    display: flex;
    color: #101820;
    margin-bottom: 1rem;
    font-size: 3rem;
    font-weight: 700;
    line-height: 4rem;
}

.container {
    max-width: 1200px;
    padding: 6em;
    margin: auto;
    margin-top: 4vh;
    margin-bottom: 4vh;
}

.content {
    width: 100%;
    position: relative;
    padding: 3rem;
    margin: 1rem;
}

button {
    padding: 1rem 2rem;
    margin: 1em 3em;
    font-size: 1rem;
    border: 2px solid #FFBB00;
    border-radius: 20px;
    font-weight: bolder;
    color: #000;
    cursor: pointer;
    background: transparent;
    border-radius: 5px;
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    -ms-border-radius: 20px;
    -o-border-radius: 20px;
    transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
}

button:hover {
    background-color: #FFBB00;
}

@media only screen and (max-width: 680px) {
    nav {
        flex-wrap: wrap;
    }

    .nav-links {
        /* display: none;  */
        flex-direction: column;
        width: 100%;
        position: absolute;
    }

    .burger-menu {
        cursor: pointer;
        display: flex;
        align-items: center;
        margin-right: 2rem;
        font-size: 28px;
    }
}

</style>