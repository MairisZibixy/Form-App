function displayAvatar(form, response) {
    let app = document.querySelector('#app');
    let output = '';

    // console.log(app); - Parāda ko satur mainīgais konsolē

    for (entry in response) {
        console.log(response[entry]); // Izvada ierakstu vērtības
        if (entry !== 'images') {
            output += '<p><b>' + entry + '</b> ' + response[entry] + '</p>' // ar += tiek pievienots kaut kas klat
        } else {
            output += '<img src="' + response[entry] + '" height="100px" >'
        }
    }


    app.innerHTML = output;


}