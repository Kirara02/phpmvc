$(function(){
    $('.tampilModalUbah').on('click', function(){
        $('#formModalLabel').html('Edit Data Waifu');
        $('.modal-footer button[type=submit]').html('Ubah Data');

        const id = $(this).data('id');

        $.ajax({
            url : 'http://localhost/phpmvc/public/waifu/getUbah',
             data : {id : id},
             method : 'post',
             dataType : 'json',
             success : function(data){
                $('#anime').val(data.anime);
                $('#nama').val(data.nama);
                $('#umur').val(data.umur);
                $('#status').val(data.status);
             }
        });
    });
});