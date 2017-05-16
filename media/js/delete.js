$('.row.blog-full-width.no-margin.xs-no-padding').on('click','a#delButton',function(e){
    e.preventDefault();
    var id = $(this).attr('href');
    console.log(id);
    var th = $(this);
    $.ajax({
        url  : 'index.php?ctl=menu&act=del&id='+id,
        type : "get",
        success :  function(){
            th.parent().parent().remove();
        }
    })
})