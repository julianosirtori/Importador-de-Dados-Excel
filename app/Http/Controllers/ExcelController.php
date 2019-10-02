<?php

namespace App\Http\Controllers;

use App\Pessoa;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class ExcelController extends Controller
{
    public function index(){
        return view('excel.index');
    }

    public function exibeTabela(Request $request){
        $inputFile = $request->file('file');
        $reader = new Xlsx();
        $spreadsheet = $reader->load($inputFile);
        $sheet = $spreadsheet->getActiveSheet();
        $dados = array();
        foreach ($sheet->getRowIterator() as $rowSheet) {
            $row = array();
            $cellIterator = $rowSheet->getCellIterator();
            $cellIterator->setIterateOnlyExistingCells(false);
            foreach ($cellIterator as $cell) {
                array_push($row, $cell->getValue());
            }
            array_push($dados, $row);
        }
        return view('excel.tabela', compact('dados'));
    }

    public function importaDados(Request $request){
        $dados = json_decode($request->input('dados'));
        foreach($dados as $row){
            $pessoa = new Pessoa();
            $pessoa->nome = $row[$request->input('nome')];
            $pessoa->idade = $row[$request->input('idade')];
            $pessoa->profissao = $row[$request->input('profissao')];
            $pessoa->save();
        }
        return  redirect()->route('home');
    }
}
