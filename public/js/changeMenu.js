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

function machineChangeMenu(value){
    switch(value){
        case '0': 
            $('.facility-status').css("display","block");
            $('.processing-facility').css("display","none");
            $('.measuring-facility').css("display","none");
            $('.navbar2-facility-status').css({"border-bottom": "1px solid darkblue"});
            $('.navbar2-processing-facility').css("border-bottom","0px");
            $('.navbar2-measuring-facility').css("border-bottom","0px");
            break;    
    
        case '1':
            $('.facility-status').css("display","none");
            $('.processing-facility').css("display","block");
            $('.measuring-facility').css("display","none");
            $('.navbar2-facility-status').css("border-bottom", "0px");
            $('.navbar2-processing-facility').css("border-bottom","1px solid darkblue");
            $('.navbar2-measuring-facility').css("border-bottom","0px");
            break;
        case '2':
            $('.facility-status').css("display","none");
            $('.processing-facility').css("display","none");
            $('.measuring-facility').css("display","block");
            $('.navbar2-facility-status').css("border-bottom", "0px");
            $('.navbar2-processing-facility').css("border-bottom","0px");
            $('.navbar2-measuring-facility').css("border-bottom","1px solid darkblue");
            break;    
    }
};


function changeMachineSpec(value){
    switch(value){
        case '0': 
            $('.first-machining-center').css("display","block");
            $('.second-machining-center').css("display","none");
            $('.third-machining-center').css("display","none");
            $('.forth-machining-center').css("display","none"); 

            $('.first-machine-p').addClass('select');
            $('.second-machine-p').removeClass('select');
            $('.third-machine-p').removeClass('select');
            $('.forth-machine-p').removeClass('select');                      
            break;    
        case '1':
            $('.second-machining-center').css("display","block");
            $('.first-machining-center').css("display","none");
            $('.third-machining-center').css("display","none");
            $('.forth-machining-center').css("display","none"); 

            $('.second-machine-p').addClass('select');
            $('.first-machine-p').removeClass('select');
            $('.third-machine-p').removeClass('select');
            $('.forth-machine-p').removeClass('select');    
            break;
        case '2':
            $('.third-machining-center').css("display","block");
            $('.second-machining-center').css("display","none");
            $('.first-machining-center').css("display","none");
            $('.forth-machining-center').css("display","none");

            $('.third-machine-p').addClass('select'); 
            $('.second-machine-p').removeClass('select');
            $('.first-machine-p').removeClass('select');
            $('.forth-machine-p').removeClass('select');   
            break;  
        case '3':
            $('.forth-machining-center').css("display","block");
            $('.second-machining-center').css("display","none");
            $('.third-machining-center').css("display","none");
            $('.first-machining-center').css("display","none");

            $('.forth-machine-p').addClass('select');
            $('.second-machine-p').removeClass('select');
            $('.third-machine-p').removeClass('select');
            $('.first-machine-p').removeClass('select');    
            break;   
    }
    
};

