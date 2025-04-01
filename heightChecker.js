var heightChecker = function(heights) {
  var expected = [...heights];

//sorting the expected list(didn't want to use built in function)
  for(i = 0; i < expected.length; i++){
    for(j = 0; j < (expected.length-i-1); j++){
      if (expected[j] > expected[j + 1]) {
              var temp = expected[j]
              expected[j] = expected[j + 1]
              expected[j + 1] = temp
          }
    }
  }
  var idx = 0;
  for(let i = 0; i < expected.length; i++){
    if(expected[i] != heights[i]){
      idx += 1;
    }
  }
  return idx;
};

heightChecker([1,1,4,2,1,3])