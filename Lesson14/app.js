var appjsObj;
(function(){
    function addTwoNumbers(x, y){
        var result = x+y;
       ///alert('the size of the screen is: '+window.screen.height+' by '+window.screen.width)
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
    

 appjsObj = {
        'addTwoNumbers':addTwoNumbers,
        'handleMailchimpResponse': handleMailchimpResponse,
        'getResponseFromMailchimp':getResponseFromMailchimp
    }
    })(window);



// Export node module.
if ( typeof module !== 'undefined' && module.hasOwnProperty('exports') )
{
    module.exports = {'addTwoNumbers':addTwoNumbers, 'handleMailchimpResponse':handleMailchimpResponse };
}