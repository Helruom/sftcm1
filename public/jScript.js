(function(win,doc){
    'use strict';
    function confirmDelete(event){
        event.preventDefault();
        let token=doc.getElementsByName("_token")[0].value;
        if(confirm("Deseja Excluir?")){
            let ajax=new XMLHttpRequest();
            ajax.open("DELTE", event.target.parentNode.href);
            ajax.setRequestHeader('X-CSRF-TOKEN',token);
            ajax.onreadystatechange==function(){
                if(ajax.readyState === 4 && ajax.status === 200){
                    win.location.href="mercadorias";
                }
            }
        }else{
            return false;
        }
    }
    if(doc.querySelector('.jsDelete')){
        let btn=doc.querySelectorAll('.jsDelete');
        for(let i=0; i<btn.length; i++){
            btn[i].addEventListener('click',confirmDelete,false);
        }
    }
}
)(window,document);