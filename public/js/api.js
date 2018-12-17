window.onload = function() {

  var selectCountries = document.querySelector('.form-group');
  var fieldProvince = document.getElementById('provincias');

  var loadCountries = function(countries) {

    countries.forEach(function(country) {
      var newOption = document.createElement('option');
      newOption.setAttribute('value', country);
      newOption.innerText = country;
      selectCountries.append(newOption);

    });
  }
//xddddddddddd

  var loadProvinces = function(provinces) {

    var dropdownProvincias = document.getElementById('dropdown-provincias');

    provincias.forEach(function(provincia) {

      var optionNuevo = document.createElement('option');

      optionNuevo.setAttribute('value', provincia);

      optionNuevo.innerText = provincia;

      dropdownProvincias.append(optionNuevo);

    });

  }



  fetch('https://restcountries.eu/rest/v2/all')

    .then(function(response) {

      return response.json();

    })

    .then(function(data) {

      var paises = [];

      data.forEach(function(paisApi){

        if (paisApi.subregion == 'South America' && (paisApi.languages[0].nativeName == 'Español' || paisApi.languages[0].nativeName == 'Português')) {

          paises.push(paisApi.nativeName)

        }

      })

      cargarPaises(paises);

    })

    .catch(function(error) {

      console.log("Ocurrió un error: " + error);

    })



  selectPaises.addEventListener("change", function(){



    if (this.options[this.selectedIndex].value == 'Argentina') {



      campoProvincia.innerHTML = '<label for="state" class="registro-nombre">Provincia:</label><div class="registro-campo"><select class="registro-dropdown" name="state" id="dropdown-provincias"><option value="">----- Elige una provincia -----</option></select></div>';



      fetch('https://dev.digitalhouse.com/api/getProvincias')

        .then(function(response) {

          return response.json();

        })

        .then(function(data) {

          var provincias = [];

          data.forEach(function(provincia) {

            provincias.push(provincia.state);

          });

          cargarProvincias(provincias);

        })

        .catch(function(error) {

          console.log("Ocurrió un error: " + error);

        })



    } else {

      campoProvincia.innerHTML = "";

    }



  });



}
