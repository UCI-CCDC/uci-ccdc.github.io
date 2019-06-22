//Micah Raney Copyright 2018
//Not to be used without permission
function autoflow(){

    var i, run = 0;
    var x = document.getElementsByClassName("autoflow");
    var min;
    for(run = 0; true; run++){
      min = 0;
      for (i = 0; i < x.length; i++) {
        if(x[i].getAttribute("autoflowid") == run)
          x[i].style.height = "auto";
      }

      for (i = 0; i < x.length; i++) {
        if(x[i].getAttribute("autoflowid") == run)
         if(x[i].scrollHeight > min)
           min = x[i].scrollHeight;
      }
      for (i = 0; i < x.length; i++) {
        if(x[i].getAttribute("autoflowid") == run)
         x[i].style.height = min + "px";
      }
      if(min == 0)
        break;
    }
}
window.onresize = autoflow;
