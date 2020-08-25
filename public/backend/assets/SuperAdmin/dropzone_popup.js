$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
Dropzone.autoDiscover = false;
// imageDataArray variable to set value in crud form
var imageDataArray = new Array;
// fileList variable to store current files index and name
var fileList = new Array;
var i = 0;
var element = $(".dropzone")[0];
uploader = new Dropzone(element,{
    url: "media",
    paramName : "files[]",
    uploadMultiple :true,
    acceptedFiles: ".jpeg,.jpg,.png,.gif,.pdf,.json",
    addRemoveLinks: false,
    forceFallback: false,
    maxFilesize: 10, // Set the maximum file size to 256 MB
    parallelUploads: 1,
});//end drop zone

uploader.on("success", function(file,response) {
    imageDataArray.push(response)
    fileList[i] = {
        "serverFileName": response,
        "fileName": file.name,
        "fileId": i
    };

    i += 1;
    $('#item_images').val(imageDataArray);
    // $('.dropzone').removeClass('dz-started');
});
