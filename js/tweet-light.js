function getSelectionText() {
    var text = "";
    if (window.getSelection) {
        text = window.getSelection().toString();
    } else if (document.selection && document.selection.type != "Control") {
        text = document.selection.createRange().text;
    }
    return text;
}
$(document).ready(function (){
   $('p').mouseup(function (e){
       if (getSelectionText() != ""){
           window.open( "http://twitter.com/share?text=" + getSelectionText() + "&via=denzildoyle&hashtags=goodcode", 'twitter-share', 'width=550,height=235');
             return false;
       }
      //TO DO: If the number of chars crosses 140 dont show twitter
   })
})