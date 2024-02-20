 document.addEventListener('DOMContentLoaded', function() {

    const form = document.querySelector('form');
    const captchaCheckbox = document.getElementById('captcha');

        form.addEventListener('submit', function(event) {
            if (!captchaCheckbox.checked) {
                event.preventDefault();
                alert("Veuillez cocher la case 'Je ne suis pas un robot' avant de soumettre le formulaire.");
            }
        });
    });

