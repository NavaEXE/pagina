//Genera las previsualizaciones
function createPreview(file) {
    var imgCodified = URL.createObjectURL(file);
    var img = $('<div class="col-xl-12"><div class="image-container"> <figure> <img src="' + imgCodified + '" alt="Foto del usuario"> <figcaption> <i class="icon-cross"></i> </figcaption> </figure> </div></div>');
    $(img).insertBefore("#add-photo-container");
    $('#add-photo-container').css('display', 'none');
}