<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Letter;
use Session;

use Excel;

class CetakController extends Controller
{
    public function cetakmasuk(Request $request)
    {	    	
               
        $bulan = $request->get('bulan');
        $tahun = $request->get('tahun');
        $filename = 'Laporan Surat Masuk'.$bulan.'-'.$tahun;
    	$data = Letter::whereMonth('tanggal', $bulan)
                        ->whereYear('tanggal', $tahun)
                        ->where('jenissurat', 1)
                        ->get();
        if(count($data) == 0) {
            Session::flash('flash_notification', [
            'level'=>'danger',
            'message'=>'<h4><i class="icon fa fa-check"></i> GAGAL !</h4>Data yang di dowload tidak ada.'
            ]);
            return redirect(route ('suratmasuk.index'));

        }else{

    	    return Excel::create($filename, function($excel) use ($data, $bulan, $tahun ) {

            $excel->setTitle('Our new awesome title');
            $excel->setCreator('Maatwebsite')->setCompany('Maatwebsite');
            $excel->setDescription('A demonstration to change the file properties');

            $print = [['No','No Surat','Tanggal Terima','Tanggal Surat', 'Penerima', 'Perihal', 'Uraian']];
            $no = 1;

             foreach ($data as $da) {
             array_push($print, [$no++, $da->nosurat, $da->tanggal, $da->tanggalsurat, $da->pengirim, $da->prihal, $da->uraian]);
            }
			$excel->sheet('Laporan Surat Masuk'.$bulan.'-'.$tahun, function($sheet) use ($print, $no)
	        {
                $no = $no+1;
				$sheet->fromArray($print);
                $sheet->mergeCells('A1:G1');
                $sheet->mergeCells('A1:G1');
                $sheet->setBorder('A2:G'.$no, 'thin');
                
                /*set height row 1 and 2*/
                $sheet->setHeight(1, 25);
                $sheet->setHeight(2, 15);

                $sheet->cells('A2:G2', function($cells) {
                    $cells->setBackground('#30C1CE');
                    $cells->setAlignment('center');
                    $cells->setFontWeight('bold');
                    $cells->setFontSize(10);

                });
	        });
		})->download('xlsx');
        }
    }

    public function cetakkeluar(Request $request)
    {           
               
        $bulan = $request->get('bulan');
        $tahun = $request->get('tahun');
        $filename = 'Laporan Surat Keluar'.$bulan.'-'.$tahun;
        $data = Letter::whereMonth('tanggal', $bulan)
                        ->whereYear('tanggal', $tahun)
                        ->where('jenissurat', 2)
                        ->get();
        if(count($data) == 0) {
            Session::flash('flash_notification', [
            'level'=>'danger',
            'message'=>'<h4><i class="icon fa fa-check"></i> GAGAL !</h4>Data yang di dowload tidak ada.'
            ]);
            return redirect(route ('suratkeluar.index'));

        }else{

            return Excel::create($filename, function($excel) use ($data, $bulan, $tahun ) {

            $excel->setTitle('Our new awesome title');
            $excel->setCreator('Maatwebsite')->setCompany('Maatwebsite');
            $excel->setDescription('A demonstration to change the file properties');

            $print = [['No','No Surat','Tanggal Kirim','Tanggal Surat', 'Pengirim', 'Perihal', 'Uraian']];
            $no = 1;

             foreach ($data as $da) {
             array_push($print, [$no++, $da->nosurat, $da->tanggal, $da->tanggalsurat, $da->pengirim, $da->prihal, $da->uraian]);
            }
            $excel->sheet('Laporan Surat Keluar'.$bulan.'-'.$tahun, function($sheet) use ($print, $no)
            {
                $no = $no+1;
                $sheet->fromArray($print);
                $sheet->mergeCells('A1:G1');
                $sheet->mergeCells('A1:G1');
                $sheet->setBorder('A2:G'.$no, 'thin');
                
                /*set height row 1 and 2*/
                $sheet->setHeight(1, 25);
                $sheet->setHeight(2, 15);

                $sheet->cells('A2:G2', function($cells) {
                    $cells->setBackground('#30C1CE');
                    $cells->setAlignment('center');
                    $cells->setFontWeight('bold');
                    $cells->setFontSize(10);

                });
            });
        })->download('xlsx');
        }
    }

}
