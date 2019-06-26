
$("#formIngredient").submit(function(event){
    event.preventDefault();
    var form_data = new FormData(this);
    console.log($('#btn_picture')[0].files.length);
    $btn_picture = $('#btn_picture')[0].files.length;
    $pizza_picture = $('#pizza_picture')[0].files.length;
    if($('#name').val()!='' && $('#price').val()!='' && $btn_picture != 0 && $pizza_picture != 0){            
        form_data.append('btn_picture', $('#btn_picture')[0].files[0]);
        form_data.append('pizza_picture', $('#pizza_picture')[0].files[0]);
        $.ajaxSetup({
            headers: {    
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')    
            }    
        });
        $.ajax({
            url: 'submitIngredient',
            type:'post',
            data:form_data,
            contentType: false,
            cache: false,
            processData:false,
            success:function(data){
                console.log(data);
                if(data.success){
                    
                }
            },
            error: function(data){
                console.log("error");
                console.log(data);
            }
        });
    }
});
