/** 
 * easyDialog v2.2
 * Url : http://stylechen.com/easydialog-v2.0.html
 * Author : chenmnkken@gmail.com
 * Date : 2012-04-22
 */
(function( win, undefined ){

var	doc = win.document,
	docElem = doc.documentElement;

var easyDialog = function(){

var	body = doc.body,
	isIE = !-[1,],	// �ж�IE6/7/8 �����ж�IE9
	isIE6 = isIE && /msie 6/.test( navigator.userAgent.toLowerCase() ), // �ж�IE6
	uuid = 1,
	expando = 'cache' + ( +new Date() + "" ).slice( -8 ),  // ���������
	cacheData = {
	/**
	 *	1 : {
	 *		eclick : [ handler1, handler2, handler3 ]; 
	 *		clickHandler : function(){ //... }; 
	 *	} 
	 */	
	};

var	Dialog = function(){};

Dialog.prototype = {
	// ��������
	getOptions : function( arg ){
		var i,
			options = {},
			// Ĭ�ϲ���
			defaults = {
				container:   null,			// string / object   ���������ݵ�id������ģ��
				overlay:     true,			// boolean  		 �Ƿ�������ֲ�
				drag:	     true,			// boolean  		 �Ƿ����ק�¼�
				fixed: 	     true,			// boolean  		 �Ƿ�ֹ��λ
				follow:      null,			// string / object   �Ƿ�����Զ���Ԫ������λ
				followX:     0,				// number   		 ������Զ���Ԫ�ص�X�����ƫ��
				followY:     0,				// number  		     ������Զ���Ԫ�ص�Y�����ƫ��
				autoClose:   0,				// number            �Զ��رյ������ʱ��
				lock:        false,			// boolean           �Ƿ�����ESC�����رյ�����
				callback:    null			// function          �رյ������ִ�еĻص�����
				/** 
				 *  containerΪobjectʱ�Ĳ�����ʽ
				 *	container : {
				 *		header : '���������',
				 *		content : '����������',
				 *		yesFn : function(){},	    // ȷ����ť�Ļص�����
				 *		noFn : function(){} / true,	// ȡ����ť�Ļص�����
				 *		yesText : 'ȷ��',		    // ȷ����ť���ı���Ĭ��Ϊ��ȷ����
				 *		noText : 'ȡ��' 		    // ȡ����ť���ı���Ĭ��Ϊ��ȡ����		
				 *	}		
				 */
			};
		
		for( i in defaults ){
			options[i] = arg[i] !== undefined ? arg[i] : defaults[i];
		}
		Dialog.data( 'options', options );
		return options;
	},
		
	// ��ֹIE6ģ��fixedʱ���ֶ���
	setBodyBg : function(){
		if( body.currentStyle.backgroundAttachment !== 'fixed' ){
			body.style.backgroundImage = 'url(about:blank)';
			body.style.backgroundAttachment = 'fixed';
		}
	},
	
	// ��ֹIE6��select��͸
	appendIframe : function(elem){
		elem.innerHTML = '<iframe style="position:absolute;left:0;top:0;width:100%;height:100%;z-index:-1;border:0 none;filter:alpha(opacity=0)"></iframe>';
	},
	
	/**
	 * ����Ԫ�ظ��涨λ
	 * @param { Object } �����DOMԪ��
	 * @param { String / Object } �������DOMԪ��
	 * @param { Number } ����ڱ�����Ԫ�ص�X���ƫ��
	 * @param { Number } ����ڱ�����Ԫ�ص�Y���ƫ��
	 */
	setFollow : function( elem, follow, x, y ){
		follow = typeof follow === 'string' ? doc.getElementById( follow ) : follow;
		var style = elem.style;
		style.position = 'absolute';			
		style.left = Dialog.getOffset( follow, 'left') + x + 'px';
		style.top = Dialog.getOffset( follow, 'top' ) + y + 'px';
	},
	
	/**
	 * ����Ԫ�ع̶�(fixed) / ����(absolute)��λ
	 * @param { Object } DOMԪ��
	 * @param { Boolean } true : fixed, fasle : absolute
	 */
	setPosition : function( elem, fixed ){
		var style = elem.style;
		style.position = isIE6 ? 'absolute' : fixed ? 'fixed' : 'absolute';
		if( fixed ){
			if( isIE6 ){
				style.setExpression( 'top','fuckIE6=document.documentElement.scrollTop+document.documentElement.clientHeight/2+"px"' );
			}
			else{
				style.top = '50%';
			}
			style.left = '50%';
		}
		else{
			if( isIE6 ){
				style.removeExpression( 'top' );
			}
			style.top = docElem.clientHeight/2 + Dialog.getScroll( 'top' ) + 'px';
			style.left = docElem.clientWidth/2 + Dialog.getScroll( 'left' ) + 'px';
		}
	},
	
	/**
	 * �������ֲ�
	 * @return { Object } ���ֲ� 
	 */
	createOverlay : function(){
		var overlay = doc.createElement('div'),
			style = overlay.style;
			
		style.cssText = 'margin:0;padding:0;border:none;width:100%;height:100%;background:#333;opacity:0.6;filter:alpha(opacity=60);z-index:9999;position:fixed;top:0;left:0;';
		
		// IE6ģ��fixed
		if(isIE6){
			body.style.height = '100%';
			style.position = 'absolute';
			style.setExpression('top','fuckIE6=document.documentElement.scrollTop+"px"');
		}
		
		overlay.id = 'overlay';
		return overlay;
	},
	
	/**
	 * ����������
	 * @return { Object } ������ 
	 */
	createDialogBox : function(){
		var dialogBox = doc.createElement('div');		
		dialogBox.style.cssText = 'margin:0;padding:0;border:none;z-index:10000;';
		dialogBox.id = 'easyDialogBox';		
		return dialogBox;
	},

	/**
	 * ����Ĭ�ϵĵ���������ģ��
	 * @param { Object } ģ�����
	 * @return { Object } ����������ģ��
	 */
	createDialogWrap : function( tmpl ){
		// ���������
		var header = tmpl.header ? 
			'<h4 class="easyDialog_title" id="easyDialogTitle"><a href="javascript:void(0)" title="�رմ���" class="close_btn" id="closeBtn">&times;</a>' + tmpl.header + '</h4>' :
			'',
			// ȷ����ť
			yesBtn = typeof tmpl.yesFn === 'function' ? 
				'<button class="btn_highlight" id="easyDialogYesBtn">' + ( typeof tmpl.yesText === 'string' ? tmpl.yesText : 'ȷ��' ) + '</button>' :
				'',
			// ȡ����ť	
			noBtn = typeof tmpl.noFn === 'function' || tmpl.noFn === true ? 
				'<button class="btn_normal" id="easyDialogNoBtn">' + ( typeof tmpl.noText === 'string' ? tmpl.noText : 'ȡ��' ) + '</button>' :
				'',			
			// footer
			footer = yesBtn === '' && noBtn === '' ? '' :
				'<div class="easyDialog_footer">' + noBtn + yesBtn + '</div>',
			
			dialogTmpl = [
			'<div class="easyDialog_content">',
				header,
				'<div class="easyDialog_text">' + tmpl.content + '</div>',
				footer,
			'</div>'
			].join(''),

			dialogWrap = doc.getElementById( 'easyDialogWrapper' ),
			rScript = /<[\/]*script[\s\S]*?>/ig;
			
		if( !dialogWrap ){
			dialogWrap = doc.createElement( 'div' );
			dialogWrap.id = 'easyDialogWrapper';
			dialogWrap.className = 'easyDialog_wrapper';
		}
		dialogWrap.innerHTML = dialogTmpl.replace( rScript, '' );		
		return dialogWrap;
	}		
};
	
/**
 * ���ò����ػ�������� ���ڻ���ϵͳ�����http://stylechen.com/cachedata.html
 * @param { String / Object } �����ַ�����DOMԪ��
 * @param { String } ����������
 * @param { Anything } ��������ֵ
 * @return { Object } 
 */
Dialog.data = function( elem, val, data ){
    if( typeof elem === 'string' ){
        if( val !== undefined ){
			cacheData[elem] = val;
	    }
		return cacheData[elem];
	}
	else if( typeof elem === 'object' ){
		// �����window��document��������Զ�������
		// window��������0 document����Ϊ1
		var index = elem === win ? 0 : 
				elem.nodeType === 9 ? 1 : 
				elem[expando] ? elem[expando] : 
				(elem[expando] = ++uuid),
			
			thisCache = cacheData[index] ? cacheData[index] : ( cacheData[index] = {} );
				
		if( data !== undefined ){
			// �����ݴ��뻺����
			thisCache[val] = data;
		}
		// ����DOMԪ�ش洢������
		return thisCache[val];
	}
};

/**
 * ɾ������
 * @param { String / Object } �����ַ�����DOMԪ��
 * @param { String } Ҫɾ���Ļ���������
 */
Dialog.removeData = function( elem, val ){
	if( typeof elem === 'string' ){
		delete cacheData[elem];
	}
	else if( typeof elem === 'object' ){
		var index = elem === win ? 0 :
				elem.nodeType === 9 ? 1 :
				elem[expando];
			
		if( index === undefined ) return;		
		// �������Ƿ�Ϊ��
		var isEmptyObject = function( obj ) {
				var name;
				for ( name in obj ) {
					return false;
				}
				return true;
			},
			// ɾ��DOMԪ�����еĻ�������
			delteProp = function(){
				delete cacheData[index];
				if( index <= 1 ) return;
				try{
					// IE8����׼���������ֱ��ʹ��delete��ɾ������
					delete elem[expando];
				}
				catch ( e ) {
					// IE6/IE7ʹ��removeAttribute������ɾ������(document�ᱨ��)
					elem.removeAttribute( expando );
				}
			};

		if( val ){
			// ֻɾ��ָ��������
			delete cacheData[index][val];
			if( isEmptyObject( cacheData[index] ) ){
				delteProp();
			}
		}
		else{
			delteProp();
		}
	}
};

// �¼�����ϵͳ
Dialog.event = {
	
	bind : function( elem, type, handler ){
		var events = Dialog.data( elem, 'e' + type ) || Dialog.data( elem, 'e' + type, [] );
		// ���¼�������ӵ�������
		events.push( handler );
		// ͬһ�¼�����ֻע��һ���¼�����ֹ�ظ�ע��
		if( events.length === 1 ){
			var eventHandler = this.eventHandler( elem );
			Dialog.data( elem, type + 'Handler', eventHandler );
			if( elem.addEventListener ){
				elem.addEventListener( type, eventHandler, false );
			}
			else if( elem.attachEvent ){
				elem.attachEvent( 'on' + type, eventHandler );
			}
		}
	},
		
	unbind : function( elem, type, handler ){
		var events = Dialog.data( elem, 'e' + type );
		if( !events ) return;
			
		// ���û�д���Ҫɾ�����¼���������ɾ�����¼����͵Ļ���
		if( !handler ){
			events = undefined;		
		}
		// ����о�����¼���������ֻɾ��һ��
		else{
			for( var i = events.length - 1, fn = events[i]; i >= 0; i-- ){
				if( fn === handler ){
					events.splice( i, 1 );
				}				
			}
		}		
		// ɾ���¼��ͻ���
		if( !events || !events.length ){
			var eventHandler = Dialog.data( elem, type + 'Handler' );			
			if( elem.addEventListener ){
				elem.removeEventListener( type, eventHandler, false );
			}
			else if( elem.attachEvent ){
				elem.detachEvent( 'on' + type, eventHandler );
			}		
			Dialog.removeData( elem, type + 'Handler' );
			Dialog.removeData( elem, 'e' + type );
		}
	},
		
	// ����ִ���¼��󶨵ĺ���
	eventHandler : function( elem ){
		return function( event ){
			event = Dialog.event.fixEvent( event || win.event );
			var type = event.type,
				events = Dialog.data( elem, 'e' + type );
				
			for( var i = 0, handler; handler = events[i++]; ){
				if( handler.call(elem, event) === false ){
					event.preventDefault();
					event.stopPropagation();
				}
			}
		}
	},
	
	// �޸�IE�����֧�ֳ����ı�׼�¼���API
	fixEvent : function( e ){
		// ֧��DOM 2����׼�¼���������������޸�
		if ( e.target ) return e; 
		var event = {}, name;
		event.target = e.srcElement || document;
		event.preventDefault = function(){
			e.returnValue = false;
		};		
		event.stopPropagation = function(){
			e.cancelBubble = true;
		};
		// IE6/7/8��ԭ����window.event��ֱ��д���Զ�������
		// �ᵼ���ڴ�й©�����Բ��ø��Ƶķ�ʽ
		for( name in e ){
			event[name] = e[name];
		}				
		return event;
	}
};

/**
 * ����ĸ��дת��
 * @param { String } Ҫת�����ַ���
 * @return { String } ת������ַ��� top => Top
 */
Dialog.capitalize = function( str ){
	var firstStr = str.charAt(0);
	return firstStr.toUpperCase() + str.replace( firstStr, '' );
};

/**
 * ��ȡ��������λ��
 * @param { String } 'top' & 'left'
 * @return { Number } 
 */	
Dialog.getScroll = function( type ){
	var upType = this.capitalize( type );		
	return docElem['scroll' + upType] || body['scroll' + upType];	
};

/**
 * ��ȡԪ����ҳ���е�λ��
 * @param { Object } DOMԪ��
 * @param { String } 'top' & 'left'
 * @return { Number } 
 */		
Dialog.getOffset = function( elem, type ){
	var upType = this.capitalize( type ),
		client  = docElem['client' + upType]  || body['client' + upType]  || 0,
		scroll  = this.getScroll( type ),
		box = elem.getBoundingClientRect();
		
	return Math.round( box[type] ) + scroll - client;
};

/**
 * ��קЧ��
 * @param { Object } ������ק��DOMԪ��
 * @param { Object } Ҫ������ק��DOMԪ��
 */
Dialog.drag = function( target, moveElem ){
	// ����ı�ѡ��
	var	clearSelect = 'getSelection' in win ? function(){
		win.getSelection().removeAllRanges();
		} : function(){
			try{
				doc.selection.empty();
			}
			catch( e ){};
		},
		
		self = this,
		event = self.event,
		isDown = false,
		newElem = isIE ? target : doc,
		fixed = moveElem.style.position === 'fixed',
		_fixed = Dialog.data( 'options' ).fixed;
	
	// mousedown
	var down = function( e ){
		isDown = true;
		var scrollTop = self.getScroll( 'top' ),
			scrollLeft = self.getScroll( 'left' ),
			edgeLeft = fixed ? 0 : scrollLeft,
			edgeTop = fixed ? 0 : scrollTop;
		
		Dialog.data( 'dragData', {
			x : e.clientX - self.getOffset( moveElem, 'left' ) + ( fixed ? scrollLeft : 0 ),	
			y : e.clientY - self.getOffset( moveElem, 'top' ) + ( fixed ? scrollTop : 0 ),			
			// ������������4���ٽ���λ��
			// �̶���λ���ٽ�� = ��ǰ���Ŀ���(�¡���Ҫ��ȥԪ�ر���Ŀ�Ȼ�߶�)
			// ���Զ�λ���ٽ�� = ��ǰ���Ŀ��� + ���������𲿷�(�¡���Ҫ��ȥԪ�ر���Ŀ�Ȼ�߶�)
			el : edgeLeft,	// ���ٽ��
			et : edgeTop,  // ���ٽ��
			er : edgeLeft + docElem.clientWidth - moveElem.offsetWidth,  // ���ٽ��
			eb : edgeTop + docElem.clientHeight - moveElem.offsetHeight  // ���ٽ��
		});
		
		if( isIE ){
			// IE6�����ģ��fixed��mousedown��ʱ����ɾ��ģ�⣬��ʡ����
			if( isIE6 && _fixed ){
				moveElem.style.removeExpression( 'top' );
			}
			target.setCapture();
		}
		
		event.bind( newElem, 'mousemove', move );
		event.bind( newElem, 'mouseup', up );
		
		if( isIE ){
			event.bind( target, 'losecapture', up );
		}
		
		e.stopPropagation();
		e.preventDefault();
		
	};
	
	event.bind( target, 'mousedown', down );
	
	// mousemove
	var move = function( e ){
		if( !isDown ) return;
		clearSelect();
		var dragData = Dialog.data( 'dragData' ),
			left = e.clientX - dragData.x,
			top = e.clientY - dragData.y,
			et = dragData.et,
			er = dragData.er,
			eb = dragData.eb,
			el = dragData.el,
			style = moveElem.style;
		
		// �����������ҵ��ٽ���Է�ֹԪ�������ǰ��
		style.marginLeft = style.marginTop = '0px';
		style.left = ( left <= el ? el : (left >= er ? er : left) ) + 'px';
		style.top = ( top <= et ? et : (top >= eb ? eb : top) ) + 'px';
		e.stopPropagation();
	};
	
	// mouseup
	var up = function( e ){
		isDown = false;
		if( isIE ){
			event.unbind( target, 'losecapture', arguments.callee );
		}
		event.unbind( newElem, 'mousemove', move );
		event.unbind( newElem, 'mouseup', arguments.callee );		
		if( isIE ){
			target.releaseCapture();
			// IE6�����ģ��fixed��mouseup��ʱ��Ҫ��������ģ��
			if( isIE6 && _fixed ){
				var top = parseInt( moveElem.style.top ) - self.getScroll( 'top' );
				moveElem.style.setExpression('top',"fuckIE6=document.documentElement.scrollTop+" + top + '+"px"');
			}
		}
		e.stopPropagation();
	};
};

var	timer,	// ��ʱ��
	// ESC���رյ�����
	escClose = function( e ){
		if( e.keyCode === 27 ){
			extend.close();
		}
	},	
	// �����ʱ��
	clearTimer = function(){
		if( timer ){
			clearTimeout( timer );
			timer = undefined;
		}
	};
	
var extend = {
	open : function(){
		var $ = new Dialog(),
			options = $.getOptions( arguments[0] || {} ),	// ��ȡ����
			event = Dialog.event,
			docWidth = docElem.clientWidth,
			docHeight = docElem.clientHeight,
			self = this,
			overlay,
			dialogBox,
			dialogWrap,
			boxChild;
			
		clearTimer();
		
		// ------------------------------------------------------
		// ---------------------�������ֲ�-----------------------
		// ------------------------------------------------------
		
		// ���ҳ�����Ѿ��������ֲ㣬ֱ����ʾ
		if( options.overlay ){
			overlay = doc.getElementById( 'overlay' );			
			if( !overlay ){
				overlay = $.createOverlay();
				body.appendChild( overlay );
				if( isIE6 ){
					$.appendIframe( overlay );
				}
			}
			overlay.style.display = 'block';
		}
		
		if(isIE6){
			$.setBodyBg();
		}
		
		// ------------------------------------------------------
		// ---------------------���뵯����-----------------------
		// ------------------------------------------------------
		
		// ���ҳ�����Ѿ����浯���㣬ֱ����ʾ
		dialogBox = doc.getElementById( 'easyDialogBox' );
		if( !dialogBox ){
			dialogBox = $.createDialogBox();
			body.appendChild( dialogBox );
		}
		
		if( options.follow ){
			var follow = function(){
				$.setFollow( dialogBox, options.follow, options.followX, options.followY );
			};
			
			follow();
			event.bind( win, 'resize', follow );
			Dialog.data( 'follow', follow );
			if( overlay ){
				overlay.style.display = 'none';
			}
			options.fixed = false;
		}
		else{
			$.setPosition( dialogBox, options.fixed );
		}
		dialogBox.style.display = 'block';
				
		// ------------------------------------------------------
		// -------------------���뵯��������---------------------
		// ------------------------------------------------------
		
		// �жϵ����������Ƿ��Ѿ������
		dialogWrap = typeof options.container === 'string' ? 
			doc.getElementById( options.container ) : 
			$.createDialogWrap( options.container );
		
		boxChild = dialogBox.getElementsByTagName('*')[0];
		
		if( !boxChild ){
			dialogBox.appendChild( dialogWrap );
		}
		else if( boxChild && dialogWrap !== boxChild ){
			boxChild.style.display = 'none';
			body.appendChild( boxChild );
			dialogBox.appendChild( dialogWrap );
		}
		
		dialogWrap.style.display = 'block';
		
		var eWidth = dialogWrap.offsetWidth,
			eHeight = dialogWrap.offsetHeight,
			widthOverflow = eWidth > docWidth,
			heigthOverflow = eHeight > docHeight;
			
		// ǿ��ȥ���Զ��嵯�������ݵ�margin	
		dialogWrap.style.marginTop = dialogWrap.style.marginRight = dialogWrap.style.marginBottom = dialogWrap.style.marginLeft = '0px';	
		
		// ���ж�λ
		if( !options.follow ){			
			dialogBox.style.marginLeft = '-' + (widthOverflow ? docWidth/2 : eWidth/2) + 'px';
			dialogBox.style.marginTop = '-' + (heigthOverflow ? docHeight/2 : eHeight/2) + 'px';			
		}
		else{
			dialogBox.style.marginLeft = dialogBox.style.marginTop = '0px';
		}
				
		// ��ֹselect��͸�̶���Ⱥ͸߶�
		if( isIE6 && !options.overlay ){
			dialogBox.style.width = eWidth + 'px';
			dialogBox.style.height = eHeight + 'px';
		}
		
		// ------------------------------------------------------
		// --------------------������¼�----------------------
		// ------------------------------------------------------
		var closeBtn = doc.getElementById( 'closeBtn' ),
			dialogTitle = doc.getElementById( 'easyDialogTitle' ),
			dialogYesBtn = doc.getElementById('easyDialogYesBtn'),
			dialogNoBtn = doc.getElementById('easyDialogNoBtn');		

		// ��ȷ����ť�Ļص�����
		if( dialogYesBtn ){
			event.bind( dialogYesBtn, 'click', function( event ){
				if( options.container.yesFn.call(self, event) !== false ){
					self.close();
				}
			});
		}
		
		// ��ȡ����ť�Ļص�����
		if( dialogNoBtn ){
			var noCallback = function( event ){
				if( options.container.noFn === true || options.container.noFn.call(self, event) !== false ){
					self.close();
				}
			};
			event.bind( dialogNoBtn, 'click', noCallback );
			// ���ȡ����ť�лص����� �رհ�ťҲ��ͬ���Ļص�����
			if( closeBtn ){
				event.bind( closeBtn, 'click', noCallback );
			}
		}			
		// �رհ�ť���¼�	
		else if( closeBtn ){
			event.bind( closeBtn, 'click', self.close );
		}
		
		// ESC���رյ�����
		if( !options.lock ){
			event.bind( doc, 'keyup', escClose );
		}
		// �Զ��رյ�����
		if( options.autoClose && typeof options.autoClose === 'number' ){
			timer = setTimeout( self.close, options.autoClose );
		}		
		// ����ק(������������ݵĿ�Ȼ�߶������������ק)
		if( options.drag && dialogTitle && !widthOverflow && !heigthOverflow ){
			dialogTitle.style.cursor = 'move';
			Dialog.drag( dialogTitle, dialogBox );
		}
		
		// ȷ����������Զ�λʱ�Ŵ���С����Ҳ���Դ�ֱ������ʾ
		
		if( !options.follow && !options.fixed ){
			var resize = function(){
				$.setPosition( dialogBox, false );
			};
			// ������������ݵĿ�Ȼ�߶����������resize�¼�
			if( !widthOverflow && !heigthOverflow ){
				event.bind( win, 'resize', resize );
			}
			Dialog.data( 'resize', resize );
		}
		
		// �������Ԫ���Ա�رյ������ʱ����в���
		Dialog.data( 'dialogElements', {
			overlay : overlay,
			dialogBox : dialogBox,
			closeBtn : closeBtn,
			dialogTitle : dialogTitle,
			dialogYesBtn : dialogYesBtn,
			dialogNoBtn : dialogNoBtn			
		});
	},
	
	close : function(){
		var options = Dialog.data( 'options' ),
			elements = Dialog.data( 'dialogElements' ),
			event = Dialog.event;
			
		clearTimer();
		//	�������ֲ�
		if( options.overlay && elements.overlay ){
			elements.overlay.style.display = 'none';
		}
		// ���ص�����
		elements.dialogBox.style.display = 'none';
		// IE6���CSS���ʽ
		if( isIE6 ){
			elements.dialogBox.style.removeExpression( 'top' );
		}
		
		// ------------------------------------------------------
		// --------------------ɾ������¼�----------------------
		// ------------------------------------------------------
		if( elements.closeBtn ){
			event.unbind( elements.closeBtn, 'click' );
		}

		if( elements.dialogTitle ){
			event.unbind( elements.dialogTitle, 'mousedown' );
		}
		
		if( elements.dialogYesBtn ){
			event.unbind( elements.dialogYesBtn, 'click' );
		}
		
		if( elements.dialogNoBtn ){
			event.unbind( elements.dialogNoBtn, 'click' );
		}
		
		if( !options.follow && !options.fixed ){
			event.unbind( win, 'resize', Dialog.data('resize') );
			Dialog.removeData( 'resize' );
		}
		
		if( options.follow ){
			event.unbind( win, 'resize', Dialog.data('follow') );
			Dialog.removeData( 'follow' );
		}
		
		if( !options.lock ){
			event.unbind( doc, 'keyup', escClose );
		}
		// ִ��callback
		if(typeof options.callback === 'function'){
			options.callback.call( extend );
		}
		// �������
		Dialog.removeData( 'options' );
		Dialog.removeData( 'dialogElements' );
	}
};

return extend;

};

// ------------------------------------------------------
// ---------------------DOM����ģ��----------------------
// ------------------------------------------------------
var loaded = function(){
		win.easyDialog = easyDialog();
	},
	
	doScrollCheck = function(){
		if ( doc.body ) return;

		try {
			docElem.doScroll("left");
		} catch(e) {
			setTimeout( doScrollCheck, 1 );
			return;
		}
		loaded();
	};

(function(){
	if( doc.body ){
		loaded();
	}
	else{
		if( doc.addEventListener ){
			doc.addEventListener( 'DOMContentLoaded', function(){
				doc.removeEventListener( 'DOMContentLoaded', arguments.callee, false );
				loaded();
			}, false );
			win.addEventListener( 'load', loaded, false );
		}
		else if( doc.attachEvent ){
			doc.attachEvent( 'onreadystatechange', function(){
				if( doc.readyState === 'complete' ){
					doc.detachEvent( 'onreadystatechange', arguments.callee );
					loaded();
				}
			});
			win.attachEvent( 'onload', loaded );			
			var toplevel = false;
			try {
				toplevel = win.frameElement == null;
			} catch(e) {}

			if ( docElem.doScroll && toplevel ) {
				doScrollCheck();
			}
		}
	}
})();

})( window, undefined );

// 2012-04-12 �޸����涨λ���������ʱ�޷����������BUG
// 2012-04-22 �޸����������ݵĳߴ�����������ǰ���ߴ��BUG