$(document).ready(function() {
    $('#formal-pics').on('click', function() {
        getPictures("formal");
    });
    $('#athletics-pics').on('click', function() {
        getPictures("athletics");
    });
    $('#philanthropy-pics').on('click', function() {
        getPictures("philanthropy");
    });
    $('#associate-pics').on('click', function() {
        getPictures("associates");
    });
});


function getPictures(event) {
  console.log("event");
  var gallery = $('#'+event);
    if (event == "") {
       console.log("event" + event + "does not exist.");
       return;
    } else {
        $.ajax({
          url: './php/findEvent.php',
          async: false,
          data: {evt: event},
          type:"POST",

          success:function(response){
            if (isValid(response)) {
              console.log("event2");
              gallery.html(response);
            }
          }

        });

    }
}
function isValid(array) {
  return array != null && typeof array !== 'undefined' && array.length > 0;
}
