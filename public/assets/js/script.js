$(function(){
	$('input[name=location]').keyup(function(){
		if($(this).val().length > 1){
			$.ajax({
				url: '/api/place/search',
				method: 'GET',
				data: {"place":$(this).val()},
				dataType: 'json',
				success: function(data){
					$('#suggestion').attr('hidden',false);
					console.log(Object.keys(data).length);
					if(Object.keys(data).length > 0) {
						var i, suggest='';
						for(i of data) {
							suggest += "&emsp;<span class=\"suggested suggested-1\">"+ i +"</span>";
						}
						$('span.here').html(suggest);
					}
					else {
						console.log('No match found');
						$('#suggestion').html('No match found');
					}
				}
			});
		}
		else {
			$('#suggestion').attr('hidden',true);
		}
	});

	$('#suggestion').on('click', 'span.suggested', function(){
		$('input[name=location]').val($(this).text());
		$('form[name=city]').trigger('submit');
	})

	$('form[name=city]').submit(function(e){
		e.preventDefault();
		
		$.ajax({
			url: '/api/place/venue',
			method: 'GET',
			data: {'place': $('input[name=location]').val()},
			dataType: 'json',
			success: function(data){
				$('html,body').animate({scrollTop: $('section#last').offset().top});
				var x;
				boxTemplate = '';

				$('h1#city-name').text(data.response.geocode.displayString);

				$.each(data.response.groups[0].items, function(i, val){
					item = val.venue;
					pallet = Math.floor(Math.random() * 5) + 1;
					boxTemplate += `
					<div class="col-sm-4">
	                  <div class="card pallet-`+ pallet +`">
	                     <div class="card-body">
	                        <p>
	                           <img src="`+item.categories[0].icon.prefix+`32.png">
	                           <span id="venue-category">`+item.categories[0].name+`</span>
	                        </p>
	                        <h2>`+item.name+`</h2>
	                        <p>Address:<br/>
	                        <span id="address-1">`+item.location.formattedAddress[0]+`</span><br/>
	                        <span id="address-2">`+item.location.formattedAddress[1]+`</span><br/>
	                        <span id="address-3">`+item.location.formattedAddress[2]+`</span><br/>
	                        <span id="address-4">`+item.location.formattedAddress[3]+`</span>
	                        </p>
	                     </div>
	                  </div>
	               </div>`;
				});
				$('#boxes').html(boxTemplate);
			}
		});

		$.ajax({
			url: '/api/place/weather',
			method: 'GET',
			data: {'place': $('input[name=location]').val()},
			dataType: 'json',
			success: function(data){
				console.log(data);
				temp = Math.round((data.main.temp - 273.15) * 100) / 100;
				$('p#weather #weather-main').text(data.weather[0].main);
				$('p#weather img').attr('src','http://openweathermap.org/img/wn/'+data.weather[0].icon+'.png');
				$('p#weather #weather-temp').text(temp+"°C");
			}
		});

		$('html,body').animate({scrollTop: $('section#last').offset().top});
		$('section#last').attr('hidden',false);
	});
});