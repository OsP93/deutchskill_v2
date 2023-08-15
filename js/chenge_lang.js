window.onload = function () {
    // add to url selected lang.
    const select = document.querySelector('select');
    const allLang = ['ru', 'ua', 'de']

    select.addEventListener('change', changeURLAdress);
    function changeURLAdress() {
        let lang = select.value;
        location.href = window.location.pathname + '#' + lang;
        console.log(lang);
        changeLanguage();
        location.reload();
    };

    // change language
    function changeLanguage() {
        let hash = window.location.hash;
        hash = hash.substring(1);
        if (!allLang.includes(hash)) {
            location.href = window.location.pathname + '#ru';
            location.reload();
        }

        select.value = hash;
        //document.querySelector('.header-description').innerHTML = langArr['head'][hash];
        for (let key in langArr) {
            let elem = document.querySelector('.lng-' + key);
            if (elem) {
                elem.innerHTML = langArr[key][hash];
            }
        }
    };

    changeLanguage();
};
