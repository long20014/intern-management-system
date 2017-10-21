/**
 * Created by Phuc on 18/07/2017.
 */
/*-------------- Library Functions -----------------*/
function updateNavtabs(){
    $('.nav-tabs-dropdown').each(function(i, elm) {
        $(elm).html(
            $(elm)
                .next('ul')
                .find('li.active a')
                .html()
        );
    });
}
function selectNavtabs(tabname){
    $('.nav-tabs a[href="#'+tabname+'"]').tab('show');
    updateNavtabs();
}