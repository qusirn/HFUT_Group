console.log('change');
$("[data-tab='first']").on('click', function() {
    con.tab1();
});
$("[data-tab='second']").on('click', function() {
    con.tab2();
});
$("[data-tab='third']").on('click', function() {
    con.tab3();
});
$("[data-tab='fourth']").on('click', function() {
    con.tab4();
});
