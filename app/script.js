document.getElementById("searchButton").addEventListener("click", function() {
    var inputValue = document.getElementById("searchInput").value.toLowerCase(); // Convertit la saisie en minuscules
    var divs = document.getElementsByTagName("div");
  
    // Parcourt toutes les divs
    for (var i = 0; i < divs.length; i++) {
      var div = divs[i];
      // Cache toutes les divs sauf celle dont l'ID correspond à la valeur de la recherche
      if (div.id === inputValue) {
        div.style.display = "block";
      } else {
        div.style.display = "none";
      }
    }
  });
  