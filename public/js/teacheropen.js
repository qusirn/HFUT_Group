$('.ui.open.modal')
  .modal('hide')
;
$('.ui.dropdown')
  .dropdown({
      transition: 'fade up'
  })
;
$('.ui.checkbox')
  .checkbox()
;
function turn() {
    $('.ui.open.modal')
      .modal('show')
    ;
}
