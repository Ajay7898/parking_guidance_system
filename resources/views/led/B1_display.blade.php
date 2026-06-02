<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Parking Dashboard - LED</title>
 <link rel="stylesheet" href="{{ asset('CSS/B1_display.css') }}">
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</head>

<body>

<div class="screen-wrapper">

    <div class="header">🚗 Parking Dashboard - Basement 1</div>

    <!-- SUMMARY -->
    <div class="summary">
        <div class="card total">
            <div>🅿️</div>
            <div>
                <div>Total Slots</div>
                <div class="value" id="total_slots">0</div>
            </div>
        </div>

        <div class="card available">
            <div>✅</div>
            <div>
                <div>Available</div>
                <div class="value" id="available_slots">0</div>
            </div>
        </div>

        <div class="card occupied">
            <div>🚗</div>
            <div>
                <div>Occupied</div>
                <div class="value" id="booked_slots">0</div>
            </div>
        </div>
    </div>

    <!-- MAP -->
    <div class="map" id="map">
      


        <div class="grid-row row-a">
            <div class="row-label">A</div>
            <div class="grid A"> 
                <div class="block block-1" >
                    <div class="pillar">A1</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A01-a">a</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A01-b">b</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A01-c">c</div>
                </div>
                
                <div class="block block-2">
                    <div class="pillar">A2</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A02-a">a</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A02-b">b</div>
                </div>
                
                <div class="block block-3">
                    <div class="pillar">A3</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A03-a">a</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A03-b">b</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A03-c">c</div>
                </div>
                
                <div class="block block-4">
                    <div class="pillar">A4</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A04-a">a</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A04-b">b</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A04-c">c</div>
                </div>

                <div class="block block-5">
                    <div class="pillar">A5</div>
                    <div class="slot booked-1" data-block="B1-A" data-slot="A05-a">a</div>
                    <div class="slot booked-2" data-block="B1-A" data-slot="A05-c">c</div>
                </div>
                
                <div class="block block-6">
                    <div class="pillar">A6</div>
                    <div class="hatch-block-6"></div>
                </div>
                
                <div class="block block-7">
                    <div class="pillar">A7</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A07-a">a</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A07-b">b</div>
                  
                 
                </div>
                 <div class="block block-8">
                    <!-- <div class="pillar">A8</div> -->
                                      
                    <div class="slot booked-8" data-block="B1-A" data-slot="A08-a">a</div>			
                    <div class="slot booked-8" data-block="B1-A" data-slot="A08-b">b</div>
                    <div class="slot booked-8" data-block="B1-A" data-slot="A08-c">c</div>
                </div>
                
                <div class="block block-9">
                    <div class="pillar">A9</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A09-a">a</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A09-b">b</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A09-c">c</div>
                </div>
                
                <div class="block block-10">
                    <div class="pillar">A10</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A10-a">a</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A10-b">b</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A10-c">c</div>
                </div>
                
                <div class="block block-11">
                    <div class="pillar">A11</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A11-a">a</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A11-b">b</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A11-c">c</div>
                </div>
                
                <div class="block block-12">
                    <div class="pillar">A12</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A12-a">a</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A12-b">b</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A12-c">c</div>
                </div>
                
                <div class="block block-13">
                    <div class="pillar">A13</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A13-a">a</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A13-b">b</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A13-c">c</div>
                </div>
                
                <div class="block block-14">
                    <div class="pillar">A14</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A14-a">a</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A14-b">b</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A14-c">c</div>
                </div>
                
                <div class="block block-15">
                    <div class="pillar">A15</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A15-a">a</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A15-b">b</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A15-c">c</div>
                </div>
                
                <div class="block block-16">
                    <div class="pillar">A16</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A16-a">a</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A16-b">b</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A16-c">c</div>
                </div>
                
                <div class="block block-17">
                    <div class="pillar">A17</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A17-a">a</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A17-b">b</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A17-c">c</div>
                </div>
                
                <div class="block block-18">
                    <div class="pillar">A18</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A18-a">a</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A18-b">b</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A18-c">c</div>
                </div>
                
                <div class="block block-19">
                    <div class="pillar">A19</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A19-a">a</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A19-b">b</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A19-c">c</div>
                </div>
                
                <div class="block block-20">
                    <div class="pillar">A20</div>   
                           
                </div>
                <div class="block block-21">
                    <!-- <div class="pillar">A21</div>    -->
                           
                </div>
                
                <div class="block block-22">
                    <div class="pillar">A22</div>   
                    <div class="slot booked" data-block="B1-A" data-slot="A22-b">b</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A22-c">c</div>       
                </div>
        

                <div class="block block-23">
                    <div class="pillar">A23</div>   
                    <div class="slot booked" data-block="B1-A" data-slot="A23-a">a</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A23-b">b</div>       
                    <div class="slot booked" data-block="B1-A" data-slot="A23-c">c</div>  
                    <div class="hatch-block-23"></div>  
                            
                </div>
                <div class="block block-24">               
                  			       
                </div>
                <div class="block block-25">               
                    <div class="slot booked" data-block="B1-A" data-slot="A25-a">a</div>			       
                </div>

                <div class="block block-26">
                    <div class="pillar">A26</div>   
                    <div class="slot booked" data-block="B1-A" data-slot="A26-a">a</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A26-b">b</div>       
                    <div class="slot booked" data-block="B1-A" data-slot="A26-c">c</div>           		       
                </div>

                <div class="block block-27">
                    <div class="pillar">A27</div>   
                    <div class="slot booked" data-block="B1-A" data-slot="A27-a">a</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A27-b">b</div>       
                    <div class="slot booked" data-block="B1-A" data-slot="A27-c">c</div>           		       
                </div>
                <div class="block block-28">
                    <div class="pillar">A28</div>   
                    <div class="slot booked" data-block="B1-A" data-slot="A28-a">a</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A28-b">b</div>       
                    <div class="slot booked" data-block="B1-A" data-slot="A28-c">c</div>           		       
                </div>
                <div class="block block-29">
                    <div class="pillar">A29</div>   
                    <div class="slot booked" data-block="B1-A" data-slot="A29-a">a</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A29-b">b</div>       
                    <div class="slot booked" data-block="B1-A" data-slot="A29-c">c</div>           		       
                </div>
                <div class="block block-30">
                    <div class="pillar">A30</div>   
                    <div class="slot booked" data-block="B1-A" data-slot="A30-a">a</div>
                    <div class="slot booked" data-block="B1-A" data-slot="A30-b">b</div>       
                    <div class="slot booked" data-block="B1-A" data-slot="A30-c">c</div>           		       
                </div>
                <div class="block block-31">
                    <div class="pillar">A31</div>                       		       
                </div>
            </div>
        </div>

        <div class="grid-row row-b">
            <div class="row-label">B</div>
                <div class="grid B">
            
                    <!-- Example Parking Block 1 -->
                    <div class="block block-1" >
                        <div class="pillar">B1</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B01-a">a</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B01-b">b</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B01-c">c</div>
                    </div>
                    
                    <div class="block block-2">
                        <div class="pillar">B2</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B02-a">a</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B02-b">b</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B02-c">c</div>
                    </div>
                    
                    <div class="block block-3" >
                        <div class="pillar">B3</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B03-a">a</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B03-b">b</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B03-c">c</div>
                    </div>
                    
                    <div class="block block-4" >
                        <div class="pillar">B4</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B04-a">a</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B04-b">b</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B04-c">c</div>
                    </div>

                    <div class="block block-5" >
                        <div class="pillar">B5</div>
                    </div>
                    
                    <div class="block block-6" >
                        <div class="pillar">B6</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B06-a">a</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B06-b">b</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B06-c">c</div>
                    </div>

                    <div class="block block-7" >
                        <div class="pillar">B7</div>
                        <div class="hatch"></div>
                        <div class="slot booked" data-block="B1-B" data-slot="B07-a">a</div>
                        <div class="hatch"></div>
                        <div class="slot booked" data-block="B1-B" data-slot="B07-b">b</div>          
                    </div>

                    <div class="block block-8" >
                        <div class="pillar">B8</div>            
                        <div class="hatch"></div>
                        <div class="slot booked" data-block="B1-B" data-slot="B08-a">a</div>
                        <div class="hatch"></div>
                        <div class="slot booked" data-block="B1-B" data-slot="B08-b">b</div>          
                    </div>
                    
                    <div class="block block-9" >
                        <div class="pillar">B9</div>
                        <div class="hatch"></div>
                        <div class="slot booked" data-block="B1-B" data-slot="B09-a">a</div>
                        <div class="hatch"></div>
                        <div class="slot booked" data-block="B1-B" data-slot="B09-b">b</div>          
                    </div>
                    <div class="block block-10" >
                        <div class="pillar">B10</div>
                        <div class="hatch"></div>
                        <div class="slot booked" data-block="B1-B" data-slot="B10-a">a</div>
                        <div class="hatch"></div>
                        <div class="slot booked" data-block="B1-B" data-slot="B10-b">b</div>          
                    </div>
                    <div class="block block-11" >
                        <div class="pillar">B11</div>
                        <div class="hatch"></div>
                        <div class="slot booked" data-block="B1-B" data-slot="B11-a">a</div>
                        <div class="hatch"></div>
                        <div class="slot booked" data-block="B1-B" data-slot="B11-b">b</div>          
                    </div>
                    <div class="block block-12">
                        <div class="pillar">B12</div>
                        <div class="hatch"></div>
                        <div class="slot booked" data-block="B1-B" data-slot="B12-a">a</div>
                        <div class="hatch"></div>
                        <div class="slot booked" data-block="B1-B" data-slot="B12-b">b</div>          
                    </div>
                    <div class="block block-13" >
                       
                    </div>

                    <div class="block block-14">
                        <div class="hatch-block-14"></div>
                    </div>
                    <div class="block block-15" >
                       
                    </div>
                    <div class="block block-16" >
                        <div class="pillar">B16</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B16-a">a</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B16-b">b</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B16-c">a</div>
                    </div>
                    <div class="block block-17" >
                        <div class="pillar">B17</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B17-a">a</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B17-b">b</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B17-c">c</div>
                    </div>
                    <div class="block block-18" >
                        <div class="pillar">B18</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B18-a">a</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B18-b">b</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B18-c">c</div>
                    </div>
                    <div class="block block-19" >
                        <div class="pillar">B19</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B19-a">a</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B19-b">b</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B19-c">c</div>
                    </div>
                    <div class="block block-20" >
                        <div class="pillar">B20</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B20-a">a</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B20-b">b</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B20-c">c</div>
                    </div>
                    <div class="block block-21" >
                        <div class="pillar">B21</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B21-a">a</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B21-b">b</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B21-c">c</div>
                    </div>
                    <div class="block block-22" >
                        <div class="pillar">B22</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B22-a">a</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B22-b">b</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B22-c">c</div>
                    </div>
                    <div class="block block-23" >
                        <div class="pillar">B23</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B23-a">a</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B23-b">b</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B23-c">c</div>
                    </div>
                    <div class="block block-24" >
                        <div class="pillar">B24</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B24-a">a</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B24-b">b</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B24-c">c</div>
                    </div>
                    <div class="block block-25" >
                        <div class="pillar">B25</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B25-a">a</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B25-b">b</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B25-c">c</div>
                    </div>
                    <div class="block block-26" >
                        <div class="pillar">B26</div>            
                    </div>
                    <div class="block block-27" >
                        <div class="pillar">B27</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B27-a">a</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B27-b">b</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B27-c">c</div>
                    </div>
                    <div class="block block-28" >
                        <div class="pillar">B28</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B28-a">a</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B28-b">b</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B28-c">c</div>
                    </div>
                    <div class="block block-29" >
                        <div class="pillar">B29</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B29-a">a</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B29-b">b</div>
                        <div class="slot booked" data-block="B1-B" data-slot="B29-c">c</div>
                    </div>
                    <div class="block block-30">                       
                    </div>

                    <div class="block block-31">                       
                    </div>
                </div>
        </div>

        <div class="grid-row row-c">
            <div class="row-label">C</div>
                    <div class="grid C">
                        
                        <!-- Example Parking Block 1 -->
                        <div class="block block-1" >
                            <div class="pillar" >C1</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C01-a">a</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C01-b">b</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C01-c">c</div>
                        </div>
                        
                        <div class="block block-2">
                            <div class="pillar">C2</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C02-a">a</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C02-b">b</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C02-c">c</div>
                        </div>
                        
                        <div class="block block-3" >
                            <div class="pillar">C3</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C03-a">a</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C03-b">b</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C03-c">c</div>
                        </div>
                        
                        <div class="block block-4">
                            <div class="pillar">C4</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C04-a">a</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C04-b">b</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C04-c">c</div>
                        </div>

                        <div class="block block-5" >
                            <div class="pillar">C5</div>
                        </div>
                        
                        <div class="block block-6 vertical-group" >
                            <div class="pillar">C6</div>
                            <div class="vertical-slot booked" data-block="B1-C" data-slot="BC06-c">c</div>
                            <div class="vertical-slot booked" data-block="B1-D" data-slot="CD06-a">a</div>
                            <div class="vertical-slot booked" data-block="B1-D" data-slot="CD06-b">b</div>
                            <div class="vertical-slot booked" data-block="B1-D" data-slot="CD06-c">c</div>
                        </div>
                        <div class="block block-7" >               
                        </div>
                        <div class="block block-8" >               
                        </div>
                        <div class="block block-9" >               
                        </div>
                        <div class="block block-10" >               
                        </div>
                        <div class="block block-11" >               
                        </div>
                        <div class="block block-12" >               
                        </div>
                        <div class="block block-13" >               
                        </div>

                        <div class="block block-14 vertical-group">
                            <div class="pillar">C14</div>      

                            <div class="vertical-slot booked" data-block="B1-C" data-slot="CD14-a">a</div>        
                            <div class="vertical-slot booked" data-block="B1-C" data-slot="CD14-b">b</div>        
                            <div class="vertical-slot booked" data-block="B1-C" data-slot="CD14-c">c</div>   
                        </div>
                        <div class="block block-15" >                
                        </div>

                        <div class="block block-16" >
                            <div class="pillar">C16</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C16-a">a</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C16-b">b</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C16-c">c</div>
                        </div>
                        <div class="block block-17" >
                            <div class="pillar">C17</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C17-a">a</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C17-b">b</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C17-c">c</div>
                        </div>
                        <div class="block block-18" >
                            <div class="pillar">C18</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C18-a">a</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C18-b">b</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C18-c">c</div>
                        </div>
                        <div class="block block-19" >
                            <div class="pillar">C19</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C19-a">a</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C19-b">b</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C19-c">c</div>
                        </div>
                        <div class="block block-20" >
                            <div class="pillar">C20</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C20-a">a</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C20-b">b</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C20-c">c</div>
                        </div>
                        <div class="block block-21" >
                            <div class="pillar">C21</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C21-a">a</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C21-b">b</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C21-c">c</div>
                        </div>
                        <div class="block block-22">
                            <div class="pillar">C22</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C22-a">a</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C22-b">b</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C22-c">c</div>
                        </div>
                        <div class="block block-23" >
                            <div class="pillar">C23</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C23-a">a</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C23-b">b</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C23-c">c</div>
                        </div>
                        <div class="block block-24" >
                            <div class="pillar">C24</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C24-a">a</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C24-b">b</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C24-c">c</div>
                        </div>
                        <div class="block block-25" >
                            <div class="pillar">C25</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C25-a">a</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C25-b">b</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C25-c">c</div>
                        </div>
                        <div class="block block-26">
                            <div class="pillar">C26</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C26-a">a</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C26-b">b</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C26-c">c</div>
                        </div>
                        <div class="block block-27" >
                            <div class="pillar">C27</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C27-a">a</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C27-b">b</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C27-c">c</div>
                        </div>
                        <div class="block block-28">
                            <div class="pillar">C28</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C28-a">a</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C28-b">b</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C28-c">c</div>
                        </div>
                        <div class="block block-29" >
                            <div class="pillar">C29</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C29-a">a</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C29-b">b</div>
                            <div class="slot booked" data-block="B1-C" data-slot="C29-c">c</div>
                        </div>
                        <div class="block block-30">                
                        </div>
                        <div class="block block-31">                
                        </div>
                    </div>
        </div>
        <div class="grid-row row-d">
            <div class="row-label">D</div>
            <div class="grid">
            
                <!-- Example Parking Block 1 -->
                <div class="block block-1">
                    <div class="pillar">D1</div>
                    <div class="hatch-block-1"></div>
                </div>
                
                <div class="block block-2">
                    <div class="pillar">D2</div>
                    <div class="hatch-block-2"></div>
                </div>
                
                <div class="block block-3">
                    <div class="pillar">D3</div>
                    <div class="hatch-block-3"></div>
                </div>
                
                <div class="block block-4" >
                    <div class="pillar">D4</div>
                    <div class="slot booked" data-block="B1-D" data-slot="D04-a">a</div>
                    <div class="slot booked" data-block="B1-D" data-slot="D04-b">b</div>
                    <div class="slot booked" data-block="B1-D" data-slot="D04-c">c</div>
                </div>

                <div class="block block-5" >
                    <div class="pillar">D5</div>
                </div>
                
                <div class="block block-6" >
                    <div class="pillar">D6</div>
                    <div class="hatch-block-6"></div>
                </div>
                <div class="block block-7">                
                </div>
                <div class="block block-8">                
                </div>
                <div class="block block-9">                
                </div>
                <div class="block block-10">                
                </div>
                <div class="block block-11">                
                </div>
                <div class="block block-12">                
                </div>
                <div class="block block-13">                
                </div>
                <div class="block block-14 vertical-group d14-adjust">
                    <div class="pillar">D14</div>        

                    <div class="vertical-slot booked" data-block="B1-D" data-slot="DE14-a">a</div>        
                    <div class="vertical-slot booked" data-block="B1-D" data-slot="DE14-b">b</div>        
                    <div class="vertical-slot booked" data-block="B1-D" data-slot="DE14-c">c</div>   
                </div>
                <div class="block block-15">              
                </div>
                <div class="block block-16">              
                </div>
                <div class="block block-17">              
                </div>
                <div class="block block-18">              
                </div>
                <div class="block block-19">              
                </div>
                <div class="block block-20">              
                </div>
                <div class="block block-21">              
                </div>
                <div class="block block-22">              
                </div>
                <div class="block block-23">              
                </div>

                
                <div class="block block-24" >
                    <div class="pillar">D24</div>
                    <div class="slot booked" data-block="B1-D" data-slot="D24-b">b</div>
                    <div class="slot booked" data-block="B1-D" data-slot="D24-c">c</div>
                
                </div>
                <div class="block block-25" >
                </div>
            
                <div class="block block-26" >
                    <div class="pillar">D26</div>  
                    <div class="slot booked" data-block="B1-D" data-slot="D26-b">b</div>          
                    <div class="slot booked" data-block="B1-D" data-slot="D26-c">c</div>
                            
                </div>
                <div class="block block-27" >
                    <div class="pillar">D27</div>
                    <div class="slot booked" data-block="B1-D" data-slot="D27-b">b</div>
                    <div class="slot booked" data-block="B1-D" data-slot="D27-c">c</div>
                    
                </div>
                <div class="block block-28" >
                    <div class="pillar">D28</div>  
                </div>
                <div class="block block-29" >
                    <div class="pillar">D29</div>
                    <div class="slot booked" data-block="B1-D" data-slot="D29-b">b</div>
                    <div class="slot booked" data-block="B1-D" data-slot="D29-c">c</div>
                
                </div>
                <div class="block block-30" >
                    <div class="pillar">D30</div>
                    <div class="slot booked" data-block="B1-D" data-slot="D30-a">a</div>
                    <div class="slot booked" data-block="B1-D" data-slot="D30-b">b</div>          
                </div>

                <div class="block block-31" >
                </div>
                

            </div>
        </div>
        <div class="grid-row row-e">
            <div class="row-label">E</div>
            <div class="grid">
            
                <!-- Example Parking Block 1 -->
                <div class="block block-1" >
                    <div class="pillar">E1</div>
                    <div class="hatch-block-1"></div>
                </div>
                
                <div class="block block-2" >
                    <div class="pillar">E2</div>
                <div class="hatch-block-2"></div>
                </div>
                
                <div class="block block-3" >
                    <div class="pillar">E3</div>
                    <div class="hatch-block-3"></div>
                </div>
                
                <div class="block block-4" >
                    <div class="pillar">E4</div>
                    <div class="slot booked" data-block="B1-E" data-slot="E04-a">a</div>
                    <div class="slot booked" data-block="B1-E" data-slot="E04-b">b</div>
                    <div class="slot booked" data-block="B1-E" data-slot="E04-c">c</div>
                </div>

                <div class="block block-5" >
                    <div class="pillar">E5</div>
                
                </div>
                
                <div class="block block-6" >
                    <div class="pillar">E6</div>
                    <div class="hatch-block-6"></div>
                
                </div>
                <div class="block block-7" >
                </div>
                <div class="block block-8" >
                </div>
                <div class="block block-9" >
                </div>
                <div class="block block-10" >
                </div>
                <div class="block block-11" >
                </div>
                <div class="block block-12" >
                </div>
                <div class="block block-13" >
                </div>
                <div class="block block-14 vertical-group " >
                    <div class="pillar">E14</div>                   
                    <div class="vertical-slot booked" data-block="B1-E" data-slot="EF14-a">a</div>        
                    <div class="vertical-slot booked" data-block="B1-E" data-slot="EF14-b">b</div>        
                    <div class="vertical-slot booked" data-block="B1-E" data-slot="EF14-c">c</div>   
                
                </div>
                <div class="block block-15" >
                </div>
                <div class="block block-16" >
                </div>
                <div class="block block-17" >
                </div>
                <div class="block block-18" >
                </div>
                <div class="block block-19" >
                </div>
                <div class="block block-20" >
                </div>
                <div class="block block-21" >
                </div>
                    
            </div>
        </div>
        <div class="grid-row row-f">
            <div class="row-label">F</div>
            <div class="grid">
            
                <!-- Example Parking Block 1 -->
                <div class="block block-1" >
                    <div class="pillar">F1</div>
                    <div class="slot booked" data-block="B1-F" data-slot="F01-a">a</div>
                    <div class="slot booked" data-block="B1-F" data-slot="F01-b">b</div>
                    <div class="slot booked" data-block="B1-F" data-slot="F01-c">c</div>
                </div>
                
                <div class="block block" >
                    <div class="pillar">F2</div>
                    <div class="slot booked" data-block="B1-F" data-slot="F02-a">a</div>
                    <div class="slot booked" data-block="B1-F" data-slot="F02-b">b</div>
                    <div class="slot booked" data-block="B1-F" data-slot="F02-c">c</div>
                </div>
                
                <div class="block block-3">
                    <div class="pillar">F3</div>
                    <div class="slot booked" data-block="B1-F" data-slot="F03-a">a</div>
                    <div class="slot booked" data-block="B1-F" data-slot="F03-b">b</div>
                    <div class="slot booked" data-block="B1-F" data-slot="F03-c">c</div>
                </div>
                
                <div class="block block-4" >
                    <div class="pillar">F4</div>
                    <div class="slot booked" data-block="B1-F" data-slot="F04-a">a</div>
                    <div class="slot booked" data-block="B1-F" data-slot="F04-b">b</div>
                    <div class="slot booked" data-block="B1-F" data-slot="F04-c">c</div>
                </div>

                <div class="block block-5" >
                    <div class="pillar">F5</div>            
                </div>
                
                <div class="block block-6" >
                    <div class="pillar">F6</div>
                    <div class="slot booked" data-block="B1-F" data-slot="F06-a">a</div>
                    <div class="slot booked" data-block="B1-F" data-slot="F06-b">b</div>
                    <div class="slot booked" data-block="B1-F" data-slot="F06-c">c</div>
                
                </div>
                <div class="block block-7" >
                    <div class="pillar">F7</div>
                    <div class="slot booked" data-block="B1-F" data-slot="F07-a">a</div>
                    <div class="slot booked" data-block="B1-F" data-slot="F07-b">b</div>
                
                </div>
                <div class="block block-8">            
                </div>
                <div class="block block-9">            
                </div>
                <div class="block block-10">            
                </div>
                <div class="block block-11">            
                </div>
                <div class="block block-12">                         
                </div>
                <div class="block block-13">                         
                </div>
                
                <div class="block block-14 vertical-group f14-adjust">           
                    <div class="pillar">F14</div>                   

                    <div class="vertical-slot booked" data-block="B1-F" data-slot="FG14-a">a</div>        
                    <div class="vertical-slot booked" data-block="B1-F" data-slot="FG14-b">b</div>        
                    <div class="vertical-slot booked" data-block="B1-F" data-slot="FG14-c">c</div>   
                
                </div>
                <div class="block block-15" >          
                </div>
            

            </div>
        </div>
        <div class="grid-row row-g">
            <div class="row-label">G</div>
            <div class="grid">
            
            <!-- Example Parking Block 1 -->
            <div class="block block-1" >
                <div class="pillar">G1</div>
                <div class="slot booked" data-block="B1-G" data-slot="G01-a">a</div>
                <div class="slot booked" data-block="B1-G" data-slot="G01-b">b</div>
                <div class="slot booked" data-block="B1-G" data-slot="G01-c">c</div>
            </div>
            
            <div class="block block-2">
                <div class="pillar">G2</div>
                <div class="slot booked" data-block="B1-G" data-slot="G02-a">a</div>
                <div class="slot booked" data-block="B1-G" data-slot="G02-b">b</div>
                <div class="slot booked" data-block="B1-G" data-slot="G02-c">c</div>
            </div>
            
            <div class="block block-3">
                <div class="pillar">G3</div>
                <div class="slot booked" data-block="B1-G" data-slot="G03-a">a</div>
                <div class="slot booked" data-block="B1-G" data-slot="G03-b">b</div>
                <div class="slot booked" data-block="B1-G" data-slot="G03-c">c</div>
            </div>
            
            <div class="block block-4" >
                <div class="pillar">G4</div>
                <div class="slot booked" data-block="B1-G" data-slot="G04-a">a</div>
                <div class="slot booked" data-block="B1-G" data-slot="G04-b">b</div>
                <div class="slot booked" data-block="B1-G" data-slot="G04-c">c</div>
            </div>

            <div class="block block-5" >
                <div class="pillar">G5</div>
            
            </div>
            
            <div class="block block-6" >
                <div class="pillar">G6</div>
                <div class="slot booked" data-block="B1-G" data-slot="G06-a">a</div>
                <div class="slot booked" data-block="B1-G" data-slot="G06-b">b</div>
                <div class="slot booked" data-block="B1-G" data-slot="G06-c">c</div>
            
            </div>
            <div class="block block-7" >
                <div class="pillar">G7</div>
                <div class="slot booked" data-block="B1-G" data-slot="G07-a">a</div>
                <div class="slot booked" data-block="B1-G" data-slot="G07-b">b</div>
                <div class="slot booked" data-block="B1-G" data-slot="G07-c">c</div>
            
            </div>
            <div class="block block-8" >
                <div class="pillar">G8</div>            
                <div class="slot booked" data-block="B1-G" data-slot="G08-a">a</div>
                <div class="hatch"></div>
                <div class="slot booked" data-block="B1-G" data-slot="G08-b">b</div>          
                <div class="hatch"></div>
            </div>
            <div class="block block-9" >
                <div class="pillar">G9</div>            
                <div class="slot booked" data-block="B1-G" data-slot="G09-a">a</div>
                <div class="hatch"></div>
                <div class="slot booked" data-block="B1-G" data-slot="G09-b">b</div>           
                <div class="hatch"></div>
            </div>
            <div class="block block-10" >
                <div class="pillar">G10</div>            
                <div class="slot booked" data-block="B1-G" data-slot="G10-a">a</div>
                <div class="hatch"></div>
                <div class="slot booked" data-block="B1-G" data-slot="G10-b">b</div>               
                <div class="hatch"></div>
            </div>
            <div class="block block-11" >
                <div class="pillar">G11</div>            
                <div class="slot booked" data-block="B1-G" data-slot="G11-a">a</div>
                <div class="hatch"></div>
                <div class="slot booked" data-block="B1-G" data-slot="G11-b">b</div>         
                <div class="hatch"></div>
            </div>
            <div class="block block-12" >
                <div class="pillar">G12</div>            
                <div class="slot booked" data-block="B1-G" data-slot="G12-a">a</div>
                <div class="hatch"></div>
                <div class="slot booked" data-block="B1-G" data-slot="G12-b">b</div>          
                <div class="hatch"></div>
            </div>
            <div class="block block-13">              
            </div>
            <div class="block block-14 vertical-group">
                <div class="pillar">G14</div>                  

                <div class="vertical-slot booked" data-block="B1-G" data-slot="GH14-a">a</div>        
                <div class="vertical-slot booked" data-block="B1-G" data-slot="GH14-b">b</div>        
                <div class="vertical-slot booked" data-block="B1-G" data-slot="GH14-c">c</div>   
            </div>
             <div class="block block-15">              
            </div>

        </div>

        </div>
        <div class="grid-row row-h">
            <div class="row-label">H</div>
            <div class="grid">
                
                <!-- Example Parking Block 1 -->
                <div class="block block-1" >
                    <div class="pillar">H1</div>
                    <div class="slot booked" data-block="B1-H" data-slot="H01-a">a</div>
                    <div class="slot booked" data-block="B1-H" data-slot="H01-b">b</div>
                    <div class="slot booked" data-block="B1-H" data-slot="H01-c">c</div>
                </div>
                
                <div class="block block-2" >
                    <div class="pillar">H2</div>
                    <div class="slot booked" data-block="B1-H" data-slot="H02-a">a</div>
                    <div class="slot booked" data-block="B1-H" data-slot="H02-b">b</div>
                    <div class="slot booked" data-block="B1-H" data-slot="H02-c">c</div>
                </div>
                
                <div class="block block-3">
                    <div class="pillar">H3</div>
                    <div class="slot booked" data-block="B1-H" data-slot="H03-a">a</div>
                    <div class="slot booked" data-block="B1-H" data-slot="H03-b">🚗</div>
                    <div class="slot booked" data-block="B1-H" data-slot="H03-c">🚗</div>
                </div>
                
                <div class="block block-4">
                    <div class="pillar">H4</div>
                    <div class="slot booked" data-block="B1-H" data-slot="H04-a">🚗</div>
                    <div class="slot booked" data-block="B1-H" data-slot="H04-b">🚗</div>
                    <div class="slot booked" data-block="B1-H" data-slot="H04-c">a</div>
                </div>

                <div class="block block-5">
                    <div class="pillar">H5</div>
                
                </div>
                
                <div class="block block-6">
                    <div class="pillar">H6</div>
                    <div class="slot booked" data-block="B1-H" data-slot="H06-a">a</div>
                    <div class="slot booked" data-block="B1-H" data-slot="H06-b">b</div>
                    <div class="slot booked" data-block="B1-H" data-slot="H06-c">c</div>
                
                </div>
                <div class="block block-7">
                    <div class="pillar">H7</div>
                    <div class="slot booked" data-block="B1-H" data-slot="H07-a">a</div>
                    <div class="slot booked" data-block="B1-H" data-slot="H07-b">b</div>
                    <div class="slot booked" data-block="B1-H" data-slot="H07-c">c</div>
                
                </div>
                <div class="block block-8" >
                    <div class="pillar">H8</div>        
                    <div class="slot booked" data-block="B1-H" data-slot="H08-a">a</div>
                    <div class="slot booked" data-block="B1-H" data-slot="H08-b">b</div>
                    <!-- <div class="slot booked" data-block="B1-H" data-slot="H08-c">c</div> -->
                </div>
                <div class="block block-9" >
                    <div class="pillar">H9</div>            
                    <div class="slot booked" data-block="B1-H" data-slot="H09-a">a</div>
                    <div class="slot booked" data-block="B1-H" data-slot="H09-b">b</div>
                    <div class="slot booked" data-block="B1-H" data-slot="H09-c">c</div>
                </div>
                <div class="block block-10" >
                    <div class="pillar">H10</div>            
                    <div class="slot booked" data-block="B1-H" data-slot="H10-a">a</div>      
                
                    <div class="slot booked" data-block="B1-H" data-slot="H10-c">c</div>
                </div>
                <div class="block block-11" >
                    <div class="pillar">H11</div>            
                <div class="slot booked" data-block="B1-H" data-slot="H11-a">a</div>
                    <div class="slot booked" data-block="B1-H" data-slot="H11-b">b</div>
                    <div class="slot booked" data-block="B1-H" data-slot="H11-c">c</div>
                </div>
                <div class="block block-12" >
                    <div class="pillar">H12</div>            
                    <div class="slot booked" data-block="B1-H" data-slot="H12-a">a</div>
                    <div class="slot booked" data-block="B1-H" data-slot="H12-b">b</div>
                    <div class="slot booked" data-block="B1-H" data-slot="H12-c">c</div>
                </div>
                <div class="block block-13" >
                </div>
                
                <div class="block block-14 vertical-group h14-adjust">
                    <div class="pillar">H14</div>                   
                    <div class="vertical-slot booked" data-block="B1-H" data-slot="HJ14-a">a</div>        
                    <div class="vertical-slot booked" data-block="B1-H" data-slot="HJ14-b">b</div>        
                    <div class="vertical-slot booked" data-block="B1-H" data-slot="HJ14-c">c</div>   
                </div>
                <div class="block block-15" >
                </div>

        </div>

        </div>
        <div class="grid-row row-j">
            <div class="row-label">J</div>
            <div class="grid">
                
                <!-- Example Parking Block 1 -->
                <div class="block block-1">
                    <div class="pillar">J1</div>
                    <div class="slot booked" data-block="B1-J" data-slot="J01-a">a</div>
                    <div class="slot booked" data-block="B1-J" data-slot="J01-b">b</div>
                    <div class="slot booked" data-block="B1-J" data-slot="J01-c">c</div>
                </div>
                
                <div class="block block-2" >
                    <div class="pillar">J2</div>
                    <div class="slot booked" data-block="B1-J" data-slot="J02-a">a</div>
                    <div class="slot booked" data-block="B1-J" data-slot="J02-b">b</div>
                    <div class="slot booked" data-block="B1-J" data-slot="J02-c">c</div>
                </div>
                
                <div class="block block-3" >
                    <div class="pillar">J3</div>
                    <div class="slot booked" data-block="B1-J" data-slot="J03-a">a</div>
                    <div class="slot booked" data-block="B1-J" data-slot="J03-b">b</div>
                    <div class="slot booked" data-block="B1-J" data-slot="J03-c">c</div>
                </div>
                
                <div class="block block-4" >
                    <div class="pillar">J4</div>
                    <div class="slot booked" data-block="B1-J" data-slot="J04-a">a</div>
                    <div class="slot booked" data-block="B1-J" data-slot="J04-b">b</div>
                    <div class="slot booked" data-block="B1-J" data-slot="J04-c">c</div>
                </div>

                <div class="block block-5" >
                    <div class="pillar">J5</div>
                
                </div>
                
                <div class="block block-6" >
                    <div class="pillar">J6</div>
                    <div class="slot booked" data-block="B1-J" data-slot="J06-a">a</div>
                    <div class="slot booked" data-block="B1-J" data-slot="J06-b">b</div>
                    <div class="slot booked" data-block="B1-J" data-slot="J06-c">c</div>
                
                </div>
                <div class="block block-7" >
                    <div class="pillar">J7</div>
                    <div class="slot booked" data-block="B1-J" data-slot="J07-a">a</div>
                    <div class="slot booked" data-block="B1-J" data-slot="J07-b">b</div>
                    <div class="slot booked" data-block="B1-J" data-slot="J07-c">c</div>
                
                </div>
                <div class="block block-8" >
                    <div class="pillar">J8</div>        
                    <div class="slot booked" data-block="B1-J" data-slot="J08-a">a</div>
                    <div class="slot booked" data-block="B1-J" data-slot="J08-b">b</div>
                    <div class="slot booked" data-block="B1-J" data-slot="J08-c">c</div>
                </div>
                <div class="block block-9" >
                    <div class="pillar">J9</div>            
                    <div class="slot booked" data-block="B1-J" data-slot="J09-a">a</div>
                    <div class="slot booked" data-block="B1-J" data-slot="J09-b">b</div>
                    <div class="slot booked" data-block="B1-J" data-slot="J09-c">c</div>
                </div>
                <div class="block block-10" >
                    <div class="pillar">J10</div>            
                    <div class="slot booked" data-block="B1-J" data-slot="J10-a">a</div>     
                    <div class="slot booked" data-block="B1-J" data-slot="J10-b">b</div>
                </div>
                <div class="block block-11" >
                    <div class="pillar">J11</div>            
                    <div class="slot booked" data-block="B1-J" data-slot="J11-a">a</div>
                    <div class="slot booked" data-block="B1-J" data-slot="J11-b">b</div>
                    <div class="slot booked" data-block="B1-J" data-slot="J11-c">c</div>
                </div>
                <div class="block block-12" >
                    <div class="pillar">J12</div>            
                    <div class="slot booked" data-block="B1-J" data-slot="J12-a">a</div>
                    <div class="slot booked" data-block="B1-J" data-slot="J12-b">b</div>
                    <div class="slot booked" data-block="B1-J" data-slot="J12-c">c</div>
                </div>
                <div class="block block-13" >           
                </div>
                
            

            </div>


        </div>
        <div class="grid-row row-k">
            <div class="row-label">K</div>
            <div class="grid">
                
                <!-- Example Parking Block 1 -->
                <div class="block block-1">
                    <div class="pillar">K1</div>
                    <div class="slot booked" data-block="B1-k" data-slot="K01-a">a</div>
                    <div class="slot booked" data-block="B1-k" data-slot="K01-b">b</div>
                    <div class="slot booked" data-block="B1-k" data-slot="K01-c">c</div>
                </div>
                
                <div class="block block-2">
                    <div class="pillar">K2</div>
                    <div class="slot booked" data-block="B1-k" data-slot="K02-a">a</div>
                    <div class="slot booked" data-block="B1-k" data-slot="K02-b">b</div>
                
                </div>
                
                <div class="block block-3">
                    <div class="pillar">K3</div>
                    <div class="slot booked" data-block="B1-k" data-slot="K03-a">a</div>
                    <div class="slot booked" data-block="B1-k" data-slot="K03-b">b</div>
                    <div class="slot booked" data-block="B1-k" data-slot="K03-c">c</div>
                </div>
                
                <div class="block block-4" >
                    <div class="pillar">K4</div>
                    <div class="slot booked" data-block="B1-k" data-slot="K04-a">a</div>
                    <div class="slot booked" data-block="B1-k" data-slot="K04-b">b</div>
                    <div class="slot booked" data-block="B1-k" data-slot="K04-c">c</div>
                </div>

                <div class="block block-5" >
                    <div class="pillar">K5</div>
                    <div class="slot booked" data-block="B1-k" data-slot="K05-a">a</div>
                    <div class="slot booked" data-block="B1-k" data-slot="K05-b">b</div>
                    <div class="slot booked" data-block="B1-k" data-slot="K05-c">c</div>
                </div>
                
                <div class="block block-6" >
                    <div class="pillar">K6</div>          
                </div>
                <div class="block block-7" >
                    <div class="pillar">K7</div>
                    <div class="slot booked" data-block="B1-k" data-slot="K07-a">a</div>              
                </div>
                <div class="block block-8" >
                    <div class="pillar">K8</div>
                    <div class="slot booked" data-block="B1-k" data-slot="K08-a">a</div>                
                </div>
                <div class="block block-9" >
                    <div class="pillar">K9</div>
                    <div class="slot booked" data-block="B1-k" data-slot="K09-a">a</div>      
                </div>
                <div class="block block-10" >
                    <div class="pillar">K10</div>
                    <div class="slot booked" data-block="B1-k" data-slot="K10-a">a</div>
                </div>

            </div>
               

        </div>
    

    </div>

