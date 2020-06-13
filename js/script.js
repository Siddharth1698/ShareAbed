let btnAdd = document.querySelector("#add");
let btnSubtract = document.querySelector("#subtract");
let input = document.querySelector("input");



btnAdd.addEventListener('click',()=>{

input.value=parseInt(input.value) +  1  ;

});

btnSubtract.addEventListener('click',()=>{

    if (input.value>0){
    
    input.value=parseInt(input.value) - 1;

    }
    else{

        input.value=parseInt(input.value)=0;
    }



});

function myFunction(){
    var txt;
    if(confirm("Thanks for your donation.Medical authority will contact you soo")){

        txt="Thankyou";

    }
    else{
        txt="we appritiate that you are thinking to donate"
    }
    document.getElementById("addbed").innerHTML=txt;

}

function myFunction1(){
    var txt;
    if(confirm("Thanks for your donation.Medical authority will contact you soo")){

        txt="Thankyou";

    }
    else{
        txt="we appritiate that you are thinking to donate"
    }
    document.getElementById("addroom").innerHTML=txt;

}
