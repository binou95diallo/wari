<<<<<<< HEAD
'use strict';

window.onload = () => {
    const data = JSON.parse(document.getElementById('swagger-data').innerText);

    Redoc.init(data.spec, {}, document.getElementById('swagger-ui'));
};
=======
'use strict';

window.onload = () => {
    const data = JSON.parse(document.getElementById('swagger-data').innerText);

    Redoc.init(data.spec, {}, document.getElementById('swagger-ui'));
};
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
