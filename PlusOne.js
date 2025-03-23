var plusOne = function(digits, i = digits.length-1) {
if(i == 0 && digits[i] > 8){
  digits[i] = 0;
  digits.unshift(1);
  return digits
  }
else if(i == 0 && digits[i] < 9){
  digits[i] += 1;
  return digits
  }

if(digits[i] < 9){
  digits[i] += 1;
  return digits
}else{
 digits[i] = 0;
 return plusOne(digits, i - 1);
}
}

console.log(plusOne([9,9]))