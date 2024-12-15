<footer>
        <div class="wrapper">
            <div class="header-footer">
                <h1>Kontak</h1>
                <p>Jika anda memiliki saran atau varian makanan terbaru di sekitar jakarta anda dapat mengisi form yang ada disini.</p>
            </div>

            <div class="more-details">
                <div class="left">
                    <h2>Tentang Kami</h2>
                    <p>Anda dapat menghubungi kami apabila anda tertarik untuk membuat web informasi yang menarik. Silahkan hubungi kami lewat ...</p>
                    <div class="contact-info">
                        <p style="font-weight: bold;">Email address</p>
                        <p>salamhangat@culture.com</p>
                        <p style ="font-weight: bold;">Phone number</p>
                        <p>+62 878 6079 3288</p>
                    </div>

                    <div class="social-icons">
                        <p>Follow me on</p>
                        <a href="https://i.pinimg.com/736x/af/2d/7a/af2d7ac5a49679074f3f4610b4de1a0d.jpg" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://i.pinimg.com/236x/97/8e/04/978e043544b65dbf818ea9ff95faaa3d.jpg"><i class="fa-brands fa-whatsapp"></i></a>
                        <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                        <a href=""><i class="fa-brands fa-github"></i></a>
                    </div>
                </div>

                <div class="right">
                    <h2>Form Saran</h2>
                    <form action="output.php" method="POST">
                        <input type="text" placeholder="Full name" name="username">
                        <!-- <input type="email" placeholder="Email address" value="" name="email">
                        <input type="text" placeholder="Phone number" value="" name="phone">
                        <input type="text" placeholder="Area City" value="" name="city"> -->
                        <textarea placeholder="Berikan masukan anda disini" name="project"></textarea>
                        <button type="submit" onClick="alert('Terima kasih & SEMOGA HARI ANDA MENYENANGKAN');">Submit →</button>
                    </form>
                </div>

            </div>
        </div>
    </footer>

<style>

footer {
background-color: #101820;

}
.wrapper {
    max-width: 100%;
}

.header-footer {
    text-align: center;
    padding: 50px 0;
    color: #d8e3ee;
}

.header-footer h1 {
    font-size: 48px;
    margin-top: 5rem;
    margin-bottom: 15px;
}

.header-footer p {
    font-size: 18px;
    max-width: 600px;
    margin: 0 auto;
}

.more-details {
    display: flex;
    justify-content: space-between;
    padding: 20px 2rem;
}

.more-details .left, .more-details .right {
    width: 50%;
    color: #Fff;
    padding: 3rem;
}


.more-details .left h2, .more-details .right h2 {
    padding: 10px 0;
    font-size: 30px;
    font-weight: 700;
}

.more-details .left p, .more-details .right p {
    font-size: 16px;
    margin-bottom: 20px;
}

.more-details .left .contact-info, .more-details .right .contact-info {
    margin-bottom: 20px;
}

.more-details .left .contact-info p, .more-details .right .contact-info p {
    margin: 6px 5px;
}

.more-details .left .social-icons {
    display: flex;
    font-size: 18px;
    font-weight: 600;
}


.more-details .left .social-icons a i {
    color: #d8e3ee;
    margin: 0 7px;
    display: flex;
    font-weight: 400;
}

.more-details .left .social-icons i:hover {
    color: #FFBB00;

}

.more-details .right form {
    display: flex;
    flex-direction: column;
    width: 100%;
}


.more-details .right form input, .more-details .right form textarea {
    width: 500px;
    background-color: #222;
    border: none;
    border-radius: 10px;
    padding: 17px;
    margin-bottom: 20px;
    color: #ebe0e0;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    -ms-border-radius: 10px;
    -o-border-radius: 10px;
}

.more-details .right form textarea {
    width: 500px;
    height: 300px;
}

.more-details .right form input::placeholder, .more-details .right form textarea::placeholder {
    color: #888;
}

.more-details .right form button {
    background-color: #FFBB00;
    color: #111;
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    cursor: pointer;
}

</style>