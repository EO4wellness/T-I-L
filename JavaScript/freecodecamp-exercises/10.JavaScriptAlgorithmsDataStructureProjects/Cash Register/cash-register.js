function checkCashRegister(price, cash, cid) {
  var change = [];
  var output = {
    status : '',
    change : []
  }
  
  function sumAllChanges(arr){
    var sum = 0;
    for(let i=0 ; i< arr.length;i++){
      sum += arr[i][1];
    }
    return sum;
  }
 
  var changeDue = cash - price;
  var cashierBalance = sumAllChanges(cid);  
 
  if(cashierBalance - changeDue == 0){
    output.status = 'CLOSED'
    output.change = cid;
    return output;
    }
    else if (cashierBalance - changeDue < 0){
      output.status = 'INSUFFICIENT_FUNDS';
      return output;
    }
    else {
        var currArr = [[100, 0],[20, 0],[10, 0],[5, 0],[1, 0],[0.25, 0],[0.1, 0],[0.05, 0],[0.01,0]];
        let j = 0;
        while(changeDue && j < currArr.length){
          let changeCalculated = parseInt((changeDue*100)/(currArr[j][0]*100));
          let changeAvailable = parseInt((cid[currArr.length-1-j][1]*100)/(currArr[j][0]*100));
          currArr[j][1] = Math.min(changeAvailable,changeCalculated);
          changeDue -= currArr[j][0] * currArr[j][1];
          changeDue = changeDue.toFixed(2);
          if(currArr[j][1]) {
            let temp=[];
            temp[0] = cid[currArr.length-1-j][0];
            temp[1] = currArr[j][1]*currArr[j][0];
            output.change.push(temp);
          }
          j++;
        }
        if(sumAllChanges(output.change) < changeDue){
          output.status = 'INSUFFICIENT_FUNDS';
          output.change = [];
        } else output.status = 'OPEN';
 
        return output;
    }
}
 
checkCashRegister(19.5, 20, [["PENNY", 1.01], ["NICKEL", 2.05], ["DIME", 3.1], ["QUARTER", 4.25], ["ONE", 90], ["FIVE", 55], ["TEN", 20], ["TWENTY", 60], ["ONE HUNDRED", 100]]);