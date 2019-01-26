@extends('layouts.layout')

@section('content')

                    <!-- Basic datatable -->
                    <div class="panel panel-flat">
						<div class="panel-heading">
                            <a href="" class="btn btn-success"><span class="icon-pencil7"></span> Upload Surat Undangan</a>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<table class="table datatable-basic">
							<thead>
								<tr>
									<th>Nomor Surat</th>
									<th>Sifat</th>
									<th>Hal</th>
									<th>Tanggal</th>
                                    <th>Waktu</th>
                                    <th>Tempat</th>
                                    <th>Acara</th>
                                    <th>Status</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
                                @for($i=0;$i<10;$i++)
								<tr>
									<td>Bagek 100/NNN/01</td>
									<td>Penting</td>
									<td>Undangan FGD (Forum Group Discussion)</td>
									<td>15 Mei 2017</td>
                                    <td>08:00 s/d 17:00</td>
                                    <td>Hotel Novotel Bandung</td>
                                    <td>FGD Kerjasama antara Kabupaten/Kota Berbasis Potensi Unggulan Daerah</td>
									<td><span class="label label-success">Diterima</span></td>
									<td class="text-center">
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal_theme_danger"><i class="icon-search4"></i> Lihat</button>
									</td>
								</tr>
								<tr>
									<td>Bagek 100/NNN/01</td>
									<td>Penting</td>
									<td>Undangan FGD (Forum Group Discussion)</td>
									<td>15 Mei 2017</td>
                                    <td>08:00 s/d 17:00</td>
                                    <td>Hotel Novotel Bandung</td>
                                    <td>FGD Kerjasama antara Kabupaten/Kota Berbasis Potensi Unggulan Daerah</td>
									<td><span class="label label-warning">Disposisi</span></td>
									<td class="text-center">
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal_theme_danger"><i class="icon-search4"></i> Lihat</button>
									</td>
								</tr>
								<tr>
									<td>Bagek 100/NNN/01</td>
									<td>Penting</td>
									<td>Undangan FGD (Forum Group Discussion)</td>
									<td>15 Mei 2017</td>
                                    <td>08:00 s/d 17:00</td>
                                    <td>Hotel Novotel Bandung</td>
                                    <td>FGD Kerjasama antara Kabupaten/Kota Berbasis Potensi Unggulan Daerah</td>
									<td><span class="label label-danger">Ditolak</span></td>
									<td class="text-center">
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal_theme_danger"><i class="icon-search4"></i> Lihat</button>
									</td>
								</tr>
                                @endfor
							</tbody>
						</table>
					</div>
					<!-- /basic datatable -->

                    <!--modal -->
					<div id="modal_theme_danger" class="modal fade">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header bg-danger">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h6 class="modal-title">Undangan FGD (Forum Group Discussion) : Penting</h6>
								</div>

								<div class="modal-body">
								    <iframe src="http://localhost/pelet/upload/undangan/undangan.pdf" class="pdf-embed-content pdf" style="width:100%;" height="700" frameborder="0"></iframe>
                                    <div style="margin-left:75%">
                                        <button class="btn btn-success">Terima</button>
                                        <button class="btn btn-warning">Disposisi</button>
                                        <button class="btn btn-danger">Tolak</button>
                                    </div>
                                </div>

								<div class="modal-footer">
									<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /default modal -->
                    
@endsection