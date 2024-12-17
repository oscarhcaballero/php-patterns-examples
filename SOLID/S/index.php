<?php
/* 
    Sin cumplir el Principio SRP(Single Resposability Principle) o Principio de Única Responsabilidad

    La clase Report mezcla responsabilidades: gestionar datos del reporte y generar diferentes formatos.
    Si cambian los requerimientos de exportación, tendrás que modificar la clase, afectando otras funcionalidades.
*/
class Report {
    private $title;
    private $content;

    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
    }

    public function generatePDF() {
        // Lógica para generar un PDF
        echo "Generating PDF for {$this->title}\n";
    }

    public function generateHTML() {
        // Lógica para generar un HTML
        echo "Generating HTML for {$this->title}\n";
    }
}

// Uso
echo PHP_EOL."Sin cumplir el Principio SRP: ".PHP_EOL;
$report = new Report("Monthly Report", "This is the content of the report.");
$report->generatePDF();
$report->generateHTML();




/* 
    Aplicando el Principio SRP 

    - Modularidad: La clase SRP_Report solo se preocupa por los datos del reporte (título y contenido).
    - Flexibilidad: Si necesitas añadir más formatos (como CSV o JSON), puedes modificar SRP_ReportExporter sin afectar a la clase SRP_Report.
    - Fácil de mantener: Las responsabilidades están claramente separadas, reduciendo el impacto de futuros cambios.
*/
class SRP_Report {
    private $title;
    private $content;

    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getContent() {
        return $this->content;
    }
}

// Clase responsable de exportar los reportes
class SRP_ReportExporter {
    public function exportToPDF(SRP_Report $report) {
        // Lógica para generar un PDF
        echo "Generating PDF for {$report->getTitle()}\n";
    }

    public function exportToHTML(SRP_Report $report) {
        // Lógica para generar un HTML
        echo "Generating HTML for {$report->getTitle()}\n";
    }
}

// Uso
echo PHP_EOL."Aplicando el Principio SRP: ".PHP_EOL;
$report = new SRP_Report("Monthly Report", "This is the content of the report.");
$exporter = new SRP_ReportExporter();

$exporter->exportToPDF($report);
$exporter->exportToHTML($report);

