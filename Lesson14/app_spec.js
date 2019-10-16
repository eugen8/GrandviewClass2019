

  beforeEach(function(done) {
    setTimeout(function() {
      value = 0;
      done();
    }, 10);
  });

//suite
describe('Testing App.js for math operations', function(){

  it(" should return sum of numbers when I pass two integers", function(){
    var a=4; 
    var b=6;
    var result = addTwoNumbers(a,b);
    expect(result).toBe(a+b);
    expect(result).not.toBe(0);
  });



  it('My getResponseFromMailchimp should call AjaxCaller', function(){
    spyOn(AjaxCaller, 'invokeHttp');
    getResponseFromMailchimp('list_api');
    expect(AjaxCaller.invokeHttp).toHaveBeenCalled();
    expect(AjaxCaller.invokeHttp).toHaveBeenCalledWith('list_api', jasmine.any(Function));

  });

  it("should support async execution of test preparation and expectations", function(done) {
    value++;
    expect(value).toBeGreaterThan(0);
    done();
  });



  it('My getResponseFromMailchip will set the innerHTML of div', function(done){
    console.log('test with callback started');
    var dummyElement = document.createElement('div');
    document.getElementById = jasmine.createSpy('HTML Element').and.returnValue(dummyElement);
    spyOn(AjaxCaller, 'invokeHttp').and.callFake(function(arg1, callbackArg){

        setTimeout(function(){
          console.log('calling callback now')
          callbackArg('200');
          expect(dummyElement.innerHTML).toBe('MailChimp says: 200');
          done();
        },100);
    });
    console.log('test with: run getResponse...');
    getResponseFromMailchimp('list_api');
      

  });

  

});

  


describe("A suite", function() {
  it("contains spec with an expectation", function() {
    expect(true).toBe(true);
  });
});

