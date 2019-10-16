

beforeEach(function(){
  spyOn(AjaxCaller, 'invokeHttp');
  
  



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
    getResponseFromMailchimp('list_api');
    expect(AjaxCaller.invokeHttp).toHaveBeenCalled();
    expect(AjaxCaller.invokeHttp).toHaveBeenCalledWith('list_api', jasmine.any(Function));

  });



});

  


describe("A suite", function() {
  it("contains spec with an expectation", function() {
    expect(true).toBe(true);
  });
});

