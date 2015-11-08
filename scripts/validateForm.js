var validateForm={
	init:function( formID, required){
		
		this.formID = formID;
		this.required = required;
		this.mErrors = [];
		this.events();
		
	},
	events:function(){
		var that = this;
		$( '#'+this.formID ).on( 'focusout', 'input, textarea, select', { parent:this}, this.ui.onFocusOut);		
	},
	ui:{
		onFocusOut:function( e ){			
			e.data.parent.validateElement( this );
		}
	},
	validate:function(){
		var elements = document.getElementById( this.formID ).elements;
		var flag = true;
		var that = this;
		
		$.each( elements, function( index, element ){
			if( !that.validateElement( element ) ){
				flag = false;
			}
		});
		
		return flag;
	},
	validateElement:function( element ){
		var flag = true;
				
		switch( element.type ){
			case 'text':
			case 'email':
			case 'phone':
			case 'textarea':
			case 'hidden':
				if( this.required[ element.name ] && element.value.length==0){
					$( element ).closest( '.form-group' ).addClass( 'has-error' );
					flag  = false;
				}else{
					$( element ).closest( '.form-group' ).removeClass( 'has-error' );
				}
				break;
			case 'radio':
			
				break;
			case 'checkbox':
			
				break;
			default:
				console.log( element.name +'- type: '+element.type+' is not on the list of fields to validate' );
		}
		
		return flag;
	}
}