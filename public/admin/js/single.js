$(document).ready(function(){
    var basePath = $("#base_path").val();
    //Array Of Value
    $("#employee_id").autocomplete({
        source: function(request, cb){
            $.ajax({
                URL:basePath+'get-employees/'+request.term,
                method: 'GET',
                dataType: 'json',
                success:function(res){
                    var result;
                    result = [
                        {
                            label: 'There is matching record found for '+ request.term,
                            value: ''
                        }
                    ];
                    console.log(res);

                    if(res.length){
                        result = $.map(res, function(obj){
                            return{
                                label: obj.id,
                                value:obj.id,
                                data: obj
                            };
                        });
                    }
                    cb(result);
                }
            });
        },
        select:function(e, selectedData){
            console.log(selectedData);

            if (selectedData && selectedData.item && selectedData.item.data){
                var data = selectedData.item.data;

                $('#nama').val(data.nama);
                $('#no_hp').val(data.no_hp);
            }
        }
    });
});