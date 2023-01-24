(function (){

    var aili1 = document.querySelector('#aili1');

    var aili2 = document.querySelector('#aili2');

    var aibtn = document.querySelector('#aibtn');

    var aimodaltexto = document.querySelector('#aimodaltexto');

    var aibtnmodal = document.querySelector('#aibtnmodal');

    var aispan = document.querySelector('#aispan');

    if (window.SpeechRecognition || window.webkitSpeechRecognition)
    {
        var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;

        var myRecognition = new SpeechRecognition();

        myRecognition.lang = 'pt-BR';

        myRecognition.onerror = () =>
        {
            console.log('Se você disse alguma coisa, eu não entendi!');

            const audio = new Audio('/assets/ai/audio/naoouvi.mp3');

            audio.play();

            aimodaltexto.innerHTML = 'Se você disse alguma coisa, eu não entendi!';

            aibtnmodal.click();

            aispan.style.display = "none";

            aibtn.style.display = "block";
        };

        myRecognition.onend = () =>
        {
            aispan.style.display = "none";

            aibtn.style.display = "block";
        };

        aibtn.addEventListener('click', function ()
        {
            try
            {
                myRecognition.start();

                aili1.style.display = "none";

                aibtn.style.display = "none";

                aispan.style.display = "block";
            }
            catch (erro)
            {
                console.log('erro:' + erro.message);

                aispan.style.display = "none";

                aibtn.style.display = "block";
            }

        }, false);

        myRecognition.addEventListener('result', function (evt)
        {
            var resultSpeak = evt.results[0][0].transcript;

            console.log(resultSpeak);

            aispan.style.display = "none";

            aibtn.style.display = "block";

            switch (resultSpeak.toLowerCase())
            {
            case 'sobre o sistema':
                const audio = new Audio('/assets/ai/audio/sobre.mp3');
                audio.play();
                break;

            case 'início':
                window.location.href = '/';
                break;

            case 'página principal':
                window.location.href = '/';
                break;

            case 'home':
                window.location.href = '/';
                break;

            case 'dashboard':
                window.location.href = '/';
                break;

            case 'cadastrar cliente':
                window.location.href = '/clientes/cadastracliente';
                break;

            case 'cadastrar veículo':
                window.location.href = '/veiculos/cadastraveiculo';
                break;
            }

            if (resultSpeak.match(/buscar cliente/gi))
            {
                setTimeout(function()
                {

                    var resultado = resultSpeak.split(/buscar cliente/gi);

                    window.location.href = '/ai/cliente?nome=' + resultado[1];
                    
                },2000);
            }

        }, false);
    }
    else
    {
        console.log('Seu dispositivo não suporta inteligência artificial!');

        aili2.style.display = "none";

        aili1.style.display = "block";
    }

})();