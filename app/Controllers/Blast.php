<?php

namespace App\Controllers;

class Blast extends BaseController
{
    public function blastp(){
        //recebe os dados que vem do formulario
        $seq1 = $this->request->getPost('seq1');
        $seq2 = $this->request->getPost('seq2');

        // executa o Blastp
        shell_exec("echo '$seq1' > temp1.fasta && echo '$seq2' > temp2.fasta");

        $resultado = shell_exec("/usr/local/ncbi/blast/bin/blastp -query temp1.fasta -subject temp2.fasta");
        $resultado = explode("Database:", $resultado);

        $dados = [];
        $dados['seq1'] = $seq1;
        $dados['seq2'] = $seq2;
        $dados['resultado'] = $resultado[1];

        return view('alinhamento', $dados);
    }
}