$(function () {
    // Variable to store your files
    var files;
    var valFile = [];
    // Add events
    $('input[type=file]').on('change', prepareUpload);
    //$('form').on('submit', uploadFiles);
    $('.RojasG').on('click', uploadFiles);
    // Grab the files and set them to our variable
    function prepareUpload(event) {
        files = event.target.files;
        if (files[0].type != "application/vnd.openxmlformats-officedocument.wordprocessingml.document" || files[0].type != "application/msword") {
            valFile.length = 0;
        } else {
            alert("Lo sentimos el archivo debe de ser una archivo word.2 ");
            valFile.push(true);
        }

    }

    function uploadFiles(event) {
        if (files) {
            if (valFile.length == 0) {
                event.stopPropagation();
                event.preventDefault();
                var data = new FormData();
                $.each(files, function (key, value) {
                    data.append(key, value);
                });

                $.ajax({
                    url: 'actions/submit.php?files',
                    type: 'POST',
                    data: data,
                    cache: false,
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    success: function (data, textStatus, jqXHR) {
                        if (typeof data.error === 'undefined') {

                            submitForm(event, data);
                        }
                        else {

                            console.log('ERRORS: ' + data.error);
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {

                        console.log('ERRORS: ' + textStatus);

                    }
                });
            } else {
                alert("Lo sentimos el archivo debe de ser una archivo word.");
                return false;
            }
        }
        else {
            alert("seleciona un archivo");
            return false;
        }
    }

    function submitForm(event, data) {
        // Create a jQuery object from the form
        $form = $(event.target);

        // Serialize the form data
        var formData = $form.serialize();

        // You should sterilise the file names
        $.each(data.files, function (key, value) {
            formData = formData + '&filenames[]=' + value;
        });

        $.ajax({
            url: 'actions/submit.php',
            type: 'POST',
            data: formData,
            cache: false,
            dataType: 'json',
            success: function (data, textStatus, jqXHR) {
                if (typeof data.error === 'undefined') {
                    // Success so call function to process the form
                    window.location = "muestra";
                    alert('Completado');
                    console.log('SUCCESS: ' + data.formData);
                }
                else {
                    // Handle errors here
                    console.log('ERRORS: ' + data.error);
                    alert('Ocurrio un error');
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                // Handle errors here
                console.log('ERRORS: ' + textStatus);
            },
            complete: function () {
                // STOP LOADING SPINNER
            }
        });
    }
});