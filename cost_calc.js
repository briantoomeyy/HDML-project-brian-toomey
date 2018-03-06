/* global $ */

function calcSub(){
    
    var argSubTotal;
    
    if(document.getElementById('VirtualOffice').checked) {
      argSubTotal = 100;
    }
    
    if(document.getElementById('CloudStorage').checked) {
      argSubTotal = 300;
    }
    
    if(document.getElementById('AppEngine').checked) {
      argSubTotal = 50;
    }
    
    if(document.getElementById('AntiVirus').checked) {
      argSubTotal = 150;
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