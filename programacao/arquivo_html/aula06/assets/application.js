var Previsao = {
    init: function() {
        $.ajax(
            {
                url: 'http://api.openweathermap.org/data/2.5/forecast?callback=?',
                data: {
                    'q': 'Florianópolis,br',
                    'mode': 'json',
                    'appid': '0ff9a0274234bf4051beea087ce9451b'
                },
                dataType: 'jsonp',
                beforeSend: function(){},
                success: function (response) {
                    console.log(response);
                }
            }
        );
    }
}

var Condicao = {

    // Função que chama a requisição de condição de tempo do Open Weather Map
    init: function() {
        $.ajax(
            {
                url: 'http://api.openweathermap.org/data/2.5/weather?callback=?',
                data: {
                    'q': 'Florianópolis,br',
                    'mode': 'json',
                    'appid': '0ff9a0274234bf4051beea087ce9451b',
                    'units': 'metric'
                },
                dataType: 'jsonp',
                beforeSend: function(){},
                success: function (response) {

                    console.log(response);

                    // Temperatura
                    $('#temperatura').html(response.main.temp+"°C");

                    // Temperatura mínima
                    $('#minima').html(response.main.temp_min+"°C");

                    // Temperatura máxima
                    $('#maxima').html(response.main.temp_max+"°C");

                    // Pressão
                    $('#pressao').html(response.main.pressure+"hPa");

                    // Nuvens
                    $('#nuvens').html(response.clouds.all+"%");

                    // Umidade relativa
                    $('#umidaderelativa').html(response.main.humidity+'%');

                    // Velocidade do vento
                    $('#velocidadevento').html(response.wind.speed+'m/s');

                    // Direção do vento
                    $('#direcaovento').html(response.wind.deg.toFixed(2)+'°');

                    // Ícone da condição do tempo
                    $('#condicao').append($('<img />').attr({src:'http://openweathermap.org/img/w/'+response.weather[0].icon+'.png'}));

                    $('body').css({'background': '#000000 url(assets/'+response.weather[0].icon+'.jpg) no-repeat 50% 50%'})

                }
            }
        );
    }
}