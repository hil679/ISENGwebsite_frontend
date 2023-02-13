function changeMenu(value){
    switch(value){
        case '0': 
            $('.machine').css("display","block");
            $('.product').css("display","none");
            break;    
    
        case '1':
            $('.machine').css("display","none");
            $('.product').css("display","block");
            break;
    }
};
