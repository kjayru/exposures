$(".btn-abrirpopup").click(function (e) {
    e.preventDefault();
    $("#imageBanner").html("");
    CKFinder.popup({
        chooseFiles: true,
        onInit: function (finder) {
            finder.on('files:choose', function (evt) {

                var file = evt.data.files.first();


                var folder = file.get('folder');
                var folderName1 = folder.get('name');
                var parentFolder1 = folder.get('parent');
                if (parentFolder1 != null) {
                    var folderName2 = parentFolder1.get('name');
                    var parentFolder2 = parentFolder1.get('parent');
                }
                if (parentFolder2 != null) {
                    var folderName3 = parentFolder2.get('name');
                    var parentFolder3 = parentFolder2.get('parent');
                }

                var pathfile = null;

                if (parentFolder3 == null) {
                    pathfile = folderName3 + '/' + folderName2 + '/' + folderName1 + '/' + file.get('name');
                }
                if (parentFolder2 == null) {
                    pathfile = folderName2 + '/' + folderName1 + '/' + file.get('name');
                }
                if (parentFolder1 == null) {
                    pathfile = folderName1 + '/' + file.get('name');
                }
                if (folder == null) {
                    pathfile = file.get('name');
                }

                document.getElementById('imageBanner').value = pathfile;

                $("#urlbanner").attr("src", hostedUrl + "/" + pathfile);

            });

        }
    });
});



$(".btn-prodsingle").click(function (e) {
    e.preventDefault();
    $("#producto").html("");
    CKFinder.popup({
        chooseFiles: true,
        onInit: function (finder) {
            finder.on('files:choose', function (evt) {

                var file = evt.data.files.first();


                var folder = file.get('folder');
                var folderName1 = folder.get('name');
                var parentFolder1 = folder.get('parent');
                if (parentFolder1 != null) {
                    var folderName2 = parentFolder1.get('name');
                    var parentFolder2 = parentFolder1.get('parent');
                }
                if (parentFolder2 != null) {
                    var folderName3 = parentFolder2.get('name');
                    var parentFolder3 = parentFolder2.get('parent');
                }

                var pathfile = null;

                if (parentFolder3 == null) {
                    pathfile = folderName3 + '/' + folderName2 + '/' + folderName1 + '/' + file.get('name');
                }
                if (parentFolder2 == null) {
                    pathfile = folderName2 + '/' + folderName1 + '/' + file.get('name');
                }
                if (parentFolder1 == null) {
                    pathfile = folderName1 + '/' + file.get('name');
                }
                if (folder == null) {
                    pathfile = file.get('name');
                }

                document.getElementById('producto').value = pathfile;

                $("#urlproducto").attr("src", hostedUrl + "/" + pathfile);

            });

        }
    });
});



$(".btn-object-delete").on('click',function(){
    let id = $(this).data("id");
    console.log(id);
    $("input[name='id']").val(id);
});




$(".btn-galeria").click(function (e) {
    e.preventDefault();
    $("#galeria").html("");
    CKFinder.popup({
        chooseFiles: true,
        onInit: function (finder) {
            finder.on('files:choose', function (evt) {

                var file = evt.data.files.first();


                var folder = file.get('folder');
                var folderName1 = folder.get('name');
                var parentFolder1 = folder.get('parent');
                if (parentFolder1 != null) {
                    var folderName2 = parentFolder1.get('name');
                    var parentFolder2 = parentFolder1.get('parent');
                }
                if (parentFolder2 != null) {
                    var folderName3 = parentFolder2.get('name');
                    var parentFolder3 = parentFolder2.get('parent');
                }

                var pathfile = null;

                if (parentFolder3 == null) {
                    pathfile = folderName3 + '/' + folderName2 + '/' + folderName1 + '/' + file.get('name');
                }
                if (parentFolder2 == null) {
                    pathfile = folderName2 + '/' + folderName1 + '/' + file.get('name');
                }
                if (parentFolder1 == null) {
                    pathfile = folderName1 + '/' + file.get('name');
                }
                if (folder == null) {
                    pathfile = file.get('name');
                }

               // document.getElementById('gallery').value = pathfile;

                var urlimg =  hostedUrl + "/" + pathfile;

                let iden = $(".galeriainput").length;
                $("#galleryinput").append(`<input type="hidden" name="gimagen[]" class="galeriainput" id="idgal${iden+1}" value="${urlimg}">`);
                $(".galeria").append(`<picture class="galeria__picture"><a href="#" data-key="${iden+1}" class="galeria__btnactive btn-sm btn-danger">X</a><img src="${hostedUrl}/${pathfile}" class="img-fluid galeria__imagen"></picture>`);

            });

        }
    });
});


$(document).on("click",".galeria__btnactive",function(e){
    e.preventDefault();
    let id = $(this).data('key');
    let cadena = "#idgal"+id;
    $(cadena).remove();
    $(this).parent().remove();

});
