<script>
$(function() {
		$( "#pathacc" ).accordion({collapsible: true,autoHeight: false,active: false });
	});
$(document).ready(function() {

$("#path").click(function() {
     var router2=$('#router2').val();
     var router1=$('#router1').val();
     var arr1 = router1.split("_");
     var arr2 = router2.split("_");
     if(arr1[0] != arr2[0])
	alert("Path not possible");
	else if(router1 == router2)
	alert("Path not possible");
else
{
$.post("viewajax.php",{router1:router1,router2:router2},function(data){
				if(data.length>0)
				{
					
					$(".box1").html(data);
					
				}
				else{
					$(".box1").html("");
				}
			});

}	
   });
});
</script>
<div id = 'pathacc'>
<h3><a href="#">Find Path</a></h3>

<div>
<b>Select Routers to find path</b><br>
<select id="router1">
  <option value="ce1_1">CE1_1</option>
  <option value="ce1_2">CE1_2</option>
  <option value="ce1_3">CE1_3</option>
  <option value="ce2_1">CE2_1</option>
  <option value="ce2_2">CE2_2</option>
</select>
<select id="router2">
  <option value="ce1_1">CE1_1</option>
  <option value="ce1_2">CE1_2</option>
  <option value="ce1_3">CE1_3</option>
  <option value="ce2_1">CE2_1</option>
  <option value="ce2_2">CE2_2</option>
</select>
<input type="button" id="path" value="Submit" />
</div>
</div>
