
$(function()
{
    $.get('dashboard/xhrGetListings',function(o)
    {

        for(var i=0;i<o.length;i++)
        {
            $('#listInserts').append('<div>'+o[i].text+'<a class="del" rel="'+o[i].id+'" href="#">X</a></div>');
        }
        $('.del').live('click', function ()
        {
            delItem=$(this);
            var id=$(this).attr('rel');
            alert(id);
            $.post('dashboard/xhrDeleteListing',{'id': id},function(o) {
               // $('#listInserts').append('<div>'+o.text+'<a class="del" rel="'+ o.id +'" href="#">X</a></div>');
                //alert(1);
                delItem.parent().remove();
            },'json');
            return false;
        });
    },'json');
    $('#randomInsert').submit(function()
    {
        var url=$(this).attr('action');
        var data=$(this).serialize();
        $.post(url,data,function (o) {
            alert(o.text);
            $('#listInserts').append('<div>'+o.text+'<a class="del" rel="'+ o.id +'" href="#">X</a></div>');
        },'json');
        return false;
    });

});