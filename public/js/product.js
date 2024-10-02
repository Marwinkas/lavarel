
function handle(e){
    let input1 = document.getElementById('amount').value;
    console.log(input1);
    let input2 = document.getElementById('cost').innerHTML;
    console.log(input2.substr(0,input2.length-5));
    let cost = input1 * input2.substr(0,input2.length-5);

    if(cost > 1000000){
        cost = cost / 1000000;
        document.getElementById('countview').innerHTML = cost +" млн. руб.";
    }
    else if(cost > 1000){
        cost = cost / 1000;
        document.getElementById('countview').innerHTML = cost +" тыс. руб.";
    }
    else document.getElementById('countview').innerHTML = cost +" руб.";
  }