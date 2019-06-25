var pizzaCost = 10;
var step = 1;
var drinkSelected = 0;
var sizeCost = 4;
var number = 1;
var drinksCost = 4;
var totalCost = 14;
$('document').ready(function(){
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
});
function nextStep() {
    if(step!=4){
        step++;
    }
    switch (step) {
        case 2:
            $('#pizzaPreview').css('display', 'none');
            $('#ingredientSelector').css('display', 'none');
            $('#btn-back').css('display', 'inline-block');
            $('#drinkSelector').css('display', 'flex');
            $('.step-indicator').children('span').text('Envio');
            break;
        case 3:
            $('#drinkSelector').css('display', 'none');
            $('#deliveryForm').css('display', 'block');
            $('.step-indicator').children('span').text('Pagar');
            break;
        case 4:
            $('#deliveryForm').css('display', 'none');
            $('#paymentForm').css('display', 'flex');
            $('#btn-forward').css('display', 'none');
            $('.step-indicator').children('span').text('Comer');    
            break;
    }
}
function lastStep() {
    if(step!=1){
        step--;
    }
    switch (step) {
        case 1:
            $('#pizzaPreview').css('display', 'block');
            $('#ingredientSelector').css('display', 'block');
            $('#btn-back').css('display', 'none');
            $('#drinkSelector').css('display', 'none');
            $('.step-indicator').children('span').text('Bebidas');
            break;
        case 2:
            $('#deliveryForm').css('display', 'none');
            $('#drinkSelector').css('display', 'flex');
            $('.step-indicator').children('span').text('Envio');
            break;
        case 3:
            $('#paymentForm').css('display', 'none');
            $('#deliveryForm').css('display', 'block');
            $('#btn-forward').css('display', 'inline-block');
            $('.step-indicator').children('span').text('Pagar');
            break;
        case 4:
            $('#deliveryForm').css('display', 'none');
            $('#finalStep').css('display', 'block');
            $('.step-indicator').children('span').text('Gracias');
        break;
    }
}
function deliveryApproved() {
    $('#paymentForm').css('display', 'none');
    $('#button-nav').removeClass('d-flex');
    $('#button-nav').addClass('d-none');
    $('#delivery').css('display', 'block');
}
function addIngredient(element){
    if($('img#'+element.id).css('display') != 'flex'){
        $('img#'+element.id).css('display', 'flex');
        $('button#'+element.id).addClass('selected');
        var value = parseInt(element.value);
        calcPizzaValue(value);
    }else{
        $('img#'+element.id).css('display', 'none');
        $('button#'+element.id).removeClass('selected');
        var value = parseInt(element.value);
        calcPizzaValue(-value);
    }
}
function calcPizzaValue(ammount) {
    totalCost -= pizzaCost;
    pizzaCost+=ammount;
    totalCost += pizzaCost;
    $('#pizzaValue').text('$ '+pizzaCost);
}
function changeDrink(element) {
    $('.order-2').removeClass('order-2');
    $('.order-1').removeClass('order-1');
    $('#drink-'+drinkSelected).addClass('order-2');
    $('#drink-'+element.value).addClass('order-1');
    $('.selected').removeClass('selected');
    $('.selectedBtn').removeClass('selectedBtn')
                    .attr("disabled", false);;
    $('#drink-'+element.value).children().addClass('selectedBtn')
                    .attr("disabled", true);
    $('#drink-'+element.value).children().children().addClass('selected');
    drinkSelected = element.value;
}
function changeDrinkImg(element) {
    $('#inputGroupSelect01').val(element.value).change();
}
function drinkCost(element){
    switch (element.value) {
        case '1':
            sizeCost = 4;
            break;
        case '2':
            sizeCost = 2;
            break;
        case '3':
            sizeCost = 1;
            break;
    }
    calcDrinkCost();
}
function drinkNumber(element){
    number=parseInt(element.value);
    calcDrinkCost();
}
function calcDrinkCost(){
    totalCost-=drinksCost;
    drinksCost = number*sizeCost;
    totalCost+=drinksCost;
    $('#drinksValue').text('$ '+drinksCost);            
}