$('#searchResult').on('keyup',function(){
    var value = $('#searchResult').val();
    console.log(value);
    $.ajax({
        url  : 'index.php?ctl=menu&act=search',
        type : "post",
        data : {
            value : value,
        },
        success :  function(response){
            // console.log(obj.data);
            $(".row.blog-full-width.no-margin.xs-no-padding").empty();
            data = jQuery.parseJSON(response);
            for (i in data){
                $(".row.blog-full-width.no-margin.xs-no-padding")
                .append(
                        '<div class="col-md-3 col-sm-6 col-xs-12 blog-listing wow fadeInUp animated"'+
                        '="300ms" style="visibility: visible; '+
                        'animation-duration: 300ms; animation-name: fadeInUp;">'
                        );
                $(".row.blog-full-width.no-margin.xs-no-padding").children().last()
                .append(
                    '<div class="blog-image"><a href=""><img src="./media/img/upload/'+
                    data[i].photo+'" alt="'+data[i].name+'"></a></div>'+
                    '<div class="blog-details">'+
                            '<div class="blog-date">'+
                                '<a href="">'+data[i].name+'</a> |'+data[i].cost+
                            '</div>'+
                            '<div class="blog-title">'+
                                '<a href="">'+data[i].name+'</a>'+
                            '</div>');
                if (data[i].user=="admin")
                $(".row.blog-full-width.no-margin.xs-no-padding").children().last().children().last()
                .append(
                    '<a href="index.php?ctl=menu&act=edit&id='+data[i].id+'" style = " width: 50%;  " class="contact submit btn btn-primary btn-xl space-margin">Edit</a>'+
                    '<a href="'+data[i].id+'" class="contact submit btn btn-primary btn-xl space-margin" id="delButton" style="float:right; margin-right: 0px;">Del</a>');
                else
                $(".row.blog-full-width.no-margin.xs-no-padding").children().last().children().last()
                .append(
                    '<a href="" style = " width: 50%;  " class="contact submit btn btn-primary btn-xl space-margin">Detail</a>'+
                    '<a href="" class="contact submit btn btn-primary btn-xl space-margin" id="delButton" style="float:right; margin-right: 0px;">Order</a>');
            }
            console.log(data[i]);
        }
    })
})