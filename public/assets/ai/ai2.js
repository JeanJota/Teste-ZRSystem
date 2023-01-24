var aili1 = document.querySelector('#aili1');

var aili2 = document.querySelector('#aili2');

var aibtn = document.querySelector('#aibtn');

var aimodaltexto = document.querySelector('#aimodaltexto');

var aibtnmodal = document.querySelector('#aibtnmodal');

var aispan = document.querySelector('#aispan');

if ("webkitSpeechRecognition" in window)
{
    let speechRecognition = new webkitSpeechRecognition();

    let final_transcript = "";

    speechRecognition.continuous = true;

    speechRecognition.interimResults = true;

    speechRecognition.lang = 'pt-BR';

    speechRecognition.onstart = () => 
    {
        console.log("Speech Recognition Iniciou");
    };

    speechRecognition.onerror = () =>
    {
        console.log("Speech Recognition Error");
    };

    speechRecognition.onend = () =>
    {
        console.log("Speech Recognition Ended");

        speechRecognition.start();
    };

    speechRecognition.onresult = (event) =>
    {
        let interim_transcript = "";

        for (let i = event.resultIndex; i < event.results.length; ++i)
        {
            if (event.results[i].isFinal)
            {
                final_transcript += event.results[i][0].transcript;
            }
            else
            {
                interim_transcript += event.results[i][0].transcript;
            }
        }

        if (interim_transcript.match(/Bia/gi))
        {
            aili1.style.display = "none";

            aibtn.style.display = "none";

            aispan.style.display = "block";

            if (interim_transcript.match(/buscar cliente/gi))
            {
                var resultado = interim_transcript.split(/buscar cliente/gi);

                window.location.href = '/ai/cliente?nome=' + resultado[1];
            }      
        }

    };

    speechRecognition.start();

}
else
{
  console.log('Seu dispositivo não suporta inteligência artificial!');

  aili2.style.display = "none";

  aili1.style.display = "block";
}
