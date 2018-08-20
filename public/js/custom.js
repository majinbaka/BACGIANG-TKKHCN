$(document).on("change","#exampleInputFile",function () {
    var file = $('#exampleInputFile')[0].files;
    if ($('#previewFileName').val() !== null) {
        $('#previewFileName').empty();
    }
    if (file !== null) {
        for (var i = 0; i < file.length; i++){
            $('<div class="col-xs-12"><p>No. '+(i+1)+': '+ file[i].name + '</p></div>').appendTo('#previewFileName');
        }
    }
})