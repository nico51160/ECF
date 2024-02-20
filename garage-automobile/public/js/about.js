function afficherModal() {
    document.getElementById('myModal').style.display = 'block';
}

function cacherModal() {
    document.getElementById('myModal').style.display = 'none';
}

const contactBtn = document.getElementById('contact-btn');

contactBtn.addEventListener('click', () => {
    afficherModal();
});

const modal = document.getElementById('myModal');
const closeBtn = document.getElementById('close');

closeBtn.addEventListener('click', () => {
    cacherModal();
});

window.addEventListener('click', (event) => {
    if (event.target == modal) {
        cacherModal();
    }
});