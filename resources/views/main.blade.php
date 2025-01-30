<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panorama Laboral Portuario</title>
    <style>
        body {
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .container {
            position: relative;
            width: 1340px;
            margin: 0 auto;
        }

        .background-image {
            width: 100%;
            display: block;
        }

        .input-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .input-field {
            position: absolute;
            width: 385px;
            text-align: center;
            padding: 5px;
            font-size: 17px;
            border: none;
            background-color: transparent;
        }

        .input-field:hover,
        .input-field:focus {
            background-color: rgba(255, 255, 255, 0.5);
            outline: none;
        }

        .buttons {
            margin-top: 20px;
            text-align: center;
        }

        .button {
            display: inline-flex;
            align-items: center;
            padding: 10px 15px;
            margin: 0 8px;
            font-size: 19px;
            color: white;
            background-color: #003366;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #0055aa;
        }

        .button svg {
            margin-right: 8px;
        }
    </style>
</head>
<body>
    @if(session('success'))
        <script type="text/javascript">
            alert("{{ session('success') }}");
        </script>
    @endif
    <div class="container">
        <img src="{{asset('img/0.jpg')}}" alt="Panorama Laboral" class="background-image">
        <div class="input-container" id="input-container">
            <!-- San Lorenzo -->
            <form action="{{route('save.san-lorenzo')}}" method="POST" id="sl-form" >
                <input type="text" class="input-field" style="top: 295px; left: 525px;" placeholder="Sábado" name="sabado_0" value="{{$sanLorenzo->sabado_0}}">
                <input type="text" class="input-field" style="top: 295px; left: 937px;" placeholder="Domingo" name="domingo_0" value="{{$sanLorenzo->domingo_0}}">

                <input type="text" class="input-field" style="top: 335px; left: 525px;" placeholder="Sábado" name="sabado_1" value="{{$sanLorenzo->sabado_1}}">
                <input type="text" class="input-field" style="top: 335px; left: 937px;" placeholder="Domingo" name="domingo_1" value="{{$sanLorenzo->domingo_1}}">
        
                <input type="text" class="input-field" style="top: 373px; left: 525px;" placeholder="Sábado" name="sabado_2" value="{{$sanLorenzo->sabado_2}}">
                <input type="text" class="input-field" style="top: 373px; left: 937px;" placeholder="Domingo" name="domingo_2" value="{{$sanLorenzo->domingo_2}}">
        
                <input type="text" class="input-field" style="top: 412px; left: 525px;" placeholder="Sábado" name="sabado_3" value="{{$sanLorenzo->sabado_3}}">
                <input type="text" class="input-field" style="top: 412px; left: 937px;" placeholder="Domingo" name="domingo_3" value="{{$sanLorenzo->domingo_3}}">
        
                <input type="text" class="input-field" style="top: 450px; left: 525px;" placeholder="Sábado" name="sabado_4" value="{{$sanLorenzo->sabado_4}}">
                <input type="text" class="input-field" style="top: 450px; left: 937px;" placeholder="Domingo" name="domingo_4" value="{{$sanLorenzo->domingo_4}}">
        
                <input type="text" class="input-field" style="top: 487px; left: 525px;" placeholder="Sábado" name="sabado_5" value="{{$sanLorenzo->sabado_5}}">
                <input type="text" class="input-field" style="top: 487px; left: 937px;" placeholder="Domingo" name="domingo_5" value="{{$sanLorenzo->domingo_5}}">
        
                <!-- Nuevos Inputs -->
                <input type="text" class="input-field" style="top: 525px; left: 525px;" placeholder="Sábado" name="sabado_6" value="{{$sanLorenzo->sabado_6}}">
                <input type="text" class="input-field" style="top: 525px; left: 937px;" placeholder="Domingo" name="domingo_6" value="{{$sanLorenzo->domingo_6}}">
        
                <input type="text" class="input-field" style="top: 560px; left: 525px;" placeholder="Sábado" name="sabado_7" value="{{$sanLorenzo->sabado_7}}">
                <input type="text" class="input-field" style="top: 560px; left: 937px;" placeholder="Domingo" name="domingo_7" value="{{$sanLorenzo->domingo_7}}">

                <input type="text" class="input-field" style="top: 595px; left: 525px;" placeholder="Sábado" name="sabado_8" value="{{$sanLorenzo->sabado_8}}">
                <input type="text" class="input-field" style="top: 595px; left: 937px;" placeholder="Domingo" name="domingo_8" value="{{$sanLorenzo->domingo_8}}">

                <input type="text" class="input-field" style="top: 630px; left: 525px;" placeholder="Sábado" name="sabado_9" value="{{$sanLorenzo->sabado_9}}">
                <input type="text" class="input-field" style="top: 630px; left: 937px;" placeholder="Domingo" name="domingo_9" value="{{$sanLorenzo->domingo_9}}">

                <input type="text" class="input-field" style="top: 665px; left: 525px;" placeholder="Sábado" name="sabado_10" value="{{$sanLorenzo->sabado_10}}">
                <input type="text" class="input-field" style="top: 665px; left: 937px;" placeholder="Domingo" name="domingo_10" value="{{$sanLorenzo->domingo_10}}">

                <input type="text" class="input-field" style="top: 705px; left: 525px;" placeholder="Sábado" name="sabado_11" value="{{$sanLorenzo->sabado_11}}">
                <input type="text" class="input-field" style="top: 705px; left: 937px;" placeholder="Domingo" name="domingo_11" value="{{$sanLorenzo->domingo_11}}">

                <input type="text" class="input-field" style="top: 745px; left: 525px;" placeholder="Sábado" name="sabado_12" value="{{$sanLorenzo->sabado_12}}">
                <input type="text" class="input-field" style="top: 745px; left: 937px;" placeholder="Domingo" name="domingo_12" value="{{$sanLorenzo->domingo_12}}">

                <input type="text" class="input-field" style="top: 785px; left: 525px;" placeholder="Sábado" name="sabado_13" value="{{$sanLorenzo->sabado_13}}">
                <input type="text" class="input-field" style="top: 785px; left: 937px;" placeholder="Domingo" name="domingo_13" value="{{$sanLorenzo->domingo_13}}">

                <input type="text" class="input-field" style="top: 820px; left: 525px;" placeholder="Sábado" name="sabado_14" value="{{$sanLorenzo->sabado_14}}">
                <input type="text" class="input-field" style="top: 820px; left: 937px;" placeholder="Domingo" name="domingo_14" value="{{$sanLorenzo->domingo_14}}">

                <input type="text" class="input-field" style="top: 860px; left: 525px;" placeholder="Sábado" name="sabado_15" value="{{$sanLorenzo->sabado_15}}">
                <input type="text" class="input-field" style="top: 860px; left: 937px;" placeholder="Domingo" name="domingo_15" value="{{$sanLorenzo->domingo_15}}">

                <input type="text" class="input-field" style="top: 895px; left: 525px;" placeholder="Sábado" name="sabado_16" value="{{$sanLorenzo->sabado_16}}">
                <input type="text" class="input-field" style="top: 895px; left: 937px;" placeholder="Domingo" name="domingo_16" value="{{$sanLorenzo->domingo_16}}">

                <input type="text" class="input-field" style="top: 935px; left: 525px;" placeholder="Sábado" name="sabado_17" value="{{$sanLorenzo->sabado_17}}">
                <input type="text" class="input-field" style="top: 935px; left: 937px;" placeholder="Domingo 17" name="domingo_17" value="{{$sanLorenzo->domingo_17}}">
                @csrf
            </form>
    
            

            <form action="{{route('save.arroyo')}}" method="POST" id="arroyo-form">
                @csrf
                <input type="text" class="input-field" style="top: 1040px; left: 525px;" placeholder="Sábado" name="sabado_0" value="{{$arroyo->sabado_0}}">
                <input type="text" class="input-field" style="top: 1040px; left: 937px;" placeholder="Domingo" name="domingo_0" value="{{$arroyo->domingo_0}}">

                <input type="text" class="input-field" style="top: 1080px; left: 525px;" placeholder="Sábado" name="sabado_1" value="{{$arroyo->sabado_1}}">
                <input type="text" class="input-field" style="top: 1080px; left: 937px;" placeholder="Domingo" name="domingo_1" value="{{$arroyo->domingo_1}}">

                <input type="text" class="input-field" style="top: 1117px; left: 525px;" placeholder="Sábado" name="sabado_2" value="{{$arroyo->sabado_2}}">
                <input type="text" class="input-field" style="top: 1117px; left: 937px;" placeholder="Domingo" name="domingo_2" value="{{$arroyo->domingo_2}}">

                <input type="text" class="input-field" style="top: 1154px; left: 525px;" placeholder="Sábado" name="sabado_3" value="{{$arroyo->sabado_3}}">
                <input type="text" class="input-field" style="top: 1154px; left: 937px;" placeholder="Domingo" name="domingo_3" value="{{$arroyo->domingo_3}}">

                <input type="text" class="input-field" style="top: 1191px; left: 525px;" placeholder="Sábado" name="sabado_4" value="{{$arroyo->sabado_4}}">
                <input type="text" class="input-field" style="top: 1191px; left: 937px;" placeholder="Domingo" name="domingo_4" value="{{$arroyo->domingo_4}}">

                <input type="text" class="input-field" style="top: 1228px; left: 525px;" placeholder="Sábado" name="sabado_5" value="{{$arroyo->sabado_5}}">
                <input type="text" class="input-field" style="top: 1228px; left: 937px;" placeholder="Domingo" name="domingo_5" value="{{$arroyo->domingo_5}}">

                <input type="text" class="input-field" style="top: 1265px; left: 525px;" placeholder="Sábado" name="sabado_6" value="{{$arroyo->sabado_6}}">
                <input type="text" class="input-field" style="top: 1265px; left: 937px;" placeholder="Domingo" name="domingo_6" value="{{$arroyo->domingo_6}}">
            </form>

            <!-- bs as -->
            <form action="{{route('save.bsas')}}" method="POST" id="bsas-form">
                @csrf
                <input type="text" class="input-field" style="top: 1370px; left: 525px;" placeholder="Sábado" name="sabado_0" value="{{$buenosAires->sabado_0}}">
                <input type="text" class="input-field" style="top: 1370px; left: 937px;" placeholder="Domingo" name="domingo_0" value="{{$buenosAires->domingo_0}}">

                <input type="text" class="input-field" style="top: 1410px; left: 525px;" placeholder="Sábado" name="sabado_1" value="{{$buenosAires->sabado_1}}">
                <input type="text" class="input-field" style="top: 1410px; left: 937px;" placeholder="Domingo" name="domingo_1" value="{{$buenosAires->domingo_1}}">
                
                <input type="text" class="input-field" style="top: 1450px; left: 525px;" placeholder="Sábado" name="sabado_2" value="{{$buenosAires->sabado_2}}">
                <input type="text" class="input-field" style="top: 1450px; left: 937px;" placeholder="Domingo" name="domingo_2" value="{{$buenosAires->domingo_2}}">

                <input type="text" class="input-field" style="top: 1490px; left: 525px;" placeholder="Sábado" name="sabado_3" value="{{$buenosAires->sabado_3}}">
                <input type="text" class="input-field" style="top: 1490px; left: 937px;" placeholder="Domingo" name="domingo_3" value="{{$buenosAires->domingo_3}}">

                <input type="text" class="input-field" style="top: 1520px; left: 525px;" placeholder="Sábado" name="sabado_4" value="{{$buenosAires->sabado_4}}">
                <input type="text" class="input-field" style="top: 1525px; left: 937px;" placeholder="Domingo" name="domingo_4" value="{{$buenosAires->domingo_4}}">

                <input type="text" class="input-field" style="top: 1560px; left: 525px;" placeholder="Sábado" name="sabado_5" value="{{$buenosAires->sabado_5}}">
                <input type="text" class="input-field" style="top: 1560px; left: 937px;" placeholder="Domingo" name="domingo_5" value="{{$buenosAires->domingo_5}}">

                <input type="text" class="input-field" style="top: 1597px; left: 525px;" placeholder="Sábado" name="sabado_6" value="{{$buenosAires->sabado_6}}">
                <input type="text" class="input-field" style="top: 1595px; left: 937px;" placeholder="Domingo" name="domingo_6" value="{{$buenosAires->domingo_6}}">

                <input type="text" class="input-field" style="top: 1633px; left: 525px;" placeholder="Sábado" name="sabado_7" value="{{$buenosAires->sabado_7}}">
                <input type="text" class="input-field" style="top: 1633px; left: 937px;" placeholder="Domingo" name="domingo_7" value="{{$buenosAires->domingo_7}}">

                <input type="text" class="input-field" style="top: 1675px; left: 525px;" placeholder="Sábado" name="sabado_8" value="{{$buenosAires->sabado_8}}">
                <input type="text" class="input-field" style="top: 1675px; left: 937px;" placeholder="Domingo" name="domingo_8" value="{{$buenosAires->domingo_8}}">

                <input type="text" class="input-field" style="top: 1710px; left: 525px;" placeholder="Sábado" name="sabado_9" value="{{$buenosAires->sabado_9}}">
                <input type="text" class="input-field" style="top: 1710px; left: 937px;" placeholder="Domingo" name="domingo_9" value="{{$buenosAires->domingo_9}}">

                <input type="text" class="input-field" style="top: 1745px; left: 525px;" placeholder="Sábado" name="sabado_10" value="{{$buenosAires->sabado_10}}">
                <input type="text" class="input-field" style="top: 1745px; left: 937px;" placeholder="Domingo" name="domingo_10" value="{{$buenosAires->domingo_10}}">

                <input type="text" class="input-field" style="top: 1782px; left: 525px;" placeholder="Sábado" name="sabado_11" value="{{$buenosAires->sabado_11}}">
                <input type="text" class="input-field" style="top: 1782px; left: 937px;" placeholder="Domingo" name="domingo_11" value="{{$buenosAires->domingo_11}}">

                <input type="text" class="input-field" style="top: 1820px; left: 525px;" placeholder="Sábado" name="sabado_12" value="{{$buenosAires->sabado_12}}">
                <input type="text" class="input-field" style="top: 1820px; left: 937px;" placeholder="Domingo" name="domingo_12" value="{{$buenosAires->domingo_12}}">

                <input type="text" class="input-field" style="top: 1860px; left: 525px;" placeholder="Sábado" name="sabado_13" value="{{$buenosAires->sabado_13}}">
                <input type="text" class="input-field" style="top: 1860px; left: 937px;" placeholder="Domingo 13" name="domingo_13" value="{{$buenosAires->domingo_13}}">
                
            </form>

            <!-- bahia -->

            <form action="{{route('save.bahia')}}" method="POST" id="bahia-form">
                @csrf
                <input type="text" class="input-field" style="top: 1970px; left: 525px;" placeholder="Sábado" name="sabado_0" value="{{$bahiaBlanca->sabado_0}}">
                <input type="text" class="input-field" style="top: 1970px; left: 937px;" placeholder="Domingo" name="domingo_0" value="{{$bahiaBlanca->domingo_0}}">

                <input type="text" class="input-field" style="top: 2007px; left: 525px;" placeholder="Sábado" name="sabado_1" value="{{$bahiaBlanca->sabado_1}}">
                <input type="text" class="input-field" style="top: 2007px; left: 937px;" placeholder="Domingo" name="domingo_1" value="{{$bahiaBlanca->domingo_1}}">

                <input type="text" class="input-field" style="top: 2045px; left: 525px;" placeholder="Sábado" name="sabado_2" value="{{$bahiaBlanca->sabado_2}}">
                <input type="text" class="input-field" style="top: 2045px; left: 937px;" placeholder="Domingo" name="domingo_2" value="{{$bahiaBlanca->domingo_2}}">

                <input type="text" class="input-field" style="top: 2080px; left: 525px;" placeholder="Sábado" name="sabado_3" value="{{$bahiaBlanca->sabado_3}}">
                <input type="text" class="input-field" style="top: 2080px; left: 937px;" placeholder="Domingo" name="domingo_3" value="{{$bahiaBlanca->domingo_3}}">

                <input type="text" class="input-field" style="top: 2121px; left: 525px;" placeholder="Sábado" name="sabado_4" value="{{$bahiaBlanca->sabado_4}}">
                <input type="text" class="input-field" style="top: 2121px; left: 937px;" placeholder="Domingo" name="domingo_4" value="{{$bahiaBlanca->domingo_4}}">

                <input type="text" class="input-field" style="top: 2155px; left: 525px;" placeholder="Sábado" name="sabado_5" value="{{$bahiaBlanca->sabado_5}}">
                <input type="text" class="input-field" style="top: 2155px; left: 937px;" placeholder="Domingo" name="domingo_5" value="{{$bahiaBlanca->domingo_5}}">

                <input type="text" class="input-field" style="top: 2192px; left: 525px;" placeholder="Sábado" name="sabado_6" value="{{$bahiaBlanca->sabado_6}}">
                <input type="text" class="input-field" style="top: 2192px; left: 937px;" placeholder="Domingo" name="domingo_6" value="{{$bahiaBlanca->domingo_6}}">
                
            </form>



        
    </div>
</div>

<div class="buttons">

    <button class="button" onclick="saveSanLorenzo()">
        San Lorenzo save
    </button><button class="button" onclick="saveArroyo()">
        Arroyo Seco Save
    </button><button class="button" onclick="saveBsAs()">
        Bs AS save
    </button><button class="button" onclick="saveBahia()">
        Bahia save
    </button>
    <button class="button" onclick="exportToImage()">
        Descargar como Imagen (JPG)
    </button>
    <button class="button" onclick="exportToPDF()">
        Descargar como PDF
    </button>
</div>

        <script type="text/javascript">
            function saveSanLorenzo(){
                document.getElementById('sl-form').submit();
            }
            function saveArroyo(){
                document.getElementById('arroyo-form').submit();
            }
            function saveBsAs(){
                document.getElementById('bsas-form').submit();
            }
            function saveBahia(){
                document.getElementById('bahia-form').submit();
            }
        </script>

    
    <div class="buttons">
        <button class="button" onclick="exportToImage()">
            Descargar como Imagen (JPG)
        </button>
        <button class="button" onclick="exportToPDF()">
            Descargar como PDF
        </button>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script>
        // Exportar a Imagen
        function exportToImage() {
            html2canvas(document.querySelector('.container')).then(canvas => {
                const link = document.createElement('a');
                link.download = 'panorama_laboral.jpg';
                link.href = canvas.toDataURL('image/jpeg');
                link.click();
            });
        }

        // Exportar a PDF
        async function exportToPDF() {
            const { jsPDF } = window.jspdf;
            const pdf = new jsPDF();

            const canvas = await html2canvas(document.querySelector('.container'));
            const imgData = canvas.toDataURL('image/jpeg');

            const imgProps = pdf.getImageProperties(imgData);
            const pdfWidth = pdf.internal.pageSize.getWidth();
            const pdfHeight = (imgProps.height * pdfWidth) / imgProps.width;
            
            pdf.addImage(imgData, 'JPEG', 0, 0, pdfWidth, pdfHeight);
            pdf.save('panorama_laboral.pdf');
        }
// Función para pegar datos desde Excel en los inputs
document.addEventListener("paste", (event) => {
        const clipboardData = event.clipboardData || window.clipboardData;
        const pastedData = clipboardData.getData("Text");
        const rows = pastedData.split("\n").filter((row) => row.trim() !== "");
        
        // Obtener todos los inputs en el contenedor
        const inputs = document.querySelectorAll("#input-container .input-field");
        
        let inputIndex = 0;
        for (let row of rows) {
            const cells = row.split("\t");
            for (let cell of cells) {
                if (inputIndex < inputs.length) {
                    inputs[inputIndex].value = cell.trim();
                    inputIndex++;
                } else {
                    break;
                }
            }
        }
    });
    </script>
</body>
</html>
