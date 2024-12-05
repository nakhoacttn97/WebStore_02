<form name="frm" enctype="multipart/form-data" method="post">
    <input type="file" name="f">
    <button>Upload</button>
</form>
<div id="rs"></div>
<script>
$(frm).submit(function(ev){
    ev.preventDefault();
    let f = this['f'].files[0];
    var fd = new FormData();
    fd.append('f', f);
    $.ajax({
        url: '/upload/doUpload',
        method: 'post',
        data: fd,
        processData: false,
        contentType: false, 
        success: (d) => {
            $(rs).append(`<img src="/img/${d}" >`);
        }
    });
});
</script>