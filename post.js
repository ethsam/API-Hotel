$('#hello').click(function(event) {
  console.log('hello test');
    event.preventDefault();
    var donnees = { 'funct': 'hello'};
          $.ajax({
         url : 'api.php', // La ressource ciblée
         type : 'POST', // Le type de la requête HTTP.
         data : donnees,
         success: function( data ) {
            $('#api').replaceWith($('#api').html(data));}
                });
    return false;
})

$('#hotel').click(function(event) {
  console.log('hotel test');
    event.preventDefault();
    var donnees = { 'funct': 'hotel', 'lang': 'en' };
          $.ajax({
         url : 'api.php', // La ressource ciblée
         type : 'POST', // Le type de la requête HTTP.
         data : donnees,
         success: function( data ) {
            $('#api').replaceWith($('#api').html(data));}
                });
    return false;
})