</div>

<script>
function loadParkingData() {
    fetch('/parking-data')
        .then(response => response.json())
        .then(res => {

            const slots = res.data;        // 👈 actual slot array
            const summary = res.summary;   // 👈 counts

            // Reset all slots
            document.querySelectorAll('.slot, .vertical-slot').forEach(el => {
                el.classList.remove('booked', 'available');
                el.textContent = '';
            });

            // Update slots
            slots.forEach(item => {

                let selector = `.slot[data-block="${item.block_name}"][data-slot="${item.slot_number}"], .vertical-slot[data-block="${item.block_name}"][data-slot="${item.slot_number}"]`;
                let el = document.querySelector(selector);

                if (!el) return;

                if (item.status == 1) {
                    el.classList.add('booked');
                    el.textContent = '🚗';
                } else {
                    el.classList.add('available');
                }
            });

            // ✅ Update summary (example)
            document.getElementById('total_slots').textContent = summary.total_slots ?? 0;
            document.getElementById('available_slots').textContent = summary.available_slots ?? 0;
            document.getElementById('booked_slots').textContent = summary.booked_slots ?? 0;

        })
        .catch(err => console.error('Error loading parking data:', err));
}

// First load
loadParkingData();

// Refresh every 60 seconds
setInterval(loadParkingData, 20000);
</script>

</body>
</html>