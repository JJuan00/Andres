  <script type="text/javascript">
          function enviemos()
          {
            var formData = new FormData();
            formData.append("cod_factura", document.getElementById('cod_factura2').value);
            formData.append("name", document.getElementById('name2').value);
            formData.append("cc", document.getElementById('cc2').value);
            formData.append("lastname", document.getElementById('lastname2').value);
            // valor2
            formData.append("valor", document.getElementById('valor2').value);
            formData.append("f_data", document.getElementById('date2').value);
            var request = new XMLHttpRequest();
            request.open("POST", "http://127.0.0.1/empresa/includes/add_cliente.php");
            request.onload = function(oEvent) {
                if (request.status == 200) {
                    // console.log(JSON.parse(oEvent.currentTarget.response));
                    var code = document.getElementById('cod_factura2').value;
                    var name = document.getElementById('name2').value;
                    var cc = document.getElementById('cc2').value;
                    var lastname = document.getElementById('lastname2').value;
                    var valorC = document.getElementById('valor2').value;
                    var date = document.getElementById('date2').value;
                    console.log(date);
                    if (code == "" || name == "" || cc == "" || lastname == "" || valorC == "") {
                      alertify.error('Hay campos vacios, rectifique los campos.');
                    }else{
                      // console.log(request.response);
                      var check = JSON.parse(request.response);
                      if (check) {
                        alertify.error('Ya esta registrada esta factura.');
                      }else{
                        alertify.success('Registrado correctamente.');
                        document.getElementById('cod_factura2').value = "";
                        document.getElementById('name2').value = "";
                        document.getElementById('cc2').value = "";
                        document.getElementById('lastname2').value = "";
                        document.getElementById('valor2').value = "";
                        document.getElementById('date2').value = "";
                      }

                    }
                } else {
                  alertify.error('Lo sentimos, hay algun error.');
                }
              };
            request.send(formData);
          }
        </script>
