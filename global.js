document.addEventListener('DOMContentLoaded', () => {
  // cerco tutti i form della pagina
  var forms = document.querySelectorAll('form');
  handleforms(forms);
})

function handleforms(forms) {

    // prelevo il csrf
    const csrf=document.querySelector('meta[name="_csrf"]').getAttribute('content');

    // Loop through each form 
    forms.forEach(function(form) {
        form.addEventListener("submit", function(event) {
			
			// Prevent the default form submission
			event.preventDefault();

			// Get the action URL of the form
			var urlToCall = form.action;

			// params to post (Create FormData object)
			var formData = new FormData(this); 
				  
			// append csrf
			formData.append("csrf", csrf);
			  
			// execute ajax call
			$.ajax({
				url: urlToCall,
				type: "POST",
				data: formData,
				processData: false,
				contentType: false,
				async: true,
				cache: false,  
				success: function(data)
				{
				  alert(data)
				},
				error: function(xhr, ajaxOptions, thrownError){			
				  alert("si è verificato un problema tecnico")
				}			
			});
		  
        });
    });

}