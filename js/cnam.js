function search() {
    var input = document.getElementById("searchTxt");
    if (input.value) {
        window.location = "https://henrytavernier-dragweno.c9.io/?page=catalogue&search=" + input.value + "&pagenumber=1";
    }
}

function ajouterPanier(id) {
    // Ajout du livre id ds le panier en AJAX
    
    quantity = $( "#quantity_product" ).val();
    
    $.ajax({
        type: "GET",
        dataType: "JSON",
        url: "index.php", 
        data: { page: "panier", "id_produit" : id , "quantity" : quantity}, 
        success:  function (json) {
            if (json >0){
                nbPanier = document.getElementById ("badge");
                nbPanier.innerHTML = json;
            } else if (json == -1){
                alert("Vous avez déjà ce produit dans votre panier.");
            }
        }
    });
}