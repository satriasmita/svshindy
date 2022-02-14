<?php
namespace common\components;
use yii;
use yii\helpers\Url;
 
class MiscHelpers  {
    
    public static function tanggalIndo($tanggal, $cetak_hari = false)
    {
        $hari = array ( 1 =>    'Senin',
                    'Selasa',
                    'Rabu',
                    'Kamis',
                    'Jumat',
                    'Sabtu',
                    'Minggu'
                );
                
        $bulan = array (1 =>   'Januari',
                    'Februari',
                    'Maret',
                    'April',
                    'Mei',
                    'Juni',
                    'Juli',
                    'Agustus',
                    'September',
                    'Oktober',
                    'November',
                    'Desember'
                );
        $split    = explode('-', $tanggal);
        $tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
        
        if ($cetak_hari) {
            $num = date('N', strtotime($tanggal));
            return $hari[$num] . ', ' . $tgl_indo;
        }
        return $tgl_indo;
    } 

    public static function tanggalIndoH($tanggal, $cetak_hari = true)
    {
        $hari = array ( 1 =>    'Senin',
                    'Selasa',
                    'Rabu',
                    'Kamis',
                    'Jumat',
                    'Sabtu',
                    'Minggu'
                );
                
        $bulan = array (1 =>   'Januari',
                    'Februari',
                    'Maret',
                    'April',
                    'Mei',
                    'Juni',
                    'Juli',
                    'Agustus',
                    'September',
                    'Oktober',
                    'November',
                    'Desember'
                );
        $split    = explode('-', $tanggal);
        $tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
        
        if ($cetak_hari) {
            $num = date('N', strtotime($tanggal));
            return $hari[$num] . ', ' . $tgl_indo;
        }
        return $tgl_indo;
    }

    

    public static function hari($tanggal){
        
        //fungsi mencari namahari
        //format $tgl YYYY-MM-DD
        //harviacode.com
        
        $tgl=substr($tanggal,8,2);
        $bln=substr($tanggal,5,2);
        $thn=substr($tanggal,0,4);
     
        $info=date('w', @mktime(0,0,0,$bln,$tgl,$thn));
        
        switch($info){
            case '0': return "Minggu"; break;
            case '1': return "Senin"; break;
            case '2': return "Selasa"; break;
            case '3': return "Rabu"; break;
            case '4': return "Kamis"; break;
            case '5': return "Jumat"; break;
            case '6': return "Sabtu"; break;
        };   
    }
    public static function shorthari($tanggal){
        
        //fungsi mencari namahari
        //format $tgl YYYY-MM-DD
        //harviacode.com
        
        $tgl=substr($tanggal,8,2);
        $bln=substr($tanggal,5,2);
        $thn=substr($tanggal,0,4);
     
        $info=date('w', @mktime(0,0,0,$bln,$tgl,$thn));
        
        switch($info){
            case '0': return "Min"; break;
            case '1': return "Sen"; break;
            case '2': return "Sel"; break;
            case '3': return "Rab"; break;
            case '4': return "Kam"; break;
            case '5': return "Jum"; break;
            case '6': return "Sab"; break;
        };   
    }

    public static function tanggal($tanggal, $cetak_hari = true)
    {
        $array_hari = array(1=>'Senin','Selasa','Rabu','Kamis','Jumat', 'Sabtu','Minggu');
        $hari = $array_hari[date('N',strtotime($tanggal))];

        //Format Tanggal
        $tgl = date ('j', strtotime($tanggal));

        //Array Bulan
        $array_bulan = array(1=>'Januari','Februari','Maret', 'April', 'Mei', 'Juni','Juli','Agustus','September','Oktober', 'November','Desember');
        $bulan = $array_bulan[date('n', strtotime($tanggal))];

        //Format Tahun
        $tahun = date('Y', strtotime($tanggal));

        //Menampilkan hari dan tanggal
        $tgl_indo = $tgl . ' '. $bulan . ' '. $tahun ;

        if ($tanggal) {
            return $tgl_indo;   
        } else {
            return 'Tidak Diset';
        }
    }
}