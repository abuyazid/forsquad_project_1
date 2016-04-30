<?= form_open_multipart('Input_Artikel/create', array('id'=>'form_input', 'name'=> 'form_input')) ?>

<!-- start div #main -->
	    <div id="main">
            <div class="main-content contact">
                <div class="contact-content">
                    <div class="marked-title">
                        <h3>Input Artikel <span>Form</span></h3>
                    </div>
                    <div class="contact-form">
                        <form action="#" method="post">
                            <div class="top-form">
                                    <label class="">Judul</label>
									<input class="field" type="text" name="p_judul" >                            
                                <div class="clear"></div>
                            </div>
							<div class="top-form">
                                    <label class="">Meta Tag</label>
									<input class="field" type="text" name="p_meta_tag" >                            
                                <div class="clear"></div>
                            </div>
							<div class="top-form">
                                    <label class="">Meta Description</label>
									<input class="field" type="text" name="p_meta_desc" >                            
                                <div class="clear"></div>
                            </div>
							<div class="top-form">
                                    <label class="">Meta Keyword</label>
									<input class="field" type="text" name="p_meta_keyword" >                            
                                <div class="clear"></div>
                            </div>
							<div class="top-form">
								<label class="col-xs-5">Kategori</label>
								<select name="p_kategori" class="field" id="p_kategori">
									<option value="">--Pilih--</option>
									
									<?php foreach($kategori as $row){ ?>
									<option value="<?= $row['ID_KATEGORI'] ?>"><?= $row['NAMA'] ?></option>
									<?php } ?>
									
								</select>
								<div class="clear"></div>
							</div>
							
							<div class="top-form">
								<label class="">Gambar Kontent</label>
								<input name="p_doc_file_1" id="p_doc_file_1" type="file" class="field">
							</div>

                            <div class="bottom-form">
								<label class="">Isi Artikel</label>
                                <textarea name="p_isi"></textarea>
                            </div>
                            <button class="btn btn-icon submit" type="submit"><span class="icon"></span>Submit</button>
                        </form>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>	
        </div>
	    <!-- end div #main -->
		
<?= form_close() ?>