$(document).ready(function(){
    var max_field = 10;
    var wrapper = $("#add_input_fields");
    var add_button = $("#add_button");

    $(add_button).click(function(event){
        event.preventDefault();
        if(x < max_field){
            x++;
            $(wrapper).append('<div id="add_field"><div><button id="remove_field"><i class="fa-solid fa-minus"></i></button></div><div><input type="text" name="" placeholder="000abc"/></div><div><select name="" id=""><option value="">Choose Product Name</option></select></div><div><input type="text" name="" placeholder="Product QTY"/></div><div><input type="text" name="" placeholder="0.00"/></div><div><input type="text" name="" placeholder="Total Price"/></div></div>')
        }
    });
    $(wrapper).on("click", "#remove_field", function(event){
        event.preventDefault();
        $(this).parent('div').remove();
        x--;
    });
});