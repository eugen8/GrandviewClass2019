
function addTwoNumbers(x, y){
    var result = x+y;
    return result;
}


function handleMailchimpResponse(status){

   var e1 = document.getElementById("e1");
    console.log('Handling response with status:'+status);
    e1.innerHTML = "MailChimp says: "+status;
}
function getResponseFromMailchimp(api_id){
 AjaxCaller.invokeHttp(api_id, handleMailchimpResponse);
}

//a function that simmulates rolling a die
function rollDice(){
    var result = Math.floor(Math.random()*6)+1;
    return result;
}


