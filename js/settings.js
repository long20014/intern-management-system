/**
 * Created by Phuc on 12/07/2017.
 */
var cur_id=null; //store patient id on tr click
/*---------Nav Tabs Dropdown (mobile tabs)-------*/
$('.nav-tabs-dropdown').each(function(i, elm) {
    $(elm).html(
        $(elm)
            .next('ul')
            .find('li.active a')
            .html()
    );
});

$('.nav-tabs-dropdown').on('click', function(e) {
    e.preventDefault();
    $(e.target).toggleClass('open').next('ul').slideToggle();
});
/*------------End Nav Tabs Dropdown-------------*/

$('#nav-tabs-wrapper a[data-toggle="tab"]').on('click', function(e) {
    e.preventDefault();
    $(e.target).closest('ul').hide().prev('a').removeClass('open').html($(this).html());
});

/*-------Popover------*/
function enablePopover(){
    //----Enable popover----
    $('tbody > tr').popover({
        trigger:'click',
        placement:'auto bottom',
        html:true,
        content:$('#btnMenu').html(),
    });
    //----Click outside close popover----
    $(document).click(function (e) {
        $('[data-toggle="popover"],[data-original-title]').each(function () {
            //the 'is' for buttons that trigger popups
            //the 'has' for icons within a button that triggers a popup
            if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                (($(this).popover('hide').data('bs.popover')||{}).inState||{}).click = false  // fix for BS 3.3.6
            }

        });
    });
    //----Enable Action on control button----
    $('tbody > tr').click(function(e){
        /*--Get cur_id--*/
        cur_id = $(this).children("td:first-child").text();

        /*---Set Popover left Position---*/
        var left = $(this).offset().left;
        $('.popover').offset({
            left:	e.pageX - $('.popover').width()/2.0
        })

        /*--Control button actions--*/
        $('.btnView').click(function(){
            alert('fire AJAX with cur_id: '+ cur_id);
        });

        $('.btnEdit').click(function(){
            //await implementation
            selectNavtabs("tab-4");

        });

        $('.btnDelete').click(function(){
            //await implementation
        });

    });
}
$(document).ready(enablePopover());