<script type="text/javascript">
		// var contenido = document.querySelector('#contenido');
        var content = document.querySelector('#contenido');

        function cons22(data) {
            tabla(data);
        }
		function traer() {
            // fetch('http://127.0.0.1/empresa/includes/traer_client.php', {
            //     method: 'POST',
            //     headers:{
            //         'Content-Type': 'application/json'
            //     }
            // })
            // .then( res => cons22(res))
            // .catch( res2 => console.log(res2))

            // console.log(contenido)
            axios.post('/includes/traer_client.php', {
              })
              .then(function (response) {
                cons22(response.data);
                // console.log(response);
              })
              .catch(function (error) {
                // console.log(error);
              });

		}

        function tabla(datos) {
            // console.log(datos)
            content.innerHTML = ''
            // console.log(datos);
            for(let valor of datos){
                // console.log(valor.nombre)
                content.innerHTML += `\
                <tr>\
                    <td>${ valor.code_factura }</td>\
                    <td>${ valor.nombre }</td>\
                    <td>${ valor.apellido }</td>\
                    <td>${ valor.cc }</td>\
                    <td>${ valor.fecha }</td>\
                    <td>${ valor.precio }</td>\
                </tr>\
                `
            }
        }

	</script>