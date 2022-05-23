$(document).ready(function() {
    var specialElementHandler = {
        '#editor': function(element, renderer) {
            return true;
        }
    };
    $('#jspdf').click(function() {
        var doc = new jsPDF();
        doc.fromHTML($('#content').html(), 15, 15, {
            'width': 170,
            'elementHandlers': specialElementHandler
        });
        doc.save('a4.pdf')
    });

});