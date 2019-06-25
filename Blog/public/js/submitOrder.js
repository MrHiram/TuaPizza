var ingredientList = [];
var drinksList = [];
var directionList = [];
function collectInfo() {
    let selectedIngredients = $('#ingredientSelector > ul > li > button.selected');
    selectedIngredients.map(function(index){ingredientList.push(selectedIngredients[index].id);});
    if($('#inputGroupSelect03').val()!=0){
        drinksList.push($('#inputGroupSelect01').val());
        drinksList.push($('#inputGroupSelect02').val());
        drinksList.push($('#inputGroupSelect03').val());
    }
    directionList.push($('#district').val());
    directionList.push($('#street').val());
    directionList.push($('#home').val());
    directionList.push($('#phone').val());
}
function sendInfo(){
    if($('#district').val()!=''&&$('#street').val()!=''&&$('#home').val()!=''&&$('#phone').val()!=''){
        collectInfo();
        $.ajaxSetup({
            headers: {    
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')    
            }    
        });
        $.ajax({
            url:"/submitOrder",
            dataType: 'json', 
            data: {ingredientList:ingredientList, drinksList:drinksList, directionList:directionList},
            type:'POST',
            success:function(data){
                console.log(data);
                if(data.success){
                    deliveryApproved();
                }
            }

        });
    }else{
        lastStep();
        $('#emptyError').css('display', 'block');
    }
}