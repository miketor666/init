function register() {
	var Form = {
		valid : function(){
			return (Form.isNotEmpty($("#nombre").val()) 
					&& Form.isNotEmpty($("#apellido").val()) 
					&& Form.isNotEmpty($("#usuario").val()) 
					&& Form.isNotEmpty($("#contra").val()) 
					&& Form.isNotEmpty($("#imagen").val()));
		},
		isNotEmpty : function(field){
			var inputValue = field.trim();
   			return (inputValue.length !== 0);
		}
	}
	
	if(Form.valid()){
    	var form = $("#register-form").serialize();
		form += "&imagen="+ $("#imagen").val()+"&action=register";
		$.post("php/controller.php",{data:form},function (mensaje) {
			if(mensaje=="OK"){
                alert("Redirigiendo...");
                window.location.href = "http://mikecomponents.com/php-projects/home.php";
            }
            else{
                alert(mensaje);
            }
            
		});
	}
	else
		alert("Por favor, ingresa todos los campos.");
}