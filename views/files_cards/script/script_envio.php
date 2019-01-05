  <script type="text/javascript">
          function enviemos()
          {
            var formData = new FormData();
            formData.append("cod_factura", document.getElementById('cod_factura2').value);
            formData.append("name", document.getElementById('name2').value); 
            formData.append("cc", document.getElementById('cc2').value); 
            formData.append("lastname", document.getElementById('lastname2').value); 
            formData.append("f_data", document.getElementById('date2').value); 
            var request = new XMLHttpRequest();
            request.open("POST", "/includes/add_cliente.php");
            request.onload = function(oEvent) {
                if (request.status == 200) {
                    // console.log(JSON.parse(oEvent.currentTarget.response));
                    var code = document.getElementById('cod_factura2').value;
                    var name = document.getElementById('name2').value;
                    var cc = document.getElementById('cc2').value;
                    var lastname = document.getElementById('lastname2').value;
                    var date = document.getElementById('date2').value;
                    console.log(date);
                    if (code == "" || name == "" || cc == "" || lastname == "" || date == null) {
                      alertify.error('Hay campos vacios, rectifique los campos.'); 
                    }else{
                      document.getElementById('cod_factura2').value = "";
                      document.getElementById('name2').value = "";
                      document.getElementById('cc2').value = "";
                      document.getElementById('lastname2').value = "";
                      var check = JSON.parse(request.response);
                      // console.log(request.response);
                      if (check) {
                        alertify.error('Ya esta registrada esta factura.');
                      }else{
                        alertify.success('Registrado correctamente.'); 
                      }
    
                    }
                } else {
                  alertify.error('Lo sentimos, hay algun error.');                
                }
              };
            request.send(formData);
          }
        </script>