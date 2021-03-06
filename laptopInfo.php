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
                    $required = false;
                    $dropdown = false;
                    $hidden = false;
                    $placeHolder = " ";//prevent possible syntax error
                $desc = $row['column_name'];
                
                
                
                if($desc == 'p_name'){
                   
                    $disp = "Product Name:";  
                    $placeHolder = "Dell XPS 13";
                    $required = true;
                    
                }elseif($desc == 'brand'){
                    
                    $disp = "Brand:";    
                    $placeHolder = "Dell"; 
                    $required = true;
                    
                }elseif($desc == 'ram'){
                    
                    $disp = "RAM(GB):"; 
                    $placeHolder = "8";    
                    $required = true;
                    
                }elseif($desc == 'storage_size'){
                    
                    $disp = "Storage Capacity(GB):"; 
                    $placeHolder = "256";  
                    $required = true;
                    
                }elseif($desc == 'storage_type'){
                    
                    $disp = "Type of Storage:";     
                    $placeHolder = "SSD or HDD";  
                    $required = true;
                    
                }elseif($desc == 'cpu'){

                    $disp = "Processor:";             
                    $placeHolder = "2.3GHz Intel Core i5-6200U";  
                    $required = true;
                    
                }elseif($desc == 'proc_speed'){
                   
                    $disp = "Processor Clock Speed(GHz):";   
                    $placeHolder = "2.3"; 
                    $required = true;
                    
                }elseif($desc == 'proc_cores'){
                    
                    $disp = "Number of Processor Cores:";        
                    $placeHolder = "2";   
                    $required = true;
                    
                }elseif($desc == 'graphics'){
                    
                    $disp = "Graphics Card:";   
                    $placeHolder = "Intel HD Graphics 520";
                    $required = true;
                    
                }elseif($desc == 'display'){
                    
                    $disp = "Display(Diagonal, Inches):";        
                    $placeHolder = "13.3";    
                    $required = true;
                    
                }elseif($desc == 'screen_size'){
                   
                    $disp = "Screen Size(Diagonal, Inches):";   
                    $placeHolder = "13.3";
                    $required = true;
                    
                }elseif($desc == 'res_height'){
                   
                    $disp = "Resolution Height(Pixels):";   
                    $placeHolder = "3200";
                    $required = true;
                    
                }elseif($desc == 'res_width'){
                    
                    $disp = "Resolution Width(Pixels):";          
                    $placeHolder = "1800";       
                    $required = true;
                    
                }elseif($desc == 'price'){
                    
                    $disp = "Price(USD):";   
                    $placeHolder = "1449";
                    $required = true;
                    
                }elseif($desc == 'weight'){
                    
                    $disp = "Weight(lbs):";   
                    $placeHolder = "2.93";
                    $required = true;
                    
                }elseif($desc == 'os'){
                   
                    $disp = "Operating System:";             
                    $placeHolder = "Windows";  
                    $required = true;
                    $dropdown = true;
                    $option1 = "Windows";
                    $option2 = "OSX";
                    
                }elseif($desc == 'battery'){
                   
                    $disp = "Battery Life(Hrs):";   
                    $placeHolder = "13";
                    $required = true;
                    
                }elseif($desc == 'release_year'){
                   
                    $disp = "Release Year:";   
                    $placeHolder = "2015";
                    $required = true;
                    
                }elseif($desc == 'touch'){
                   
                    $disp = "Touch Screen?:";             
                    $placeHolder = "1=yes, 0=no";
                    $required = true;
                    
                }elseif($desc == 'height'){
                    
                    $disp = "Height (Folded, Inches):";   
                    $placeHolder = "0.35";
                    $required = true;
                    
                }elseif($desc == 'width'){
                    
                    $disp = "Width(Inches)";   
                    $placeHolder = "11.97";
                    $required = true;
                    
                }elseif($desc == 'depth'){
                   
                    $disp = "Depth(Inches):";             
                    $placeHolder = "7.87";   
                    
                }elseif($desc == 'pic'){
                    
                    $disp = "Picture:";   
                    $placeHolder = " ";
                    $required = true;
                    
                }elseif($desc == 'picurl'){
                    
                    $disp = "Picture URL:";             
                    $placeHolder = "img/xps.jpg";   
                    $required = true;
                    
                }else{
                    $disp = $desc;
                }
                if($disp != 'p_id'){
                if($required == true){
                $html .= "                            
                            <tr>
                           
                            <td>$disp</td>
                           
                            <td><input data-laptop-info ='$desc' type='text' placeholder='$placeHolder' required /></td>
                            
                            <tr>";                  
                }
//                else if($required == true && $dropdown == true){
//                $html .= "                            
//                            <tr>
//                           
//                            <td>$disp</td>
//                           
//                            <td>
//                            <select data-laptop-info ='$desc' required>
//                            <option data-laptop-info='$option1'>Windows</option>
//                            <option data-laptop-info='$option2'>OSX</option>
//                            </select>
//                            </td>
//                            
//                            <tr>";        
//                }
//                
                else{
                $html .= "                            
                            <tr>
                           
                            <td>$disp</td>
                           
                            <td><input data-laptop-info ='$desc' type='text' placeholder='$placeHolder' /></td>
                            
                            <tr>";             
                }
                }
                                    
            }
            
        }

        echo $html;
        return;

    } else {
        $data = array("status" => "error", "msg" => "Only GET allowed.");

    }

    echo json_encode($data, JSON_FORCE_OBJECT);

?>
