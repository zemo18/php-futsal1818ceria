 <div class='container'>
        <div class='page-section'>
            <div class='row'>
                <div class='col-md-12 col-lg-9'>
                    <div class='page-section padding-top-none'>
                        <div class='s-container'>
                            <h1 class='text-display-1 margin-top-none'>Info Lapangan FUTSAL 1818 CERIA</h1>

                        </div>
                        <br/>

                        <?php
                        $SQL=mysql_query("SELECT * FROM tlapangan ORDER BY noLapangan ASC");
                        while($_data=mysql_fetch_array($SQL)){
                            echo"
                             <h1 class='text-display-1 margin-top-none'>Lapangan Nomor : $_data[noLapangan]</h1>
                             <img class='paragraph-inline width-280 clearfix-xs width-100pc-xs' src='gambar/lapangan_img/height/$_data[gambarLapangan]' alt='image' /> 
                             <p>$_data[deskripsi]</p>
                             <div><p></p><br>
                             </div><br>

                            ";



                        }


                        ?>
                           
                      
                    </div>
                                                       
                </div>
               
            </div>
        </div>
    </div>