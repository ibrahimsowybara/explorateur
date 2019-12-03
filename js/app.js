var xhttp = null;
var main$ = document.getElementById("content");
var call = document.querySelectorAll(".call");

for (var i = 0; i < call.length; i++) {
call[i].addEventListener("click", function(e){

    if (xhttp != null) {
        console.log("Un call est déjà en cours");
    } else {
        main$.innerHTML = "";


        xhttp = new XMLHttpRequest();

        xhttp.open('GET', ("fonction.php") , true);

        xhttp.onload = function () {

            main$.innerHTML = xhttp.responseText;
            xhttp = null;
        };

        xhttp.onerror = function() {
            xhttp = null;
        }

        xhttp.send();
    }    

});
}