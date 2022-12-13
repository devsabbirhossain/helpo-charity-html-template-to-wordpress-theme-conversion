(function($){

	//jQuery(".footer-menu").children('li').removeClass('');
	jQuery(".main-menu--inner").children('li').addClass('main-menu__item main-menu__item--has-child');

	jQuery(".main-menu__item--has-child").children('ul').addClass('main-menu__sub-list');

	if(jQuery(".main-menu__item--has-child").children('ul').hasClass('main-menu__sub-list')){
		jQuery(".main-menu__item--has-child").children('ul').prev().addClass('adddot');
	}

	jQuery(".current-menu-parent").addClass('current-menu-item');

	jQuery(".aside-menu").children('li').addClass('aside-menu__item aside-menu__item--has-child');

	jQuery(".aside-menu__item--has-child").children('ul').addClass('aside-menu__sub-list');

	if(jQuery(".aside-menu__item--has-child").children('ul').hasClass('aside-menu__sub-list')){
		jQuery(".aside-menu__item--has-child").children('ul').prev().addClass('adddot2');
	}

	jQuery(".custom-aside").children('li').addClass('aside-menu__item');
	jQuery(".custom-aside").children('li').children('a').addClass('aside-menu__link');



	jQuery(".footer-menu").children('li').addClass('footer-menu__item');
	jQuery(".footer-menu__item").children('a').addClass('footer-menu__link');


	jQuery(".avatar").addClass('img--bg');



})(jQuery)