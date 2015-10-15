$(document).ready(function() {
    alert( 'The DOM has finished loading!' );
});


$(document).ready(function() {
    var contents = $('#FirstBar');
    alert(contents.html());
});

$(document).ready(function() {
    var contents = $('#SecondBar');
    alert(contents.html());
});