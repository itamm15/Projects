let guziki = document.querySelectorAll("button");

guziki[0].addEventListener('click', () => {
    const tmp = document.querySelector('ul');
    tmp.classList.toggle("zmiana");
})

guziki[1].onclick = () => {
    let elementy = document.querySelectorAll('ul li');
    elementy[1].style.backgroundColor = 'yellow';
    elementy[4].style['background-color'] = 'yellow';
}

guziki[2].addEventListener('click', () => {
    let zmiana_czcionki = document.querySelectorAll('li');
    for(zmiana of zmiana_czcionki){
        zmiana.classList.toggle("czcionka");
    }
}) 