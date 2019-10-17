var addTwoNumbers = require('../app.js')['addTwoNumbers'];

describe('Testing App.js for math operations', function(){

    it(" should return sum of numbers when I pass two integers", function(){
      var a=4; 
      var b=6;
      var result = addTwoNumbers(a,b);
      expect(result).toBe(a+b);
      expect(result).not.toBe(0);
    });
  
});