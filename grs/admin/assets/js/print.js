 function PrintComplaint() 
 {    
    var print = document.getElementById("content");
    var popupWin = window.open('', '_blank', 'width=900,height=900');
    popupWin.document.open();
    popupWin.document.write('<html><body onload="window.print()">' + print.innerHTML + '</html>');
    popupWin.document.close();
}

//function PrintComplaint() 
//{
//    Window.print();
//}