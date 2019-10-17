var AjaxCaller = {

    invokeHttp:function(api_id, callback){
        console.log('Calling api_id='+api_id)
        setTimeout(function(){
            console.log('Returned from api_id='+api_id);
            return callback("200");
        }, 3000);
        return;
    }

}