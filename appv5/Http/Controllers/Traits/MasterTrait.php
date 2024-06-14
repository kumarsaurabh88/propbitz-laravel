<?php 
namespace App\Http\Controllers\Traits;

use Illuminate\Support\Facades\Auth;
use DB; 

trait MasterTrait{
    
    public function createTable($model_name, $data){
      return $model_name::create($data);
    }

    public function createTableWithId($model_name, $data){
      return $model_name::create($data)->id;
    }


    public function updateTable($model_name,$cond,$data){
        return $model_name::where($cond)->update($data);
    }

    public function checkTable($model_name,$cond){
      return $model_name::where($cond)->count();
    }

    public function singleData($model_name, $cond){
      return $model_name::where($cond)->first();
    }

    public function latestData($model_name, $cond){
      return $model_name::where($cond)->orderBy("created_at","DESC")->first();
    }
    public function selecLatestData($model_name,$fields,$cond){
      return $model_name::where($cond)->select($fields)->orderBy("created_at","DESC")->first();
    }
    public function selectData($model_name,$fields,$cond){
      return $model_name::where($cond)->select($fields)->first();
    }

    public function selectAllData($model_name,$fields,$cond){
      return $model_name::where($cond)->select($fields)->get();
    }

    public function allData($model_name, $cond){
      return $model_name::where($cond)->get();
    }
    
    public function allDataLatest($model_name, $cond){
      return $model_name::where($cond)->orderBy('created_at', 'DESC')->get();
    }
    
    public function allDataOrderBy($model_name, $cond,$fields, $order){
      return $model_name::where($cond)->orderBy($fields, $order)->get();
    }

    public function fetchAll($model_name){
      return $model_name::all();
    }

    public function fetchAllOrderBy($model_name, $filed_name, $order){
      return $model_name::orderBy($filed_name, $order)->get();
    }

    public function find($model_name, $id){
      return $model_name::find($id);
    }

    public function delete($model_name, $id){
      return $model_name::find($id)->delete();
    }

    public function deleteTable($model_name, $cond){
      return $model_name::where($cond)->delete();
    }

    public function customData($query){
      return DB::select($query);
    }
    
    public function checkAuthor($product_id){
        $auth_id = Auth::User()->id;
        $role_id= Auth::User()->role_id;
        //dd($role_id);
        if($role_id == "1")
        return $this->checkTable("\App\Product",["id" => $product_id]);
        else
         return $this->checkTable("\App\Product",["id" => $product_id, 'user_id' => $auth_id]);
       
    }
    public function cURL_helper($url, $method, $params, $header,$username,$password){

        $ch = curl_init();
    
        curl_setopt($ch, CURLOPT_URL, $url);
    
        if ($method == "GET") {
          curl_setopt($ch, CURLOPT_POST, false);
          curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        } else {
          curl_setopt($ch, CURLOPT_POST, true);
          curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
          curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);
          curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
    
        $result = curl_exec($ch);
        // $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    
        curl_close($ch);
    
        return $result;
  }
  
  public function numberToWord($num = '')
    {
        $num    = ( string ) ( ( int ) $num );
        
        if( ( int ) ( $num ) && ctype_digit( $num ) )
        {
            $words  = array( );
             
            $num    = str_replace( array( ',' , ' ' ) , '' , trim( $num ) );
             
            $list1  = array('','one','two','three','four','five','six','seven',
                'eight','nine','ten','eleven','twelve','thirteen','fourteen',
                'fifteen','sixteen','seventeen','eighteen','nineteen');
             
            $list2  = array('','ten','twenty','thirty','forty','fifty','sixty',
                'seventy','eighty','ninety','hundred');
             
            $list3  = array('','thousand','million','billion','trillion',
                'quadrillion','quintillion','sextillion','septillion',
                'octillion','nonillion','decillion','undecillion',
                'duodecillion','tredecillion','quattuordecillion',
                'quindecillion','sexdecillion','septendecillion',
                'octodecillion','novemdecillion','vigintillion');
             
            $num_length = strlen( $num );
            $levels = ( int ) ( ( $num_length + 2 ) / 3 );
            $max_length = $levels * 3;
            $num    = substr( '00'.$num , -$max_length );
            $num_levels = str_split( $num , 3 );
             
            foreach( $num_levels as $num_part )
            {
                $levels--;
                $hundreds   = ( int ) ( $num_part / 100 );
                $hundreds   = ( $hundreds ? ' ' . $list1[$hundreds] . ' Hundred' . ( $hundreds == 1 ? '' : 's' ) . ' ' : '' );
                $tens       = ( int ) ( $num_part % 100 );
                $singles    = '';
                 
                if( $tens < 20 ) { $tens = ( $tens ? ' ' . $list1[$tens] . ' ' : '' ); } else { $tens = ( int ) ( $tens / 10 ); $tens = ' ' . $list2[$tens] . ' '; $singles = ( int ) ( $num_part % 10 ); $singles = ' ' . $list1[$singles] . ' '; } $words[] = $hundreds . $tens . $singles . ( ( $levels && ( int ) ( $num_part ) ) ? ' ' . $list3[$levels] . ' ' : '' ); } $commas = count( $words ); if( $commas > 1 )
            {
                $commas = $commas - 1;
            }
             
            $words  = implode( ', ' , $words );
             
            $words  = trim( str_replace( ' ,' , ',' , ucwords( $words ) )  , ', ' );
            if( $commas )
            {
                $words  = str_replace( ',' , ' and' , $words );
            }
             
            return $words .' Ruppes Only';
        }
        else if( ! ( ( int ) $num ) )
        {
            return 'Zero';
        }
        return '';
    }
  
  
  
  
  
  
  
  
  
    
  public function sendMail($to,$subject,$body){
        $from = "contact@88gravity.com";
        $from = 'firsthalt <contact@88gravity.com>';
        $headers = "From: " .($from) . "\r\n";
        $headers .= "Reply-To: ".($from) . "\r\n";
        $headers .= "Return-Path: ".($from) . "\r\n";;
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $headers .= "X-Priority: 1 (Highest)\n";
        $headers .= "X-MSMail-Priority: High\n";
        $headers .= "Importance: High\n";
        $headers .= 'Cc: nitish.88gravity@gmail.com' . "\r\n";
        $headers .= 'Cc: ajayjha@88gravity.com' . "\r\n";
        $headers .= 'Cc: depreet@88gravity.com' . "\r\n";
        $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
        mail($to,$subject,$body,$headers);
  }

}