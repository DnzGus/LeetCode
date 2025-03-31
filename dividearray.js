var divideArray = function(nums) {
 var pairs = {}
 nums.forEach(element => {
  if(!pairs[element]){
  pairs[element] = 1;
  }else{
   pairs[element] += 1;
  }
 });
 arr = Object.values(pairs);
 for(var num of arr) {
  if(num % 2 !== 0){
   return false;
  }
 }
  return true;
};

divideArray([3,2,3,2,2,2,3]);