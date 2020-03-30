	
var len=1;
$(document).ready(function(){
	display();
	$(".content-box-content").on("click",".increment",function(){
		len=len+1;
		variation='';
		variation+='<tr>\
						<td>\
							<select class="Color" name="var_color'+len+'">\
								<option>SELECT</option>\
								<option value="Blue">Blue</option>\
								<option value="White">White</option>\
								<option value="Purple">Purple</option>\
								<option value="violet">violet</option>\
								<option value="Brown">Brown</option>\
								<option value="Black">Black</option>\
								<option value="Green">Green</option>\
								<option value="Red">Red</option>\
								<option value="Yellow">Yellow</option>\
								<option value="pink">pink</option>\
							</select>\
						</td>\
						<td>\
							<select class="Size" name="var_size'+len+'">\
								<option>SELECT</option>\
								<option value="small">small</option>\
								<option value="Medium">Medium</option>\
								<option value="Large">Large</option>\
								<option value="Extra">Extra large</option>\
							</select>\
						</td>\
						<td>\
							<input type="text" id="large-input" name="var_price'+len+'" required/>\
						</td>\
						<td>\
							<input class="increment" type="button" value="+">\
							<input class="decrement" type="button" value="-">\
						</td>\
					</tr>';

			$("#variation table").append(variation);

			$.ajax({
				url:"new.php",
				method:"POST",
				data:{length:len}
			});
			console.log(len);
		
	});

	$(".content-box-content").on("click",".decrement",function(){
		len=len-1;
		$(this).parent().parent().remove();
		$.ajax({
			url:"new.php",
			method:"POST",
			data:{length:len}
		});
	});
	
});
	
function display(){

	variation='<p><label>Variations</label>\
			<table>\
				<tr>\
					<th>Color</th><th>Size</th><th>Price</th><th>Action</th>\
				</tr>';
				for (var i = 1; i <= len; i++) {
					variation+='<tr>\
						<td>\
							<select class="Color" name="var_color'+i+'">\
								<option>SELECT</option>\
								<option value="Blue">Blue</option>\
								<option value="White">White</option>\
								<option value="Purple">Purple</option>\
								<option value="violet">violet</option>\
								<option value="Brown">Brown</option>\
								<option value="Black">Black</option>\
								<option value="Green">Green</option>\
								<option value="Red">Red</option>\
								<option value="Yellow">Yellow</option>\
								<option value="pink">pink</option>\
							</select>\
						</td>\
						<td>\
							<select class="Size" name="var_size'+i+'">\
								<option>SELECT</option>\
								<option value="small">small</option>\
								<option value="Medium">Medium</option>\
								<option value="Large">Large</option>\
								<option value="Extra">Extra large</option>\
							</select>\
						</td>\
						<td>\
							<input type="text" id="large-input" name="var_price'+i+'" required/>\
						</td>\
						<td>\
							<input class="increment" type="button" value="+">\
						</td>\
					</tr>';

				}
		variation+='</table></p>';

		$("#variation").html(variation);
		
}

