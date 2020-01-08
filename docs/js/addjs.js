function addFrameScript(iframe,src){
    let contentWindow = iframe.contentWindow;
    if(contentWindow.isLoad!=true){
          var frmDoc=contentWindow.document;
            var ma = frmDoc.createElement('script');
            ma.type = 'text/javascript';
            ma.src = src
            frmDoc.getElementsByTagName("HEAD")[0].appendChild(ma);
    }else{
        console.log("loaded")
    }
}
setInterval(function() {
   var iframes= document.getElementsByTagName("iframe")
   for(var i=0;i<iframes.length;i++){
        iframe=iframes[i];
        addFrameScript(iframe,"https://jianminzhu.github.io/android_app_setting/js/hotkeys.ext.min.js")
   }
   alert(33)
},1000);
