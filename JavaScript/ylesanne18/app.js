const formElement = document.getElementById('myForm');

const validaor = {
    firstName:  {
        pattern: /^[A-Za-zöäõüÖÄÕÜ-]{2,}$/,
        message: 'Eesnimi peab olema vähemalt 2 tähemärki.'
    },
    lastName: {
        pattern: /^[A-Za-zöäõüÖÄÕÜ-]{2,}$/,
        message: 'Perekonnanimi peab olema vähemalt 2 tähemärki.'
    },
    email: {
        pattern: /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/,
        message: 'Vigane E-Posti aadress.',
    },
};

for (let field in validator) {
    formElement[field].addEventListener('keyup', e => {
        e.preventDefault();

        let fieldValue = e.target.value;
        let kontroll = validator[field].test(fieldValue);
        let helpText = document.getElementById(field + 'Val');

        if (kontroll) {
            helpText.textContent = "Ei vasta mustrile!";
            helpText.classList.remove('text-danger');
            helpText.classList.add('text-muted');
        } else {
            helpText.textContent = validator[field]["message"];
            helpText.classList.remove('text-muted');
            helpText.classList.add('text-danger');
        }
    });
}