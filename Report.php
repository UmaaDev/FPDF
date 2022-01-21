<?php 
    require_once ('./fpdf/fpdf.php');
    
    class PDF extends FPDF
    {
        function Header()
            {
                $this -> Cell(190,261,'',1,1,'C');
                $this -> Image('./img/quetzal.png',10,11,18);
                $this -> Image('img/logo_imss_verde.png',185,11,14);
                $this -> SetFont('Arial','B',16);

                $this -> SetY(10);
                $this -> Cell(190,21,'Orden y Entrega de Servicio',1,1,'C');
                $this -> SetFont('Arial','B',12);
                $this -> Cell(65,8,'Identificacion de la Unidad',1);
                $this -> Cell(65,8,'Identificacion del Equipo',1,);
                $this -> Cell(60,8,'Numero de la Orden',1,1,);
                
            }
       
    }
    $pdf = new PDF();
    $pdf -> AliasNbPages();
    $pdf -> AddPage();
    $pdf -> SetFont('Arial','B',8);
    $pdf -> Cell(65,7.5,'',1);
    $pdf -> Cell(65,7.5,'',1);
    $pdf -> Cell(60,7.5,'',1,1);
    $pdf -> Cell(65,7.5,'',1);
    $pdf -> Cell(65,7.5,'',1);
    $pdf -> Cell(60,7.5,'',1,1);
    $pdf -> Cell(65,7.5,'',1);
    $pdf -> Cell(65,7.5,'',1);
    $pdf -> Cell(60,7.5,'',1,1);
    $pdf -> Cell(65,7.5,'',1);
    $pdf -> Cell(65,7.5,'',1);
    $pdf -> Cell(60,7.5,'',1,1);

    $pdf -> Ln(1);

    $pdf -> Cell(70,8,'Tecnico o Empresa',1);            
    $pdf -> Cell(120,8,utf8_decode('Condiciones en que se encontró'),1,1);
    $pdf -> Cell(70,10,'',1);
    $pdf -> Cell(120,10,'',1,1);

    $pdf -> Ln(1);

    $pdf -> Cell(30,8,'Partida',1);
    $pdf -> Cell(30,8,'Especialidad',1);
    $pdf -> Cell(40,8,'Subespecialidad',1);
    $pdf -> Cell(90,8,utf8_decode('Tiempo de Ejecución'),1,1);
    $pdf -> Cell(30,10,'',1);
    $pdf -> Cell(30,10,'',1);
    $pdf -> Cell(40,10,'',1);
    $pdf -> Cell(15,10,'',1);
    $pdf -> Cell(15,10,'',1);
    $pdf -> Cell(15,10,'',1);
    $pdf -> Cell(15,10,'',1);
    $pdf -> Cell(15,10,'',1);
    $pdf -> Cell(15,10,'',1,1);

    $pdf -> Ln(1);

    $pdf -> Cell(90,8,'Descipcion del Servicio',1);
    $pdf -> Cell(100,8,'Materiales y Refacciones Utilizados',1,1);
    $pdf -> Cell(90,8,'Servicio',1);
    $pdf -> Cell(10,8,'Cant.',1);
    $pdf -> Cell(90,8,'Descripcion',1,1);
    $pdf -> Cell(90,8,'',1);
    $pdf -> Cell(10,8,'',1);
    $pdf -> Cell(90,8,'',1,1);
    $pdf -> Cell(90,8,'',1);
    $pdf -> Cell(10,8,'',1);
    $pdf -> Cell(90,8,'',1,1);
    $pdf -> Cell(90,8,'',1);
    $pdf -> Cell(10,8,'',1);
    $pdf -> Cell(90,8,'',1,1);
    $pdf -> Cell(90,8,'',1);
    $pdf -> Cell(10,8,'',1);
    $pdf -> Cell(90,8,'',1,1);
    $pdf -> Cell(90,8,'',1);
    $pdf -> Cell(10,8,'',1);
    $pdf -> Cell(90,8,'',1,1);
    $pdf -> Cell(90,8,'',1);
    $pdf -> Cell(10,8,'',1);
    $pdf -> Cell(90,8,'',1,1);
    $pdf -> Cell(90,8,'',1);
    $pdf -> Cell(10,8,'',1);
    $pdf -> Cell(90,8,'',1,1);
    $pdf -> Cell(90,8,'',1);
    $pdf -> Cell(10,8,'',1);
    $pdf -> Cell(90,8,'',1,1);
    $pdf -> Cell(90,8,'',1);
    $pdf -> Cell(10,8,'',1);
    $pdf -> Cell(90,8,'',1,1);
    $pdf -> Cell(90,8,'',1);
    $pdf -> Cell(10,8,'',1);
    $pdf -> Cell(90,8,'',1,1);
    
    $pdf -> Ln(1);

    $pdf -> Cell(90,8,'Condicion final de funcionamiento',1);
    $pdf -> Cell(100,8,'Recomendaciones',1,1);
    $pdf -> Cell(90,20,'',1);
    $pdf -> Cell(100,20,'',1,1);
    
    $pdf ->Ln(1);

    $pdf -> Cell(30,37,'Entrega de Servicio',1);
    $pdf -> Cell(50,12,'Nombre: ',1,1);
    $pdf -> SetX(-170);
    $pdf -> Cell(50,12,'Matricula: ',1,1);
    $pdf -> SetX(-170);
    $pdf -> Cell(50,13,'Firma ',1);
    $pdf -> SetXY(-120,234);
    $pdf -> Cell(30,37,'Firma Conformidad',1);
    $pdf -> SetXY(-90,234);
    $pdf -> Cell(50,12,'Nombre: ',1,1);
    $pdf -> SetX(-90);
    $pdf -> Cell(50,12,utf8_decode('N° de Matricula: '),1,1);
    $pdf -> SetX(-90);
    $pdf -> Cell(50,13,'Firma ',1,1);
    $pdf -> SetXY(-40,234);
    $pdf -> Cell(30,12,'Entrega',1,1);
    $pdf -> SetX(-40);
    $pdf -> Cell(30,25,'',1,1);
    //get info *Identificacion de la unidad
    $pdf -> SetFont('Arial','B',10);
    $pdf -> SetXY(10,28);
    $pdf -> Cell(65,30,'Delegacion: ');
    $pdf -> SetXY(10,36);
    $pdf -> Cell(65,30,'Unidad: ');
    $pdf -> SetXY(10,44);
    $pdf -> Cell(65,30,'Clave de la Unidad: ');
    $pdf -> SetXY(10,51);
    $pdf -> Cell(65,30,'JCU: ');

    //GET DB
    $pdf -> SetFont('Arial','B',8);
    $pdf -> SetXY(-160,28);
    $pdf -> Cell(65,30,'Aguascalientes');
    $pdf -> SetXY(-160,36);
    $pdf -> Cell(65,30,'UMAA');
    $pdf -> SetXY(-160,44);
    $pdf -> Cell(65,30,'10802');
    $pdf -> SetXY(-185,51);
    $pdf -> Cell(65,30,utf8_decode('Ing. Jose Ramon Castañeda'));

    //get info of identificacion del equipó
    $pdf -> SetFont('Arial','B',10);
    $pdf -> SetXY(-135,28);
    $pdf -> Cell(65,30,'ID: ');
    $pdf -> SetXY(-135,36);
    $pdf -> Cell(65,30,'Nombre: ');
    $pdf -> SetXY(-135,44);
    $pdf -> Cell(65,30,utf8_decode('Ubicación Física: '));
    
    //get info og numero de la orden
    $pdf -> SetFont('Arial','B',10);
    $pdf -> SetXY(-70,36);
    $pdf -> Cell(65,30,'Origen: ');
    $pdf -> SetXY(-70,44);
    $pdf -> Cell(65,30,utf8_decode('Fecha Emisión: '));
    $pdf -> SetXY(-70,51);
    $pdf -> Cell(65,30,utf8_decode('Elaboró: '));



     $pdf->Output();
?>