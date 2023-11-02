var Button = document.querySelector("#btGet");
Button.addEventListener('click', btGet);

function btGet(){
    var xmlhttp = new XMLHttpRequest(); //faz a conexão do navegador com o servidor web
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status ==200) {
            document.getElementById("resultado").innerHTML = xmlhttp.responseText;
        }
    };
    xmlhttp.open("GET", "get_user.php", true);
    xmlhttp.send();
}









//var btGET =  document.getElementById("bt_get")
//btGET.addEventListener("click", function() {
//    // Aqui, você pode usar JavaScript para enviar uma solicitação ao servidor PHP.
//    // Vamos usar AJAX (Assynchronous JavaScript and XML) para buscar os dados.
//    
//    var xmlhttp = new XMLHttpRequest();
//    xmlhttp.onreadystatechange = function() {
//        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//            document.getElementById("resultado").innerHTML = xmlhttp.responseText;
//        }
//    };
//    xmlhttp.open("GET", "get_user.php", true);
//    xmlhttp.send();
//});
