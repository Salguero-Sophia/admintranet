<!doctype html>
<html style="
        font-family: 'Nunito', sans-serif;
        width: 100%;
        padding:0 !important;
        margin: 0 !important;
        ">
<head>
    <meta charset="UTF-8">
    <meta name="color-scheme" content="light only">
    <meta name="supported-color-schemes" content="light only">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>San Martín Bakery</title>
</head>
<body style="
        font-family: 'Nunito', sans-serif;
        width: 100%;
        background-color: #fff !important;
        padding:0 !important;
        margin: 0 !important;
        ">
    <div style="
        font-family: 'Nunito', sans-serif;
        width: 100%;
        background-color: #fff !important;
        ">
        <div style="
            font-family: 'Nunito', sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding-left: 20px;
            padding-right: 20px;
            ">
            <div style="

                ">
                <div style="
                        width:100%;
                        margin: 0 auto;
                        padding-top: 89px;
                        padding-bottom: 0px;
                        /* border-bottom: 1px solid #1D3574; */
                        ">
                </div>
            </div>
            <div
                style="
                    text-align: left;
                    ">
                <div style="
                            width: 180px;
                            padding-top:30px;
                            margin: 0 auto;
                            ">
                  <img style="width:100%" src="{{asset('isotipo-sm.svg')}}">
                </div>

                <div style="

                        border-top: 1px solid #1D3574;
                        font-weight: bolder;
                        font-size: 20px;
                        padding-top: 50px;
                        padding-bottom: 15px;
                        color: #505254;
                            ">
                    Botón de Ética 
                </div>
                <div style="
                        font-size: 16px;
                        color:#003B7A;
                    ">
                  @if($comentario->country == 'gt')
                  <img width="48" height="48" src="https://img.icons8.com/color/48/guatemala.png" alt="GT"/>
                  @elseif($comentario->country == 'sv')
                      <img width="48" height="48" src="https://img.icons8.com/color/48/el-salvador.png" alt="SV">
                  @elseif($comentario->country == 'usa')
                      <img width="48" height="48" src="https://img.icons8.com/color/48/usa.png" alt="usa">
                  @endif
                  <br /> Nombre: {{$comentario->firstname}}<br /> 
                  Teléfono: {{$comentario->phonenumber}}<br /> 
                  <br /> {{$comentario->comments}}<br />
                        
            </div>

            <div style="
                    text-align: center;
                    padding-top:70px;
                    padding-bottom: 20px;
                ">

            </div>

            <div style="
                    padding-top: 60px;
                    padding-bottom: 20px;
                ">
                <div style="
                        text-align: left;
                        font-size: 16px;
                        font-weight: bolder;
                        color: #959595;
                    ">Términos y condiciones</div>
                <div style="
                        text-align: left;
                        font-size: 10px;
                    ">
                    <ul style="
                               padding-left: 30px;
                               padding-top: 30px;
                               color: #7F7A75;
                    ">
                        <li>
                            No borre este correo puede necesitarlo más adelante.
                        </li>
                        <li>
                            Es recomendable que no comparta esta invitación. Es sólo para su área.
                        </li>
                    </ul>
                </div>
                <div style="
                        text-align: left;
                        padding-bottom: 20px;
                        padding-top: 20px;
                    ">
                </div>
            </div>

            <div style="
                padding-left: 15px;
                padding-right: 15px;
                padding-top: 50px;
                padding-bottom: 50px;
                font-size: 10px;
                border-top: 1px solid #1D3574;
                text-align:left;
            ">
                <div>©2024 San Martín Bakery. Todos los derechos reservados.</div>
            </div>

        </div>
    </div>
</body>
</html>
