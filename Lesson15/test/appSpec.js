
describe('Testing App.js for math operations', function(){

    it(" should return sum of numbers when I pass two integers", function(){
      var a=4; 
      var b=6;
      var result = addTwoNumbers(a,b);
      expect(result).toBe(a+b);
      expect(result).not.toBe(0);
    });
  
});



describe('Rolling Dice ', function(){
  it('Should give a number between 1 and 6', function(){
    var result = rollDice();

    expect(result).not.toBe(null);
    expect(result>0).toBe(true);
    expect(result<7).toBe(true);
    


  });

  
  it('Should give different numbers if ran multiple times', function(){
    var result;
    var arrayOfNumbers = [0,0,0,0,0,0];
    for(var i = 0; i<100; i++){
      result = rollDice();
      arrayOfNumbers[result-1]=1;
    }
   
    expect(arrayOfNumbers.toString()).toBe('1,1,1,1,1,1')

  });



});