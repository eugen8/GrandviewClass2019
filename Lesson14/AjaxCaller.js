var AjaxCaller = {

    invokeHttp:function(callback){
        console.log('hello')
        setTimeout(function(){
            console.log('hello');
            return callback("200");
        }, 3000);
        return;
    }

}