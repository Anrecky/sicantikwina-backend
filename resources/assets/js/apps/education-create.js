/**
 * ===================================
 *    Blog Description Editor
 * ===================================
*/
var quill = new Quill('#blog-description', {
    modules: {
        toolbar: [
            ['bold', 'italic', 'underline', 'strike'],
            ['blockquote', 'code-block'],

            [{ 'header': 1 }, { 'header': 2 }],
            [{ 'list': 'ordered' }, { 'list': 'bullet' }],
            [{ 'script': 'sub' }, { 'script': 'super' }],
            [{ 'indent': '-1' }, { 'indent': '+1' }],
            [{ 'direction': 'rtl' }],

            [{ 'size': ['small', false, 'large', 'huge'] }],
            [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

            [{ 'color': [] }, { 'background': [] }],
            [{ 'font': [] }],
            [{ 'align': [] }],

            ['clean']
            [{ header: [1, 2, false] }],
            ['image', 'code-block']
        ]
    },
    placeholder: 'Tulis konten edukasi ...',
    theme: 'snow'  // or 'bubble'
});
quill.on('text-change', function (delta, oldDelta, source) {
    document.getElementById("post-content").value = quill.root.innerHTML;
});

FilePond.registerPlugin(

    FilePondPluginFileValidateSize,
    // FilePondPluginImageEdit
    FilePondPluginFileValidateType,
    FilePondPluginImageExifOrientation,
    FilePondPluginImagePreview,
    FilePondPluginImageCrop,
    FilePondPluginImageResize,
    FilePondPluginImageTransform,
);


window.singleFile = FilePond.create(
    document.querySelector('.filepond'),
    {
        labelIdle: 'Tarik & Letakkan file gambar anda atau <span class="filepond--label-action"> Telusuri </span>',
        imagePreviewHeight: 170,
        imageCropAspectRatio: '1:1',
        imageResizeTargetWidth: 200,
        imageResizeTargetHeight: 200,
        stylePanelLayout: 'compact',
        styleLoadIndicatorPosition: 'center bottom',
        styleProgressIndicatorPosition: 'right bottom',
        styleButtonRemoveItemPosition: 'left bottom',
        styleButtonProcessItemPosition: 'right bottom',
        storeAsFile: true,
    }
);

/**
 * =====================
 *      Blog Tags
 * =====================
*/
// The DOM element you wish to replace with Tagify
var inputTags = document.querySelector('.blog-tags');

// initialize Tagify on the above input node reference
new Tagify(inputTags)
