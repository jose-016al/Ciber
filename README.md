
# Ciberseguridad

<head>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        h1 {
            margin-bottom: 20px;
        }
        #horario, ul {
            font-size: 20px;
        }
        #horario {
            text-align: center;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        #horario th, td {
            border: 1px solid black;
            padding: 10px;
        }
        .pps {
            background-color: #FFC0CB;
        }
        .afi {
            background-color: #AEC6CF;
        }
        .ic {
            background-color: #B2DFDB;
        }
        .nc {
            background-color: #FFFF99;
        }
        .brs {
            background-color: #E6E6FA;
        }
        .he {
            background-color: #FFDAB9;
        }
    </style>
</head>

<body>
    <table id="horario">
        <tr>
            <th></th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miercoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
        </tr>
        <tr>
            <th>16:55 - 17:50</tdd>
            <td rowspan="2" class="pps">PPS</td>
            <td rowspan="2" class="afi">AFI</td>
            <td rowspan="3" class="ic">IC</th>
            <td rowspan="2" class="afi">AFI</td>
            <td rowspan="2" class="ic">IC</td>
        </tr>
        <tr>
            <th>17:50 - 18:45</th>
        </tr>
        <tr>
            <th>19:00 - 19:55</th>
            <td class="nc">NC</td>
            <td class="nc">NC</td>
            <td rowspan="3" class="brs">BRS</td>
            <td rowspan="2" class="he">HE</td>
        </tr>
        <tr>
            <th>19:55 - 20:50</th>
            <td rowspan="2" class="brs">BRS</td>
            <td rowspan="2" class="pps">PPS</td>
            <td rowspan="2" class="he">HE</td>
        </tr>
        <tr>
            <th>20:50 - 21:45</th>
        </tr>
    </table>

<div>
    <ul>
        <li><strong>AFI</strong> - <i>Analisis Forense Informático</i></li>
        <li><strong>BRS</strong> - <i>Bastionado de Redes y Sistema</i></li>
        <li><strong>HE</strong> - <i>Hacking Ético</i></li>
        <li><strong>IC</strong> - <i>Incidentes de Ciberseguridad</i></li>
        <li><strong>NC</strong> - <i>Normativa de Ciberseguridad</i></li>
        <li><strong>PPS</strong> - <i>Puesta en Producción Segura</i></li>
    </ul>
</div>
</body>