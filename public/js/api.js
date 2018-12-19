window.onload = function() {

  var selectCountries = document.querySelector('.countries');
  var fieldProvince = document.getElementById('fieldProvince');

  console.log(selectCountries);

  var loadCountries = function(countries) {

    countries.forEach(function(country) {
      var newOption = document.createElement('option');
      newOption.setAttribute('value', country);
      newOption.innerText = country;
      selectCountries.append(newOption);

    });
  }

  var loadProvinces = function(provinces) {

    var dropdownProvinces = document.getElementById('dropdown-provincias');

    provinces.forEach(function(province) {
      var optionNuevo = document.createElement('option');
      optionNuevo.setAttribute('value', province);
      optionNuevo.innerText = province;
      dropdownProvinces.append(optionNuevo);

    });

  }

//completar loadProvinces



fetch('https://restcountries.eu/rest/v2/all')

  .then(function(response) {
    return response.json();
  })

  .then(function(data) {
    var countries = [];
    data.forEach(function(countryApi){
      if (countryApi.subregion == 'South America' && (countryApi.languages[0].nativeName == 'Español')) {
        countries.push(countryApi.nativeName)
      }
    })
    loadCountries(countries);
  })

  .catch(function(error) {
    console.log("Ocurri� un error: " + error);
  })




  selectCountries.addEventListener("change", function(){

    if (this.options[this.selectedIndex].value == 'Argentina') {

      fieldProvince.innerHTML = '<label for="fieldProvince">Provincia:</label><div class="form-group"><select class="form-control" name="fieldProvince" id="dropdown-provincias"><option value="">Elige una provincia</option></select></div>';


      fetch('https://dev.digitalhouse.com/api/getProvincias')

        .then(function(response) {
          return response.json();
        })

        .then(function(data) {
          var provinces = [];
          data.forEach(function(province) {
            provinces.push(province.state);
          });
          loadProvinces(provinces);
        })

        .catch(function(error) {
          console.log("Ocurrió un error: " + error);
        })

    } else {

      fieldProvince.innerHTML = "";

    }
  });
}
