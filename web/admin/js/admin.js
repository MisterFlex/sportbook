$(document).ready(function(){

    tinymce.init({
        selector: '.tynimce',
        menubar: 'file edit insert view format table tools',
        min_height: 150,
        resize: true,
        toolbar: [
            'undo redo | styleselect | bold italic | link image'
        ],
        automatic_uploads: true,
        file_browser_callback_types: 'image'
    });


});