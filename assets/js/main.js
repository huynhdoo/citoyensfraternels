$("#menubutton" ).click(function() {
  $( ".menu" ).slideToggle( "fast", function() { $("#menubutton").toggleClass('white'); });

});

$("#header").sticky({topSpacing:0});
$(".articleshare").sticky({topSpacing:90});

$(".fancybox")
    .attr('rel', 'gallery')
    .fancybox({
        padding : 0
    });

$('#signup').on('submit', function(e) {
  e.preventDefault(); // J'empêche le comportement par défaut du navigateur, c-à-d de soumettre le formulaire
  var $this = $(this); // L'objet jQuery d
  var fields = ["entry_292069858", "entry_200163565", "entry_1335922993"];
  var valid = true;
  for (var f in fields) {
    field = document.forms["signup"][fields[f]];
    field.classList.remove("mce_inline_error");
    if (field.value == null || field.value == "") {
      field.placeholder="Champ requis";
      field.classList.add("mce_inline_error");
      valid = false;
    }
  }

  if (valid) {
    $.ajax({
      url: $(this).attr('action'), // Le nom du fichier indiqué dans le formulaire
      type: $(this).attr('method'), // La méthode indiquée dans le formulaire (get ou post)
      data: $(this).serialize(), // Je sérialise les données (j'envoie toutes les valeurs présentes dans le formulaire)
      /*success: function(html) { // Je récupère la réponse du fichier PHP
                  alert(html); // J'affiche cette réponse
                }*/
    })
    .complete(function(data) {
      $("#signup").addClass("hidden");
      $("#sign_confirm").removeClass();
    });;
  }
  return valid;
})

$('#ss-submit-new').on('click', function(e) {
  $("#sign_confirm").addClass("hidden");
  $("#signup").removeClass();
  var fields = ["entry_292069858", "entry_200163565", "entry_1335922993", "entry_62103730"];
  for (var f in fields) {
    field = document.forms["signup"][fields[f]];
    field.classList.remove("mce_inline_error");
    field.value = "";
    field.placeholder = "";
  }
  $('#entry_357639412').attr('checked', false)
})