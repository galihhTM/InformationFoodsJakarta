
const parentContainer = document.querySelector("section");

parentContainer.addEventListener("click", (event) => {
    const current = event.target;
    const isRincianBtn = current.className.includes("rincian-btn");
    if(!isRincianBtn) return;
    const currentText = event.target.parentNode.querySelector('.rincian-text');
    currentText.classList.toggle('rincian-text--show');
    current.textContent = current.textContent.includes('Less') ? 
    "More ..." : "Less ...";
})


function scrollToElement(elementSelector, instance = 0) {
    
    const elements = document.querySelectorAll(elementSelector);
    
    if (elements.length > instance) {
        
        elements[instance].scrollIntoView({ behavior: 'smooth' });
    }
}

const link1 = document.getElementById("link1");
const link2 = document.getElementById("link2");
const link3 = document.getElementById("link3");

link1.addEventListener('click', () => {
    scrollToElement('.cards');
});
link2.addEventListener('click', () => {
    scrollToElement('.header-footer' );
});
link3.addEventListener('click', () => {
    scrollToElement('.cards' );
});


function openPopup(title, description) {
    document.getElementById("popup-title").innerText = title;
    document.getElementById("popup-description").innerHTML = description;

    var imgSrc = " ";
    switch (title) {
        case 'Cibay':
            imgSrc = "../picture/Jakut/cibay.jpg";
            break;
        case 'Bakmi Petak Sembilan':
            imgSrc = "../picture/Jakut/bakmipetak.jpg";
            break;
        case 'Pancong Lumer':
            imgSrc = "../picture/Jakut/panconglumer.jpg";
            break;
        case 'Kelapa Bakar Herbal':
            imgSrc = "../picture/Jakut/kelapaBakar.png";
            break;
        case 'Rujak Acek Medan':
            imgSrc = "../picture/Jakut/rujak.png";
            break;
        case 'Dimsum Mentai':
            imgSrc = "../picture/Jakbar/dimsumbakar.webp";
            break;
        case 'Pangsit Goreng':
            imgSrc = "../picture/Jakbar/pangsitgoreng.jpg";
            break;
        case 'Bakso Adam':
            imgSrc = "../picture/Jakbar/baksoAdam.jpg";
            break;
        case 'Nasi Telur Pontianak':
            imgSrc = "../picture/Jakbar/nasitelur.jpg";
            break;
        case 'Nasi Uduk Ibu Sumi':
            imgSrc = "../picture/Jakbar/nasiUduk.jpg";
            break;
        case 'Nasi Bebek Mak Isa':
            imgSrc = "../picture/Jaktim/Nasibebek.jpg";
            break;
        case 'Sop Kambing Tiga Saudara':
            imgSrc = "../picture/Jaktim/sop.jpg";
            break;
        case 'Ayam Goreng Mbok Berek':
            imgSrc = "../picture/Jaktim/ayamgoreng.jpg";
            break;
        case 'Asinan Betawi H.Mansyur':
            imgSrc = "../picture/Jaktim/asinanbetawi.jpg";
            break;
        case 'Sate Padang H.Ajo Manih':
            imgSrc = "../picture/Jaktim/satepadang.jpg";
            break;
        case 'Gohyong':
            imgSrc = "../picture/Jakpus/gohyong.jpg";
            break;
        case 'Ayam Hancur Solo':
            imgSrc = "../picture/Jakpus/ayamAncur.jpg";
            break;
        case 'Pempek Megaria':
            imgSrc = "../picture/Jakpus/PempekMegaria.jpg";
            break;
        case 'Bakso Dan Soto Tangkar':
            imgSrc = "../picture/Jakpus/sototangkar.jpg";
            break;
        case 'Makanan Benhil Serba 10rb':
            imgSrc = "../picture/Jakpus/makanmurah.png";
            break;
        case 'Gultik':
            imgSrc = "../picture/Jaksel/gultik.jpg";
            break;
        case 'Bubur Ayam Barito':
            imgSrc = "../picture/Jaksel/buryambarito.jpg";
            break;
        case 'Gudeh Mercon Bu Prih':
            imgSrc = "../picture/Jaksel/gudegMercon.jpg";
            break;
        case 'Kawara Yakiniku':
            imgSrc = "../picture/Jaksel/yakiniku.jpg";
            break;
        case 'Macks Creamery':
            imgSrc = "../picture/Jaksel/eskrim.jpg";
            break;
        default:
            imgSrc = "";
    }

    document.getElementById("popup-image").src = imgSrc;
    
    document.getElementById("popup").style.display = "flex";

    const popup = document.getElementById("popup");
    popup.classList.remove('hide');
    popup.classList.add('show');
    popup.style.display = "flex";

}


function closePopup() {
    document.getElementById("popup").style.display = "none";

    popup.classList.remove('show');
    popup.classList.add('hide');

    setTimeout(() => {
        popup.style.display = "none";
    }, 300);
}

// const menuIcon = document.getElementById("burger");

// menuIcon.addEventListener("click", () => {
//     alert("bisaa");
// });


