  <div class="container">
        <div class="jumbotron text-center bg-transparent margin-none">
            <h1>HISTORY BOKING LAPANGAN ANDA</h1>
            <p></p>
        </div>
        <div class="page-section">
            <div class="row">
                <div class="col-md-12 col-lg-12">
				 <h4 class="page-section-heading"> DAFTAR INVOICE </h4>
                    <div class="panel panel-default">
                        <!-- Data table -->
                        <table data-toggle="data-table" class="table" cellspacing="0" width="100%">
                             <thead>
                                        <tr>
                                            
                                            <th>No.Invoice</th>
                                            <th>Atas Nama</th>
                                            <th>Tgl.Boking </th>
                                            <th>Nomor Lapangan</th>
                                            <th>Jam</th>
                                            <th>Harga</th>
                                            <th>Jumlah Bayar</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                           
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                     	  <tr>
                                            
                                            <th>No.Invoice</th>
                                            <th>Atas Nama</th>
                                            <th>Tgl.Boking </th>
                                            <th>Nomor Lapangan</th>
                                            <th>Jam</th>
                                            <th>Harga</th>
                                            <th>Jumlah Bayar</th>
                                            <th>Status</th>
                                            <th>Konfirmasi</th>
                                       
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>
									<?php
									$no=1;
									$tglSekarang =date("Ymd");
									$SQL="SELECT * FROM tboking,trincian_boking WHERE trincian_boking.kdBoking=tboking.kdBoking AND tboking.usernameBoking='$_SESSION[username]'";
									$ExecuteQuery=mysql_query($SQL)or die(mysql_error());
									
									if($no%2==1){
										$class="odd gradeX";
																			
										}else{
											$class="even gradeC";
										}
										while($_data=mysql_fetch_array($ExecuteQuery)){
										// $tglInvoice= region($_data['tglInvoice']); ----
										$tglBoking= region($_data['tglBoking']);
										$harga=idr_f($_data['hargaBoking']);
										$total=idr_f($_data['totalBayar']);
										
										echo"
										<tr class=$class>
                                            
											<td>$_data[noInvoice]</td>
                                            <td>$_data[an]</td>
											<td>$tglBoking</td>
                                            <td>$_data[noLapangan]</td>
											<td>$_data[jamBoking]</td>
											<td>$harga</td>
											<td>Rp. 0</td>
											
                                            <td>";
											if($_data['statusBayar']=="B"){
												echo"<label class='label label-danger'>Belum Lunas</label>";
																							
												}elseif($_data['statusBoking']=="L"){
													echo"
													<label class='label label-success'>Lunas</label>
													";
													
													}
											
											
											echo"
											</td>
										  <td>
                                          <button type='button' data-toggle='modal' data-target='#modalForm' class='btn btn-success'>KONFIRMASI</button>
                                          </td>
											
							        </tr>
                                        
										
										";
										$no++;
										}
									?>
                                       
                                      
                                    </tbody>
                        </table>
                        <!-- // Data table -->

<!-- Modal -->
<div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
                <h4 class="modal-title" id="labelModalKu" align="center">KONFIRMASI PEMBAYARAN</h4>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <div class="form-group">
                       <label for="bank">BANK</label>
                       <select class="form-control" id="bank">
                              <option value="">--Pilih Bank--</option>
                              <option value="bca">BANK BCA (071828282)</option>
                              <option value="bri">BANK BRI (829283838)</option>
                              <option value="bni">BANK BNI (83984490)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="norek">NO.REKENING</label>
                        <input type="text" class="form-control" id="norek" placeholder="Masukkan No.Rekening Anda"/>
                    </div>
                    <div class="form-group">
                        <label for="atasnama">ATAS NAMA</label>
                        <input type="text" class="form-control" id="atasnama" placeholder="Atas Nama"/>
                    </div>
                    <div class="form-group">
                        <label for="jmh_bayar">JUMLAH BAYAR</label>
                        <input type="text" class="form-control" id="jmh_bayar" placeholder="0"/>
                    </div>
                    <div class="form-group form-control-material">
                                    
                                        <label for="struk-photo">Upload Foto:</label>
                                    </div>
                                    <div class="form-group form-control-material">
                                        <input class="form-control" type="file" id="wiz-photo"  name="strukPhoto" />
                                      
                                    </div>
                </form>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary submitBtn" onclick="kirimContactForm()">KIRIM</button>
            </div>
        </div>
    </div>
</div>




                    </div>
                </div>
            </div>
        </div>
    </div>
        