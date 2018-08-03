var panelItem = document.querySelectorAll('.block-day__subtitle'),
		active = document.getElementsByClassName('.panel-active');

		Array.from(panelItem).forEach(function(item, i, panelItem) {
			item.addEventListener('click', function(e) {
		    if (active.length > 0 && active[0] !== this) // если есть активный элемент, и это не тот по которому кликнули
		      active[0].classList.remove('panel-active'); // убрать класс panel-active

		    // изменить состояние класса panel-active на текущем элементе: добавить если не было, убрать если было.
		    this.classList.toggle('panel-active');
		  });
		});
		var arrow = document.querySelectorAll('.fa-chevron-down'),
		rotate = document.getElementsByClassName('.fa-chevron-up');

		Array.from(arrow).forEach(function(item, i, panelItem) {
			item.addEventListener('click', function(e) {
		    if (rotate.length > 0 && rotate[0] !== this) // если есть активный элемент, и это не тот по которому кликнули
		      rotate[0].classList.remove('fa-chevron-up'); // убрать класс panel-active

		    // изменить состояние класса panel-active на текущем элементе: добавить если не было, убрать если было.
		    this.classList.toggle('fa-chevron-up');
		    this.classList.toggle('fa-chevron-down');
		    
		  });
		});