<?php
namespace App\Exports;

use App\Models\blsinfo;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use Illuminate\Support\Collection;

class BlsInfoExport implements FromCollection, WithHeadings, WithStyles, WithBatchInserts, WithChunkReading
{
    protected $searchTerm;
    
    public function __construct($searchTerm = '')
    {
        $this->searchTerm = $searchTerm;
    }

    /**
     * Use collection instead of query for better memory management
     */
    public function collection()
    {
        $query = blsinfo::query()
            ->select(
                'BlsId', 'Email', 'Lastname', 'Firstname', 'Middlename', 'Suffix', 'Status',
                'Gender', 'ContactNum', 'AreaOfAssignment', 'AreaOfAssignmentSub',
                'AgeBracketDesc', 'ProfWorkDesc', 'ProfWorkOthers','TrainingDate', 'TrainingPlace',
                'AgencyConducted', 'AgencyConductedOthers', 'ConductedSixTraining',
                'TrnFrom1', 'TrnTo1', 'TrnFtOthers1', 'TrnFrom2', 'TrnTo2',
                'TrnFtOthers2', 'TrnFrom3', 'TrnTo3', 'TrnFtOthers3', 'TrnFrom4',
                'TrnTo4', 'TrnFtOthers4', 'TrnFrom5', 'TrnTo5', 'TrnFtOthers5',
                'TrnFrom6', 'TrnTo6', 'TrnFtOthers6'
            )
            ->where('Status', '!=', 'DeActivated');

        if ($this->searchTerm) {
            $searchTerm = trim($this->searchTerm);
            
            // Handle exact match for "Active" or "InActive"
            if (strtolower($searchTerm) === 'active') {
                $query->where('Status', '=', 'Active');
            } 
            else if (strtolower($searchTerm) === 'inactive') {
                $query->where('Status', '=', 'InActive');
            }
            else {
                // For other search terms, use the original LIKE search across multiple columns
                $query->where(function ($q) use ($searchTerm) {
                    $searchableColumns = [
                        'BlsId', 'Email', 'Lastname', 'Firstname', 'Middlename', 'Status',
                        'Gender', 'ContactNum', 'AreaOfAssignment', 'AreaOfAssignmentSub',
                        'AgeBracketDesc', 'ProfWorkDesc', 'ProfWorkOthers', 'TrainingPlace', 'AgencyConducted',
                        'AgencyConductedOthers', 'ConductedSixTraining',
                        'TrnFrom1', 'TrnTo1', 'TrnFtOthers1', 'TrnFrom2', 'TrnTo2',
                        'TrnFtOthers2', 'TrnFrom3', 'TrnTo3', 'TrnFtOthers3', 'TrnFrom4',
                        'TrnTo4', 'TrnFtOthers4', 'TrnFrom5', 'TrnTo5', 'TrnFtOthers5',
                        'TrnFrom6', 'TrnTo6', 'TrnFtOthers6'
                    ];
                    
                    foreach ($searchableColumns as $column) {
                        $q->orWhere($column, 'LIKE', '%' . $searchTerm . '%');
                    }
                });
            }
        }

        return $query->get();
    }

    public function headings(): array
    {
        return [
            'BLS ID No.', 'Email', 'Last Name', 'First Name', 'Middle Name',
            'Suffix', 'Status', 'Gender', 'Contact No.',
            'Area of Assignment (Main)', 'Area of Assignment (Sub)',
            'Age Bracket', 'Prof Work', 'Prof Work Others','Training Date', 'Training Place',
            'Agency Conducted', 'Agency Conducted (Others)',
            'Conducted Six Training', 'Training From (1)', 'Training To (1)',
            'Place of Agency (1)', 'Training From (2)', 'Training To (2)',
            'Place of Agency (2)', 'Training From (3)', 'Training To (3)',
            'Place of Agency (3)', 'Training From (4)', 'Training To (4)',
            'Place of Agency (4)', 'Training From (5)', 'Training To (5)',
            'Place of Agency (5)', 'Training From (6)', 'Training To (6)',
            'Place of Agency (6)'
        ];
    }

    /**
     * Define batch size for inserting rows
     */
    public function batchSize(): int
    {
        return 1000;
    }

    /**
     * Define chunk size for reading data
     */
    public function chunkSize(): int
    {
        return 1000;
    }

    public function styles(Worksheet $sheet)
    {
        // Cache the highest row and column
        $highestRow = $sheet->getHighestRow();
        $lastColumn = 'AK'; // Hardcoded since we know the columns
        
        // Define column widths once
        $columnWidths = [
            'A' => 23, 'B' => 20, 'C' => 20, 'D' => 20, 'E' => 20, 'F' => 10, 'G' => 12, 'H' => 15, 'I' => 30, 'J' => 30, 'K' => 20, 'L' => 20, 'M' => 20, 'N' => 20, 'O' => 20, 'P' => 20, 'Q' => 20, 'R' => 20, 'S' => 20, 'T' => 20, 'U' => 20, 'V' => 20, 'W' => 20, 'X' => 20, 'Y' => 20, 'Z' => 20,
            'AA' => 20, 'AB' => 20, 'AC' => 20, 'AD' => 20, 'AE' => 20, 'AF' => 20, 'AG' => 20, 'AH' => 20, 'AI' => 20, 'AJ' => 20, 'AK' => 20,
        ];

        // Apply column widths in bulk
        foreach ($columnWidths as $column => $width) {
            $sheet->getColumnDimension($column)->setWidth($width);
        }

        // Set default width for remaining columns
        for ($col = 'K'; $col <= $lastColumn; $col++) {
            $sheet->getColumnDimension($col)->setWidth(20);
        }

        // Define styles once and reuse
        $headerStyle = [
            'font' => [
                'bold' => true,
                'size' => 12,
                'name' => 'Arial',
                'color' => ['argb' => 'FFFFFF'],
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
                'vertical' => Alignment::VERTICAL_CENTER,
                'wrapText' => true,
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                    'color' => ['argb' => '000000'],
                ],
            ],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => ['argb' => '4F81BD'],
            ],
        ];

        $dataStyle = [
            'font' => [
                'size' => 10,
                'name' => 'Arial',
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_LEFT,
                'vertical' => Alignment::VERTICAL_CENTER,
                'wrapText' => true,
            ],
        ];

        // Apply styles efficiently
        $sheet->getStyle('A1:' . $lastColumn . '1')->applyFromArray($headerStyle);
        $sheet->getStyle('A2:' . $lastColumn . $highestRow)->applyFromArray($dataStyle);

        return [];
    }
}