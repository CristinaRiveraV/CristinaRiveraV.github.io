  
function activeTab(){
    var  allBtns, tab ,tab_id;
    tab = document.getElementsByTagName("body");
    tab_id = tab[0].className;
    // check all buttons 
    allBtns = document.getElementsByClassName("menu_item");
    for (i = 0; i <  allBtns.length; i++) {
        if(tab_id == allBtns[i].id){
            allBtns[i].className += " active";
        }
    }
}

//activate this tab
activeTab();