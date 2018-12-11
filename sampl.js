<script src="//code.jquery.com/jquery-1.11.2.min.js"></script
<script>
$(function(){

//fisrt I store in 2 var the reference of two <select>

var $cat = $("#category1"),
$subcat = $("#category2");

//this is the same thing if you write in your HTML onChange="" in first <select>

$cat.on("change",function(){

//store the value of first select every time it change
var _rel = $(this).val();

//clean the second select (value and option active) to prevent bad link (cat1 with subcat of cat2)
$subcat.find("option").attr("style","");
$subcat.val("");

//if no option is selected i disable the second select
if(!_rel) return $subcat.prop("disabled",true);

//if a option si selected i show the option linked by rel attr
$subcat.find("[rel="+_rel+"]").show();
$subcat.prop("disabled",false);
});

});
</script>