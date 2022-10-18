function cambiarMoneda(event){
    event.preventDefault();
    let divisa1 = document.getElementById('divisa1').value;
    let divisa2 = document.getElementById('divisa2').value;
    let valor = document.getElementById('valor').value
    const DIVISAS = {
        euro: 1,
        dolar: 0.97,
        libra: 0.86,
        rublo: 60.29
    }

    // 1-0.97
    // 20 - x
    let operacion = ((valor*DIVISAS[divisa2])/DIVISAS[divisa1]).toFixed(2);
    let resultado = `
        <h3>${valor} ${divisa1} ---> ${operacion} ${divisa2}</h3>
    `;
    document.getElementById('contenedor').innerHTML = resultado;
}