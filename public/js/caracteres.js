(function(win,doc){
    'use strict';

    let msg=doc.querySelector('#msg');
    msg.addEventListener('keyup',(event)=>{
        let sub=event.target.maxLength - event.target.textLength;
        doc.querySelector('.result').innerHTML=`Caracteres restantes: ${sub}`;
    },false);

})(window,document);