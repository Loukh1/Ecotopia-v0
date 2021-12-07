function search_animal() { //search
    let input = document.getElementById('searchbar').value//tekhou valeur taa l search bar
    input=input.toLowerCase();
    let x = document.getElementsByClassName('lines');//tekhou les elements eli fil site
      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="flex";                 
        }
    }
}
