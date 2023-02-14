function changeMenu(value){
    switch(value){
        case '0': 
            $('.machine').css("display","block");
            $('.product').css("display","none");
            $('.representative-product-background').css("visibility","hidden");
            $('.representative-machine-background').css("visibility","visible");
            break;    
    
        case '1':
            $('.machine').css("display","none");
            $('.product').css("display","block");
            $('.representative-product-background').css("visibility","visible");
            $('.representative-machine-background').css("visibility","hidden");
            break;
    }
};
