<?php

require_once('init.php');
loadScripts();

    $data = array("status" => "not set!");

    if(Utils::isGET()) {
        $lm = new LaptopManager();
        $rows = $lm->listColumns();

        $html = "";
        if(!$rows || count($rows) == 0) {
            $html = "<tr><td>There are no results.</td></tr>";
        } else {
             $html = "
             
             <tr><td><b>Laptop Information:</b></td></tr>";
            $html .= "";
            foreach($rows as $row) {
                    $placeHolder = " ";//prevent possible syntax error
                $desc = $row['column_name'];
                
                if($desc == 'p_name'){
                    $email = $desc;
                    $disp = "Product Name:";  
                    $placeHolder = "Dell XPS 13";
                    
                }elseif($desc == 'brand'){
                    $first_name = $desc;
                    $disp = "Brand:";    
                    $placeHolder = "Dell"; 
                    
                }elseif($desc == 'ram'){
                    $last_name = $desc;
                    $disp = "RAM(GB):"; 
                    $placeHolder = "8";    
                    
                }elseif($desc == 'storage_size'){
                    $address = $desc;
                    $disp = "Storage Capacity(GB):"; 
                    $placeHolder = "256";  
                    
                }elseif($desc == 'storage_type'){
                    $city = $desc;
                    $disp = "Type of Storage:";     
                    $placeHolder = "SSD or HDD";  
                    
                }elseif($desc == 'cpu'){
                    $province = $desc;
                    $disp = "Processor:";             
                    $placeHolder = "2.3GHz Intel Core i5-6200U";  
                    
                }elseif($desc == 'proc_speed'){
                    $postal_code = $desc;
                    $disp = "Processor Clock Speed(GHz):";   
                    $placeHolder = "2.3"; 
                    
                }elseif($desc == 'proc_cores'){
                    $province = $desc;
                    $disp = "Number of Processor Cores:";             
                    $placeHolder = "2";   
                    
                }elseif($desc == 'graphics'){
                    $postal_code = $desc;
                    $disp = "Graphics Card:";   
                    $placeHolder = "Intel HD Graphics 520";
                    
                }elseif($desc == 'display'){
                    $province = $desc;
                    $disp = "Display(Diagonal, Inches):";             
                    $placeHolder = "13.3";    
                    
                }elseif($desc == 'screen_size'){
                    $postal_code = $desc;
                    $disp = "Screen Size(Diagonal, Inches):";   
                    $placeHolder = "13.3";
                    
                    }elseif($desc == 'res_height'){
                    $postal_code = $desc;
                    $disp = "Resolution Height(Pixels):";   
                    $placeHolder = "3200";
                    
                }elseif($desc == 'res_width'){
                    $province = $desc;
                    $disp = "Resolution Width(Pixels):";             
                    $placeHolder = "1800";       
                }elseif($desc == 'price'){
                    $postal_code = $desc;
                    $disp = "Price(USD):";   
                    $placeHolder = "1449";
                    
                }elseif($desc == 'weight'){
                    $postal_code = $desc;
                    $disp = "Weight(lbs):";   
                    $placeHolder = "2.93";
                    
                }elseif($desc == 'os'){
                    $province = $desc;
                    $disp = "Operating System:";             
                    $placeHolder = "Windows";  
                    
                }elseif($desc == 'battery'){
                    $postal_code = $desc;
                    $disp = "Battery Life(Hrs):";   
                    $placeHolder = "13";
                    
                }elseif($desc == 'release_year'){
                    $postal_code = $desc;
                    $disp = "Release Year:";   
                    $placeHolder = "2015";
                    
                }elseif($desc == 'touch'){
                    $province = $desc;
                    $disp = "Touch Screen?:";             
                    $placeHolder = "1=yes, 0=no";
                    
                }elseif($desc == 'height'){
                    $postal_code = $desc;
                    $disp = "Height (Folded, Inches):";   
                    $placeHolder = "0.35";
                    
                }elseif($desc == 'width'){
                    $postal_code = $desc;
                    $disp = "Width(Inches)";   
                    $placeHolder = "11.97";
                    
                }elseif($desc == 'depth'){
                    $province = $desc;
                    $disp = "Depth(Inches):";             
                    $placeHolder = "7.87";   
                    
                }elseif($desc == 'pic'){
                    $postal_code = $desc;
                    $disp = "Picture:";   
                    $placeHolder = " ";
                    
                }elseif($desc == 'picurl'){
                    $province = $desc;
                    $disp = "Picture URL:";             
                    $placeHolder = "img/xps.jpg";   
                    
                }else{
                    $disp = $desc;
                }
                
                $html .= "
                            
                            <tr>
                           
                            <td>$disp</td>
                           
                            <td><input data-laptop-info ='$desc' type='text' placeholder='$placeHolder'  /></td>
                            
                            <tr>";                                              
                                    
            }
            
        }

        echo $html;
        return;

    } else {
        $data = array("status" => "error", "msg" => "Only GET allowed.");

    }

    echo json_encode($data, JSON_FORCE_OBJECT);

?>
