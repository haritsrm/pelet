@extends('layouts.layout')

@section('content')
                <div class="panel">
                    <div class="panel-body">
                        <div id="viewcode-form-register-script" class="viewcode-example">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Jenis Undangan &nbsp;
                                                <span class="require">*</span>
                                            </label>
                                            <select name="country" class="select-search">
                                                            <option value="">-- Pilih Jenis Undangan --</option>
                                                            <option value="Rapat"> Rapat </option>
                                                            <option value="Kegiatan"> Kegiatan </option>
                                                            <option value="Seminar"> Seminar</option>
                                                            <option value="FGD"> FGD </option>
                                                            <option value="Workshop"> Workshop</option>
                                                            <option value="Ceremonial"> Ceremonial</option>
                                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">
                                                Tangggal Surat &nbsp;
                                                <span class="require">*</span>
                                            </label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="icon-calendar22"></i></span>
                                                <input type="text" class="form-control daterange-single">
                                            </div>                                        
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">
                                                Nomor Surat &nbsp;
                                                <span class="require">*</span>
                                            </label>
                                            <input type="text" name="no_surat" class="form-control"/>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">
                                                Sifat &nbsp;
                                                <span class="require">*</span>
                                            </label>
                                            <input type="text" name="sifat" class="form-control"/>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">
                                                Perihal &nbsp;
                                                <span class="require">*</span>
                                            </label>
                                            <input type="text" name="perihal" class="form-control"/>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">
                                                Kepada &nbsp;
                                                <span class="require">*</span>
                                            </label>
                                            <input type="text" name="kepada" class="form-control"/>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">
                                                Tanggal Kegiatan &nbsp;
                                                <span class="require">*</span>
                                            </label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="icon-calendar22"></i></span>
                                                <input type="text" class="form-control daterange-single">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Pukul Kegiatan &nbsp;
                                                <span class="require">*</span>
                                            </label>
                                            <div class="input-group">
											    <span class="input-group-addon"><i class="icon-watch2"></i></span>
											    <input type="text" class="form-control" id="anytime-time" value="12:34">
										    </div>                                            
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">
                                                Tempat &nbsp;
                                                <span class="require">*</span>
                                            </label>
                                            <input type="text" name="password" class="form-control"/>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">
                                                Acara &nbsp;
                                                <span class="require">*</span>
                                            </label>
                                            <input type="text" name="password" class="form-control"/>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">
                                                Upload Surat &nbsp;
                                                <span class="require">*</span>
                                            </label>
                                            <form action="#" class="dropzone" id="dropzone_single"></form>                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-10">

                                    </div>
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-success btn-block">Submit </button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
@endsection