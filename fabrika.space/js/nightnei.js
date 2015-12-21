$(document).ready(function(){

	$('.datepicker').datepicker({
		firstDay: 1,
		dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
		monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
		monthNamesShort: ['Января', 'Февраля', 'Марта', 'Апреля', 'Мая', 'Июня', 'Июля', 'Августа', 'Сентября', 'Октября', 'Ноября', 'Декабря'],
		dateFormat: 'd M, yy',
	});

	$('.mainMenu').each(function(){
		var actItem = $(this).find('.act');
		if(!actItem){
			return;
		}

		var line = $('<div class="actLine"></div>');
		$(this).append(line);
		
		var setLineCss = function(node){
			line.css({
				width: node.css('width'),
				left: node[0].offsetLeft
			});
		};

		setLineCss(actItem);

		$(this).on('mouseenter', 'li', function(){
			setLineCss($(this));
		});

		$(this).on('mouseleave', function(){
			setLineCss(actItem);
		});
	});

	$('.slider').each(function(){
		var currentIndex = 0;
		var sliderNode = $(this);
		var length = sliderNode.find('.sliderItem').length;
		var li = $('<li></li>');
		var ul = $('<div class="sliderDotsMenu"><ul></ul><div>');

		for(var i=0; i<length; i++) {
			li.clone().appendTo(ul.find('ul'));
		}
		sliderNode.append(ul);

		var setAct = function(index){
			var item = sliderNode.find('.innerSlider .sliderItem:eq('+index+')');
			var li = sliderNode.find('.sliderDotsMenu ul li:eq('+index+')');
			
			item.addClass('act').siblings().removeClass('act');
			li.addClass('act').siblings().removeClass('act');
			sliderNode.find('.data .title').text(item.data('title'));

			// index !== 0 ? sliderNode.find('.leftArrow').addClass('act') : sliderNode.find('.leftArrow').removeClass('act');
			// index+1 !== length ? sliderNode.find('.rightArrow').addClass('act') : sliderNode.find('.rightArrow').removeClass('act');
		};
		
		setAct(currentIndex);
		
		sliderNode.on('click', '.sliderDotsMenu li', function(){
			currentIndex = $(this).index();
			setAct(currentIndex);
		});

		sliderNode.on('click', '.leftArrow, .rightArrow', function(){
			if($(this).hasClass('leftArrow')) {
				currentIndex = (currentIndex === 0) ? length-1 : --currentIndex;
			} else {
				currentIndex = (currentIndex === length-1) ? 0 : ++currentIndex;
			}
			setAct(currentIndex);
		});
	});

	$('.events').each(function(){
		var parentNode = $(this);
		var wrapper = parentNode.find('.innerListItems');
		var length = wrapper.find('.item').length;
		var slideWidth = wrapper.find('.item').width();
		var currentMarginLeft = - ( length * slideWidth - $(this).find('.listItems').width() );

		wrapper.width(length*slideWidth);

		var changePosition = function(marginLeft){
			(parseInt(marginLeft) >= 0) ? parentNode.find('.leftArrow').removeClass('act') : parentNode.find('.leftArrow').addClass('act');
			(parseInt(marginLeft) <= -(length*parseInt(slideWidth)-parseInt(parentNode.width()))) ? parentNode.find('.rightArrow').removeClass('act') : parentNode.find('.rightArrow').addClass('act');
			
			wrapper.css('margin-left', marginLeft);
		};

		changePosition(currentMarginLeft);

		parentNode.on('click', '.leftArrow, .rightArrow', function(){
			currentMarginLeft = $(this).hasClass('leftArrow') ? currentMarginLeft+slideWidth : currentMarginLeft-slideWidth
			changePosition(currentMarginLeft);
		});
	});

	$('.sandwich').on('click', function(){
		$('.mainMenu').addClass('show');
	});
	$('.closeMainMenu').on('click', function(){
		$('.mainMenu').removeClass('show');
	});

	$('.titleCategoryMenuBar').on('click', function(){
		$(this).toggleClass('act');
	});

	Date.prototype.toDateInputValue = (function() {
		var local = new Date(this);
		local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
		return local.toJSON().slice(0,10);
	});
	var dateEl = document.querySelector('.reservation .date [type="date"]');
	dateEl && (dateEl.value = new Date().toDateInputValue());


	// PAY COWORKING
	$('.btnPayCoworking').on('click', function(){
		var data = $(this).data();
		$('.popupPayCoworking').addClass('show').data('url', data.url).data('title', data.title);
	});


	$('.popupPayCoworking').on('click', '.btnCancel', function(e){
		$(e.delegateTarget).removeClass('show');
	});

	$('.popupPayCoworking').on('click', '.btnOk', function(e){
		var form = $(e.delegateTarget);
		var payload = {
			'username': 'Coworking reservation',
			'icon_url': 'https://slack.com/img/icons/app-57.png',
			'fields': []
		};

		var config = {
			title: form.data().title,
			value: ''
		};
		
		var start = form.find('[name="startDate"]').val();
		var phone3 = form.find('[name="phone3"]').val();
		var phone9 = form.find('[name="phone9"]').val();
		var name = form.find('[name="name"]').val();
		var email = form.find('[name="email"]').val();

		if( !(start && phone3 && phone9 && name && email) ) {
			alert('Пожалуйста, заполните все поля формы')
			return;
		}
		
		config.value += 'Date: ' + start + '\n';
		config.value += 'Phone: ' + '8 (' + phone3 + ') ' + phone9 + '\n';
		config.value += 'Name: ' + name + '\n';
		config.value += 'Email: ' + email + '\n';

		payload.fields.push(config);


		$.ajax({
			type: 'POST',
			//url: 'https://hooks.slack.com/services/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',
			url: 'https://hooks.slack.com/services/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',
			data: JSON.stringify(payload),
			success: function(data) {
				form.removeClass('show');
				var url = form.data().url;
				form.removeData('url');
				form.removeData('title');
				window.open(url);
			},
			error: function(){
				form.removeClass('show');
				form.removeData('url');
				form.removeData('title');
				alert('Произошла ошибка. Вы все еще можете забронировать коворкинг по телефонам: +38 (068) 100 11 44, +38 (099) 502 32 46');
			}
		});
		
	});
	
});