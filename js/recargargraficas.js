
$(document).ready(function() {
      var refreshId =  setInterval( function(){
    $('#feedback-bg-info').load('admin.php');//actualizas el div
   }, 1000 );
});
