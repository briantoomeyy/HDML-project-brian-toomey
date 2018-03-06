/* global $ */

function calcSub(){
    
    var argSubTotal;
    
    if(document.getElementById('Virtual Office').checked) {
      argSubTotal = 100;
    }
   if(document.getElementById('Cloud Storage').checked) {
      argSubTotal = 300;
    }
        if(document.getElementById('App Engine').checked) {
      argSubTotal = 50;
    }
    
    display(argSubTotal);
}

function display(parm1){
  
  document.getElementById("subtotal").value = parm1;
  document.getElementById("total").value = parm1;
        
  enablebtnProceed();
}


function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed() {
    $('#btnProceed').prop('disabled', true);
}